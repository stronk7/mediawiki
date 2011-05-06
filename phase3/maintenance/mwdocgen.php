<?php
/**
 * Generate class and file reference documentation for MediaWiki using doxygen.
 *
 * If the dot DOT language processor is available, attempt call graph
 * generation.
 *
 * Usage:
 *   php mwdocgen.php
 *
 * KNOWN BUGS:
 *
 * - pass_thru seems to always use buffering (even with ob_implicit_flush()),
 * that make output slow when doxygen parses language files.
 * - the menu doesnt work, got disabled at revision 13740. Need to code it.
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
 * @todo document
 * @ingroup Maintenance
 *
 * @author Ashar Voultoiz <hashar at free dot fr>
 * @author Brion Vibber
 * @author Alexandre Emsenhuber
 * @version first release
 */

#
# Variables / Configuration
#

if ( php_sapi_name() != 'cli' ) {
	echo 'Run "' . __FILE__ . '" from the command line.';
	die( -1 );
}

/** Figure out the base directory for MediaWiki location */
$mwPath = dirname( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR;

/** doxygen binary script */
$doxygenBin = 'doxygen';

/** doxygen configuration template for mediawiki */
$doxygenTemplate = $mwPath . 'maintenance/Doxyfile';

/** svnstat command, used to get the version of each file */
$svnstat = $mwPath . 'bin/svnstat';

/** where Phpdoc should output documentation */
$doxyOutput = $mwPath . 'docs' . DIRECTORY_SEPARATOR ;

/** MediaWiki subpaths */
$mwPathI = $mwPath . 'includes/';
$mwPathL = $mwPath . 'languages/';
$mwPathM = $mwPath . 'maintenance/';
$mwPathS = $mwPath . 'skins/';

/** Ignored paths relative to $mwPath */
$mwExcludePaths = array(
	'images',
	'static',
);

/** Variable to get user input */
$input = '';
$exclude_patterns = '';

#
# Functions
#

define( 'MEDIAWIKI', true );
require_once( "$mwPath/includes/GlobalFunctions.php" );

/**
 * Read a line from the shell
 * @param $prompt String
 */
function readaline( $prompt = '' ) {
	print $prompt;
	$fp = fopen( "php://stdin", "r" );
	$resp = trim( fgets( $fp, 1024 ) );
	fclose( $fp );
	return $resp;
}

/**
 * Copied from SpecialVersion::getSvnRevision()
 * @param $dir String
 * @return Mixed: string or false
 */
function getSvnRevision( $dir ) {
	// http://svnbook.red-bean.com/nightly/en/svn.developer.insidewc.html
	$entries = $dir . '/.svn/entries';

	if ( !file_exists( $entries ) ) {
		return false;
	}

	$content = file( $entries );

	// check if file is xml (subversion release <= 1.3) or not (subversion release = 1.4)
	if ( preg_match( '/^<\?xml/', $content[0] ) ) {
		// subversion is release <= 1.3
		if ( !function_exists( 'simplexml_load_file' ) ) {
			// We could fall back to expat... YUCK
			return false;
		}

		$xml = simplexml_load_file( $entries );

		if ( $xml ) {
			foreach ( $xml->entry as $entry ) {
				if ( $xml->entry[0]['name'] == '' ) {
					// The directory entry should always have a revision marker.
					if ( $entry['revision'] ) {
						return intval( $entry['revision'] );
					}
				}
			}
		}
		return false;
	} else {
		// subversion is release 1.4
		return intval( $content[3] );
	}
}

/**
 * Generate a configuration file given user parameters and return the temporary filename.
 * @param $doxygenTemplate String: full path for the template.
 * @param $outputDirectory String: directory where the stuff will be output.
 * @param $stripFromPath String: path that should be stripped out (usually mediawiki base path).
 * @param $currentVersion String: Version number of the software
 * @param $svnstat String: path to the svnstat file
 * @param $input String: Path to analyze.
 * @param $exclude String: Additionals path regex to exclude
 * @param $exclude_patterns String: Additionals path regex to exclude
 *                 (LocalSettings.php, AdminSettings.php, .svn and .git directories are always excluded)
 */
function generateConfigFile( $doxygenTemplate, $outputDirectory, $stripFromPath, $currentVersion, $svnstat, $input, $exclude, $exclude_patterns ) {

	$template = file_get_contents( $doxygenTemplate );

	// Replace template placeholders by correct values.
	$replacements = array(
		'{{OUTPUT_DIRECTORY}}' => $outputDirectory,
		'{{STRIP_FROM_PATH}}'  => $stripFromPath,
		'{{CURRENT_VERSION}}'  => $currentVersion,
		'{{SVNSTAT}}'          => $svnstat,
		'{{INPUT}}'            => $input,
		'{{EXCLUDE}}'          => $exclude,
		'{{EXCLUDE_PATTERNS}}' => $exclude_patterns,
		'{{HAVE_DOT}}'         => `which dot` ? 'YES' : 'NO',
	);
	$tmpCfg = str_replace( array_keys( $replacements ), array_values( $replacements ), $template );
	$tmpFileName = tempnam( wfTempDir(), 'mwdocgen-' );
	file_put_contents( $tmpFileName , $tmpCfg ) or die( "Could not write doxygen configuration to file $tmpFileName\n" );

	return $tmpFileName;
}

#
# Main !
#

unset( $file );

if ( is_array( $argv ) && isset( $argv[1] ) ) {
	switch( $argv[1] ) {
	case '--all':         $input = 0; break;
	case '--includes':    $input = 1; break;
	case '--languages':   $input = 2; break;
	case '--maintenance': $input = 3; break;
	case '--skins':       $input = 4; break;
	case '--file':
		$input = 5;
		if ( isset( $argv[2] ) ) {
			$file = $argv[2];
		}
		break;
	case '--no-extensions': $input = 6; break;
	}
}

// TODO : generate a list of paths ))

if ( $input === '' ) {
	echo <<<OPTIONS
Several documentation possibilities:
 0 : whole documentation (1 + 2 + 3 + 4)
 1 : only includes
 2 : only languages
 3 : only maintenance
 4 : only skins
 5 : only a given file
 6 : all but the extensions directory
OPTIONS;
	while ( !is_numeric( $input ) )
	{
		$input = readaline( "\nEnter your choice [0]:" );
		if ( $input == '' ) {
			$input = 0;
		}
	}
}

switch ( $input ) {
case 0: $input = $mwPath;  break;
case 1: $input = $mwPathI; break;
case 2: $input = $mwPathL; break;
case 3: $input = $mwPathM; break;
case 4: $input = $mwPathS; break;
case 5:
	if ( !isset( $file ) ) {
		$file = readaline( "Enter file name $mwPath" );
	}
	$input = $mwPath . $file;
case 6:
	$input = $mwPath;
	$exclude_patterns = 'extensions';
}

$versionNumber = getSvnRevision( $input );
if ( $versionNumber === false ) { # Not using subversion ?
	$svnstat = ''; # Not really useful if subversion not available
	$version = 'trunk'; # FIXME
} else {
	$version = "trunk (r$versionNumber)";
}

// Generate path exclusions
$excludedPaths = $mwPath . join( " $mwPath", $mwExcludePaths );
print "EXCLUDE: $excludedPaths\n\n";

$generatedConf = generateConfigFile( $doxygenTemplate, $doxyOutput, $mwPath, $version, $svnstat, $input, $excludedPaths, $exclude_patterns );
$command = $doxygenBin . ' ' . $generatedConf;

echo <<<TEXT
---------------------------------------------------
Launching the command:

$command

---------------------------------------------------

TEXT;

passthru( $command );

echo <<<TEXT
---------------------------------------------------
Doxygen execution finished.
Check above for possible errors.

You might want to delete the temporary file $generatedConf

TEXT;
