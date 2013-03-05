<?php
/**
 * File deletion user interface.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @author Rob Church <robchur@gmail.com>
 * @ingroup Media
 */

/**
 * File deletion user interface
 *
 * @ingroup Media
 */
class FileDeleteForm {

	/**
	 * @var Title
	 */
	private $title = null;

	/**
	 * @var File
	 */
	private $file = null;

	/**
	 * @var File
	 */
	private $oldfile = null;
	private $oldimage = '';

	/**
	 * Constructor
	 *
	 * @param $file File object we're deleting
	 */
	public function __construct( $file ) {
		$this->title = $file->getTitle();
		$this->file = $file;
	}

	/**
	 * Fulfil the request; shows the form or deletes the file,
	 * pending authentication, confirmation, etc.
	 */
	public function execute() {
		global $wgOut, $wgRequest, $wgUser, $wgUploadMaintenance;

		$permissionErrors = $this->title->getUserPermissionsErrors( 'delete', $wgUser );
		if ( count( $permissionErrors ) ) {
			throw new PermissionsError( 'delete', $permissionErrors );
		}

		if ( wfReadOnly() ) {
			throw new ReadOnlyError;
		}

		if ( $wgUploadMaintenance ) {
			throw new ErrorPageError( 'filedelete-maintenance-title', 'filedelete-maintenance' );
		}

		$this->setHeaders();

		$this->oldimage = $wgRequest->getText( 'oldimage', false );
		$token = $wgRequest->getText( 'wpEditToken' );
		# Flag to hide all contents of the archived revisions
		$suppress = $wgRequest->getVal( 'wpSuppress' ) && $wgUser->isAllowed( 'suppressrevision' );

		if( $this->oldimage ) {
			$this->oldfile = RepoGroup::singleton()->getLocalRepo()->newFromArchiveName( $this->title, $this->oldimage );
		}

		if( !self::haveDeletableFile( $this->file, $this->oldfile, $this->oldimage ) ) {
			$wgOut->addHTML( $this->prepareMessage( 'filedelete-nofile' ) );
			$wgOut->addReturnTo( $this->title );
			return;
		}

		// Perform the deletion if appropriate
		if( $wgRequest->wasPosted() && $wgUser->matchEditToken( $token, $this->oldimage ) ) {
			$deleteReasonList = $wgRequest->getText( 'wpDeleteReasonList' );
			$deleteReason = $wgRequest->getText( 'wpReason' );

			if ( $deleteReasonList == 'other' ) {
				$reason = $deleteReason;
			} elseif ( $deleteReason != '' ) {
				// Entry from drop down menu + additional comment
				$reason = $deleteReasonList . wfMessage( 'colon-separator' )
					->inContentLanguage()->text() . $deleteReason;
			} else {
				$reason = $deleteReasonList;
			}

			$status = self::doDelete( $this->title, $this->file, $this->oldimage, $reason, $suppress, $wgUser );

			if( !$status->isGood() ) {
				$wgOut->addHTML( '<h2>' . $this->prepareMessage( 'filedeleteerror-short' ) . "</h2>\n" );
				$wgOut->addWikiText( '<div class="error">' . $status->getWikiText( 'filedeleteerror-short', 'filedeleteerror-long' ) . '</div>' );
			}
			if( $status->ok ) {
				$wgOut->setPageTitle( wfMessage( 'actioncomplete' ) );
				$wgOut->addHTML( $this->prepareMessage( 'filedelete-success' ) );
				// Return to the main page if we just deleted all versions of the
				// file, otherwise go back to the description page
				$wgOut->addReturnTo( $this->oldimage ? $this->title : Title::newMainPage() );

				if ( $wgUser->isLoggedIn() && $wgRequest->getCheck( 'wpWatch' ) != $wgUser->isWatched( $this->title ) ) {
					if ( $wgRequest->getCheck( 'wpWatch' ) ) {
						WatchAction::doWatch( $this->title, $wgUser );
					} else {
						WatchAction::doUnwatch( $this->title, $wgUser );
					}
				}
			}
			return;
		}

		$this->showForm();
		$this->showLogEntries();
	}

	/**
	 * Really delete the file
	 *
	 * @param $title Title object
	 * @param File $file: file object
	 * @param $oldimage String: archive name
	 * @param $reason String: reason of the deletion
	 * @param $suppress Boolean: whether to mark all deleted versions as restricted
	 * @param $user User object performing the request
	 * @throws MWException
	 * @return bool|Status
	 */
	public static function doDelete( &$title, &$file, &$oldimage, $reason, $suppress, User $user = null ) {
		if ( $user === null ) {
			global $wgUser;
			$user = $wgUser;
		}

		if( $oldimage ) {
			$page = null;
			$status = $file->deleteOld( $oldimage, $reason, $suppress );
			if( $status->ok ) {
				// Need to do a log item
				$logComment = wfMessage( 'deletedrevision', $oldimage )->inContentLanguage()->text();
				if( trim( $reason ) != '' ) {
					$logComment .= wfMessage( 'colon-separator' )
						->inContentLanguage()->text() . $reason;
				}

				$logtype = $suppress ? 'suppress' : 'delete';

				$logEntry = new ManualLogEntry( $logtype, 'delete' );
				$logEntry->setPerformer( $user );
				$logEntry->setTarget( $title );
				$logEntry->setComment( $logComment );
				$logid = $logEntry->insert();
				$logEntry->publish( $logid );
			}
		} else {
			$status = Status::newFatal( 'cannotdelete',
				wfEscapeWikiText( $title->getPrefixedText() )
			);
			$page = WikiPage::factory( $title );
			$dbw = wfGetDB( DB_MASTER );
			try {
				// delete the associated article first
				$error = '';
				$deleteStatus = $page->doDeleteArticleReal( $reason, $suppress, 0, false, $error, $user );
				// doDeleteArticleReal() returns a non-fatal error status if the page
				// or revision is missing, so check for isOK() rather than isGood()
				if ( $deleteStatus->isOK() ) {
					$status = $file->delete( $reason, $suppress );
					if( $status->isOK() ) {
						$dbw->commit( __METHOD__ );
					} else {
						$dbw->rollback( __METHOD__ );
					}
				}
			} catch ( MWException $e ) {
				// rollback before returning to prevent UI from displaying incorrect "View or restore N deleted edits?"
				$dbw->rollback( __METHOD__ );
				throw $e;
			}
		}

		if ( $status->isOK() ) {
			wfRunHooks( 'FileDeleteComplete', array( &$file, &$oldimage, &$page, &$user, &$reason ) );
		}

		return $status;
	}

	/**
	 * Show the confirmation form
	 */
	private function showForm() {
		global $wgOut, $wgUser, $wgRequest;

		if( $wgUser->isAllowed( 'suppressrevision' ) ) {
			$suppress = "<tr id=\"wpDeleteSuppressRow\">
					<td></td>
					<td class='mw-input'><strong>" .
						Xml::checkLabel( wfMessage( 'revdelete-suppress' )->text(),
							'wpSuppress', 'wpSuppress', false, array( 'tabindex' => '3' ) ) .
					"</strong></td>
				</tr>";
		} else {
			$suppress = '';
		}

		$checkWatch = $wgUser->getBoolOption( 'watchdeletion' ) || $wgUser->isWatched( $this->title );
		$form = Xml::openElement( 'form', array( 'method' => 'post', 'action' => $this->getAction(),
			'id' => 'mw-img-deleteconfirm' ) ) .
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', null, wfMessage( 'filedelete-legend' )->text() ) .
			Html::hidden( 'wpEditToken', $wgUser->getEditToken( $this->oldimage ) ) .
			$this->prepareMessage( 'filedelete-intro' ) .
			Xml::openElement( 'table', array( 'id' => 'mw-img-deleteconfirm-table' ) ) .
			"<tr>
				<td class='mw-label'>" .
					Xml::label( wfMessage( 'filedelete-comment' )->text(), 'wpDeleteReasonList' ) .
				"</td>
				<td class='mw-input'>" .
					Xml::listDropDown(
						'wpDeleteReasonList',
						wfMessage( 'filedelete-reason-dropdown' )->inContentLanguage()->text(),
						wfMessage( 'filedelete-reason-otherlist' )->inContentLanguage()->text(),
						'',
						'wpReasonDropDown',
						1
					) .
				"</td>
			</tr>
			<tr>
				<td class='mw-label'>" .
					Xml::label( wfMessage( 'filedelete-otherreason' )->text(), 'wpReason' ) .
				"</td>
				<td class='mw-input'>" .
					Xml::input( 'wpReason', 60, $wgRequest->getText( 'wpReason' ),
						array( 'type' => 'text', 'maxlength' => '255', 'tabindex' => '2', 'id' => 'wpReason' ) ) .
				"</td>
			</tr>
			{$suppress}";
		if( $wgUser->isLoggedIn() ) {
			$form .= "
			<tr>
				<td></td>
				<td class='mw-input'>" .
					Xml::checkLabel( wfMessage( 'watchthis' )->text(),
						'wpWatch', 'wpWatch', $checkWatch, array( 'tabindex' => '3' ) ) .
				"</td>
			</tr>";
		}
		$form .= "
			<tr>
				<td></td>
				<td class='mw-submit'>" .
					Xml::submitButton( wfMessage( 'filedelete-submit' )->text(),
						array( 'name' => 'mw-filedelete-submit', 'id' => 'mw-filedelete-submit', 'tabindex' => '4' ) ) .
				"</td>
			</tr>" .
			Xml::closeElement( 'table' ) .
			Xml::closeElement( 'fieldset' ) .
			Xml::closeElement( 'form' );

			if ( $wgUser->isAllowed( 'editinterface' ) ) {
				$title = Title::makeTitle( NS_MEDIAWIKI, 'Filedelete-reason-dropdown' );
				$link = Linker::link(
					$title,
					wfMessage( 'filedelete-edit-reasonlist' )->escaped(),
					array(),
					array( 'action' => 'edit' )
				);
				$form .= '<p class="mw-filedelete-editreasons">' . $link . '</p>';
			}

		$wgOut->addHTML( $form );
	}

	/**
	 * Show deletion log fragments pertaining to the current file
	 */
	private function showLogEntries() {
		global $wgOut;
		$deleteLogPage = new LogPage( 'delete' );
		$wgOut->addHTML( '<h2>' . $deleteLogPage->getName()->escaped() . "</h2>\n" );
		LogEventsList::showLogExtract( $wgOut, 'delete', $this->title );
	}

	/**
	 * Prepare a message referring to the file being deleted,
	 * showing an appropriate message depending upon whether
	 * it's a current file or an old version
	 *
	 * @param $message String: message base
	 * @return String
	 */
	private function prepareMessage( $message ) {
		global $wgLang;
		if( $this->oldimage ) {
			return wfMessage(
				"{$message}-old", # To ensure grep will find them: 'filedelete-intro-old', 'filedelete-nofile-old', 'filedelete-success-old'
				wfEscapeWikiText( $this->title->getText() ),
				$wgLang->date( $this->getTimestamp(), true ),
				$wgLang->time( $this->getTimestamp(), true ),
				wfExpandUrl( $this->file->getArchiveUrl( $this->oldimage ), PROTO_CURRENT ) )->parseAsBlock();
		} else {
			return wfMessage(
				$message,
				wfEscapeWikiText( $this->title->getText() )
			)->parseAsBlock();
		}
	}

	/**
	 * Set headers, titles and other bits
	 */
	private function setHeaders() {
		global $wgOut;
		$wgOut->setPageTitle( wfMessage( 'filedelete', $this->title->getText() ) );
		$wgOut->setRobotPolicy( 'noindex,nofollow' );
		$wgOut->addBacklinkSubtitle( $this->title );
	}

	/**
	 * Is the provided `oldimage` value valid?
	 *
	 * @return bool
	 */
	public static function isValidOldSpec( $oldimage ) {
		return strlen( $oldimage ) >= 16
			&& strpos( $oldimage, '/' ) === false
			&& strpos( $oldimage, '\\' ) === false;
	}

	/**
	 * Could we delete the file specified? If an `oldimage`
	 * value was provided, does it correspond to an
	 * existing, local, old version of this file?
	 *
	 * @param $file File
	 * @param $oldfile File
	 * @param $oldimage File
	 * @return bool
	 */
	public static function haveDeletableFile( &$file, &$oldfile, $oldimage ) {
		return $oldimage
			? $oldfile && $oldfile->exists() && $oldfile->isLocal()
			: $file && $file->exists() && $file->isLocal();
	}

	/**
	 * Prepare the form action
	 *
	 * @return string
	 */
	private function getAction() {
		$q = array();
		$q['action'] = 'delete';

		if( $this->oldimage ) {
			$q['oldimage'] = $this->oldimage;
		}

		return $this->title->getLocalUrl( $q );
	}

	/**
	 * Extract the timestamp of the old version
	 *
	 * @return string
	 */
	private function getTimestamp() {
		return $this->oldfile->getTimestamp();
	}
}
