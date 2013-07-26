<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "$IP/includes/DefaultSettings.php" );

# Debugging, logging, profiling options (disable them for prod)
error_reporting((E_ALL | E_STRICT));
#$wgShowExceptionDetails = true;
#$wgShowSQLErrors = true;
#$wgDebugDumpSql  = true;
#$wgDebugLogFile = $IP . '/debug.txt';
#$wgProfileLimit = 1.0; # requires StartProfiler.php created and valid

# If PHP's memory limit is very low, some operations may fail.
# (disabled once we have migrated to new server. Eloy 20110414)
# ini_set( 'memory_limit', '50M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

# !
# Some options have been moved to the top of this file so they can be overridden per wiki
# !
# MySQL table options to use during installation or update
#$wgDBTableOptions   = "TYPE=MyISAM"; // old MySQL 4 directive
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=latin1"; // new MySQL 5 directive
$wgDBtransactions = false; // set to true for InnoDB
$wgUseFileCache   = false; # Disable file cache for this wiki (disabled after migrating to new server (now using memcached). Eloy 20110414)

## For a detailed description of the following switches see
## http://www.mediawiki.org/wiki/Extension:Email_notification 
## and http://www.mediawiki.org/wiki/Extension:Email_notification
## There are many more options for fine tuning available see
## /includes/DefaultSettings.php
## UPO means: this is also a user preference option
$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;
$wgEnableEmail      = true; /// Enable again once upgrade is finished
$wgEnableUserEmail  = false;

// DEFINE DIFFERENT SETTINGS FOR DIFFERENT SITES
// Talk to Jordan if your confused by any of this, but dont mess with it (grrrrr!)

// set default versions:
$mdocsver = '25';
$callpath = 'en';

// Begin wizardy!
if (php_sapi_name() != 'cli') {
    // Called from browser
    if (isset($_SERVER['REQUEST_URI'])) {
        // Try to determine requested version
        $langoffset = 0;
        if (substr($_SERVER['REQUEST_URI'], 1, 2) === '19') {
            $mdocsver = '19';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 2) === '20') {
            $mdocsver = '20';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 2) === '21') {
            $mdocsver = '21';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 2) === '22') {
            $mdocsver = '22';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 2) === '23') {
            $mdocsver = '23';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 2) === '24') {
            $mdocsver = '24';
            # Disable this for email notifications:
            #            $wgEnableEmail = false;
        }else if (substr($_SERVER['REQUEST_URI'], 1, 2) === '25') {
            $mdocsver = '25';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 2) === '2x') {
            $mdocsver = '2x';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 3) === 'all') {
            $langoffset = 1; // pad with an extra 1 chars to look for langs in the next block
            $mdocsver = 'all';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 7) === 'archive') {
            $langoffset = 5; // pad with an extra 5 chars to look for langs in the next block
            $mdocsver = 'archive'; // all archived langs are 19docs
            $wgReadOnly="This translation has been archived and is in Read-Only mode."; // Cant touch this! do do do do do
        }else {
             // default version to serve. this should always be the newest version (mod_rewrite handles the rest)
            $mdocsver = '24';
        }

        /// Try to determine requested lang or test|dev
        /// If the third character is one underscore, get 5 chars
        /// for compound langs (pt_br...), else get just two chars (en, es...)
        if (substr($_SERVER['REQUEST_URI'], 1, 4) === 'test') {
            $callpath = 'test';                                 // test
            $mdocsver = 'test';
        } else if (substr($_SERVER['REQUEST_URI'], 1, 3) === 'dev') {
            $callpath = 'dev';                                  // dev
            $mdocsver = 'dev';
        } else if (substr($_SERVER['REQUEST_URI'], 6+$langoffset, 1) === '_') { 
            $callpath = substr($_SERVER['REQUEST_URI'], 4+$langoffset, 5);      // pt_br ...
        } else {
            $callpath = substr($_SERVER['REQUEST_URI'], 4+$langoffset, 2);      // en, es ...
        } 
    }
}else {
    // Called from CLI
    unset($callpath,$mdocsver); // pesky ninjas...
    if (isset($clicallpath)) {
        $callpath = $clicallpath;
        echo "setting callpath to $clicallpath\n";
    }
    if (isset($climdocsver)) {
        $mdocsver = $climdocsver;
        echo "setting mdocsver to $climdocsver\n";
    }
    if (!isset($callpath) || !isset($mdocsver)) {
        // Only CLI scripts that havnt set $climdocsver or $clicallpath should get this far.
        echo "\n\nCould not determine version and/or lang information\n";
        echo "Please set \$climdocsver (all|19|20|archive) and \$clicallpath (dev|test|en|pt_br|you|get|the|idea) then run your script again.\n\n";
        exit;
    }
}

// Try to set skin via user agent (not mandatory)
// Some browsers just dont send the user agent and this is acceptable according to RFC
// this avoids errors in apache error_log and also catches CLI requests.
/*
 * DANP: Disabled 20120320 - the wptouch theme seems to have gone somehere..
 * Added skins back 20120704 - JRT
*/
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    if (preg_match("/iphone/i", $_SERVER['HTTP_USER_AGENT'])) {
        $wgDefaultSkin = 'wptouch';
    } elseif (preg_match("/android/i", $_SERVER['HTTP_USER_AGENT'])) {
        $wgDefaultSkin = 'wptouch';
    } elseif (preg_match("/webos/i", $_SERVER['HTTP_USER_AGENT'])) {
        $wgDefaultSkin = 'wptouch';
    } elseif (preg_match("/ipod/i", $_SERVER['HTTP_USER_AGENT'])) {
        $wgDefaultSkin = 'wptouch';
    } else {
        $wgDefaultSkin = 'moodledocsnew';
    }
}else {
    $wgDefaultSkin = 'moodledocsnew';
}

// End wizardy, onto business.

if ($mdocsver == 'archive') {
    /***********************************
     * BEGIN config for archive wikis
     ***********************************/

    $mdocsinternal = '19'; // 'archive' wikis are actually 1.9

    // paths for all wikis unless overriden
    $wgScriptPath       = "/archive/{$callpath}";
    $wgDBname           = "{$mdocsinternal}docs_{$callpath}";
    $wgUploadPath       = "{$wgScriptPath}/images_{$callpath}";
    $wgUploadDirectory  = "{$IP}/{$mdocsinternal}images/images_{$callpath}";

    switch($callpath) {
        case 'ar':
            $wgLanguageCode     = 'ar';
            $wgLanguageName     = 'ﺎﻠﻋﺮﺒﻳﺓ';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'cs':
            $wgLanguageCode     = 'cs';
            $wgLanguageName     = 'Čeština';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'da':
            $wgLanguageCode     = 'da';
            $wgLanguageName     = 'Dansk';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'hu':
            $wgLanguageCode     = 'hu';
            $wgLanguageName     = 'Magyar';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'it':
            $wgLanguageCode     = 'it';
            $wgLanguageName     = 'Italiano';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'ko':
            $wgLanguageCode     = 'ko';
            $wgLanguageName     = '한국어';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'nl':
            $wgLanguageCode     = 'nl';
            $wgLanguageName     = 'Nederlands';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'no':
            $wgLanguageCode     = 'no';
            $wgLanguageName     = 'Norsk';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'pl':
            // This lang has been archived (Option 3)
            $wgLanguageCode     = 'pl';
            $wgLanguageName     = 'Polski';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'pt':
            // This lang has been archived (Option 3)
            $wgLanguageCode     = 'pt';
            $wgLanguageName     = 'Português';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'ru':
            // This lang has been archived (Option 3)
            $wgLanguageCode     = 'ru';
            $wgLanguageName     = 'Русский';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'sk':
            // This lang has been archived (Option 3)
            $wgLanguageCode     = 'sk';
            $wgLanguageName     = 'Slovenčina';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'zh':
            // This lang has been archived (Option 3)
            $wgLanguageCode     = 'zh';
            $wgLanguageName     = '中文';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        default:  // any unexpected input
            // Check to see if we were called from CLI
            if (php_sapi_name() === 'cli') {
                echo "You passed an unknown lang, please set \$clicallpath to something valid\n";
            }else {
                // Redirect to english docs
                header("Location: /error404.html");
            }
            exit;
        break;
    }
    /***********************************
     * END config for archive wikis
     ***********************************/
} else {
    /***********************************
     * BEGIN config for normal wikis
     ***********************************/

    // setup some internal aliases..
    $mdocsinternal = $mdocsver;
    switch ($mdocsver) {
        case 'all':
            // 'all' wikis are actually 1.9 internally
            $mdocsinternal = '19';

            // only permitted langs
            $permitted = array('ca','es','fi','fr','is','eu','hr','pt_br');
            if (!in_array($callpath, $permitted)) {
                $callpath = ''; // will 404
            }
        break;
        case '2x':
            // 2x wikis are actually 20 internally
            $mdocsinternal = '20';

            // only permitted langs
            $permitted = array('fr', 'ja');
            if (!in_array($callpath, $permitted)) {
                $callpath = ''; // will 404
            }
        break;
    }

    // paths for all wikis unless overriden
    $wgScriptPath       = "/{$mdocsver}/{$callpath}";
    $wgDBname           = "{$mdocsinternal}docs_{$callpath}";
    $wgUploadPath       = "{$wgScriptPath}/images_{$callpath}";
    $wgUploadDirectory  = "{$IP}/{$mdocsinternal}images/images_{$callpath}";

    switch ($callpath) {
        case 'ca':
            $wgLanguageCode     = 'ca';
            $wgLanguageName     = 'Català';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'de':
            $wgLanguageCode     = 'de';
            $wgLanguageName     = 'Deutsch';
            if ($mdocsinternal >= "20") {
              /// 20docs_de is InnoDB with binary charset, 19docs_de is MyISAM with latin1 charset (set by default at the top of this file.)
              $wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";
              $wgDBtransactions   = true;
            }
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;

        case 'es':
            $wgLanguageCode     = 'es';
            $wgLanguageName     = 'Español';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;

        case 'eu':
            $wgLanguageCode     = 'eu';
            $wgLanguageName     = 'Euskara';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'fi':
            $wgLanguageCode     = 'fi';
            $wgLanguageName     = 'Suomi';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'fr':
            $wgLanguageCode     = 'fr';
            $wgLanguageName     = 'Français';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;

        case 'hr':
            $wgLanguageCode     = 'hr';
            $wgLanguageName     = 'Hrvatski';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;
        case 'is':
            $wgLanguageCode     = 'is';
            $wgLanguageName     = 'Íslenska';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;

        case 'ja':
            $wgLanguageCode     = 'ja';
            $wgLanguageName     = '日本語';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;

        case 'pt_br':
            $wgLanguageCode     = 'pt_br';
            $wgLanguageName     = 'Português Brasil';
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;

        case 'test':
            $wgLanguageCode     = 'en';
            $wgLanguageName     = 'Test English';
            $wgScriptPath       = '/test';
            $wgDBname           = "19docs_test";
            $wgUploadPath       = "$wgScriptPath/images_test";
            $wgUploadDirectory  = "$IP/20images/images_test";
            $wgExtraNamespaces = array(100 => "Development", 101 => "Development_talk", 102 => "Obsolete");
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
        break;

       case 'dev':
            $wgLanguageCode     = 'en';
            $wgLanguageName     = 'Development';
            $wgScriptPath       = '/dev';
            $wgDBname           = "docs_development";
            $wgUploadPath       = "$wgScriptPath/images_dev";
            $wgUploadDirectory  = "$IP/20images/images_dev";
            #$wgExtraNamespaces = array(100 => "Development", 101 => "Development_talk", 102 => "Obsolete");
            $wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";
            $wgDBtransactions   = true;
            #$wgReadOnly="We are upgrading Moodle Developer Docs, please be patient. This wiki will be back in a few hours.";
        break;

        case 'en':
            $wgLanguageCode     = 'en';
            $wgLanguageName     = 'English';
            $wgExtraNamespaces = array(100 => "Development", 101 => "Development_talk", 102 => "Obsolete");
            #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";

            // Disable old english wikis to repuce spam MDLSITE-2284.
            #switch ($mdocsver) {
            #    case '19':
            #    case '20':
            #    case '21':
            #    case '22':
            #    case '23':
            #        $wgReadOnly = "This wiki has temporarily been set to read-only mode. Please contribute to the [[:en:Main page|Moodle Docs 2.5]] wiki instead.";
            #        break;
            #}

        break;

        default:  // any unexpected input
            // Check to see if we were called from CLI
            if (php_sapi_name() === 'cli') {
                echo "You passed an unknown lang, please set \$clicallpath to something valid\n";
            }else {
                // Redirect to english docs
                header("Location: /error404.html");
            }
            exit;
        break;
    }
}

// The following is common to all sites for now
$wgSitename         = "MoodleDocs";
$wgDBtype           = "mysql";
$wgDBserver         = 'localhost';
$wgDBuser           = "docs";
$wgDBpassword       = "bhfd674b34hfd";
$wgDBprefix         = "";

## Don't show the IP if not logged-in
$wgShowIPinHeader   = false;

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
$wgScriptExtension  = ".php";

## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL

# Sender in e-mails from the e-mail notification system
$wgEmergencyContact = "noreply@moodle.org";
$wgPasswordSender = "noreply@docs.moodle.org";
$wgPasswordSenderName = "MoodleDocs";

# Hide the realname field from the preferences form
$wgHiddenPrefs[] = 'realname';

# Use real name instead of username in e-mail "from" field
$wgEnotifUseRealName = true;

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
# (we are using APC after migration to new server. Eloy 20110414)
# (switched to MEMCACHED because of problems with APC sharedmem. Eloy 20110415)
$wgMainCacheType = CACHE_MEMCACHED;
$wgMemCachedServers = array("127.0.0.1:11211");
$wgSessionsInMemcached = true;
$wgFileCacheDirectory = "$IP/cache$wgScriptPath";
$wgCacheDirectory = "$IP/cache$wgScriptPath"; // data cache for this wiki (messages)

# Varnish cache settings
$wgUseSquid = true;
$wgSquidServers = array('127.0.0.1');
# settings used in combination with Varnish
$wgPutIPinRC = true;
$wgDisableCounters = true;
$wgShowIPinHeader = false;

# antispam measures
$wgEnableDnsBlacklist = true;
$wgDnsBlacklistUrls = array('http.dnsbl.sorbs.net.');

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads       = true;
$wgUseImageResize      = true;
# $wgUseImageMagick = true;
# $wgImageMagickConvertCommand = "/usr/bin/convert";
## Any extension not in this list will show warning
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'dia', 'ai', 'pdf');

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = true;
$wgMathPath         = "{$wgUploadPath}/math";
$wgMathDirectory    = "{$wgUploadDirectory}/math";
$wgTmpDirectory     = "{$wgUploadDirectory}/tmp";

$wgLocalInterwiki   = $wgSitename;

$wgProxyKey = "b9bd2fa2b057164cd46f1fe0b10b890f16941918b0e179a1a29baa03a7daaaa6";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
# we now set skin when determining version number, see further up this file
#$wgDefaultSkin = 'moodledocs';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "http://docs.moodle.org/dev/License";
$wgRightsText = "GNU General Public License";
# Disabled RightsIcon due to error (blank src/url in images lead to doubled page requests)
#$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

$wgDiff3 = "/usr/bin/diff3";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );

/// Some MoodleDocs settings

#$wgLogo = "/pix/moodle-docs.gif";
$wgLogo = '/mediawiki/skins/moodledocsnew/wiki.png';
// Select a logo that represents this skin
if (!empty($mdocsver)) {
    $wgLogo = "/mediawiki/skins/moodledocsnew/images/version.{$mdocsver}.png";
}

# Group permissions setup

// Do not allow anonymous users to create manual account and edit pages.
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createaccount'] = false;

// Do not allow users to move stuff.
$wgGroupPermissions['user']['movefile'] = false;
$wgGroupPermissions['user']['move'] = false;
$wgGroupPermissions['user']['move-subpages'] = false;
$wgGroupPermissions['user']['move-rootuserpages'] = false;

// Let only autoconfirmed users create new pages and upload files.
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['*']['createtalk'] = false;
$wgGroupPermissions['*']['upload'] = false;

$wgGroupPermissions['user']['createpage'] = false;
$wgGroupPermissions['user']['createtalk'] = false;
$wgGroupPermissions['user']['upload'] = false;

$wgGroupPermissions['autoconfirmed']['createpage'] = true;
$wgGroupPermissions['autoconfirmed']['createtalk'] = true;
$wgGroupPermissions['autoconfirmed']['upload'] = true;

# Use the realusernames extension from Eloy's RELx_y_custom branch
if ( file_exists( "$IP/extensions/realusernames/realusernames.php" ) ) {
	require_once( "$IP/extensions/realusernames/realusernames.php" );
    // Enable debug for the extension
    // $wgDebugLogGroups['realusernames'] = '/tmp/realusernames.log';
    // Control if we want link text to be replaced by real usernames.
    $wgrealusernames_linktext = true;
    // Control if we want link refs to be replaced by real usernames.
    $wgrealusernames_linkref = true;
    // Control if some roles (those having perms to "block" users) should
    // be able to see the username together with the realname.
    $wgrealusernames_append_username = true;
}

# Use Moodle Authentication
require_once( 'extensions/AuthMoodle.php' );
$wgAuth = new AuthMoodle();
$wgAuth->setAuthMoodleDBType('mysql');
$wgAuth->setAuthMoodleTablePrefix('');
$wgAuth->setAuthMoodleDBServer('moodleorg.cniy2xi0z9uu.us-east-1.rds.amazonaws.com');
$wgAuth->setAuthMoodleDBName('moodle');
$wgAuth->setAuthMoodleUser('docs');
$wgAuth->setAuthMoodlePassword('gnjfngjnhjgnhjg');
$wgAuth->setAuthMoodleSalt('ngjfng8h5ntn58 yu8nuv8yhuvnhyuv6hyu8hu6y');
$wgAuth->setAuthMoodleMnethostid(10);

# Offuscate email addresses
# Disabled, this wasn't processing templates and friends (Eloy, 20110315)
# TODO: Use a proper extension to obfuscate email addresses
# (see the TrackerLinks.php one for a good example)
#require_once( 'extensions/MungeEmail.php' );

# Autolink Tracker numbers
require_once('extensions/TrackerLinks.php');

# Unmerged Files report
# Disabled, not needed anymore (Eloy, 20110412)
# require_once('extensions/UnmergedFilesReport.php');

# Use Geshi Syntax Highlight (only if running from web, breaks CLI maintenance scripts)
if(php_sapi_name() != 'cli') {
    require_once('extensions/GeshiCodeTag.php');
}

# Use MediawikiPlayer
require_once('extensions/MediawikiPlayer/MediawikiPlayer.php');

# Use multi-db interwiki links
require_once('extensions/InterWiki/InterWiki.php');

# Use Math extension for TeX syntax support
require_once( "$IP/extensions/Math/Math.php" );

# We don't enforce Capital links, images... in MoodleDocs (why?) 
$wgCapitalLinks = false;

# We use database custom messages
$wgUseDatabaseMessages = true;

# Seconds the RecentChanges feeds will be cached
$wgFeedCacheTimeout = 60;

# The following flag used to be used by the Eloy's custom patch but it is not available any more.
# This could be eventually re-implemented if there is a strong demand for it.
# By default mediawiki doesn't show the edit tab for not-logged users. Enable it (redirecting to login)
# with this setting.
// $wgPromoteEdition=true;

# Enable AJAX search suggestions
#$wgEnableMWSuggest = true;

# Reduce jobs queue from 1:1 (default) downto 5%
$wgJobRunRate = 0.05;

# Enable nice (without index.php use nor title parameter) URLs
$wgArticlePath = "$wgScriptPath/$1";
$wgUsePathInfo = false;

# We want to see the installed hooks in the Version page
$wgSpecialVersionShowHooks = true;

# Allow direct embedding of images from certain places
$wgAllowExternalImagesFrom = array('http://tracker.moodle.org/', 'http://moodle.org/');

# This is for testing purposes, review once upgrade to 1.18
# See MDLSITE-1511 for more info
$wgResourceLoaderValidateStaticJS = false;

# Give users the implicit 'autoconfirmed' group membership after they edit something.
# As described at MDLSITE-2282, the spamming pattern has been that they create new
# pages. We are trying to require at least one edit now to see if it helps.
$wgAutoConfirmAge = 0;
$wgAutoConfirmCount = 1;

// Hooks used at docs.moodle.org ///////////////////////////////////////////////

$wgHooks['GetPreferences'][] = 'MoodleDocsHooks::onGetPreferences';

/**
 * Provides site specific hooks.
 *
 * This will eventually go into a separate extension, should it enlarge.
 *
 * @copyright 2013 David Mudrak <david@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class MoodleDocsHooks {

	/**
	 * Modify user preferences.
	 *
	 * @param User  $user User whose preferences are being modified.
	 * @param array $preferences Preferences description array, to be fed to an {@link HTMLForm} object
	 * @return bool
	 */
	public static function onGetPreferences( User $user, array &$preferences ) {

		// Get rid of the misleading information that the e-mail can be used for password resets.
		unset ( $preferences['emailaddress']['help-messages'] );

		// Get rid of the whole 'User profile / Signature' section.
		foreach ( $preferences as $prefname => $prefdesc ) {
			if ( $prefdesc['section'] === 'personal/signature' ) {
				unset ( $preferences[$prefname] );
			}
		}

		// The hook has operated successfully.
		return true;
	}
}

// Keep the following at very bottom of this file.
// You can easily amend settings defined in this file for your development machine
// and/or a test server by creating the file MySettings.php where you override setup
// performed here.
if ( file_exists(__DIR__.'/MySettings.php' ) ) {
	include(__DIR__.'/MySettings.php');
}
