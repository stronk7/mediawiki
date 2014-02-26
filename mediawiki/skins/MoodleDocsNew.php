<?php
/**
 * MoodleDocsNew skin in the design of moodle.org
 *
 * Translated from gwicke's previous TAL template version to remove
 * dependency on PHPTAL.
 *
 * @todo document
 * @file
 * @ingroup Skins
 */

if( !defined( 'MEDIAWIKI' ) )
	die( -1 );

require_once(dirname(__FILE__).'/moodledocsnew/moodleoutput.php');

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @todo document
 * @ingroup Skins
 */
class SkinMoodleDocsNew extends SkinTemplate {
	/** Using moodledocsnew. */
	var $skinname = 'moodledocsnew', $stylename = 'moodledocsnew',
		$template = 'MoodleDocsNewTemplate', $useHeadElement = true;

	function setupSkinUserCss( OutputPage $out ) {
		global $wgHandheldStyle, $mdocsver;

		parent::setupSkinUserCss( $out );

		// Append to the default screen common & print styles...
		// We keep the originals pointing to monobook, our skin only contains own ones
		$out->addStyle( 'monobook/main.css', 'screen' );
		// This is our CSS
                moodle_output::add_primary_styles($out);

		if ( $mdocsver === 'dev' ) {
			$out->addStyle( 'moodledocsnew/sitebar/sitebar-dev.css', 'screen' );
		} else {
			$out->addStyle( 'moodledocsnew/sitebar/sitebar-doc.css', 'screen' );
		}

		if( $wgHandheldStyle ) {
			// Currently in testing... try 'chick/main.css'
			$out->addStyle( $wgHandheldStyle, 'handheld' );
		}

		// We keep the originals pointing to monobook, our skin only contains own ones
		$out->addStyle( 'monobook/IE50Fixes.css', 'screen', 'lt IE 5.5000' );
		$out->addStyle( 'monobook/IE55Fixes.css', 'screen', 'IE 5.5000' );
		$out->addStyle( 'monobook/IE60Fixes.css', 'screen', 'IE 6' );
		$out->addStyle( 'monobook/IE70Fixes.css', 'screen', 'IE 7' );

		$out->addStyle( 'monobook/rtl.css', 'screen', '', 'rtl' );

                moodle_output::add_browser_specific_styles($out);
	}

	function outputPage( OutputPage $out = null ) {
                moodle_output::prepare_output_page( $out );
		SkinTemplate::outputPage( $out );
	}
}

/**
 * @todo document
 * @ingroup Skins
 */
class MoodleDocsNewTemplate extends QuickTemplate {
	var $skin;
	/**
	 * Template filter callback for MoodleDocsNew skin.
	 * Takes an associative array of data set from a SkinTemplate-based
	 * class, and a wrapper for MediaWiki's localization database, and
	 * outputs a formatted page.
	 *
	 * @access private
	 */
	function execute() {
                global $wgRequest;
		global $wgLanguageName;

		$this->skin = $skin = $this->data['skin'];
		$action = $wgRequest->getText( 'action' );

		// Suppress warnings to prevent notices about missing indexes in $this->data
		wfSuppressWarnings();

		// Generate additional footer links
		$footerlinks = $this->data["footerlinks"];
		// fold footerlinks into a single array using a bit of trickery
		$footerlinks = call_user_func_array('array_merge', array_values($footerlinks));
		// Generate additional footer icons
		$footericons = $this->data["footericons"];
		// Unset any icons which don't have an image
		foreach ( $footericons as $footerIconsKey => &$footerIconsBlock ) {
			foreach ( $footerIconsBlock as $footerIconKey => $footerIcon ) {
				if ( !is_string($footerIcon) && empty($footerIcon["src"]) ) {
					unset($footerIconsBlock[$footerIconKey]);
				}
			}
		}
		// Redo removal of any empty blocks
		foreach ( $footericons as $footerIconsKey => &$footerIconsBlock ) {
			if ( count($footerIconsBlock) <= 0 ) {
				unset($footericons[$footerIconsKey]);
			}
		}

		$this->html( 'headelement' );

		// Check if the page provides custom navigation trail.
		if (strpos($this->data['bodytext'], '<div class="navtrail">') === false) {
			$displaydefaultnavbar = true;
			$mainpagetitle = $this->translator->translate( 'mainpage' );
		} else {
			$displaydefaultnavbar = false;
			$mainpagetitle = null;
		}

		include(__DIR__.'/moodledocsnew/sitebar/sitebar.html');

		echo '<div id="page">';
		moodle_output::header();
		moodle_output::menu($this->data['lang']);
		moodle_output::navbar($this->data['scriptpath'], $this->data['title'], $displaydefaultnavbar, $mainpagetitle);

?><div id="globalWrapper">
<div id="column-content"><div id="content"<?php $this->html("specialpageattributes") ?>>
	<a id="top"></a>
	<?php if($this->data['sitenotice']) { ?><div id="siteNotice"><?php $this->html('sitenotice') ?></div><?php } ?>

	<h1 id="firstHeading" class="firstHeading"><?php $this->html('title') ?></h1>
	<div id="bodyContent">
		<div id="siteSub"><?php $this->msg('tagline') ?></div>
		<div id="contentSub"<?php $this->html('userlangattributes') ?>><?php $this->html('subtitle') ?></div>
<?php if($this->data['undelete']) { ?>
		<div id="contentSub2"><?php $this->html('undelete') ?></div>
<?php } ?><?php if($this->data['newtalk'] ) { ?>
		<div class="usermessage"><?php $this->html('newtalk')  ?></div>
<?php } ?><?php if($this->data['showjumplinks']) { ?>
		<div id="jump-to-nav"><?php $this->msg('jumpto') ?> <a href="#column-one"><?php $this->msg('jumptonavigation') ?></a>, <a href="#searchInput"><?php $this->msg('jumptosearch') ?></a></div>
<?php } ?>
		<!-- start content -->
<?php $this->html('bodytext') ?>
		<?php if($this->data['catlinks']) { $this->html('catlinks'); } ?>
		<!-- end content -->
		<?php if($this->data['dataAfterContent']) { $this->html ('dataAfterContent'); } ?>
		<div class="visualClear"></div>
	</div>
</div></div>
<div id="column-one"<?php $this->html('userlangattributes')  ?>>
	<div id="p-cactions" class="portlet">
		<h5><?php $this->msg('views') ?></h5>
		<div class="pBody">
			<ul><?php
				foreach($this->data['content_actions'] as $key => $tab) {
					echo '
				 <li id="' . Sanitizer::escapeId( "ca-$key" ) . '"';
					if( $tab['class'] ) {
						echo ' class="'.htmlspecialchars($tab['class']).'"';
					}
					echo '><span class="tab"><a href="'.htmlspecialchars($tab['href']).'"';
					# We don't want to give the watch tab an accesskey if the
					# page is being edited, because that conflicts with the
					# accesskey on the watch checkbox.  We also don't want to
					# give the edit tab an accesskey, because that's fairly su-
					# perfluous and conflicts with an accesskey (Ctrl-E) often
					# used for editing in Safari.
				 	if( in_array( $action, array( 'edit', 'submit' ) )
				 	&& in_array( $key, array( 'edit', 'watch', 'unwatch' ))) {
				 		echo $skin->tooltip( "ca-$key" );
				 	} else {
						echo Xml::expandAttributes( $skin->tooltipAndAccesskeyAttribs( "ca-$key" ) );
				 	}
				 	echo '>'.htmlspecialchars($tab['text']).'</a></span></li>';
				} ?>

			</ul>
		</div>
	</div>
	<div class="portlet" id="p-personal">
		<h5><?php $this->msg('personaltools') ?></h5>
		<div class="pBody">
			<ul<?php $this->html('userlangattributes') ?>>
<?php 			foreach($this->data['personal_urls'] as $key => $item) { ?>
				<li id="<?php echo Sanitizer::escapeId( "pt-$key" ) ?>"<?php
					if ($item['active']) { ?> class="active"<?php } ?>><a href="<?php
				echo htmlspecialchars($item['href']) ?>"<?php echo Xml::expandAttributes( $skin->tooltipAndAccesskeyAttribs('pt-'.$key) ) ?><?php
				if(!empty($item['class'])) { ?> class="<?php
				echo htmlspecialchars($item['class']) ?>"<?php } ?>><?php
				echo htmlspecialchars($item['text']) ?></a></li>
<?php			} ?>
			</ul>
		</div>
	</div>
	<div class="portlet" id="p-logo">
		<a style="background-image: url(<?php $this->text('logopath') ?>);" <?php
			?>href="<?php echo htmlspecialchars($this->data['nav_urls']['mainpage']['href'])?>"<?php
			echo Xml::expandAttributes( $skin->tooltipAndAccesskeyAttribs('p-logo') ) ?>></a>
	</div>
	<script type="<?php $this->text('jsmimetype') ?>"> if (window.isMSIE55) fixalpha(); </script>
<?php
		$sidebar = $this->data['sidebar'];
		if ( !isset( $sidebar['SEARCH'] ) ) $sidebar['SEARCH'] = true;
		if ( !isset( $sidebar['TOOLBOX'] ) ) $sidebar['TOOLBOX'] = true;
		if ( !isset( $sidebar['LANGUAGES'] ) ) $sidebar['LANGUAGES'] = true;
		foreach ($sidebar as $boxName => $cont) {
			if ( $boxName == 'SEARCH' ) {
				$this->searchBox();
			} elseif ( $boxName == 'TOOLBOX' ) {
				$this->toolbox();
			} elseif ( $boxName == 'LANGUAGES' ) {
				$this->languageBox();
			} else {
				$this->customBox( $boxName, $cont );
			}
		}
?>
</div><!-- end of the left (by default at least) column -->
<div class="visualClear"></div>
<div id="footer"<?php $this->html('userlangattributes') ?>>
<?php foreach ( $footericons as $blockName => $footerIcons ) { ?>
	<div id="f-<?php echo htmlspecialchars($blockName); ?>ico">
<?php foreach ( $footerIcons as $icon ) { ?>
		<?php echo $this->skin->makeFooterIcon( $icon ); ?>

<?php }
?>
	</div>
<?php }

		// Generate additional footer links
		$validFooterLinks = array();
		foreach( $footerlinks as $aLink ) {
			if( isset( $this->data[$aLink] ) && $this->data[$aLink] ) {
				$validFooterLinks[] = $aLink;
			}
		}
		if ( count( $validFooterLinks ) > 0 ) {
?>	<ul id="f-list">
<?php
			foreach( $validFooterLinks as $aLink ) {
				if( isset( $this->data[$aLink] ) && $this->data[$aLink] ) {
?>		<li id="<?php echo $aLink ?>"><?php $this->html($aLink) ?></li>
<?php 			}
			}
?>
	</ul>
<?php	}
?>
</div>
</div>
<?php $this->html('bottomscripts'); /* JS call to runBodyOnloadHook */ ?>
<?php $this->html('reporttime') ?>
<?php if ( $this->data['debug'] ): ?>
<!-- Debug output:
<?php $this->text( 'debug' ); ?>

-->
<?php endif;
                moodle_output::footer();
                echo '</div><!-- #page -->';
                moodle_output::google_analtyics_js();

		echo Html::closeElement( 'body' );
		echo Html::closeElement( 'html' );
		wfRestoreWarnings();
	} // end of execute() method

	/*************************************************************************************************/
	function searchBox() {
		global $wgUseTwoButtonsSearchForm;
?>
	<div id="p-search" class="portlet">
		<h5><label for="searchInput"><?php $this->msg('search') ?></label></h5>
		<div id="searchBody" class="pBody">
			<form action="<?php $this->text('wgScript') ?>" id="searchform">
				<input type='hidden' name="title" value="<?php $this->text('searchtitle') ?>"/>
				<?php
		echo Html::input( 'search',
			isset( $this->data['search'] ) ? $this->data['search'] : '', 'search',
			array(
				'id' => 'searchInput',
				'title' => $this->skin->titleAttrib( 'search' ),
				'accesskey' => $this->skin->accesskey( 'search' )
			) ); ?>

				<input type='submit' name="go" class="searchButton" id="searchGoButton"	value="<?php $this->msg('searcharticle') ?>"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs( 'search-go' ) ); ?> /><?php if ($wgUseTwoButtonsSearchForm) { ?>&#160;
				<input type='submit' name="fulltext" class="searchButton" id="mw-searchButton" value="<?php $this->msg('searchbutton') ?>"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs( 'search-fulltext' ) ); ?> /><?php } else { ?>

				<div><a href="<?php $this->text('searchaction') ?>" rel="search"><?php $this->msg('powersearch-legend') ?></a></div><?php } ?>

			</form>
		</div>
	</div>
<?php
	}

	/*************************************************************************************************/
	function toolbox() {
?>
	<div class="portlet" id="p-tb">
		<h5><?php $this->msg('toolbox') ?></h5>
		<div class="pBody">
			<ul>
<?php
		if($this->data['notspecialpage']) { ?>
				<li id="t-whatlinkshere"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['whatlinkshere']['href'])
				?>"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs('t-whatlinkshere') ) ?>><?php $this->msg('whatlinkshere') ?></a></li>
<?php
			if( $this->data['nav_urls']['recentchangeslinked'] ) { ?>
				<li id="t-recentchangeslinked"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['recentchangeslinked']['href'])
				?>"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs('t-recentchangeslinked') ) ?>><?php $this->msg('recentchangeslinked-toolbox') ?></a></li>
<?php 		}
		}
		if( isset( $this->data['nav_urls']['trackbacklink'] ) && $this->data['nav_urls']['trackbacklink'] ) { ?>
			<li id="t-trackbacklink"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['trackbacklink']['href'])
				?>"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs('t-trackbacklink') ) ?>><?php $this->msg('trackbacklink') ?></a></li>
<?php 	}
		if($this->data['feeds']) { ?>
			<li id="feedlinks"><?php foreach($this->data['feeds'] as $key => $feed) {
					?><a id="<?php echo Sanitizer::escapeId( "feed-$key" ) ?>" href="<?php
					echo htmlspecialchars($feed['href']) ?>" rel="alternate" type="application/<?php echo $key ?>+xml" class="feedlink"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs('feed-'.$key) ) ?>><?php echo htmlspecialchars($feed['text'])?></a>&#160;
					<?php } ?></li><?php
		}

		foreach( array('contributions', 'log', 'blockip', 'emailuser', 'upload', 'specialpages') as $special ) {

			if($this->data['nav_urls'][$special]) {
				?><li id="t-<?php echo $special ?>"><a href="<?php echo htmlspecialchars($this->data['nav_urls'][$special]['href'])
				?>"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs('t-'.$special) ) ?>><?php $this->msg($special) ?></a></li>
<?php		}
		}

		if(!empty($this->data['nav_urls']['print']['href'])) { ?>
				<li id="t-print"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['print']['href'])
				?>" rel="alternate"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs('t-print') ) ?>><?php $this->msg('printableversion') ?></a></li><?php
		}

		if(!empty($this->data['nav_urls']['permalink']['href'])) { ?>
				<li id="t-permalink"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['permalink']['href'])
				?>"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs('t-permalink') ) ?>><?php $this->msg('permalink') ?></a></li><?php
		} elseif ($this->data['nav_urls']['permalink']['href'] === '') { ?>
				<li id="t-ispermalink"<?php echo $this->skin->tooltip('t-ispermalink') ?>><?php $this->msg('permalink') ?></li><?php
		}

		wfRunHooks( 'MonoBookTemplateToolboxEnd', array( &$this ) );
		wfRunHooks( 'SkinTemplateToolboxEnd', array( &$this ) );
?>
			</ul>
		</div>
	</div>
<?php
	}

	/*************************************************************************************************/
	function languageBox() {
		if( $this->data['language_urls'] ) {
?>
	<div id="p-lang" class="portlet">
		<h5<?php $this->html('userlangattributes') ?>><?php $this->msg('otherlanguages') ?></h5>
		<div class="pBody">
			<ul>
<?php		foreach($this->data['language_urls'] as $langlink) { ?>
				<li class="<?php echo htmlspecialchars($langlink['class'])?>"><?php
				?><a href="<?php echo htmlspecialchars($langlink['href']) ?>" title="<?php
				echo htmlspecialchars($langlink['title']) ?>"><?php echo $langlink['text'] ?></a></li>
<?php		} ?>
			</ul>
		</div>
	</div>
<?php
		}
	}

	/*************************************************************************************************/
	function customBox( $bar, $cont ) {
?>
	<div class='generated-sidebar portlet' id='<?php echo Sanitizer::escapeId( "p-$bar" ) ?>'<?php echo $this->skin->tooltip('p-'.$bar) ?>>
		<h5><?php $out = wfMsg( $bar ); if (wfEmptyMsg($bar, $out)) echo htmlspecialchars($bar); else echo htmlspecialchars($out); ?></h5>
		<div class='pBody'>
<?php   if ( is_array( $cont ) ) { ?>
			<ul>
<?php 			foreach($cont as $val) { ?>
				<li id="<?php echo Sanitizer::escapeId($val['id']) ?>"<?php
					if ( $val['active'] ) { ?> class="active" <?php }
				?>><a href="<?php echo htmlspecialchars($val['href']) ?>"<?php echo Xml::expandAttributes( $this->skin->tooltipAndAccesskeyAttribs($val['id']) ) ?>><?php echo htmlspecialchars($val['text']) ?></a></li>
<?php			} ?>
			</ul>
<?php   } else {
			# allow raw HTML block to be defined by extensions
			print $cont;
		}
?>
		</div>
	</div>
<?php
	}
} // end of class


