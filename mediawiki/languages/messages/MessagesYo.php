<?php
/** Yoruba (Yorùbá)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Demmy
 * @author Kaganer
 * @author Meno25
 * @author Urhixidur
 */

$namespaceNames = array(
	NS_MEDIA            => 'Amóhùnmáwòrán',
	NS_SPECIAL          => 'Pàtàkì',
	NS_TALK             => 'Ọ̀rọ̀',
	NS_USER             => 'Oníṣe',
	NS_USER_TALK        => 'Ọ̀rọ̀_oníṣe',
	NS_PROJECT_TALK     => 'Ọ̀rọ̀_$1',
	NS_FILE             => 'Fáìlì',
	NS_FILE_TALK        => 'Ọ̀rọ̀_fáìlì',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Ọ̀rọ̀_mediaWiki',
	NS_TEMPLATE         => 'Àdàkọ',
	NS_TEMPLATE_TALK    => 'Ọ̀rọ̀_àdàkọ',
	NS_HELP             => 'Ìrànlọ́wọ́',
	NS_HELP_TALK        => 'Ọ̀rọ̀_ìrànlọ́wọ́',
	NS_CATEGORY         => 'Ẹ̀ka',
	NS_CATEGORY_TALK    => 'Ọ̀rọ̀_ẹ̀ka',
);

$namespaceAliases = array(
	'Àwòrán'       => NS_FILE,
	'Ọ̀rọ̀_àwòrán' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Allpages'                  => array( 'GbogboÀwọnOjúewé' ),
	'Categories'                => array( 'ÀwọnẸ̀ka' ),
	'Contributions'             => array( 'ÀwọnÀfikún' ),
	'Mycontributions'           => array( 'ÀwọnÀfikúnMi' ),
	'Mypage'                    => array( 'OjúwéMi' ),
	'Mytalk'                    => array( 'Ọ̀rọ̀Mi' ),
	'Newpages'                  => array( 'ÀwọnOjúewéTuntun' ),
	'Preferences'               => array( 'ÀwọnÌfẹ́ràn' ),
	'Recentchanges'             => array( 'ÀwọnÀtúnṣeTuntun' ),
	'Specialpages'              => array( 'ÀwọnOjúewéPàtàkì' ),
	'Userlogin'                 => array( 'ÌwọléOníse' ),
	'Userlogout'                => array( 'Ìbọ̀sódeOníṣe' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Ìfàlàsábẹ́ àwọn àjápọ̀:',
'tog-justify' => "Ṣ'àlàyé gbólóhùn ọ̀rọ̀",
'tog-hideminor' => 'Ìbòmọ́lẹ̀ àwọn àtúnṣe kékeré nínú àwọn àtúnse tuntun',
'tog-hidepatrolled' => 'Ìbòmọ́lẹ̀ àwọn àtúnṣe oníìṣọ́ nínú àwọn àtúnṣe tuntun',
'tog-newpageshidepatrolled' => 'Ìbòmọ́lẹ̀ àwọn ojúewé oníìṣọ́ lọ́dọ̀ àtòjọ ojúewé tuntun',
'tog-extendwatchlist' => "Ìfẹ̀ àmójútó láti ṣ'àfihàn gbogbo àtúnṣe, kìí ṣe tuntun nìkan",
'tog-usenewrc' => 'Ìtò àwọn àtúnṣe gẹ́gẹ́bí ojúewé nínú àwọn àtúnṣe tuntun àti ìmújútó (JavaScript pọndandan)',
'tog-numberheadings' => 'Àwọn àkọlé nọmba-araẹni',
'tog-showtoolbar' => 'Ìfihàn pẹpẹ irinṣẹ́ àtúnṣe (JavaScript pọndandan)',
'tog-editondblclick' => "Ṣ'àtúnṣe àwọn ojúewé ní kíkàn lẹ́mẹjì (JavaScript)",
'tog-editsection' => 'Ìgbàláyè àtúnṣe abala láti inú [àtúnṣe] àwọn àjápọ̀',
'tog-editsectiononrightclick' => 'Ìgbàláyè àtúnṣe abala nípa klííkì ọ̀tún lórí àkọlé abala (JavaScript pọndandan)',
'tog-showtoc' => 'Ìfihàn tábìlì àkóónú (fún àwọn ojúewé tó ní ju orí ọ̀rọ̀ 3 lọ)',
'tog-rememberpassword' => "Ṣè'rántí àkọọ́lẹ̀ ìwọlé mi lórí agbétàkùn yìí (fún {{PLURAL:$1|ọjọ́|ọjọ́}} $1 pípẹ́jùlọ)",
'tog-watchcreations' => "Ṣ'àfikún ojúewé tí mo dá àti àwọn fáìlì tí mo rùsókè mọ́ ìmójútó mi",
'tog-watchdefault' => "Ṣ'àfikún àwọn ojúewé àti fáìlì tí mo ṣ'àtúnse mọ́ ìmójútó mi",
'tog-watchmoves' => "Ṣ'àfikún àwọn ojúewé ati fáìlì tí mo yípò mọ́ ìmójútó mi",
'tog-watchdeletion' => "Ṣ'àfikún àwọn ojúewé àti fáìlì tí mo parẹ́ mọ́ ìmójútó mi",
'tog-minordefault' => "Se àmì sí gbogbo àtúnse gẹ́gẹ́ bi kékeré lát'ìbẹ̀rẹ̀.",
'tog-previewontop' => "Se àyẹ̀wò kí ẹ tó s'àtúnṣe",
'tog-previewonfirst' => "S'àfihàn àgbéwò fún àtúnse àkọ́kọ́",
'tog-nocache' => 'Ìdínà fífi ojúewé pamọ́ sínú cache',
'tog-enotifwatchlistpages' => 'Fi e-mail ránṣẹ́ sí mi tí ojúewé tàbí fáìlì tí mò ún mójútó bá yípadà',
'tog-enotifusertalkpages' => 'Fi e-mail ránṣẹ́ sími tí ojúewé oníṣe mi bá yípadà',
'tog-enotifminoredits' => 'Fi e-mail ránṣẹ́ sí mi bákannà fún àtúnṣe kékékèé sí àwọn ojúewé àti fáìlì',
'tog-enotifrevealaddr' => "Ṣ'àfihàn àdírẹ́ẹ̀sì e-mail mi nínú àwọn ìránṣẹ́ e-mail",
'tog-shownumberswatching' => "S'àfihàn iye àwọn oníṣe tí wọn tẹjú mọ́ọ",
'tog-oldsig' => 'Ìtọwọ́bọ̀wé tówà:',
'tog-fancysig' => 'Ṣe ìtọwọ́bọ̀wé bíi ìkọ wiki (láìní ìjápọ̀ fúnrararẹ̀)',
'tog-externaleditor' => 'Lo aláàtúnṣe ọ̀tọ̀ látìbẹ̀rẹ̀ (fún àwọn tó mọ̀ nìkan, ìtò ọ̀tọ̀ọ̀tọ̀ pọndandan lórí kọ̀mpútà yín. [//www.mediawiki.org/wiki/Manual:External_editors More information.])',
'tog-externaldiff' => 'Lo awoìyàtò ọ̀tọ̀ látìbẹ̀rẹ̀ (fún àwọn tó mọ̀ nìkan, ìtò ọ̀tọ̀ọ̀tọ̀ pọndandan lórí kọ̀mpútà yín. [//www.mediawiki.org/wiki/Manual:External_editors Ìfọ̀rọ̀tónilétí mìhínhìn.])',
'tog-showjumplinks' => 'Ìgbàláyè "fò lọ sí" àwọn ìjápọ̀ ìṣeégbà',
'tog-uselivepreview' => 'Ìlo àkọ́kọ́yẹ̀wò lẹ́ṣẹ̀kẹṣẹ̀ (JavaScript pọndandan) (aládànhánwò)',
'tog-forceeditsummary' => 'Kìlọ̀ fún mi tí àkótán àtúnṣe bá jẹ́ òfo',
'tog-watchlisthideown' => 'Ìbòmọ́lẹ̀ àwọn àtúnṣe mi nínú ìmójútó',
'tog-watchlisthidebots' => 'Ìbòmọ́lẹ̀ àwọn àtúnṣe bot nínú ìmójútó',
'tog-watchlisthideminor' => 'Ìbòmọ́lẹ̀ àwọn àtúnṣe kéékèké nínú ìmójútó',
'tog-watchlisthideliu' => 'Ìbòmọ́lẹ̀ àwọn àtúnṣe àwọn oníṣe tó ti wọlé nínú ìmójútó',
'tog-watchlisthideanons' => 'Ìbòmọ́lẹ̀ àwọn àtúnṣe àwọn oníṣe aláìlórúkọ nínú ìmójútó',
'tog-watchlisthidepatrolled' => 'Ìbòmọ́lẹ̀ àwọn àtúnṣe olùṣọ́ lọ́wọ́ ìmójútó',
'tog-ccmeonemails' => 'Ìfiránṣẹ́ sími àwọn àwòkọ àwọn e-mail tí mo firánṣẹ́ sí àwọn oníṣe míràn',
'tog-diffonly' => 'Kò gbọdọ̀ ṣàfihàn àkóónú ojúewé lábẹ́ àwọn ìyàtọ̀',
'tog-showhiddencats' => "Ṣ'àfihàn àwọn ẹ̀ka pípamọ́",
'tog-norollbackdiff' => 'Fo ìyàtọ̀ lẹ́yín síṣe ìyísẹ́yìn',

'underline-always' => 'Nígbà gbogbo',
'underline-never' => 'Rárá',
'underline-default' => 'Ti àwọ tàbí ẹrọ́ ìtọ́kùn',

# Font style option in Special:Preferences
'editfont-style' => 'Oge fọ́ntì ààlà àtúnṣe:',
'editfont-default' => 'Ti agbétàkùn',
'editfont-monospace' => 'Fọ́ntì aláàyè kan',
'editfont-sansserif' => 'Fọnti san-sẹrif',
'editfont-serif' => 'Fọnti sẹrif',

# Dates
'sunday' => 'Ọjọ́àìkú',
'monday' => 'Ọjọ́ajé',
'tuesday' => 'Ọjọ́ìsẹ́gun',
'wednesday' => 'Ọjọ́rú',
'thursday' => 'Ọjọ́bọ̀',
'friday' => 'Ọjọ́ẹtì',
'saturday' => 'Ọjọ́àbámẹ́ta',
'sun' => 'Àìkú',
'mon' => 'Ajé',
'tue' => 'Ìṣẹ́gun',
'wed' => 'Rú',
'thu' => 'Bọ̀',
'fri' => 'Ẹtì',
'sat' => 'Àbámẹ́ta',
'january' => 'Oṣù Kínní',
'february' => 'Oṣù Kejì',
'march' => 'Oṣù Kẹta',
'april' => 'Oṣù Kẹrin',
'may_long' => 'Oṣù Kàrún',
'june' => 'Oṣù Kẹfà',
'july' => 'Oṣù Keje',
'august' => 'Oṣù Kẹjọ',
'september' => 'Oṣù Kẹ̀sán',
'october' => 'Oṣù Kẹ̀wá',
'november' => 'Oṣù Kọkànlá',
'december' => 'Oṣù Kejìlá',
'january-gen' => 'Oṣù Kínní',
'february-gen' => 'Oṣù Kejì',
'march-gen' => 'Oṣù Kẹta',
'april-gen' => 'Oṣù Kẹrin',
'may-gen' => 'Oṣù Kàrún',
'june-gen' => 'Oṣù Kẹfà',
'july-gen' => 'Oṣù Keje',
'august-gen' => 'Oṣù Kẹjọ',
'september-gen' => 'Oṣù Kẹ̀sán',
'october-gen' => 'Oṣù Kẹ̀wá',
'november-gen' => 'Oṣù Kọkànlá',
'december-gen' => 'Oṣù Kejìlá',
'jan' => 'Oṣù 1',
'feb' => 'Oṣù 2',
'mar' => 'Oṣù 3',
'apr' => 'Oṣù 4',
'may' => 'Oṣù 5',
'jun' => 'Oṣù 6',
'jul' => 'Oṣù 7',
'aug' => 'Oṣù 8',
'sep' => 'Oṣù 9',
'oct' => 'Oṣù 10',
'nov' => 'Oṣù 11',
'dec' => 'Oṣù 12',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Ẹ̀ka|Àwọn ẹ̀ka}}',
'category_header' => 'Àwọn ojúewé nínú ẹ̀ka "$1"',
'subcategories' => 'Àwọn ẹ̀ka abẹ́',
'category-media-header' => 'Amóunmáwòrán nínú ẹ̀ka "$1"',
'category-empty' => "''Lọ́wọ́lọ́wọ́ ẹ̀ka yìí kò ní ojúewé tàbí amóhùnmáwòrán kankan.''",
'hidden-categories' => '{{PLURAL:$1|Ẹ̀ka bíbòmọ́lẹ̀|Áwọn ẹ̀ka bíbòmọ́lẹ̀}}',
'hidden-category-category' => 'Àwọn ẹ̀ka ìbòmọ́lẹ̀',
'category-subcat-count' => '{{PLURAL:$2|Ẹ̀ka yìí ní ẹ̀kà abẹ́ ìsàlẹ̀ yìí nìkan|Ẹ̀ka yìí ní {{PLURAL:$1|ẹ̀kà abẹ́ ìsàlẹ̀ yìí|àwọn ẹ̀kà abẹ́ $1 ìsàlẹ̀ wọ̀nyí}}, nínú àpapọ̀ $2.}}',
'category-subcat-count-limited' => 'Ẹ̀ka yìí ní {{PLURAL:$1|ẹ̀kà abẹ́ yìí|àwọn ẹ̀kà abẹ́ $1 wọ̀nyí}}.',
'category-article-count' => '{{PLURAL:$2|Ẹ̀ka yìí ní ojúewé kan péré.|{{PLURAL:$1|Ojúewé kan yìí nìkan|Àwọn ojúewé $1 yìí}} lówà nínú èka yìí, nínú àpapọ̀ $2.}}',
'category-article-count-limited' => '{{PLURAL:$1|Ojùewé ìsàlẹ̀ yìí|Àwọn ojúewé $1 ìsàlẹ̀ wọ̀nyí}} lówà nínú ẹ̀ka yìí.',
'category-file-count' => '{{PLURAL:$2|Ẹ̀ka yìí ní fáìlì ìsàlẹ̀ yìí nìkan. |{{PLURAL:$1|Fáìlì ìsàlẹ̀ yìí|Àwọn fáìlì $1 ìsàlẹ̀ yìí ni wọ́n}} wà nínú ẹ̀ka yìí, nínú àpapọ̀ iye $2.}}',
'category-file-count-limited' => '{{PLURAL:$1|Fáìlì yìí|Àwọn fáìlì $1 yìí}} wà nìnú ẹ̀ka yìí.',
'listingcontinuesabbrev' => 'tẹ̀síwájú',
'index-category' => 'Àwọn ojúewé atọ́kasí',
'noindex-category' => 'Àwọn ojúewé àìjẹ́ atọ́kasí',
'broken-file-category' => 'Àwọn ojúewé pẹ̀lú àwọn ìjápọ̀ fáìlì gígé',

'about' => 'Nípa',
'article' => 'Ojúewé àkóónú',
'newwindow' => '(yíò sí nínú fèrèsè tuntun)',
'cancel' => 'Fagilé',
'moredotdotdot' => 'Ẹ̀kúnrẹ́rẹ́...',
'mypage' => 'Ojúewé',
'mytalk' => 'Ọ̀rọ̀',
'anontalk' => 'Ọ̀rọ̀ fún IP yí',
'navigation' => 'Atọ́ka',
'and' => '&#32;àti',

# Cologne Blue skin
'qbfind' => 'Wíwárí',
'qbbrowse' => 'Ìṣíwò',
'qbedit' => 'Àtúnṣe',
'qbpageoptions' => 'Ojúewé yi',
'qbmyoptions' => 'Àwọn ojúewé mi',
'qbspecialpages' => 'Àwọn ojúewé pàtàkì',
'faq' => 'FAQ',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Àfikún orí-ọ̀rọ̀',
'vector-action-delete' => 'Ìparẹ́',
'vector-action-move' => 'Ìyípòdà',
'vector-action-protect' => 'Àbò',
'vector-action-undelete' => 'Ìmúkúrò ìparẹ́',
'vector-action-unprotect' => 'Ìyípadà àbò',
'vector-simplesearch-preference' => 'Ìgbàláyè pẹpẹ ìṣàwárí ọnídídẹ̀rọ̀ (awọ Vector nìkan)',
'vector-view-create' => "Ṣ'èdá",
'vector-view-edit' => 'Àtúnṣe',
'vector-view-history' => 'Wo ìtàn',
'vector-view-view' => 'Àwòkà',
'vector-view-viewsource' => 'Wo àmìọ̀rọ̀',
'actions' => 'Àwọn ìgbéṣe',
'namespaces' => 'Àwọn orúkọàyè',
'variants' => 'Àwọn oriṣiríṣi',

'navigation-heading' => 'Ètò ìtọ́sọ́nà',
'errorpagetitle' => 'Àsìṣe',
'returnto' => 'Padà sí $1.',
'tagline' => "Lát'ọwọ́ {{SITENAME}}",
'help' => 'Ìrànlọ́wọ́',
'search' => 'Àwárí',
'searchbutton' => 'Àwárí',
'go' => 'Rìnsó',
'searcharticle' => 'Lọ',
'history' => 'Ìtàn ojúewé',
'history_short' => 'Ìtàn',
'updatedmarker' => 'jẹ́ títúnṣe lẹ́yìn àbẹ̀wò mi',
'printableversion' => 'Àtẹ̀jáde tóṣeétẹ̀síìwé',
'permalink' => 'Ìjápọ̀ tíkòníyípadà',
'print' => 'Ìtẹ̀síìwé',
'view' => 'Ìwòran',
'edit' => 'Àtúnṣe',
'create' => 'Ṣèdá',
'editthispage' => "S'àtúnṣe ojúewé yi",
'create-this-page' => "Ṣè'dá ojúewé yìí",
'delete' => 'Ìparẹ́',
'deletethispage' => 'Pa ojúewé yi rẹ́',
'undelete_short' => 'Ìdápadà ìparẹ́ {{PLURAL:$1|àtúnṣe kan|àwọn àtúnṣe $1}}',
'viewdeleted_short' => 'Ìwòran {{PLURAL:$1|àtúnṣe ajẹ́píparẹ́ kan|àwọn àtúnṣe ajẹ́píparẹ́ $1}}',
'protect' => 'Àbò',
'protect_change' => 'yípadà',
'protectthispage' => 'Dá àbò bo ojúewé yìí',
'unprotect' => 'Ìyípadà àbò',
'unprotectthispage' => 'Ìyípadà àbò ojúewé yìí',
'newpage' => 'Ojúewé tuntun',
'talkpage' => 'Ìfọ̀rọ̀wérọ̀ nípa ojúewé yìí',
'talkpagelinktext' => 'Ọ̀rọ̀',
'specialpage' => 'Ojúewé Pàtàkì',
'personaltools' => 'Àwọn irinṣẹ́ àdáni',
'postcomment' => 'Abala tuntun',
'articlepage' => 'Ìfihàn àkóónú ojúewé',
'talk' => 'Ìfọ̀rọ̀wérọ̀',
'views' => 'Àwọn ìwò',
'toolbox' => 'Àpótí irinṣẹ',
'userpage' => 'Wo ojúewé oníṣe',
'projectpage' => 'Wo ojúewé iṣẹ́ọwọ́',
'imagepage' => 'Wo ojúewé fáìlì',
'mediawikipage' => 'Wo ojúewé ìránṣẹ́',
'templatepage' => 'Wo ojúewé àdàkọ',
'viewhelppage' => 'Wo ojúewé ìrànlọ́wọ́',
'categorypage' => 'Wo ojúewé ẹ̀ka',
'viewtalkpage' => 'Wo ìfọ̀rọ̀wérọ̀',
'otherlanguages' => 'Àwọn èdè míràn',
'redirectedfrom' => '(Àtúnjúwe láti $1)',
'redirectpagesub' => 'Ojúewé àtúnjúwe',
'lastmodifiedat' => 'Àtunṣe ojúewé yi gbẹ̀yìn wáyé ni ago $2, ọjọ́ọdún $1.',
'viewcount' => 'A ti wo ojúewé yi ni {{PLURAL:$1|ẹ̀kan péré|iye ìgbà $1}}.',
'protectedpage' => 'Ojúewé oníàbò',
'jumpto' => 'Lọ sí:',
'jumptonavigation' => 'atọ́ka',
'jumptosearch' => 'àwárí',
'view-pool-error' => 'Àforíjì, ẹ̀rọ ìwọ̀fà ti kún lọ́wọ́ báyìí.
Àwọn oníṣe ọ̀pọ̀lọpọ̀ úngbìyànjú láti wo ojúewé yìí.
Ẹ jọ̀wọ́ ẹ dúro ná díẹ̀ kí ẹ tó tún gbìyànjú láti wo ojúewé yìí.

$1',
'pool-timeout' => 'Ìsinmi ìgbàdíẹ̀ láti dúro de ìtìpadé',
'pool-queuefull' => 'Oríìlà dátà ti kún',
'pool-errorunknown' => 'Àsìṣe àwámárìdí',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Nípa {{SITENAME}}',
'aboutpage' => 'Project:Nípa',
'copyright' => 'Gbogbo ohun inú ibí yìí wà lábẹ́  $1.',
'copyrightpage' => '{{ns:project}}:Ẹ̀tọ́àwòko',
'currentevents' => 'Ìṣẹ̀lẹ̀ lọ́wọ́lọ́wọ́',
'currentevents-url' => 'Project:Ìṣẹ̀lẹ̀ lọ́wọ́lọ́wọ́',
'disclaimers' => 'Ikìlọ̀',
'disclaimerpage' => 'Project:Ìkìlọ̀ gbogbo',
'edithelp' => 'Ìrànlọ́wọ́ fún àtúnṣe',
'edithelppage' => 'Help:Àtúnṣe',
'helppage' => 'Help:Àwon àkóónú',
'mainpage' => 'Ojúewé Àkọ́kọ́',
'mainpage-description' => 'Ojúewé Àkọ́kọ́',
'policy-url' => 'Project:Ìpinu',
'portal' => 'Èbúté àwùjọ',
'portal-url' => 'Project:Èbúté Àwùjọ',
'privacy' => 'Ètò àbò',
'privacypage' => 'Project:Ètò àbò',

'badaccess' => 'Àṣìṣe ìyọ̀nda',
'badaccess-group0' => "A kò gbàyín l'áyè l'áti ṣe ohun tí ẹ bèrè fún.",
'badaccess-groups' => 'Ohun tí ẹ bèèrè fún wà fún àwọn oníṣe {{PLURAL:$2|inú ẹgbẹ́ yìí|inú ikan nínú àwọn ẹgbẹ́ yìí}}: $1.',

'versionrequired' => 'Àtẹ̀jáde $1 ti MediaWiki ṣe dandan',
'versionrequiredtext' => 'Àtẹ̀jáde $1 ti MediaWiki ṣe dandan láti lo ojúewé yìí.
Ẹ wo [[Special:Version|ojúewé àtẹ̀jáde]].',

'ok' => 'OK',
'retrievedfrom' => 'Jẹ́ kíkójáde láti "$1"',
'youhavenewmessages' => 'Ẹ ní $1 ($2).',
'newmessageslink' => 'ìránṣẹ́ tuntun',
'newmessagesdifflink' => 'àtúnṣe tógbẹ̀yìn',
'youhavenewmessagesfromusers' => 'Ẹ ní $1 láti ọ̀dọ̀ {{PLURAL:$3|oníṣe míràn|àwọn oníṣe $3}} ($2).',
'youhavenewmessagesmanyusers' => 'Ẹ ní $1 láti ọ̀dọ̀ àwọn oníṣe púpọ̀ ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|ìránṣẹ́ tuntun kan|àwọn ìránṣẹ́ tuntun}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|àtúnṣe|àwọn àtúnṣe}} tógbẹ̀yìn',
'youhavenewmessagesmulti' => 'Ẹ ní ìránsẹ́ tuntun ni $1',
'editsection' => 'àtúnṣe',
'editold' => 'àtúnṣe',
'viewsourceold' => 'wo àmìọ̀rọ̀',
'editlink' => 'àtúnṣe',
'viewsourcelink' => 'wo àmìọ̀rọ̀',
'editsectionhint' => 'Àtúnṣe abala: $1',
'toc' => 'Àwọn àkóónú',
'showtoc' => 'fihàn',
'hidetoc' => 'bòmọ́lẹ̀',
'collapsible-collapse' => 'Kálura',
'collapsible-expand' => 'Fẹ̀hàn',
'thisisdeleted' => 'Ìfihàn tàbí ìmúpadà $1?',
'viewdeleted' => 'Ẹ wo $1?',
'restorelink' => '{{PLURAL:$1|àtúnṣe ajẹ́píparẹ́ kan|àwọn àtúnṣe ajẹ́píparẹ́ $1}}',
'feedlinks' => 'Feed:',
'feed-invalid' => 'Irú àkósẹ́nu dátà àìtọ́.',
'feed-unavailable' => 'Àwọn dátà àkósẹ́nu kò sí',
'site-rss-feed' => '$1 RSS Feed',
'site-atom-feed' => '$1 Atom Feed',
'page-rss-feed' => '"$1" RSS Feed',
'page-atom-feed' => '"$1" Atom Feed',
'red-link-title' => '$1 (kò sí ojúewé yìí)',
'sort-descending' => 'Ìtò lọsisàlẹ̀',
'sort-ascending' => 'Ìtò lọsókè',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Ojúewé',
'nstab-user' => 'Ojúewé oníṣe',
'nstab-media' => 'Ojúewé amóhùnmáwòrán',
'nstab-special' => 'Ojúewé pàtàkì',
'nstab-project' => 'Ojúewé iṣẹ́ọwọ́',
'nstab-image' => 'Fáìlì',
'nstab-mediawiki' => 'Ìránṣẹ́',
'nstab-template' => 'Àdàkọ',
'nstab-help' => 'Ojúewé ìrànlọ́wọ́',
'nstab-category' => 'Ẹ̀ka',

# Main script and global functions
'nosuchaction' => 'Kò sí irú ìgbéṣe báun',
'nosuchactiontext' => 'Ìgbéṣe tí URL yìí tọ́kasí kò tọ́.
Ó ṣe é ṣe kó jẹ́ pé ẹ ṣe àṣìṣe URL ọ̀hún, tàbí kó jẹ́ pé ẹ tẹ̀lé ìjápọ̀ tí kò tọ́.
Ó sì le jẹ́ pé kòkòrò wà nínú software tí {{SITENAME}} nlò.',
'nosuchspecialpage' => 'Kò sí irú ojúewé pàtàkì báun',
'nospecialpagetext' => '<strong>Ẹ tọrọ ojúewé pàtàkì tíkòtọ́.</strong>

Àkójọ àwọn ojúewé pàtàkì títọ́ wà ní [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Àsìṣe',
'databaseerror' => 'Àsìṣe ibùdó dátà',
'dberrortext' => 'Àṣìṣe ìsoọ̀rọ̀pọ̀ ìtọrọ ibùdó-dátà kan ti ṣẹlẹ̀.
Ó lè jẹ́ nítorí àṣìṣe inú atòlànà.
Ìgbìyànjú ìtọrọ ibùdó-dátà ṣẹlẹ̀ jẹ́: 
<blockquote><code>$1</code></blockquote>
láti inú ìmúṣiṣẹ́ "<code>$2</code>".
Ibùdó-dátà mú àṣìṣe "<samp>$3: $4</samp>" padà.',
'dberrortextcl' => 'Àṣìṣe ìsoọ̀rọ̀pọ̀ ìtọrọ ibùdó-dátà kan ti ṣẹlẹ̀.
Ìgbìyànjú ìtọrọ ibùdó-dátà ṣẹlẹ̀ jẹ́: 
"$1"
láti inú ìmúṣiṣẹ́ "$2".
Ibùdó-dátà mú àṣìṣe "$3: $4" padà',
'laggedslavemode' => "'''Ìkìlọ̀:''' Ojúewé náà le mọ́ nìí àwọn àtúnṣe tuntun.",
'readonly' => 'Títìpa ibùdó dátà',
'enterlockreason' => 'Ẹ ṣàlàyé ìtìpa náà, àti ìgbàtí ẹ rò pé ìtìpa náà yíò kúrò.',
'readonlytext' => 'Ibùdó dátà jẹ́ títìpa sí àwọn ìkówọlé tuntun àti sí àwọn àtúnṣe míràn, bóyá fún ìtọ́jú ibùdó dátà gbogbo ìgbà, lẹ́yìn èyí yíò padà sí ní ṣiṣẹ́.

Olùmójútó tó tìípa ṣe àlàyé yìí: $1',
'missing-article' => 'Ibùdó dátà kò rí ìkọ̀wé fún ojúewé kan tóyẹ kí ó rí, pẹ̀lú orúkọ "$1" $2.

Ohun tó ún fa èyí ní ìtẹ̀lé ìjapọ̀ "ìyàtọ́" tótipẹ́ tàbí ìjápọ̀ ìtàn ojúewé tí a ti parẹ́.

Tí kì bá ṣe bẹ́ẹ̀, ó lè jẹ́ pé ẹ ti rí àsìṣe nínú atòlànà kọ̀mpútà náà.
Ẹjọ̀wọ́ ẹ fi èyí tó [[Special:ListUsers/sysop|alámùójútó]] kan létí, kí ẹ sí mọ́ gbàgbé láti fúun ní URL ọ̀hún.',
'missingarticle-rev' => '(àtúnyẹ̀wò#: $1)',
'missingarticle-diff' => '(Ìyàtọ̀: $1, $2)',
'readonly_lag' => 'Ibùdó dátà ti jẹ́ títìpa fúnrararẹ̀ kí àwọn ẹ̀rọ awọ̀fà ẹrú ibùdó dátà le baà yára bíi ti àwọn ẹ̀rọ awọ̀fà ọ̀gà.',
'internalerror' => 'Àsìṣe inú',
'internalerror_info' => 'Àsìṣe inú: $1',
'fileappenderrorread' => '"$1" kò ṣe é kà lásìkò ìlẹ̀mọ́.',
'fileappenderror' => 'Kò le so "$1" pọ̀ mọ́ "$2".',
'filecopyerror' => 'Àwòkọ faili "$1" sí "$2" kò ṣe é ṣe.',
'filerenameerror' => 'Àtúnsọlórúkọ fáìlì "$1" sí "$2" kò ṣe é ṣe.',
'filedeleteerror' => 'Ìparẹ́ fáìlì "$1" kò ṣe é ṣe.',
'directorycreateerror' => 'Kò le dá àpò "$1".',
'filenotfound' => 'Kò sí fáìlì "$1".',
'fileexistserror' => 'Ìṣòro kíkọ sí inú fáìlì "$1": fáìlì ọ̀hún wà',
'unexpected' => 'Iye àìretí: "$1"="$2".',
'formerror' => 'Àsìṣe: fọ́ọ̀mù kò ṣe fi ránṣẹ́',
'badarticleerror' => 'Ìgbéṣẹ̀ yìí kò ṣe é ṣe lórí ojúewé yìí.',
'cannotdelete' => 'Ojúewé tàbí fáìlì "$1" kò ṣe é parẹ́.
Oníṣe mìíràn le ti paárẹ́.',
'cannotdelete-title' => 'Kò le pa ojúewè "$1" rẹ́',
'delete-hook-aborted' => 'Hook ti ṣe ìdádúró ìparẹ́.
Kò ṣe àlàyé kankan.',
'badtitle' => 'Àkọ́lé búrurú',
'badtitletext' => 'Àkọlé ojúewé tí ẹ bèrè fún kò ní ìbáramu, jẹ́ òfo, tàbí áṣìṣe wà nínú ìjápọ̀ àkọlé láàrin èdè tàbí láàrin wiki.
Ó ṣe é ṣe kó jẹ́pé ó ní ìkan tàbí ọ̀pọ̀ àmi-lẹ́tà tí kò ṣe é lò nínú àkọlé.',
'perfcached' => 'Ìwònyí jẹ́ dátà láti inú cache nítoríẹ̀ ó le mọ́ jẹ̀ẹ́ tuntun. Ó pọ̀jùlọ {{PLURAL:$1|èsì kan|èsì $1}} wà nínú cache.',
'perfcachedts' => 'Ìwònyí jẹ́ dátà láti inú cache, ọjọ́ tí a ṣe àtúnṣe rẹ̀ gbẹ̀yìn ni $1. Ó pọ̀jùlọ {{PLURAL:$4|èsì kan|èsì $4}} wà nínú cache.',
'querypage-no-updates' => 'Àtúnṣe sí ojúewé yìí kò ṣe é ṣe lọ́wọ́lọ́wọ́.
Àwọn ìpèsè tuntun kò ní hàn báyìí ná.',
'wrong_wfQuery_params' => 'Àwọn pàrámítà àìtọ́ sí wfQuery()<br />
Ìlò: $1<br />
Ìtọrọ: $2',
'viewsource' => 'Wo àmìọ̀rọ̀',
'viewsource-title' => 'Ẹ wo ìsun fún $1',
'actionthrottled' => 'Ìgbése bíntín',
'actionthrottledtext' => 'Láti dènà spam, ìgbése yìí kò ní ṣe é ṣe lọ́nà iye púpọ̀ láàrin àsìkò bíntín, ẹ̀yin sì ti kọjá iye náà.
Ẹjọ̀wọ́ ẹ gbíyànjú síi ní ìsẹ́jú díẹ̀.',
'protectedpagetext' => 'Ojúewé yìí ti jẹ́ dídáàbòbò láti dínà ìṣàtúnṣe tàbí ìṣe míràn.',
'viewsourcetext' => 'Ẹ lè wo ati ẹ lè se àwòkọ ọ̀rọ̀àmì ojúewé yi:',
'viewyourtext' => "Ẹ le wò bẹ́ẹ̀sìni ẹ le ṣe àwòkọ orísun '''àwọn àtúnṣe yín''' sí ojúewé yìí:",
'protectedinterface' => 'Ojúewé yìí únpèsè ìfojúkojú ìkọ̀wé fún atòlànà, ó ti jẹ́ dídáàbòbò láti dínà ìlòkulò.',
'editinginterface' => "'''Ìkìlọ̀:''' Ẹ ún ṣàtúnṣe ojúewé tó jẹ́ lílò láti pèsè ìkọ ìfojúkojú fún àtòlànà kọ̀mpútà.
Àwọn ìyípadà sí ojúewé yìí yíò kan ìhànsí ìfojúkojú oníṣe fún àwọn oníṣe míràn lọ́rí wiki yìí.
Láti ṣ'àfikún tàbí ṣ'àyípadà àwọn ìyédèpadà fún gbogbo àwọn wiki, ẹ jọ̀wọ́ ẹ lo [//translatewiki.net/wiki/Main_Page?setlang=en translatewiki.net], iṣẹ́-ọwọ́ ìṣọdìbílẹ̀ MediaWiki.",
'sqlhidden' => '(bíbòmọ́lẹ̀ ìbéèrè SQL)',
'cascadeprotected' => 'Ojúewé yìí ti jẹ́ dídáàbòbò sí àtùnṣe, nítorípé ó wà nínú {{PLURAL:$1|ojúewé ìsàlẹ̀ yìí, tó jẹ́|àwọn ojúewé ìsàlẹ̀ wọ̀nyí, tí wọ́n jẹ́}} dídáàbòbò pẹ̀lú ìyàn "ajámọ́ra" ní títàn: $2',
'namespaceprotected' => "A kò gbàyín ní ààyè láti ṣ'àtúnṣe àwọn ojúewé tó wà nínú orúkọàyè '''$1'''.",
'customcssprotected' => 'Ẹ kò ní ìyọ̀nda láti ṣàtúnṣe ojúewé CSS yìí nítorípé ó ní àwọn ìtòjọ oníṣe ẹlòmíràn.',
'customjsprotected' => 'Ẹ kò ní ìyọ̀nda láti ṣàtúnṣe ojúewé JavaScript yìí nítorípé ó ní àwọn ìtòjọ oníṣe ẹlòmíràn.',
'ns-specialprotected' => 'Àtúnṣe kò ṣe é ṣe sí àwọn ojúewé pàtàkì.',
'titleprotected' => "[[User:$1|$1]] ti dínà sí dídá àkọlé yìí. Ìdí rẹ̀ ni pé ''$2''.",
'filereadonlyerror' => 'Àtúnṣe kò ṣe é ṣe sí fáìlì "$1" nítorípé ibi-àkójọ fáìlì "$2" jẹ́ fún wíwò nìkàn.

Olùṣeàmójútó tó típa ṣe àlàyé yìí: "$3".',
'invalidtitle-knownnamespace' => 'Àkọlé àìyẹ tó ní orúkọààyè "$2" àti ìkọ̀rọ̀ "$3"',
'invalidtitle-unknownnamespace' => 'Àkọlé àìyẹ tó ní nọ́mbà orúkọààyè àìmọ̀ "$1" àti ìkọ̀rọ̀ "$2"',
'exception-nologin' => 'Kò tí ì wọlé',
'exception-nologin-text' => 'Ojúewé tàbí ìgbéṣe yìí pọndandan kí ẹ wọlé sórí wiki yìí.',

# Virus scanner
'virus-badscanner' => "Ìtorapọ̀ búburú: awáìpasẹ̀ èràn aláìmọ̀n : ''$1''",
'virus-scanfailed' => 'ìkúnà scan (àmìọ̀rọ̀ $1)',
'virus-unknownscanner' => 'ògùn-kòkòrò àìmọ̀:',

# Login and logout pages
'logouttext' => "'''Ẹ ti bọ́sọ́de.'''

Ẹ le tẹ̀síwájú sí ní lo {{SITENAME}} láìmorúkọ yín, tàbí kí ẹ <span class='plainlinks'>[$1 padà wọlé]</span> bí ẹnikanan tàbí ẹlòmíràn.
Àkíyèsí wípé àwọn ojúewé kan le hàn b'ígbà tójẹ́pé ẹ sì wọlé títí tí ẹ ó fi jọ̀wọ́ cache browser yín.",
'welcomeuser' => 'Ẹ kú àbọ̀, $1!',
'welcomecreation-msg' => "A ti ṣ'èdá àpamọ́ yín.
Ẹ mọ́ gbàgbé l'áti ṣ'àtúnṣe [[Special:Preferences|{{SITENAME}} àwọn ìfẹ́ràn]] yín.",
'yourname' => 'Orúkọ oníṣe:',
'yourpassword' => 'Ọ̀rọ̀ìpamọ́:',
'yourpasswordagain' => 'Kọ ọ̀rọ̀ìpamọ́ lẹ́ẹ̀kansí:',
'remembermypassword' => "Ṣè'rántí ìwọlé mi lórí kọ̀mpútà yìí (fún ó pẹ́ jù {{PLURAL:$1|ọjọ́|ọjọ́}} $1)",
'securelogin-stick-https' => 'Ìwàní sísopọ̀ mọ́ HTTPS lẹ́yín ìwọlé',
'yourdomainname' => 'Domain yín:',
'password-change-forbidden' => 'Ẹ kò le ṣe ìyípadà ọ̀rọ̀ìpamọ́ lórí wiki yìí.',
'externaldberror' => 'Bóyá àsìṣe ìfidájú ibùdó dátà ló ṣẹlẹ̀ tàbí ẹ kò jẹ́ gbígbà ní ààyè láti sọ àpamọ́ òde yín di ọ̀tun.',
'login' => 'Ìwọlé',
'nav-login-createaccount' => 'Ìwọlé / Ìforúkọ sílẹ̀',
'loginprompt' => 'Ẹ gbọ́dọ̀ jọ̀wọ́ cookies láti wọlé sí {{SITENAME}}.',
'userlogin' => 'Ìwọlé / ìforúkọ sílẹ̀',
'userloginnocreate' => 'Ìwọlé',
'logout' => 'Ìjáde',
'userlogout' => 'Ìjáde',
'notloggedin' => "Ẹ kò tí w'ọlé",
'nologin' => "Ṣé ẹ fẹ́ wọlé? '''$1'''.",
'nologinlink' => 'Ìforúkọsílẹ̀',
'createaccount' => 'Ẹ fi orúkọ sílẹ̀',
'gotaccount' => "Ṣé ẹ ti ní àpamọ́ tẹ́lẹ̀? '''$1'''.",
'gotaccountlink' => "Ẹ w'ọlé",
'userlogin-resetlink' => 'À bí ẹ gbàgbé ìwọlé yín?',
'createaccountmail' => 'pẹ̀lú e-mail',
'createaccountreason' => 'Ìdíẹ̀:',
'badretype' => 'Àwọn ọ̀rọ̀ìpamọ́ tí ẹ kọ kò jọ ra wọn.',
'userexists' => 'Orúkọ oníṣe tí ẹ mú wà lọ́wọ́ ẹlòmíràn.
Ẹjọ̀wọ́ ẹ yan orúkọ mìíràn tó yàtọ̀.',
'loginerror' => 'Àsìṣe ìwọlé',
'createaccounterror' => 'Kò le dá àkópamọ́: $1',
'nocookiesnew' => 'A ti dá àpamọ́ oníṣe, ṣugbọ́n ẹ kò tíì wọlé.
{{SITENAME}} ún lo cookies láti gba àwọn oníṣe wọlé.
Ẹ ti dínà sí cookies.
Ẹjọ̀wọ́ ẹ fún cookies láàyè kí ẹ tó wọlé pẹ̀lú orúkọ oníṣe àti ọ̀rọ̀ìpamọ́ tuntun yín.',
'nocookieslogin' => '{{SITENAME}} ún lo cookies láti gba àwọn oníṣe wọlé.
Ẹ ti dínà sí cookies.
Ẹjọ̀wọ́ ẹ fún cookies láàyè kí ẹ tún tó gbìyànjú láti wọlé.',
'nocookiesfornew' => 'Àpamọ́ oníṣe kò jẹ́ dídá torípé a kò le ṣèmúdájú ibi tó ti wá.
Ẹ ríidájú pé ẹ gba cookies láàyè, ẹ túnraṣe ojúewé yìí kí ẹ tó tún gbìyànjú.',
'noname' => 'Ẹ kò tọ́kasí orúkọ oníṣe tó ní ìbámu.',
'loginsuccesstitle' => 'Ìwọlé ti yọrí sí rere',
'loginsuccess' => "'''Ẹ ti wọlé sínú {{SITENAME}} gẹ́gẹ́ bi \"\$1\".'''",
'nosuchuser' => 'Kò sí oníṣe kankan pẹ̀lú orúkọ "$1".
Àwọn lẹ́tà àwọn orúkọ oníṣe gbọ́dọ̀ jẹ́ irúkanna.
Ẹ yẹ lẹ́tà yín wò, tàbí [[Special:UserLogin/signup|kí ẹ dá àkópamọ́ tuntun]].',
'nosuchusershort' => "Kò sí oníṣe t'ón jẹ́ $1.
Ẹ yẹ lẹ́tà ọ̀rọ̀ yín wò.",
'nouserspecified' => 'Ẹ gbọ́dọ̀ tọ́kasí orúkọ oníṣe kan.',
'login-userblocked' => 'Oníṣe yìí jẹ́ dídínà. Ìwọlé kò jẹ́ gbígbà láyè.',
'wrongpassword' => 'Ọ̀rọ̀ìpamọ́ tí ẹ kìbọlé kòtọ́.
Ẹ jọ̀wọ́ ẹ gbìyànjú lẹ́ẹ̀kansí.',
'wrongpasswordempty' => 'Ọ̀ròìpamọ́ jẹ́ òfo.
Ẹ gbìyànjú lẹ́ ẹ̀kan síi.',
'passwordtooshort' => 'Ọ̀rọ̀ìpamọ́ kò gbọ́dọ̀ dín ju {{PLURAL:$1|àmìlẹ́tà kan|àmìlẹ́tà $1}} lọ.',
'password-name-match' => 'Ọ̀rọ̀ìpamọ́ yín gbọ́dọ̀ yàtọ̀ sí orúkọ oníṣe yín.',
'password-login-forbidden' => 'Lílo orúkọ oníṣe àti ọ̀rọ̀ìpamọ́ yìí ti jẹ́ dídálẹ́kun.',
'mailmypassword' => 'Ìfiránṣẹ́ ọ̀rọ̀ìpamọ́ tuntun',
'passwordremindertitle' => 'Ọ̀rọ̀ìpamọ́ tuntun fún ìgbà díẹ̀ fún {{SITENAME}}',
'passwordremindertext' => 'Ẹnìkan (ó ṣe é ṣe kó jẹ́ ẹ̀yin gan, láti àdírẹ́ẹ̀sì IP $1) bèrè fún
ọ̀rọ̀ìpamọ́ tuntun fùn {{SITENAME}} ($4). A ti ṣ\'èdá ọ̀rọ̀ìpamọ́ ìgbádíẹ̀ fún
oníṣe "$2" bẹ́ ẹ̀ sì ni a ti ṣ\'ètò rẹ̀ sí "$3". Tó bá jẹ́ pé èrò yín nuhun, ẹ gbúdọ̀ wọlé
kí ẹ yan ọ̀rọ̀ìpamọ́ tuntun ní ìsinsìnyí. Ọ̀rọ̀ìpamọ́ ìgbàdíẹ̀ yín yíò parí lẹ́yìn ọjọ́ {{PLURAL:$5|kan|$5}}.

Tó bá jẹ́ pé ẹlòmíràn ni ò ṣe ìtọrọ yìí, tábí pé ẹ ti rántí ọ̀rọ̀ìpamọ́ yín,
tí ẹ kò sì fẹ́ yípadà mọ́, ẹ mọ́ kọbiara sí ìránṣẹ́ yìí.',
'noemail' => 'Kò sí àkọsílẹ̀ àdírẹ́ẹ̀sì e-mail fún oníṣe "$1".',
'noemailcreate' => 'Ẹ gbọ́dọ̀ pèsè àdírẹ́ẹ̀sì e-mail títọ́',
'passwordsent' => 'A ti fi ọ̀rọ̀ìpamọ́ tuntun ránṣẹ́ sí ojúọ̀nà e-mail tí a fisílẹ̀ fún "$1".
Ẹ jọ̀wọ́ ẹ padà wọlé tí ẹ bá ti gbàá.',
'blocked-mailpassword' => 'Àdírẹ́sì IP yín jẹ́ dídèlọ́nà láti ṣàtúnṣe, nípa báyìí kò ní ààyè láti lo ìfigbéṣe ìtúnwárí ọ̀rọ̀ìpamọ́ kó le dínà ìbàjẹ́.',
'eauthentsent' => 'A ti fi e-mail ìmúdájú ránṣẹ́ sí àdírẹ́ẹ̀sì e-mail tí ẹ fi sílẹ̀.
Kí á tó fi e-mail mìíràn ránṣẹ́ sí àkópamọ́ yìí, ẹ gbọ́dọ̀ tẹ̀lé àwọn ìlànà inú e-mail ọ̀ún, láti múdájú pé àkópamọ́ ọ̀ún jẹ́ ti yín lóòótọ́.',
'throttled-mailpassword' => 'Aṣèránnilétí ọ̀rọ̀ìpamọ́ tilẹ̀ ti jẹ́ fífiránṣẹ́, láàrin {{PLURAL:$1|wákàtí kan|wákàtí $1}} ṣẹ́yìn.
Láti dínà ìbàjẹ́, aṣèránnilétí ọ̀rọ̀ìpamọ́ kan péré ni yíò jẹ́ fífiránṣẹ́ láàrin {{PLURAL:$1|wákàtí kọ̀ọ̀kan|wákàtí $1}}.',
'mailerror' => 'Àsìṣe ìfiránṣẹ́: $1',
'acct_creation_throttle_hit' => 'Àwọn aṣàbẹ̀wò sí wiki yìí tí wọ́n únlo àdírẹ́sì IP yín ti dá {{PLURAL:$1|àpamọ́ 1|àpamọ́ $1}} láàrin ọjọ́ tókọjá, èyí ni púpọ̀jùlọ tó jẹ́ gbígbà ní ààyè láàrin gbà àsìkò yìí.
Nítorí èyí, àwọn aṣàbẹ̀wò tí wọ́n únlo àdírẹ́sì IP yìí kò le dá àpamọ́ báyìí.',
'emailauthenticated' => 'Àdírẹ́ẹ̀sì e-mail yín ti fidájú ní ago $3 ọjọ́ $2.',
'emailnotauthenticated' => 'Àdírẹ́sì e-mail yín kò ì jẹ́ fífidájú.
E-mail kankan kò ní jẹ́ fífiránṣẹ́ fún ìkankan nínú àwọn ìní wọ̀nyí.',
'noemailprefs' => 'Ẹ pèsè àdírẹ́sì e-mail kan nínú àwọn ìfẹ́ràn yín fún àwọn ìní yìí le ba ṣiṣẹ́.',
'emailconfirmlink' => 'Ìmúdájú àdírẹ́ẹ̀sì e-mail yín',
'invalidemailaddress' => 'Àdírẹ́sì e-mail náà kò ṣe é gbà torípé ó dà bi pé irú rẹ̀ kò tọ́.
Ẹ jọ̀wọ́ ẹ pèsè àdírẹ́sì tó tọ́ tàbí kí ẹ fi ààyè náà sí òfo.',
'cannotchangeemail' => 'Àwọn àdírẹ́sì e-mail àpamọ́ kò ṣe é yípadà lórí wiki yìí.',
'emaildisabled' => 'Ibiìtàkùn yìí kò le fi e-mail ránṣẹ́.',
'accountcreated' => 'Ẹ ti fi orúkọ sílẹ̀',
'accountcreatedtext' => "A ti ṣ'èdá àkópamọ́ oniṣe fún $1.",
'createaccount-title' => 'Ìforúkọ sílẹ̀ fún {{SITENAME}}',
'createaccount-text' => 'Ẹnìkan dá àpamọ́ kan fún àdírẹ́sì e-mail yín sórí {{SITENAME}} ($4) tóún jẹ́ "$2", pẹ̀kú ọ̀rọ̀ìpamọ́ \'\'$3\'\'.
Ẹ gbọ́dọ̀ wọlé kí ẹ sì ṣàyípadà ọ́rọ́ìpamọ́ yín nísinsìyí.

Ẹ le fojúfo ìránṣẹ́ yìí, tó bá jẹ́ pé àpamọ́ yìí jẹ́ dídá nítorí àsìṣe.',
'usernamehasherror' => 'Orúkọ oníṣe yín kò gbọdọ̀ ní àmílẹ́tà hash',
'login-throttled' => 'Ẹ ti gbìyànjú bó ṣe yẹ lọ láti wọlé.
Ẹ jọ̀wọ́ ẹ dúró ná kí ẹ tó gbìyànjú lẹ́ẹ̀kan síi.',
'login-abort-generic' => 'Ìwọlé yín kò yọrísírere - ó ti jẹ́ kíkáwọ́dà',
'loginlanguagelabel' => 'Èdè: $1',
'suspicious-userlogout' => 'Ìtọrọ tí ẹ ṣe láti bọ́sóde jẹ̀ kíkọ̀ nítorípé ó dà bí pé ó jẹ́ fífiránṣẹ́ látọ̀dọ̀ awòtakùn (browser) àìdára tàbí ẹ̀rọ-ìwọ̀fà ìmúpamọ́ onígbàdíẹ̀.',

# Email sending
'php-mail-error-unknown' => 'Àsìṣe àìmọ̀ nínú ìgbéṣe mail() ti PHP',
'user-mail-no-addy' => 'Ó fẹ́ fi e-mail ránṣẹ́ láìsí àdírẹ́sì e-mail.',

# Change password dialog
'resetpass' => 'Ìyípadà ọ̀rọ̀ìpamọ́',
'resetpass_announce' => 'Ẹ ti wọlé pẹ̀lú àmìọ̀rọ̀ e-mail ìgbàdíẹ̀.
Láti parí ìmúwọlẹ́, ẹ gbọ́dọ̀ ṣètò ọ̀rọ̀ìpamọ́ tuntun níbí:',
'resetpass_header' => "Ẹ ṣ'àyípadà ọ̀rọ̀ìpamọ́",
'oldpassword' => 'Ọ̀rọ̀ìpamọ́ titẹ́lẹ̀:',
'newpassword' => 'Ọ̀rọ̀ìpamọ́ tuntun:',
'retypenew' => 'Àtúntẹ̀ ọ̀rọ̀ìpamọ́ tuntun:',
'resetpass_submit' => 'Ẹ ṣe àtúntò ọ̀rọ̀ìpamọ́ kí ẹ tó wọlé',
'resetpass_success' => 'Ìyípadà ọ̀rọ̀ìpamọ́ yín ti já sí rere! Ẹ̀ ún wọlé lọ́wọ́...',
'resetpass_forbidden' => 'Àwọn ọ̀rọ̀ìpamọ́ kò ṣe é yípadà',
'resetpass-no-info' => 'Ẹ gbọ́dọ̀ wọlẹ́ láti le lọ sí ojúewé yìí tààrà.',
'resetpass-submit-loggedin' => 'Ìyípadà ọ̀rọ̀ìpamọ́',
'resetpass-submit-cancel' => 'Fagilé',
'resetpass-wrong-oldpass' => 'Ọ̀rọ̀ìpamọ́ ìgbàdíẹ̀ tàbí tìsinsìnyí àìtọ́.
Ó le jẹ́ pé ẹ ti yí ọ̀rọ̀ìpamọ́ yín padà sí òmíràn tàbí ẹ ti tọrọ ọ́rọ́ìpamọ́ tuntun ìgbàdíẹ̀.',
'resetpass-temp-password' => 'Ọ̀rọ̀ìpamọ́ fún ìgbà díẹ̀',

# Special:PasswordReset
'passwordreset' => 'Ìtúntò ọ̀rọ̀ìpamọ́',
'passwordreset-text' => 'Ẹ parí fọ́ọ̀mù yìí láti gba e-mail aránlétí nípa àwọn ẹ̀kúnrẹ́rẹ́ àpamọ́ yín.',
'passwordreset-legend' => 'Ìtúntò ọ̀rọ̀ìpamọ́',
'passwordreset-disabled' => 'Ìdálẹ́kun ìtúntò ọ̀rọ̀ìpamọ́ lórí wiki yìí.',
'passwordreset-pretext' => '{{PLURAL:$1||Ẹ kọ ìkan nínú àwọn wẹ́wẹ́ dátà ìsàlẹ̀}}',
'passwordreset-username' => 'Orúkọ oníṣe:',
'passwordreset-domain' => 'Àbùgbé:',
'passwordreset-capture' => 'Wo e-mail tí yíò jáde?',
'passwordreset-capture-help' => 'Tí ẹ bá fagi sínú àpótí yìí, e-mail náà (pẹ̀lú ọ̀rọ̀ìpamọ́ onígbàdíẹ̀) yíò hàn si yín bákannáà yíò jẹ́ fífiránṣẹ́ sí oníṣe náà.',
'passwordreset-email' => 'Àdírẹ̀sì e-mail:',
'passwordreset-emailtitle' => 'Àwọn ẹ̀kúnrẹ́rẹ́ àpamọ́ lórí {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Ẹnìkan (bóyá ẹ̀yin ni, láti àdírẹ̀sì IP $1) tọrọ ìránlétí àwọn ẹ̀kúnrẹ́rẹ́ àkópamọ́ yín fùn {{SITENAME}} ($4). {{PLURAL:$3|Àkópamọ́|Àwọn àkópamọ́}} oníṣe ìsàlẹ̀ yìí ní ìbáṣe pọ̀ mọ́ àdírẹ̀sì e-mail yìí:

$2

{{PLURAL:$3|Ọ̀rọ̀ìpamọ́ onígbàdíẹ̀ yìí|Àwọn ọ̀rọ̀ìpamọ́ onígbàdíẹ̀ wọ̀nyí}} yíò dópin lẹ́yìn {{PLURAL:$5|ọjọ́ kan|ọjọ́ $5}}.
Ẹ gbọ́dọ̀ lọ yan ọ̀rọ̀ìpamọ́ tuntun báyìí. Tóbá jẹ́ pé ẹ̀lòmíràn ló ṣe ìtọrọ yìí, tàbí tọ́bá jẹ́ pé ẹ ti rántí ọ̀rọ̀ìpamọ́ àtètèkọ́ṣe yín, tí ẹ kọ̀ sí fẹ́ yíipadà mọ́, ẹ lé ṣàìkàsí ìránṣẹ́ yìí, kí ẹ sì tẹ̀síwájú ní lo ọ̀rọ̀ìpamọ́ àtijọ́ yín.',
'passwordreset-emailtext-user' => 'Oníṣe $1 lórí {{SITENAME}} tọrọ ìránlétí àwọn ẹ̀kúnrẹ́rẹ́ àkópamọ́ yín fùn {{SITENAME}} ($4). {{PLURAL:$3|Àkópamọ́|Àwọn àkópamọ́}} oníṣe ìsàlẹ̀ yìí ní ìbáṣe pọ̀ mọ́ àdírẹ̀sì e-mail yìí:

$2

{{PLURAL:$3|Ọ̀rọ̀ìpamọ́ onígbàdíẹ̀ yìí|Àwọn ọ̀rọ̀ìpamọ́ onígbàdíẹ̀ wọ̀nyí}} yíò dópin lẹ́yìn {{PLURAL:$5|ọjọ́ kan|ọjọ́ $5}}.
Ẹ gbọ́dọ̀ lọ yan ọ̀rọ̀ìpamọ́ tuntun báyìí. Tóbá jẹ́ pé ẹ̀lòmíràn ló ṣe ìtọrọ yìí, tàbí tọ́bá jẹ́ pé ẹ ti rántí ọ̀rọ̀ìpamọ́ àtètèkọ́ṣe yín, tí ẹ kọ̀ sí fẹ́ yíipadà mọ́, ẹ lé ṣàìkàsí ìránṣẹ́ yìí, kí ẹ sì tẹ̀síwájú ní lo ọ̀rọ̀ìpamọ́ àtijọ́ yín.',
'passwordreset-emailelement' => 'Orúkọ oníṣe: $1
Ọ̀rọ̀ìpamọ́ ìgbàdíẹ̀: $2',
'passwordreset-emailsent' => 'E-mail olùrántí ti jẹ́ fífiránṣẹ́.',
'passwordreset-emailsent-capture' => 'E-mail ìránlétí kan ti jẹ́ fífiránṣẹ́. Òhun nìyí nísàlẹ̀.',
'passwordreset-emailerror-capture' => 'E-mail ìránlétì jẹ́ dídá, òhun lóhàn nísàlẹ̀ yìí, sùgbọ́n ìfiránṣẹ́ rẹ̀ sí oníṣe náà kùnà: $1',

# Special:ChangeEmail
'changeemail' => 'Ìyípadà àdírẹ̀sì E-mail',
'changeemail-header' => 'Ìyípadà àdírẹ̀sì e-mail àkópamọ́',
'changeemail-text' => 'Ẹ parí fọ́ọ̀mù yìí láti ṣèyípadà àdírẹ̀sì e-mail yín. Ẹ gbọ́dọ̀ tẹ ọ̀rọ̀ìpamọ́ yín láti ṣèmúdájú ìyípadà yìí.',
'changeemail-no-info' => 'Ẹ gbódọ̀ wọlé láti bósí ojúewé yìí tààrà.',
'changeemail-oldemail' => 'Àdírẹ̀sì E-mail ìsinsìnyí:',
'changeemail-newemail' => 'Àdírẹ̀sì E-mail tuntun:',
'changeemail-none' => '(kòsí)',
'changeemail-password' => 'Ọ̀rọ̀ìpamọ́ {{SITENAME}} yín:',
'changeemail-submit' => 'Ìyípadà E-mail',
'changeemail-cancel' => 'Fagilé',

# Edit page toolbar
'bold_sample' => 'Ìkọ kedere',
'bold_tip' => 'Ìkọ kedere',
'italic_sample' => 'Ìkọ italiki',
'italic_tip' => 'Ìkọ̀wé italiki',
'link_sample' => 'Àkọlé ìjápọ̀',
'link_tip' => 'Ìjápọ̀ inú',
'extlink_sample' => 'http://www.example.com àkọlé ìjápọ̀',
'extlink_tip' => 'Ìjápọ̀ lóde (ẹ mọ́ gbàgbé àlẹ̀mọ́wájú http://)',
'headline_sample' => 'Ìkọ àkọlé',
'headline_tip' => 'Àkọlé onípele 2',
'nowiki_sample' => 'Ìkìbọ̀ ìkọ àìjẹ́ síṣèdá síbí',
'nowiki_tip' => 'Kí á fojú fo bí wiki ṣe rí',
'image_tip' => 'Fáìlì tí a kìbọ̀',
'media_tip' => 'Ìjápọ̀ fáìlì',
'sig_tip' => 'Ìtọwọ́bọ̀wé yín pẹ̀lú àsìkò àti déètì',
'hr_tip' => 'Ìlà gbọlọjọ (ẹ lọ̀ọ́ pẹ̀lú àkíyèsì)',

# Edit pages
'summary' => 'Àkótán:',
'subject' => 'Orí ọ̀rọ̀/àkọlé:',
'minoredit' => 'Àtúnṣe kékeré nìyí',
'watchthis' => "M'ójútó ojúewé yìí",
'savearticle' => 'Ìmúpamọ́ ojúewé',
'preview' => 'Àyẹ̀wò',
'showpreview' => 'Àkọ́yẹ̀wò',
'showlivepreview' => 'Àkọ́yẹ̀wò lẹ́sẹ̀kẹsẹ̀',
'showdiff' => 'Ìfihàn àwọn àtúnṣe',
'anoneditwarning' => "'''Ìkìlọ̀:''' Ẹ kò tíì wọlé.
Àdírẹ́ẹ̀sì IP yín yíò jẹ́ kíkọpamọ́ sínú ìwé ìtàn àtúnṣe ojúewé yìí.",
'anonpreviewwarning' => "''Ẹ kò tíì wọlé. Àdírẹ́ẹ̀sì IP yín yíò jẹ́ kíkọsílẹ̀ sínú ìwé ìtàn àtúnṣe ojúewé yìí tí ẹ bá ṣàmúpamọ́ rẹ̀.''",
'missingsummary' => "'''Ìránlétí:''' Ẹ kò pèsè àkótán fún àtúnṣe yìí
Tí ẹ bá tẹ Ìmúpamọ́ lẹ́ẹ̀kansi, àtúnṣe yín yíò jẹ̀ mímúpamọ́ láìní kankan.",
'missingcommenttext' => 'Ẹjọ̀wọ́ ẹ ṣe áríwí ní ìsàlẹ̀',
'missingcommentheader' => "'''Ìránlétí:''' Ẹ kò pèsè àkọlé/oríọ̀rọ̀ kankan fún àríwí yìí.
Tí ẹ bá tẹ \"{{int:savearticle}}\" lẹ́ẹ̀kansi, àtúnṣe yín yíò jẹ́ mímúpamọ́ láìní kankan.",
'summary-preview' => 'Àkọ́yẹ̀wò àkótán:',
'subject-preview' => 'Àyẹ̀wò àkọlé',
'blockedtitle' => 'Ìdínà oníṣe',
'blockedtext' => "'''Orúkọ oníṣe yín tàbí àdírẹ́sì IP yín ti jẹ́ dídílọ́nà.'''

$1 ni ó ṣe ìdínà.
Ìdí tó fun ni ''$2''.

* Ìbẹ̀rẹ̀ ìdínà: $8
* Ìparí ìdínà: $6
* Ẹni tí a fẹ́ dínà: $7

Ẹ ṣ'èránṣẹ́ sí $1 tàbí [[{{MediaWiki:Grouppage-sysop}}|alámùójútó]] mìíràn láti fọ̀rọ̀wérọ̀ lórí ìdínà ọ̀ún.
Ẹ kò le è 'ránṣẹ́ sí oníṣe yìí pẹ̀lú e-mail' àyàfi tí ojúọ̀nà e-mail tó dájú wà ní [[Special:Preferences|àwọn ìfẹ́ràn àpamọ́]] yín tí wọn kò sì ti dínà yín láti lò ó.
Àdírẹ́sì IP yín lọ́wọ́lọ́wọ́ ni $3, bẹ́ ẹ̀ sì ni ID fún ìdínà yín ni #$5.
Ẹ jọ̀wọ́ ẹ fi gbogbo ẹ̀kúnrẹ́rẹ́ òkè yìí kún ìbérè tí ẹ bá ṣe.",
'autoblockedtext' => "Àdírẹ́sì IP yín ti jẹ́ dídílọ́nà ní fúnrararẹ̀ nítorí pé ó jẹ́ lílò látọwọ́ oníṣe míràn tí ó jẹ́ dídílọ́nà látọwọ́ $1.
Ìdíẹ̀ tó ṣe jẹ́ bẹ́ẹ̀ nìyí:

:''$2''


* Ìbẹ̀rẹ̀ ìdínà: $8
* Ìparí ìdínà: $6
* Ẹni tí a fẹ́ dínà: $7

Ẹ le ránṣẹ́ sí $1 tàbí ìkan láàrin [[{{MediaWiki:Grouppage-sysop}}|àwọn olùmójútó]] mìíràn láti fọ̀rọ̀wérọ̀ lórí ìdínà ọ̀ún.

Àkíyèsí pé ẹ le mọ́ le lo ìní ''Ẹ fi e-mail ránṣẹ́ sí oníṣe yìí'' tí àdírẹ́sì e-mail tó tọ́ jẹ́ fífilórúkọsílẹ̀ sínú [[Special:Preferences|àwọn ìfẹ́ràn oníṣe]] yín tí wọn kò sì ti dínà yín láti lò ó.

Àdírẹ́sì IP yín lọ́wọ́lọ́wọ́ ni $3, bẹ́ ẹ̀ sì ni ID fún ìdínà yín ni #$5.
Ẹ jọ̀wọ́ ẹ fi gbogbo ẹ̀kúnrẹ́rẹ́ òkè yìí pọ̀mọ́ ìbérè tí ẹ bá ṣe.",
'blockednoreason' => 'kó sí àlàyé kankan',
'whitelistedittext' => "Ẹ gbọ́dọ̀ $1 láti ṣ'àtúnṣe àwọn ojúewé.",
'confirmedittext' => "Ẹ gbọ́dọ̀ ṣe ìmúdájú àdírẹ́ẹ̀sì e-mail yín kí ẹ tó le è mọ ṣ'àtúnṣe àwọn ojúewé.
Ẹjọ̀wọ́ ẹ ṣètò bẹ́ sìni ki ẹ fọwọ́sí àdírẹ́ẹ̀sì e-mail nínú [[Special:Preferences|àwọn ìfẹ́ràn ọníṣe]] yín.",
'nosuchsectiontitle' => 'Kò le rí abala báun',
'nosuchsectiontext' => 'Ẹ ti gbìyànjú láti ṣàtúnṣe abala tí kòsí.
Ó ti le jẹ́ yíyípò tàbí píparẹ́ nígbà tí ẹ ún bojúwo ojúewé náà.',
'loginreqtitle' => "Ẹ gbọ́dọ̀ kọ́kọ́ w'ọlé ná",
'loginreqlink' => 'wọlé',
'loginreqpagetext' => 'Ẹ gbọ́dọ̀ $1 láti wo àwọn ojúewé míràn.',
'accmailtitle' => 'Ti fi ọ̀rọ̀ìpamọ́ ránṣẹ́.',
'accmailtext' => "A ti fi ọ̀rọ̀ìpamọ́ àrìnàkò tí a pèsè fún [[User talk:$1|$1]] ránṣẹ́ sí $2.

Ẹ le ṣe àyípadà ọ̀rọ̀ìpamọ́ fún àpamọ́ tuntun yìí ní ''[[Special:ChangePassword|change password]]'' lẹ́yìn tí ẹ bá ti wọlé.",
'newarticle' => '(Tuntun)',
'newarticletext' => "Ẹ ti tẹ̀lé ìjápọ̀ mọ́ ojúewé tí kò sí.
Láti dá ojúewé yí ẹ bẹ̀rẹ̀ síní tẹ́kọ sí inú àpótí ìsàlẹ̀ yí (ẹ wo [[{{MediaWiki:Helppage}}|ojúewé ìrànlọ́wọ́ ]] fun ẹ̀kúnrẹ́rẹ́ ).
T'óbá sepé àsìse ló gbé yin dé bi, ẹ kọn bọ́tìnì ìpadàsẹ́yìn.",
'anontalkpagetext' => "''Ojúewé ìfọ̀rọ̀wérọ̀ yìí wà fún oníṣe aláílórúkọ tí kò tíì dá àkópamọ́, tàbí tí kò lò ó rárá.
Bí bẹ́ẹ̀ laṣe únlo àdírẹ́ẹ̀sì IP oníyenọ́mbà láti dáamọ̀.
Irú àdírẹ́ẹ̀sì IP báun ṣeéṣe kó jẹ́ pínpínlọ̀ pẹ̀lú àwọn oníṣe míràn.
Tó bá jẹ́ pé oníṣe aláìlórúkọ ni yín, tí ẹ sì ri pé wọ́n ùnsọ̀rọ̀ tí kò kàn yín sí i yín, ẹ jọ̀wọ́ [[Special:UserLogin/signup|ẹ dá àkópamọ́ kan]] tàbí [[Special:UserLogin|kí ẹ wọlẹ́]] kó mọ́ baà sí ìdàrúpọ̀ lọ́jọ́ọwájú mọ́ àwọn oníṣe aláìlórúkọ mírán.''",
'noarticletext' => 'Lọ́wọ́lọ́wọ́ kò sí ìkọ̀ nínú ojúewé yìí.
Ẹ le [[Special:Search/{{PAGENAME}}|wá àkọlé ojúewé yìí]] nínú àwọn ojúewé mìíràn,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} wá àkọọ́lẹ̀ rẹ̀], tàbí [{{fullurl:{{FULLPAGENAME}}|action=edit}} kí ẹ ṣ\'àtúnṣe ojúewé òún]</span>.',
'noarticletext-nopermission' => 'Lọ́wọ́lọ́wọ́ kò sí ìkọ̀ nínú ojúewé yìí.
Ẹ le [[Special:Search/{{PAGENAME}}|wá àkọlé ojúewé yìí]] nínú àwọn ojúewé mìíràn, tàbí
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} wá àwọn àkọọ́lẹ̀ tó bámu]</span>, sùgbọ́n ẹ kò ní àṣẹ láti ṣ\'ẹ̀dá ojúewé yìí.',
'missing-revision' => 'Àtúnyẹ̀wò #$1 ojúewé tó únjẹ́ "{{PAGENAME}}" kò sí.

Èyí únsábà ṣẹlẹ̀ nítorípé ẹ tẹ̀lé ìtàn àjápọ̀ tí kò ṣiṣẹ́ mọ́ wá sí orí ojúewé tó ti jẹ́ píparẹ́.
Ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìparẹ́].',
'userpage-userdoesnotexist' => 'Àkópamọ́ oníṣe "<nowiki>$1</nowiki>" kò tíì jẹ́ fíforúkọsílẹ̀.
Ẹjọ̀wọ́ ẹ ṣ\'àgbéyẹ̀wò bóyá ẹ fẹ́ dá/ṣàtúnṣe ojúewé yìí.',
'userpage-userdoesnotexist-view' => 'Àpamọ́ oníṣe "$1" kò jẹ́ fífilórúkọsílẹ̀.',
'blocked-notice-logextract' => 'Lọ́wọ́lọ́wọ́ oníṣe yìí jẹ́ dídílọ́nà.
Àkọsílẹ̀ ìdínà àìpẹ́ nìyí nísàlẹ̀ fún ìtọ́kasí:',
'clearyourcache' => "'''Àkíyèsí:''' Lẹ́yìn ìmúpamọ́, ó ṣe é ṣe kó jẹ́ pé ẹ gbọ́dọ̀ fo cache agbétàkùn yín láti rí àwọn ìyípadà.
* '''Firefox / Safari:''' Ẹ di ''Shift'' mú bí ẹ ṣe ún tẹ ''Reload'', tàbí kí ẹ tẹ ''Ctrl-F5'' tàbí ''Ctrl-R'' (''⌘-R'' lórí Mac)
* '''Google Chrome:''' Ẹ tẹ ''Ctrl-Shift-R'' (''⌘-Shift-R'' lórí Mac)
* '''Internet Explorer:''' Ẹ di ''Ctrl'' mú bí ẹ ṣe ún tẹ ''Refresh,'' tàbí kí ẹ tẹ ''Ctrl-F5''
* '''Opera:''' Ẹ pa cache rẹ́ nínú ''Tools → Preferences''",
'usercssyoucanpreview' => "'''Ìrànlọ́wọ́:''' Ẹ lo bọ́tìnì \"{{int:showpreview}}\" fún dídánwò CSS tuntun yín kí ẹ tó múupamọ́.",
'userjsyoucanpreview' => "'''Ìrànlọ́wọ́:''' Ẹ lo bọ́tìnì \"{{int:showpreview}}\" fún dídánwò JavaScript tuntun yín kí ẹ tó múupamọ́.",
'usercsspreview' => "''''Ẹ mọ́ gbàgbé pé àkọ́yẹ̀wò CSS oníṣe yín nìyí.'''
'''Kò tíì jẹ́ mímúpamọ́!'''",
'userjspreview' => "''''Ẹ mọ́ gbàgbé pé àdánwò/àkọ́yẹ̀wò JavaScript oníṣe yín nìyí.'''
'''Kò tíì jẹ́ mímúpamọ́!'''",
'sitecsspreview' => "'''Ẹ rántí pé àkọ́yẹ̀wò CSS nìyí.'''
'''Kò tíì jẹ́ mímúpamọ!'''",
'sitejspreview' => "'''Ẹ rántí pé àkọ́yẹ̀wò àmìọ̀rọ̀ JavaScript nìyí.'''
'''Kò tíì jẹ́ mímúpamọ!'''",
'userinvalidcssjstitle' => "'''Ìkìlọ̀:''' Kò sí awọ-ìbojú \"\$1\".
Ẹ rántí pé àwọn ojúewé àkànṣe .css àti .js únlo àkọlé onílẹ́tà kékeré, f.a. {{ns:user}}:Foo/vector.css yàtò sí {{ns:user}}:Foo/Vector.css.",
'updated' => '(Sísọdọ̀tun)',
'note' => "'''Àkíyèsí:'''",
'previewnote' => "'''Ẹ rántí pé àyẹ̀wò lásán nì yí.'''
Àwọn àtúnṣe yín kò tíì jẹ́ kìkópamọ́!",
'continue-editing' => 'Ẹ lọ sí ibi ìṣàtúnṣe',
'previewconflict' => 'Àkọ́wò yìí jẹ́ bí ìkọ̀rọ̀ inú àlà ìtúnṣe ìkọ̀rọ̀ òkè yíò ṣe hàn tí ẹ bá yàn láti ṣàmúpamọ́.',
'session_fail_preview' => "'''Àforíjìn! A kò le gbésẹ̀ àtúnṣe yín nítorí ìpòfo data ìsinsìyí.
Ẹ jọ̀wọ́ ẹ gbìyànjú lẹ́ẹ̀kan si.
Tí kò bá sì tún ṣiṣẹ́, ẹ gbìyànjú láti [[Special:UserLogout|bọ̀sòde]] kí ẹ sì padá wọlé.'''",
'session_fail_preview_html' => "'''Àforíjìn! A kò le gbéṣẹ̀ àtúnṣe yín nítorí ìpòfo dátà ìgbànáà.'''

''Nítorípé {{SITENAME}} gba HTML àìgbéṣe láàyè, àkọ́kọ́yẹ̀wò jẹ́ bíbòmọ́lẹ̀ láti dínà àwọn ìkọlù JavaScript.''

'''Tó bá ṣe pé ìgbìyànj ìṣàtúnṣe gidi nìyí, ẹ jọ̀wọ́ ẹ gbìyànjú lẹ́ẹ̀kansíi.'''
Tí kò bá ṣiṣẹ́ síbẹ̀, ẹ gbìyànjú láti [[Special:UserLogout|jáde]] kí ẹ sì padà wọlé.",
'token_suffix_mismatch' => "'''Àtúnṣe yín ti jẹ́ kíkọ̀sílẹ̀ nítorípé ẹ̀rọ yín ṣèdàrú àwọn àmììkọ̀rọ̀ ojúìgúnlẹ̀ mọ́ra wọn nínú ìtọ́wò àtúnṣe.'''
Àtúnṣe náà ti jẹ́ kíkọ̀sílẹ̀ láti baà dènà ìdíbàjẹ́ ìkọọ̀rọ̀ inú ojúewé.
Èyí únsábà ṣẹlẹ̀ nígbàtí ẹ bá únlo ẹ̀rọ-ìwọ̀fà ẹlòmíràn aláìlórúkọ torí Internet tí kò dára.",
'edit_form_incomplete' => "'''Àwọn apá kan fọ́ọ̀mù àtúnṣe kò dé ọ̀dọ̀ ẹ̀rọ-ìwọ̀fà; ẹ wo àtúnṣe yín pẹ́ o wà bí ẹ ṣe ṣé kí ẹ tó tún gbìyànjú lẹ́ẹ̀kan síi.'''",
'editing' => 'Àtúnṣe sí $1',
'creating' => 'Ìdá $1',
'editingsection' => 'Àtúnṣe sí $1 (abala)',
'editingcomment' => 'Àtúnṣe sí $1 (abala tuntun)',
'editconflict' => 'Ìtakora àtúnṣe: $1',
'explainconflict' => "Ẹlòmíràn ti ṣàyípadà ojúewé yìí látìgbà tí ẹ ti bèrẹ̀ àtúnṣẹ rẹ̀.
Àlà ìkọ̀rọ̀ òkè lóní ìkọ̀rọ̀ ojúewé bó ṣe wà lọ́wọ́lọ́wọ́ báyìí.
Àwọn àtúnṣe yín ni wọ́n hàn yìí nínú àlà ìkọ̀rọ̀ ìsàlẹ̀.
Ẹ gbọdọ̀ kó àwọn àtúnṣe yín papọ̀ sínú ìkọ̀rọ̀ tó wà lọ́wọ́lọ́wọ́ báyìí.
Ìkọ̀rọ̀ inú àlà ìkọ̀rọ̀ òkè '''nìkan''' ni yíò jẹ́ mímúpamọ́ tí ẹ bá tẹ \"{{int:savearticle}}\".",
'yourtext' => 'Ìkọ̀ yín',
'storedversion' => 'Àtúnyẹ̀wò tí à múpamọ́',
'nonunicodebrowser' => "'''Ìkìlọ̀: Awòtakùn yín kò ṣe é lò fún unicode.'''
Báyìí ná ẹ le ṣàtúnṣe àwọn ojúewé láì ṣéwu: áwọn àmììkọ̀rọ̀ àìjẹ́-ASCII yíò hàn nínú àpótí àtúnṣe bíi àmíọ̀rọ̀ onímẹ́rìndínlọ́gún.",
'editingold' => "'''Ìkìlọ̀: Ẹ únṣàtúnṣe ojúewé yìí sí àtúnyẹ̀wọ̀ tótipẹ́ kọjá sẹ́yìn.'''
Tí ẹ bá múupamọ́, àwọn àtúnṣe yìówú tó wáyé látìgbà àtúnyẹ̀wò yìí yíò sọnù.",
'yourdiff' => 'Àwọn ìyàtọ̀',
'copyrightwarning' => "Ẹ jọ̀wọ́ ẹ kíyèsi wípé gbogbo àwọn àfikún sí {{SITENAME}} jẹ́ bẹ̀ lábẹ́  $2 (Ẹ wo $1 fún ẹkunrẹrẹ).
Tí ẹ kò bá fẹ́ kí ìkọọ́lẹ̀ yín ó jẹ́ títúnṣe tàbí kì ó jẹ́ pípìn kiri lọ́ná tí kò wù yín, ẹ mọ́ mù wá síbí.<br />
Bákannà ẹ tún ṣèlérí fún wa wípé ẹ̀yin lẹkọ́ fúnra arayín, tàbí ẹ wòókọ láti agbègbè ìgboro tàbí irú ìtìlẹ́yín ọ̀fẹ́ bíi bẹ́ẹ̀.
'''Ẹ MỌ́ MÚ IṢẸ́ TÓ NÍ Ẹ̀TỌ́ÀWÒKỌ SÍLẸ̀ LÁÌ GBÀṢẸ!'''",
'copyrightwarning2' => "Ẹ jọ̀wọ́ ẹ kíyèsi wípé gbogbo àwọn àfikún sí {{SITENAME}} le jẹ́ títúnṣe, yíyípadà, tàbí jẹ́ mímúkúrò látọwọ́ àwọn olùfikún míràn.
Tí ẹ kò bá fẹ́ kí ìkọọ́lẹ̀ yín ó jẹ́ títúnṣe bí kò ṣe wùyín, ẹ mọ́ mù wá síbí.<br />
Bákannà ẹ tún ṣèlérí fún wa wípé ẹ̀yin lẹkọ́ fúnra arayín, tàbí ẹ wòókọ láti àbùgbé ìgboro tàbí irú ìtìlẹ́yín ọ̀fẹ́ bíi bẹ́ẹ̀ (ẹ wo $1 fún ẹkunrẹrẹ).
'''Ẹ mọ́ mú iṣẹ́ tó ní ẹ̀tọ́àwòkọ sílẹ̀ láì gbàṣẹ!'''",
'longpageerror' => "'''Àsìṣe: Ìkọ̀wé tí ẹ fisílẹ̀ gùn tó {{PLURAL:$1|kilobyte kan|$1 kilobytes}}, èyí gùn ju {{PLURAL:$2|kilobyte kan|$2 kilobytes}} lọ tó jẹ́ àjà.'''
Kò ṣe é múpamọ́.",
'readonlywarning' => "'''Ìkìlọ̀: Ibùdó dátà ti jẹ́ títìpàdé fún ìtọ́jú, nípa bẹ́ẹ̀ ẹ kò ní le fi àwọn àtúnṣe yín pamọ́ lásìkò yìí.'''
Tí ẹ bá fẹ́ ẹ le fi ìkọ̀rọ̀ náà pamọ́ sínú fáìlì ìkọ̀rọ̀ (pẹ̀lú ìgékúrò-àti-ìlẹ̀mọ́) fún ìgbà míràn.

Olùmójútó tó tìípadé ṣe àlàyé yìí: $1",
'protectedpagewarning' => "'''Ìkìlọ̀: Ojúewé yìí ti jẹ́ títìpa, nítoríẹ̀ àwọn alámòjútó nìkan ni wọ́n ní ẹ̀tọ́ láti ṣàtúnṣe rẹ̀.'''
Àkọọ́lẹ̀ àìpẹ́ nìyí nísàlẹ̀ fún ìtọ́kasí:",
'semiprotectedpagewarning' => "'''Àkíyèsí:''' Ojúewé yìí ti jẹ́ títìpa nítoríẹ̀ àwọn oníṣe tí wọ́n ti forúkọsílẹ̀ nìkan ni wọ́n le ṣàtúnṣe rẹ̀.
Àkọọ́lẹ̀ àìpẹ́ nìyí nísàlẹ̀ fún ìtọ́kasí:",
'cascadeprotectedwarning' => "'''Ìkìlọ̀:''' Ojúewé yìí ti jẹ́ dídáàbòbò bíi bẹ́ẹ̀ àwọn oníṣe tí wọ́n ní ẹ̀tọ́ amójútó nìkan ni wọ́n le ṣàtúnṣe rẹ̀, nítorípé ó wà nínú   
{{PLURAL:$1|ojùewé|àwọn ojúewé}} aláàbò-ajámọ́ra yìí:",
'titleprotectedwarning' => "'''Ìkìlọ̀: Ojúewé yìí ti jẹ́ dídáàbòbò bíi bẹ́ẹ̀ [[Special:ListGroupRights|àwọn ẹ̀tọ́ pàtó]] di dandan láti ṣèdá rẹ̀.'''
Àkọọ́lẹ̀ tógbẹ̀yìn nìyí nísàlẹ̀ fún ìtọ́kasí:",
'templatesused' => '{{PLURAL:$1|Àdàkọ|Àwọn àdàkọ}} tí a lò lórí ojúewé yìí:',
'templatesusedpreview' => '{{PLURAL:$1|Àdàkọ|Àwọn àdàkọ}} tí a lò nìnú àkọ́yẹ́wò yìí:',
'templatesusedsection' => '{{PLURAL:$1|Àdàkọ|Àwọn àdàkọ}} tí a lò nínú abala yìí:',
'template-protected' => '(aláàbò)',
'template-semiprotected' => '(aláàbò díẹ̀)',
'hiddencategories' => 'Ojúewé yìí jẹ́ ìkan nínú {{PLURAL:$1|ẹ̀ka bíbòmọ́lẹ̀ 1|àwọn ẹ̀ka bíbòmọ́lẹ̀ $1}}:',
'nocreatetext' => "{{SITENAME}} ti pààlà ààyè láti ṣ'èdá ojúewé tuntun.
Ẹ le padà sẹ́yìn kí ẹ ṣ'àtúnṣe ojúewé tó wà, tàbí [[Special:UserLogin|kí ẹ wọlé tàbí kí ẹ ṣ'èdá àpamọ́]].",
'nocreate-loggedin' => "Ẹ kò ní ìyọ̀nda láti ṣe'dá ojúewé tuntun.",
'sectioneditnotsupported-title' => 'Ko sí títìlẹ́yìn àtúnṣe abala',
'sectioneditnotsupported-text' => 'Ko sí títìlẹ́yìn àtúnṣe abala lórí ojúewé yìí.',
'permissionserrors' => 'Àṣìṣe ìyọ̀nda',
'permissionserrorstext' => 'Ẹ kò ní ìyọ̀nda láti ṣè yí nítorí {{PLURAL:$1|ìdí ìsàlẹ̀ yìí|àwọn ìdí ìsàlẹ̀ wọ̀nyí}}:',
'permissionserrorstext-withaction' => 'Ẹ kò ní ìyọ̀nda láti $2, fún {{PLURAL:$1|ìdí yìí|àwọn ìdí wọ̀nyí}}:',
'recreate-moveddeleted-warn' => "'''Ìkìlọ̀: Ẹ̀ ún ṣ'èdá ojúewé tí a ti parẹ́ tẹ́lẹ̀.'''

Ẹ gbọ́dọ̀ gberò bóyá ó bójúmu láti tẹ̀síwájú pẹ̀lú àtúnṣe ojúewé yìí.
Àkọsílẹ̀ ìparẹ́ àti ìyípò fún ojúewé yìí nìyí fún ìrọ̀rùn:",
'moveddeleted-notice' => 'Ojúewé yìí tijẹ́ píparẹ́.
Àkọọ́lẹ̀ ìparẹ́ àti ìyípò fún ojúewé náà wà nísàlẹ̀ fún ìtákasí.',
'log-fulllog' => 'Ẹ wo gbogbo àkọọ́lẹ̀',
'edit-hook-aborted' => 'Hook ti ṣe ìdádúró àtúnṣe.
Kò ṣe àlàyé kankan.',
'edit-gone-missing' => 'A kò le ṣe títúnṣe ojúewé.
Ó dà bíi pé a ti paárẹ́.',
'edit-conflict' => 'Ìtakora áwọn àtúnṣe',
'edit-no-change' => 'A ṣe àìkàsí àtúnṣe yín, nítorípé ìkọ̀wé kò ní àtúnṣe kankan.',
'edit-already-exists' => "A kò le è ṣè'dá ojúewé tuntun.
Ó pilẹ̀ ti wà.",
'defaultmessagetext' => 'Ìkọ ìránṣẹ́ àtìbẹ̀rẹ̀',
'content-failed-to-parse' => 'Ìkùnà láti ṣàtúwò àkóónú $2 fún àfijúwe $1: $3',
'invalid-content-data' => 'Àkóónú dátà tí kò yẹ',
'content-not-allowed-here' => 'Àkóónú "$1" kò ní ìyọ̀nda lórí ojúewé [[$2]]',

# Content models
'content-model-wikitext' => 'ìkọ̀rọ̀ wiki',
'content-model-text' => 'ìkọ̀rọ̀ kedere',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''Ìkìlọ̀:''' Ojúewé yìí ní àwọn ìpè olùtúwò ìmúṣe adíyelélórí tó pọ̀ ju bóṣeyẹlọ.

Ó yẹ kó ní {{PLURAL:$2|ìpè|ìpè}} tókéré ju $2 lọ, sùgbọ́n lọ́wọ́ báàyí ó ní {{PLURAL:$1|ìpè $1|ìpè $1}}.",
'expensive-parserfunction-category' => 'Àwọn ojúewé tí wọ́n ní àwọn ìpè olùtúwò ìmúṣe adíyelélórí tópọ́ju bóṣeyẹlọ',
'post-expand-template-inclusion-warning' => "'''Ìkìlọ̀:''' Ìtóbi àdàkọ tó jẹ́ mímúpọ̀ mọ ti pòjù.
Àwọn apá àdàkọ kan kò ní jẹ́ mímúpọ̀.",
'post-expand-template-inclusion-category' => 'Àwọn ojúewé tí ìtóbi àdàkọ mímúpọ̀ wọn pọ̀jù.',
'post-expand-template-argument-warning' => "'''Ìkìlọ̀:''' Ojúewé yìí ní ó kéréjùlọ àjiyàn àdàkọ kan tó ní ìtóbi ìfẹ̀ tótóbi ju bóṣeyẹ lọ.
Àwọn àjiyàn yìí ti jẹ́ fífò.",
'post-expand-template-argument-category' => 'Àwọn ojúewé tí wọ́n ní ìjiyàn àdàkọ tí kò sí',
'parser-template-loop-warning' => 'Ìlọ́po àdàkọ ti ṣẹlẹ̀: [[$1]]',
'parser-template-recursion-depth-warning' => 'Iye ìgbà àtúnpè àdákọ ti pọ̀ju bóṣeyẹ lọ ($1)',
'language-converter-depth-warning' => 'Iye ìgbà ìyédèpadà ti pọ̀ju bóṣeyẹ lọ ($1)',
'node-count-exceeded-category' => 'Àwọn ojúwé tí iye ojúìsopọ̀ wọn ju bóṣeyẹ lọ',
'node-count-exceeded-warning' => 'Ojúewé ní iye ojúìsopọ̀ tó ju bóṣeyẹ lọ',
'expansion-depth-exceeded-category' => 'Àwọn ojúewé tí ìjìn ìfẹ̀lọ wọn ju bóṣeyẹ lọ',
'expansion-depth-exceeded-warning' => 'Ojúewé ní ìjìn ìfẹ̀lọ tó ju bóṣeyẹ lọ',
'parser-unstrip-loop-warning' => 'Ìyípo unstrip ti jẹ́ fínfín',
'parser-unstrip-recursion-limit' => 'Ó ti kọjá àlà ìlọ́po unstrip ($1)',
'converter-manual-rule-error' => 'Àṣìṣe ti jẹ́ fínfín nínú ìlànà ìyípadà èdè àfọwọ́dá',

# "Undo" feature
'undo-success' => 'Àtúnṣe náà ṣe é múkúrò.
Ẹ jọ̀wọ́ ẹ wo ìfiwéra ìsàlẹ̀ láti rídájú pé ohun tí ẹ fẹ́ nì yẹn, nígbà náà ẹ mú àwọn àtúnṣe náà pamọ́ láti parí ìmúkúrò àtúnṣe.',
'undo-failure' => 'Àtúnṣe náà kò ṣe é múkúrò nítorí títakora àwọn àtúnṣe inú àrin.',
'undo-norev' => 'Àtúnṣe náà kò ṣe é múkúrò nítorí pé kò sí tàbí pé ó ti jẹ́ píparẹ́.',
'undo-summary' => 'Ìmúkúrò àtúnyẹ̀wò $1 ti [[Special:Contributions/$2|$2]] ([[User talk:$2|ọ̀rọ̀]])',

# Account creation failure
'cantcreateaccounttitle' => 'Ìforúkọsílẹ̀ kò se é se',
'cantcreateaccount-text' => "[[User:$3|$3]] ti dènà dídá àkópamọ́ láti orí àdírẹ́ẹ̀sì IP yìí ('''$1''').

Ìdí tí $3 ṣe ṣèyí ni ''$2''",

# History pages
'viewpagelogs' => 'Ẹ wo àkọsílẹ̀ ìṣẹ̀lẹ̀ fún ojúewé yìí',
'nohistory' => 'Kò sí ìtàn àtùnṣe fún ojúewé yìí.',
'currentrev' => 'Àtúnyẹ̀wò ìsinsìnyí',
'currentrev-asof' => 'Àtúnyẹ̀wò lọ́wọ́lọ́wọ́ ní $1',
'revisionasof' => 'Àtúnyẹ̀wò ní $1',
'revision-info' => "Àtúnyẹ̀wò ní $1 l'átọwọ́ $2",
'previousrevision' => '← Àtúnyẹ̀wò tópẹ́ju',
'nextrevision' => 'Àtúnyẹ̀wò tótuntunju →',
'currentrevisionlink' => 'Àtúnyẹ̀wò ìsinsìnyí',
'cur' => 'lọ́wọ́',
'next' => 'tókàn',
'last' => 'tẹ́lẹ̀',
'page_first' => 'àkọ́kọ́',
'page_last' => 'tógbẹ̀yìn',
'histlegend' => "Àṣàyàn ìyàtọ̀: ẹ fagi sínú àpótí àwọn átúnyẹ̀wò tí ẹ fẹ́ ṣàfiwè, lẹ́yìn náà ẹ tẹ enter tàbí bọ́tìnì ìsàlẹ̀.<br />
Àlàyé: '''({{int:cur}})''' = ìyàtọ̀ sí àtúnyẹ̀wò tìsinyìí, '''({{int:last}})''' = ìyàtọ̀ sí àtúnyẹ̀wò tókọjá, '''{{int:minoreditletter}}''' = àtúnṣe kékeré.",
'history-fieldset-title' => 'Ìṣíwò ìwé ìtàn àtúnṣe',
'history-show-deleted' => 'Ajẹ́píparẹ́ níkan',
'histfirst' => 'Pípẹ́jùlọ',
'histlast' => 'Tuntunjùlọ',
'historysize' => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty' => '(òfo)',

# Revision feed
'history-feed-title' => 'Ìtàn àtúnyẹ̀wò',
'history-feed-description' => 'Ìtàn àtúnyẹ̀wò fún ojúewé yìí ní orí wiki',
'history-feed-item-nocomment' => '$1 ní $2',
'history-feed-empty' => 'Ojúewé tí ẹ tọrọ fún kò sí.
Ó ṣe é ṣe kó ti jẹ́ píparẹ́ kúrò nínú wiki náà, tàbí kó ti jẹ́ títúnṣọlórùkọ.
Ẹ gbìyànjú láti [[Special:Search|wá inú wiki náà]] fún àwọn ojúewé tóbáramu.',

# Revision deletion
'rev-deleted-comment' => '(ìyọkúrò àkótán àtúnṣe)',
'rev-deleted-user' => '(orúkọ oníṣe ti jẹ́ yíyọkúrò)',
'rev-deleted-event' => '(àkọọ́lẹ̀ ti jẹ́ yíyọkúrò)',
'rev-deleted-user-contribs' => '[orúkọ oníṣe tàbí àdírẹ́sì IP jẹ́ yíyọkúrò - àtúnṣe jẹ́ bíbòmọ́lẹ̀ kúrò nínú àwọn àfikún]',
'rev-deleted-text-permission' => "Àtúnyẹ̀wò ojúewé yìí ti jẹ́ '''píparẹ́'''.
Ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìparẹ́].",
'rev-deleted-text-unhide' => "Àtúnyẹ̀wò ojúewé yìí ti jẹ́ '''píparẹ́'''.
Ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìparẹ́].
Ẹ sì le [$1 wo àtúnyẹ́wò yìí] tí ẹ bá fẹ́.",
'rev-suppressed-text-unhide' => "Àtúnyẹ̀wò ojúewé yìí ti jẹ́ '''fífisílẹ̀'''.
Ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìfisílẹ̀].
Ẹ ṣì le [$1 wo àtúnyẹ́wò yìí] tí ẹ bá fẹ́ tẹ̀síwájú.",
'rev-deleted-text-view' => "Àtúnyẹ̀wò ojúewé yìí ti jẹ́ '''píparẹ́'''.
Ẹ le wò ó; ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìparẹ́].",
'rev-suppressed-text-view' => "Àtúnyẹ̀wò ojúewé yìí ti jẹ́ '''fífisílẹ̀'''.
Ẹ le wò ó; ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìfisílẹ̀].",
'rev-deleted-no-diff' => "Ẹ kò le wo ìyàtọ̀ yìí nítorípé ìkan nínú àwọn àtúnyẹ̀wò ti jẹ́ '''píparẹ́'''.
Ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìparẹ́].",
'rev-suppressed-no-diff' => "Ẹ kò le wo ìyàtọ̀ yìí nítorípé ìkan nínú àwọn àtúnyẹ̀wò ti jẹ́ '''píparẹ́'''.",
'rev-deleted-unhide-diff' => "Ìkan nínú àwọn àtúnyẹ̀wò ìyàtọ̀ yìí ti jẹ́ '''píparẹ́'''.
Ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìparẹ́].
Ẹ sì le [$1 wo ìyàtò yìí] tí ẹ bá fẹ́ tẹ̀síwájú.",
'rev-suppressed-unhide-diff' => "Ìkan nínú àwọn àtúnyẹ̀wò ìyàtọ̀ yìí ti jẹ́ '''fífisílẹ̀'''.
Ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìfisílẹ̀].
Ẹ sì le [$1 wo ìyàtọ̀ yìí] tí ẹ bá fẹ́ tẹ̀síwájú.",
'rev-deleted-diff-view' => "Ìkan nínú àwọn àtúnyẹ̀wò ìyàtọ̀ yìí ti jẹ́ '''píparẹ́'''.
Ẹ sì le wo ìyàtọ̀ yìí; ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìparẹ́].",
'rev-suppressed-diff-view' => "Ìkan nínú àwọn àtúnyẹ̀wò ìyàtọ̀ yìí ti jẹ́ '''fífisílẹ̀'''.
Ẹ le wo ìyàtọ̀ yìí; ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìfisílẹ̀].",
'rev-delundel' => 'fihàn/bòmọ́lẹ̀',
'rev-showdeleted' => 'fihàn',
'revisiondelete' => 'Ṣe ìparẹ́/àìparẹ́ àwọn àtúnyẹ̀wò',
'revdelete-nooldid-title' => 'Wíwá àtúnyẹ̀wò tíkòtọ́',
'revdelete-nooldid-text' => 'Ó ṣe é ṣe pé ẹ kò tọ́ka (àwọn) àtúnyẹ̀wò àfojúsùn kankan láti ṣe ìmúṣe yìí, àtúnyẹ̀wò tí ẹ tọ́ka sí kò sí, tàbí ẹ̀ úngbìyànjú láti bọ àtúnyẹ̀wò yìí mọ́lẹ̀.',
'revdelete-nologtype-title' => 'Kò sí irú àkọọ́lẹ̀ tó jẹ́ títọ́kasí',
'revdelete-nologtype-text' => 'Ẹ kò tíì tọ́kasí irú àkọọ́lẹ̀ tí ìgbéṣe yìí yíò ṣẹlẹ̀ lórí.',
'revdelete-nologid-title' => 'Àkọọ́lẹ̀ ìṣẹ̀lẹ̀ tíkòtọ́',
'revdelete-nologid-text' => 'Ó ṣe é ṣe pé ẹ kò tọ́ka àkọọ́lẹ̀ àfojúsùn kankan láti ṣe ìmúṣe yìí, tàbí ìtìbọ̀ tí ẹ tọ́ka sí kò sí.',
'revdelete-no-file' => 'Fáìlì tójẹ́ títọ́kasí kò sí.',
'revdelete-show-file-confirm' => 'Ṣé ẹ ní ìdálójú pé ẹ fẹ́ wo àtúnyẹ̀wó píparẹ́ ti fáìlì "<nowiki>$1</nowiki>" látọjọ́ $2 ní ago $3?',
'revdelete-show-file-submit' => 'Bẹ́ẹ̀ni',
'revdelete-selected' => "'''{{PLURAL:$2|Àtúnyẹ̀wò síṣàyàn|Àwọn àtúnyẹ̀wò síṣàyàn}} fún [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Àkọọ́lẹ̀ ìṣẹ̀lẹ̀ síṣàyàn|Àwọn àkọọ́lẹ̀ ìṣẹ̀lẹ̀ síṣàyàn}}:'''",
'revdelete-text' => "'''Àwọn àtúnyẹ̀wò onípíparẹ́ àti ìṣẹ̀lẹ̀ yíò sì tún hàn nínú ojúewé ìtàn àti àkọọ́lẹ̀, sùgbọ́n àwọn apá àkóónú wọn kò ní hàn jáde sí ìgboro'''
Àwọn olùmójútó míràn lórí {{SITENAME}} yíò sí tún le wo àkóónú àbòmọ́lẹ̀ náà bẹ́ẹ̀sìni wọ́n le mú ìparẹ́ kúrò lórí ìfojúkojú yìí, àyàfi tí àwọn ìdíwọ́ míràn bá jẹ́ títòsílẹ̀.",
'revdelete-confirm' => 'Ẹ jọ̀wọ́ ẹ rídájú pé ohun tí ẹ fẹ́ ṣe nìyí, pé ohun tí yíò ṣẹlẹ̀ yé yín, bẹ́ẹ̀sìni pé ẹ̀ únṣe é lọ́nà tó bá  [[{{MediaWiki:Policy-url}}|àdéhùn]] mu.',
'revdelete-suppress-text' => "Ìrẹ̀mọ́lẹ̀ gbọ́dọ̀ jẹ́ lílò fún àwọn ìṣẹ̀lẹ̀ ìsàlẹ̀ wọ̀nyí '''nìkan''':
*Ọ̀rọ̀ tó le fa ẹjọ́ wá
*Ọ̀rọ̀ ẹnìẹlẹ́ni tí kò bójúmu
*: ''àdírẹ́ẹ̀sì ilé àti nọ́mbà tẹlifóònù, àti bẹ́ẹ̀bẹ́ẹ̀ lọ.''",
'revdelete-legend' => 'Ìtò àwọn àlà ìhàn',
'revdelete-hide-text' => 'Ìbòmọ́lẹ̀ ìkọ̀ àtúnyẹ̀wò',
'revdelete-hide-image' => 'Ìbòmọ́lẹ̀ àkóónú fáìlì',
'revdelete-hide-name' => 'Ìbòmọ́lẹ̀ ìgbéṣe àti wíwá',
'revdelete-hide-comment' => 'Ìbòmọ́lẹ̀ àríwí àtúnṣe',
'revdelete-hide-user' => 'Ìbòmọ́lẹ̀ orúkọ oníṣe/IP olóòtú',
'revdelete-hide-restricted' => 'Ìbòmọ́lẹ̀ àwọn ìpèsè ti àwọn alámùójútó àti ti àwọn yìókù',
'revdelete-radio-same' => '(láì yípadà)',
'revdelete-radio-set' => 'Bẹ́ẹ̀ni',
'revdelete-radio-unset' => 'Bẹ́ẹ̀kọ́',
'revdelete-suppress' => 'Ìbòmọ́lẹ̀ àwọn ìpèsè ti àwọn alámùójútó àti ti àwọn yìókù',
'revdelete-unsuppress' => 'Ìyọkúrò àlà sí àwọn àtúnyẹ̀wò àdápadà',
'revdelete-log' => 'Ìdíẹ̀:',
'revdelete-submit' => 'Ṣe é sí {{PLURAL:$1|àtúnyẹ̀wò|àwọn àtúnyẹ̀wò}} ṣíṣàyàn',
'revdelete-success' => "'''Ìsọdọ̀tun ìhàn àtúnyẹ̀wò yọrísírere.'''",
'revdelete-failure' => "'''Ìhàn àtúnyẹ̀wò kò ṣe é sọdọ̀tun:'''
$1",
'logdelete-success' => "'''Ìtò ìhàn àkọọ́lẹ̀ yọríṣírere.'''",
'logdelete-failure' => "'''Ìtò ìhàn àkọọ́lẹ̀ kò ṣe é ṣe:'''
$1",
'revdel-restore' => 'ìyípadà ìríran',
'revdel-restore-deleted' => 'àwọn àtúnyẹ̀wò píparẹ́',
'revdel-restore-visible' => 'àwọn àtúnyẹ̀wò aṣeéfojúrí',
'pagehist' => 'Ìtàn ojúewé',
'deletedhist' => 'Ìtàn ìparẹ́',
'revdelete-hide-current' => 'Àsìṣe ìbòmọ́lẹ̀ ohun ọjọ́ọdún $2, $1: Àtúnyẹ̀wò ìgbàyí nìyí.
Kò ṣe é bòmọ́lẹ̀.',
'revdelete-show-no-access' => 'Àsìṣe ìfihàn ohun ọjọ́ọdún $2, $1: Ohun yìí ti jẹ́ síṣàmí sí bíi "ìpàlàsí".
Ẹ kò ní àyè si.',
'revdelete-modify-no-access' => 'Àsìṣe ìṣàtúnṣe ohun ọjọ́ọdún $2, $1: Ohun yìí ti jẹ́ síṣàmí sí bíi "ìpàlàsí".
Ẹ kò ní àyè si.',
'revdelete-modify-missing' => 'Àsìṣe ìṣàtúnṣe ohun ID $1: Kò sí nínú ìbùdó dátà!',
'revdelete-no-change' => "'''Ìkìlọ̀:''' Ohun ọjọ́ọdún $2, $1 pilẹ̀ àwọn ìtò ìhàn tí ẹ tọrọ.",
'revdelete-concurrent-change' => 'Àsìṣe ìṣàtúnṣe ohun ọjọ́ọdún $2, $1: Ó dà bíi pé ẹ̀lòmíràn ti yí ibi-ipò rẹ̀ padà lásìkò kannáà tí ẹ̀yin ṣàtúnṣe rẹ̀.
Ẹ jọ̀wọ́ ẹ yẹ àwọn àkọọ́lẹ̀ wò.',
'revdelete-only-restricted' => 'Àsìṣe ìbòmọ́lẹ̀ ohun ọjọ́ọdún $2, $1: Ẹ kò le fi àwọn ohun sílẹ̀ láti wò lọ́wọ́ àwọn olùmójútó láì ṣe ìsàyàn ìkan nínú àwọn àṣàyàn ìhàn míràn.',
'revdelete-reason-dropdown' => '*Àwọn ìdí tọ́ únsábà fa ìparẹ́ 
** Àìtẹ̀lé ẹ̀tọ́àwòkọ
** Àwísọ tí kò tọ́ tàbí àròyé àdáni
** Orúkọ oníṣe tí kò tọ́
** Àròyé tó le fa ẹjọ́ wá',
'revdelete-otherreason' => 'Ìdíẹ̀ míràn/àfikún',
'revdelete-reasonotherlist' => 'Ìdí míràn',
'revdelete-edit-reasonlist' => 'Àtúnṣe àwọn ìdí ìparẹ́',
'revdelete-offender' => 'Olùdákọ àtúnyẹ̀wò:',

# Suppression log
'suppressionlog' => 'Àkọọ́lẹ̀ ìfisílẹ̀',
'suppressionlogtext' => 'Nísàlẹ̀ ni àtòjọ àwọn ìparẹ́ àti ìdínà tó ní àwọn àkóónú àbòmọ́lẹ̀ sí àwọn olùmójútó.
Ẹ wo [[Special:BlockList|àtòjọ ìdínà]] fún àtòjọ àwọn ìdénà àti ìdínà ìgbàyí.',

# History merging
'mergehistory' => 'Ìdàpọ̀ àwọn ìtàn ojúewé',
'mergehistory-header' => 'Ojúewé yìí gbàyín lààyè láti ṣèdàpọ̀ àwọn àtúnyẹ̀wò ìtàn ojúewé orísun kan sínú ojúewé tuntun.
Ẹ rí i dájú pé àtúnṣe yìí yíò ṣàgbéró ìtàn ojúewé.',
'mergehistory-box' => 'Ìdàpọ̀ àwọn àtúnyẹ̀wò ti àwọn ojúewé méjì:',
'mergehistory-from' => 'Ojúewé orísun:',
'mergehistory-into' => 'Ojúewé ìdópin:',
'mergehistory-list' => 'Ìtàn àtúnṣe tóṣeédàpọ̀',
'mergehistory-merge' => 'Àwọn àtúnyẹ̀wò ìsàlẹ̀ fún [[:$1]] ṣe é dàpọ̀ sínú [[:$2]].
Ẹ lo àyè bọ́tìnì rédìò lati ṣèdàpọ̀ àwọn àtúnyẹ̀wò tó jẹ́ dídá lásìkò àtí kótó di àsìkò tí ẹ tọ́kasí níkan.
Ẹ níyèsi pé lílo àwọn àjápọ̀ ìtọ́ka yíò ṣe ìtúntò àyè yìí.',
'mergehistory-go' => 'Ìfihàn àwọn àtúnṣe tóṣeédàpọ̀',
'mergehistory-submit' => 'Ìdàpọ̀ àwọn àtúnyẹ̀wò',
'mergehistory-empty' => 'Àwọn àtúnyẹ̀wó kankan kò ṣeédàpọ̀.',
'mergehistory-success' => '{{PLURAL:$3|Àtúnyẹ̀wò|Àwọn àtúnyẹ̀wò}} $3 fún [[:$1]] jẹ́ dídàpọ̀ mọ́ [[:$2]] láyọrísírere.',
'mergehistory-fail' => 'Kò le ṣe ìdàpọ̀ ìtàn, ẹ jọ̀wọ́ ẹ ṣàyẹ̀wò ojúewé náà àti àwọn pàrámità àkókò.',
'mergehistory-no-source' => 'Ojúewé orísun $1 kò sí.',
'mergehistory-no-destination' => 'Ojúewé ìdópin $1 kò sí.',
'mergehistory-invalid-source' => 'Ojúewé orísun gbọ́dọ̀ ní àkọlé tótọ́.',
'mergehistory-invalid-destination' => 'Ojúewé ìdópin gbọ́dọ̀ ní àkọlé tótọ́.',
'mergehistory-autocomment' => '[[:$1]] ti jẹ́ dídàpọ̀ sínú [[:$2]]',
'mergehistory-comment' => '[[:$1]] ti jẹ́ dídàpọ̀ sínú [[:$2]]: $3',
'mergehistory-same-destination' => 'Ojúewé orísun àti ojúewé ìdópin kò gbọdọ̀ jẹ́ ìkannáà',
'mergehistory-reason' => 'Ìdíẹ̀:',

# Merge log
'mergelog' => 'Àkọọ́lẹ̀ ìdàpọ̀',
'pagemerge-logentry' => '[[$1]] ti jẹ́ dídàpọ̀ sínúu [[$2]] (àwọn àtúnyẹ̀wò títí dé $3)',
'revertmerge' => 'Ìdápadà ìdàpọ̀',
'mergelogpagetext' => 'Nísàlẹ̀ ni àtòjọ àwọn ìdàpọ̀ àìpẹ́ ìtàn ojúewé kan sínú òmíràn.',

# Diffs
'history-title' => 'Ìtàn àtúnyẹ̀wò fún "$1"',
'difference-title' => 'Ìyàtọ̀ láàrin àwọn àtúnyẹ̀wò "$1"',
'difference-title-multipage' => 'Ìyàtọ̀ láàrin àwọn ojúewé "$1" àti "$2"',
'difference-multipage' => '(Ìyàtọ̀ láàrin àwọn ojúewé)',
'lineno' => 'Ìlà $1:',
'compareselectedversions' => 'Ìfiwéra àwọn àtúnṣe ìṣàyàn',
'showhideselectedversions' => 'Ìfihàn/ìbòmọ́lẹ̀ àwọn àtúnyẹ̀wò ṣíṣàyàn',
'editundo' => 'dápadà',
'diff-multi' => '({{PLURAL:$1|Àtúnyẹ̀wò inú àrin kan|Àwọn àtúnyẹ̀wò inú àrin $1}} látọwọ́ {{PLURAL:$2|oníṣe kan|àwọn oníṣe $2}} kò jẹ́ fífihàn)',
'diff-multi-manyusers' => '({{PLURAL:$1|Àtúnyẹ̀wò inú àrin kan|Àwọn àtúnyẹ̀wò inú àrin $1}} látọwọ́ {{PLURAL:$2|oníṣe|àwọn oníṣe}} tó pọ̀ju $2 lọ kò jẹ́ fífihàn)',
'difference-missing-revision' => '{{PLURAL:$2|Àtúnyẹ̀wò kan|Àwọn àtúnyẹ̀wò $2}} ìyàtọ̀ yìí ($1) kò {{PLURAL:$2|sí|sí}}.

Èyí ṣẹlẹ̀ nítorí pé ẹ tẹ̀lé àjápọ̀ ìyàtọ̀ tí kò ṣiṣẹ́ mọ́ wá sí ojúewé tó ti jẹ́ píparẹ́.
Ẹ̀kúnrẹ́rẹ́ wà nínú [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} àkọọ́lẹ̀ ìparẹ́].',

# Search results
'searchresults' => 'Àwọn èsì àwárí',
'searchresults-title' => 'Àwọn èsì àwárí fún "$1"',
'searchresulttext' => 'Fún ẹ̀kúnrẹ́rẹ́ nípa ṣíṣe ìwárí {{SITENAME}}, ẹ̀ wo [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'Ẹ ṣ\'àwáàrí fun \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|gbogbo ojúewé tó bẹ̀rẹ̀ pẹ̀lu "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|gbogbo ojúewé tó jápọ̀ mọ́ "$1"]])',
'searchsubtitleinvalid' => "Ẹ ti ṣ'àwáàrí fun '''$1'''",
'toomanymatches' => 'Àwọn ìbáramu ti pọ̀jù, ẹ jọ̀wọ́ ẹ gbìyànjú lọ́nà mìíràn',
'titlematches' => 'Àkọlé ojúewé báramu',
'notitlematches' => 'Kò sí àkọlé ojúewé tóbáramu',
'textmatches' => 'Ọ̀rọ̀ ojúewé tóbáramu:',
'notextmatches' => 'Kò sí ọ̀rọ̀ ojúewé tóbáramu',
'prevn' => '{{PLURAL:$1|$1}} tókọjá',
'nextn' => '{{PLURAL:$1|$1}} tókàn',
'prevn-title' => '{{PLURAL:$1|Èsì $1 sẹ́yìn|Àwọn èsì $1 sẹ́yìn}}',
'nextn-title' => '{{PLURAL:$1|Èsì $1 tóúnbọ̀|Àwọn èsì $1 tóúnbọ̀}}',
'shown-title' => '{{PLURAL:$1|Ìfihàn èsì $1|Ìfihàn àwọn èsì $1}} nínú ojúewé kọ̀ọ̀kan',
'viewprevnext' => 'Ẹ wo ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend' => 'Àwọn àṣàyàn àwáàrí',
'searchmenu-exists' => "'''Ojúewé tó ún jẹ́ \"[[:\$1]]\" wà lórí wiki yìí'''",
'searchmenu-new' => "'''Dá ojúewé \"[[:\$1]]\" sí orí wiki yìí!'''",
'searchhelp-url' => 'Help:Àwon àkóónú',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Ẹ lọ sí àwọn ojúewé tí wọ́n ní àsopọ̀ yìí]]',
'searchprofile-articles' => 'Àwọn ojúewé Àkóónú',
'searchprofile-project' => 'Àwọn ojúewé Ìrànwọ́ àti Iṣẹ́-ọwọ́',
'searchprofile-images' => 'Amóhùnmáwòrán',
'searchprofile-everything' => 'Èyíkéyìí',
'searchprofile-advanced' => 'Onígíga',
'searchprofile-articles-tooltip' => 'Ṣàwáàrí nínú $1',
'searchprofile-project-tooltip' => 'Ṣàwáàrí nínú $1',
'searchprofile-images-tooltip' => 'Ṣàwáàrí fún faili',
'searchprofile-everything-tooltip' => 'Ṣàwáàrí nínú gbogbo àkóónú (pẹ̀lú àwọn ojúewé ọ̀rọ̀)',
'searchprofile-advanced-tooltip' => 'Ṣàwáàrí nínú àwọn orúkọàyè pàtó',
'search-result-size' => '$1 ({{PLURAL:$2|ọ̀rọ̀ 1|àwọn ọ̀rọ̀ $2}})',
'search-result-category-size' => '{{PLURAL:$1|ẹlẹgbẹ́ 1|àwọn ẹlẹgbẹ́ $1}} ({{PLURAL:$2|ẹ̀kà abẹ́ 1|àwọn ẹ̀kà abẹ́ $2}}, {{PLURAL:$3|fáìlì 1|àwọn fáìlì $3}})',
'search-result-score' => 'Ìbáramu: $1%',
'search-redirect' => '(àtúnjúwe $1)',
'search-section' => '(abala $1)',
'search-suggest' => 'Ṣé ẹ fẹ́: $1',
'search-interwiki-caption' => 'Àwọn iṣẹ́-ọwọ́ mìràn',
'search-interwiki-default' => 'èsì $1',
'search-interwiki-more' => '(tókù)',
'search-relatedarticle' => 'Tóbáramu',
'mwsuggest-disable' => 'Ìdálẹ́kun àwọn àbá AJAX',
'searcheverything-enable' => 'Àwárí nínú gbogbo orúkọàyè:',
'searchrelated' => 'tóbáramu',
'searchall' => 'gbogbo',
'showingresults' => "Ìfihàn nísàlẹ̀ títí dé {{PLURAL:$1|èsì '''1'''|àwọn èsì '''$1'''}} láti ìbẹ̀rẹ̀ ní #'''$2'''.",
'showingresultsnum' => "Ìfihàn nísàlẹ̀ {{PLURAL:$3|èsì '''1'''|àwọn èsì '''$3'''}} láti ìbẹ̀rẹ̀ ní #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Èsì '''$1''' nínú ''''$3'''|Àwọn èsì '''$1 - $2''' nínú '''$3'''}} fún '''$4'''",
'nonefound' => "'''Àkíyèsí''': Àwọn orúkọàyè mélòó níkan ni wọ́n jẹ́ wíwárí látìbẹ̀rẹ̀.
Ẹ ṣàlẹ̀mọ́wájú ìtọrọ yín pẹ̀lú ''gbogbo'' láti ṣàwárí gbogbo àkóónú (nínú àwọn ojúewé ọ̀rọ̀, àwọn àdàkọ, a.bẹ.bẹ.lọ), tàbí kí ẹ lo orúkọàyè tóyẹ gẹ́gẹ́ bíi àlẹ̀mọ́wájú.",
'search-nonefound' => 'Kò sí àwọn èsì kankan tóbáramu mọ́ ìtọrọ.',
'powersearch' => 'Ṣe àwárí',
'powersearch-legend' => 'Àwárí kíkúnrẹ́rẹ́',
'powersearch-ns' => 'Àwárí nínú orúkọàyè:',
'powersearch-redir' => 'Àkójọ àwọn àtúnjúwe',
'powersearch-field' => 'Àwáàrí fún',
'powersearch-togglelabel' => 'Ìyẹ̀wò:',
'powersearch-toggleall' => 'Gbogbo wọn',
'powersearch-togglenone' => 'Ìkankan',
'search-external' => 'Àwárí lóde',
'searchdisabled' => 'Ṣíṣàwárí nínú {{SITENAME}} wà ní dídálẹ́kun.
Ní báyìí ná ẹ le ṣàwárí lọ́dọ̀ Google.
Àkíyèsí pé àwọn atọ́ka wọn fún àkóónú {{SITENAME}} le mọ́ jẹ́ tuntun.',

# Quickbar
'qbsettings' => 'Pẹpẹ ìṣárémúlò',
'qbsettings-none' => 'Ìkankan',
'qbsettings-fixedleft' => 'Kíkàn sí òsì',
'qbsettings-fixedright' => 'Kíkàn sí ọ̀tún',
'qbsettings-floatingleft' => 'Léfòó sí òsì',
'qbsettings-floatingright' => 'Léfòó sí ọ̀tún',
'qbsettings-directionality' => 'Fi sí ẹ̀gbẹ́, gẹ́gẹ́ bí ìdojúkọ lẹ́tà-ọ̀rọ̀ èdè yín bá ṣe rí',

# Preferences page
'preferences' => 'Àwọn ìfẹ́ràn',
'mypreferences' => 'Àwọn ìfẹ́ràn',
'prefs-edits' => 'Iye àwọn àtúnṣe:',
'prefsnologin' => 'Ẹ kò tíì wọlé',
'prefsnologintext' => 'Ẹ gbọ́dọ̀ <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} wọlé]</span> láti to àwọn ìfẹ́ràn oníṣe.',
'changepassword' => 'Ìyípadà ọ̀rọ̀ìpamọ́',
'prefs-skin' => 'Skin (Àwọ̀)',
'skin-preview' => 'Àkọ́yẹ̀wò',
'datedefault' => 'Kò sí ìfẹ́ràn',
'prefs-beta' => 'Àwọn ìní Beta',
'prefs-datetime' => 'Ọjọ́ọdún àti àkókò',
'prefs-labs' => 'Àwọn ìní ibiàdánwò',
'prefs-user-pages' => 'Àwọn ojúewé oníṣe',
'prefs-personal' => 'Ọ̀rọ̀ nípa oníṣe',
'prefs-rc' => 'Àwọn àtúnṣe tuntun',
'prefs-watchlist' => 'Ìmójútó',
'prefs-watchlist-days' => 'Ọjọ́ láti fihàn nínú ìmójútó:',
'prefs-watchlist-days-max' => '{{PLURAL:$1|Ọjọ́|Ọjọ́}} $1 púpọ̀jùlọ',
'prefs-watchlist-edits' => 'Iye àwọn àtúnṣe láti fìhàn nínú ìmójútó kíkúnrẹ́rẹ́:',
'prefs-watchlist-edits-max' => 'Iye púpọ̀jùlọ: 1000',
'prefs-watchlist-token' => 'Ìtọ́wò àmójútó:',
'prefs-misc' => 'Oríṣiríṣi',
'prefs-resetpass' => 'Ìyípadà ọ̀rọ̀ìpamọ́',
'prefs-changeemail' => 'Ìyípadà E-mail',
'prefs-setemail' => 'Ìsètò àdírẹ́ẹ̀sì e-mail',
'prefs-email' => 'Àwọn àṣàyàn e-mail',
'prefs-rendering' => 'Wíwò',
'saveprefs' => 'Ìmúpamọ́',
'resetprefs' => 'Ìpalẹ̀mọ́ àwọn àyípadà àìmúpamọ́',
'restoreprefs' => 'Ìdápadà áwọn ìtò àtìbẹ̀rẹ̀',
'prefs-editing' => 'Àtúnṣe ṣíṣẹ',
'prefs-edit-boxsize' => 'Ìtóbi fèrèsé àtúnṣe',
'rows' => 'Àwọn ìtẹ̀lé gbọlọjọ:',
'columns' => 'Àwọn ìtẹ̀lé gogoro:',
'searchresultshead' => 'Àwárí',
'resultsperpage' => 'Àwọn èsì ní ojúewé kọ̀ọ̀kan:',
'stub-threshold' => 'Àlà fún idárú <a href="#" class="stub">àjàpọ̀ ẹ̀kúnrẹ́rẹ́</a> (bytes):',
'stub-threshold-disabled' => 'Dídálẹ́kun',
'recentchangesdays' => 'Iye ọjọ́ láti fihàn nínú àwọn àtúnṣe tuntun:',
'recentchangesdays-max' => '{{PLURAL:$1|Ọjọ́|Ọjọ́}} $1 púpọ̀jùlọ',
'recentchangescount' => 'Iye àtúnṣe láti fihàn látìbẹ̀rẹ̀:',
'prefs-help-recentchangescount' => 'Àwọn àtúnṣe tuntun, ìtàn ojúewé, àti àkọọ́lẹ̀ wà nínú èyí.',
'prefs-help-watchlist-token' => 'Tí ẹ bá fílì fọ́ọ̀mù yìí pẹ̀lú kọ́kọ́rọ́ àmìọ̀rọ̀ àsírí yíò dá feed RSS fún ìmójútó yín.
Ẹnikẹ́ni tó bá mọ kọ́kọ́rọ́ àmìọ̀rọ̀ náà nínú fọ́ọ̀mù yìí yíò le ka ìmójútó yín, nítoríẹ̀ ẹ mú nọ́mbà tó pamọ́.
Nọ́mbà àrìnnàkò kan nìyí tí ẹ le lò: $1',
'savedprefs' => 'Àwọn ìfẹ́ràn yín ti jẹ́mímúpapọ́.',
'timezonelegend' => 'Àsìkò ilẹ̀àmùrè:',
'localtime' => 'Àkókò ìbílẹ̀:',
'timezoneuseserverdefault' => 'Lo ti wiki ($1)',
'timezoneuseoffset' => 'Òmíràn (ẹ tọ́ka ìyàtọ̀)',
'timezoneoffset' => 'Ìyàtọ̀¹:',
'servertime' => 'Àsìkò ẹ̀rọ-ìwọ̀fà:',
'guesstimezone' => 'Parí látí inú awòtakùn',
'timezoneregion-africa' => 'Áfríkà',
'timezoneregion-america' => 'Amẹ́ríkà',
'timezoneregion-antarctica' => 'Antarktikà',
'timezoneregion-arctic' => 'Árktíkì',
'timezoneregion-asia' => 'Ásíà',
'timezoneregion-atlantic' => 'Òkun Atlantiki',
'timezoneregion-australia' => 'Australia',
'timezoneregion-europe' => 'Europe',
'timezoneregion-indian' => 'Òkun India',
'timezoneregion-pacific' => 'Òkun Pàsífíkì',
'allowemail' => 'Ìgbàláyè e-mail látọ̀dọ̀ àwọn oníṣe mìíràn',
'prefs-searchoptions' => 'Ṣàwárí',
'prefs-namespaces' => 'Àwọn orúkọàyè',
'defaultns' => 'Bíbẹ́ẹ̀kọ́ ṣe àwárí nínú àwọn orúkọàyè yìí:',
'default' => 'níbẹ̀rẹ̀',
'prefs-files' => 'Àwọn faili',
'prefs-custom-css' => 'CSS àkànṣe',
'prefs-custom-js' => 'JavaScript àkànṣe',
'prefs-common-css-js' => 'CSS/JavaScript àpínlò fún gbogbo àwọn awọ:',
'prefs-reset-intro' => 'Ẹ le lo ojúewé yìí láti ṣàtùntò àwọn ìfẹ́ràn yín sí àkọ́kọ́ṣe ibiìtakùn yìí.
Kò ní ṣeé dápadà mọ́.',
'prefs-emailconfirm-label' => 'E-mail ìmúdájú:',
'prefs-textboxsize' => 'Ìtóbi fèrèsé àtúnṣe',
'youremail' => 'E-mail:',
'username' => '{{GENDER:$1|Orúkọ oníṣe}}:',
'uid' => 'Nọmba ìdámọ̀ {{GENDER:$1|oníṣe}}:',
'prefs-memberingroups' => '{{GENDER:$2|Ọ̀kan}} nínú {{PLURAL:$1|ẹgbẹ́|àwọn ẹgbẹ́}}:',
'prefs-registration' => 'Àsìkò ìforúkọsílẹ́:',
'yourrealname' => 'Orúkọ ganangan:',
'yourlanguage' => 'Èdè:',
'yourvariant' => 'Orísi èdè àkóónú:',
'prefs-help-variant' => 'Irú ìfẹ́ràn tàbí ọ̀nàìkọ̀rọ̀ láti fí àkóónú ojúewé hàn lórí wiki yìí.',
'yournick' => 'Ìtọwọ́bọ̀wé tuntun:',
'prefs-help-signature' => 'Àwọn àwísọ lórí àwọn ojúewé ọ̀rọ̀ gbọdọ̀ jẹ́ titọwọ́bọ̀ pẹ̀lú "<nowiki>~~~~</nowiki>" tí yíò jẹ́ yíyípadà sí ìtọwọ́bọ̀wé yín àtí àmì àsìkò.',
'badsig' => 'Ìtọwọ́bọ̀wé gidi àìtọ́.
Ẹ yẹ àwọn àlẹ̀mọ́ HTML wò.',
'badsiglength' => 'Ìtọwọ́bọ̀ yín ti gùnjù.
Kò gbodọ̀ ju $1 {{PLURAL:$1|àmìlẹ́tà|àwọn àmìlẹ́tà}} lọ.',
'yourgender' => 'Akọmbábo:',
'gender-unknown' => 'Àláìtọ́kasí',
'gender-male' => 'Akọ',
'gender-female' => 'Abo',
'prefs-help-gender' => 'Alásàyàn: Lílò fún pípe akọtabo látọwọ́ atòlànà kọ̀mpútà.
Èyí yíò hàn sí ìgboro.',
'email' => 'E-mail',
'prefs-help-realname' => 'Orúkọ gangan kò pọndandan.
Tí ẹ bá fisílẹ̀ a ó lòó láti tóka iṣẹ́ yín fún yín.',
'prefs-help-email' => 'Àdírẹ́ẹ̀sì e-mail yín kò ṣe dandan, ṣùgbọ́n yíò jẹ́ lílò fún ìtúntò ọ̀rọ̀ìpamọ́, tí ẹ bá gbàgbé ọ̀rọ̀ìpamọ́ yín.',
'prefs-help-email-others' => 'Ẹ tún le yàn láti jẹ́ kí àwọn míràn ó bá a yín pàdé pẹ̀lú e-mail láti inú àjápọ̀ lórí ojúewé oníṣe tàbí ọ̀rọ̀ yín.
Àdírẹ́ẹ̀sì e-mail yín kò ní hàn síta nígbà tí àwọn oníṣe míràn bá a yín pàdé.',
'prefs-help-email-required' => 'E-mail ṣe dandan.',
'prefs-info' => 'Ìfitónilétí tóṣekókó',
'prefs-i18n' => 'Ìṣekáríayé',
'prefs-signature' => 'Ìtọwọ́bọ̀wé',
'prefs-dateformat' => 'Irú ọjọ́ọdún',
'prefs-timeoffset' => 'Ìyàtọ̀ àsìkò',
'prefs-advancedediting' => 'Àwọn àṣàyàn onígíga',
'prefs-advancedrc' => 'Àwọn àṣàyàn onígíga',
'prefs-advancedrendering' => 'Àwọn àṣàyàn onígíga',
'prefs-advancedsearchoptions' => 'Àwọn àṣàyàn onígíga',
'prefs-advancedwatchlist' => 'Àwọn àṣàyàn onígíga',
'prefs-displayrc' => 'Ìfihàn àwọn àṣàyàn',
'prefs-displaysearchoptions' => 'Ìfihàn àwọn àṣàyàn',
'prefs-displaywatchlist' => 'Ìfihàn àwọn àṣàyàn',
'prefs-diffs' => 'Àwọn ìyàtọ̀',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'Àdírẹ́ẹ̀sì e-mail dà bí èyí tótọ́',
'email-address-validity-invalid' => 'Ẹ tẹ e-mail tótọ́',

# User rights
'userrights' => 'Ìmójútó àwọn ẹ̀tọ́ oníṣe',
'userrights-lookup-user' => 'Àkóso àwọn àdìpò oníṣe',
'userrights-user-editname' => 'Ẹ tẹ orúkọ oníṣe kan:',
'editusergroup' => 'Àtúnṣe àwọn ẹgbẹ́ oníṣe',
'editinguser' => "Ṣíṣàyípadà àwọn ẹ̀tọ́ oníṣe fún oníṣe '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Àtúnṣe àwọn ẹgbẹ́ oníṣe',
'saveusergroups' => 'Ìmúpamọ́ àwọn ẹgbẹ́ oníṣe',
'userrights-groupsmember' => 'Ọ̀kan nínú:',
'userrights-groupsmember-auto' => 'Ẹlẹgbẹ́ tódájú:',
'userrights-groups-help' => 'Ẹ le ṣàyípadà àwọn ẹgbẹ́ tí oníṣe wà nínú wọn:
* Àpótí aṣàmìsí túmọ̀sí pé oníṣe náà wà nínú ẹgbẹ́ náà.
* Àpótí aláìsàmìsí túmọ̀sí pé oníṣe náà kò sí nínú ẹgbẹ́ náà
* Àmì * kan fihàn pé ẹ kò le yọ ẹgbẹ́ náà kúrò mọ́ tí ẹ bá ti ṣàfikún rẹ̀, tàbí lódì kejì.',
'userrights-reason' => 'Ìdíẹ̀:',
'userrights-no-interwiki' => 'Ẹ kò ní ìyọ̀nda láti ṣàtúnṣe àwọn ẹ̀tọ́ oníṣe lórí àwọn wiki míràn.',
'userrights-nodatabase' => 'Ibùdó dátà $1 kò sí tàbí kò sí lábẹ́lé.',
'userrights-nologin' => 'Ẹ gbọ́dọ̀ [[Special:UserLogin|wọlé]] pẹ̀lú àpamọ́ alámòójútó láti pín àwọn ẹ̀tọ́ oníṣe.',
'userrights-notallowed' => 'Àpamọ́ yín kò ní ìyọ̀nda láti ṣàfikún tàbí ṣàyọkúrò àwọn ẹ̀tọ́ oníṣe.',
'userrights-changeable-col' => 'Àwọn ẹgbẹ́ tí ẹ le túnṣe',
'userrights-unchangeable-col' => 'Àwọn ẹgbẹ́ tí ẹ kò le túnṣe',

# Groups
'group' => 'Ìdìpọ̀:',
'group-user' => 'Àwọn oníṣe',
'group-autoconfirmed' => 'Àwọn oníṣe aláàmúdájúarawọn',
'group-bot' => 'Àwọn Bot',
'group-sysop' => 'Àwọn alámùójútó',
'group-bureaucrat' => 'Àwọn aṣeibiṣẹ́',
'group-suppress' => 'Àwọn alábẹ̀wò',
'group-all' => '(gbogbo)',

'group-user-member' => '{{GENDER:$1|oníṣe}}',
'group-autoconfirmed-member' => '{{GENDER:$1|oníṣe amúdájúaraẹnì}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|amójútó}}',
'group-bureaucrat-member' => '{{GENDER:$1|aṣeibiṣẹ́}}',
'group-suppress-member' => '{{GENDER:$1|akíyèsí}}',

'grouppage-user' => '{{ns:project}}:Àwọn oníṣe',
'grouppage-autoconfirmed' => '{{ns:project}}:Àwọn oníṣe ìmúdájú fùnrawọn',
'grouppage-bot' => '{{ns:project}}:Àwọn Bot',
'grouppage-sysop' => '{{ns:project}}:Àwọn alámùójútó',
'grouppage-bureaucrat' => '{{ns:project}}:Àwọn aláàmúṣe',
'grouppage-suppress' => '{{ns:project}}:Alábẹ̀wò',

# Rights
'right-read' => 'Wo ojúewé',
'right-edit' => 'Àtúnṣe àwọn ojúewé',
'right-createpage' => 'Dá ojúewé (tí kò jẹ́ ojúewé ìfọ̀rọ̀wérọ̀)',
'right-createtalk' => 'Dá ojúewé ìfọ̀rọ̀wérọ̀',
'right-createaccount' => 'Dá àpamọ́ oníṣe tuntun',
'right-minoredit' => "Ṣ'àmì sí àwọn àtúnṣe bíi kékeré",
'right-move' => 'Yípò ojúewé',
'right-move-subpages' => 'Yípò ojúewé pẹ̀lú àwọn ọmọ ojúewẹ́ rẹ̀',
'right-move-rootuserpages' => 'Ìyípòdà gbọ̀ngàn àwọn ojúewé oníṣe',
'right-movefile' => 'Yípò fáìlì',
'right-suppressredirect' => 'Mọ́ dàá àwọn àtúnjúwe lati ojúewé orísun nígbà tí ojúewé bá únyípòdà',
'right-upload' => 'Ìrùsókè àwọn faili',
'right-reupload' => 'Ìkọṣórí àwọn fáìlì',
'right-reupload-own' => 'Ìkọsórí àwọn fáìlì tó wà tí wọn jẹ́ rírùsókè lọ́wọ́ araẹni',
'right-reupload-shared' => 'Ìrékọjá àwọn fáìlì nínú ibi-àkójọ amóhùnmáwòrán àjọpín lábẹ́lé',
'right-upload_by_url' => 'Ìrùsókè àwọn faili láti URL kan',
'right-purge' => 'Pa cache ibiìtakùn rẹ́ fún ojúewé kan láì gba àṣẹ',
'right-autoconfirmed' => 'Àtúnṣe àwọn ojúewé aláàbò díẹ̀',
'right-bot' => 'Ṣe é bíi ìgbéṣẹ̀ oníararẹ̀',
'right-nominornewtalk' => 'Kí àwọn àtúnṣe kékeré sí ojúewé ọ̀rọ̀ ó mọ́ fa àyè ìránṣẹ́ tuntun',
'right-apihighlimits' => 'Ìlò òpin gígajù fún àwọn ìtọrọ API',
'right-writeapi' => 'Ìo ìkọ API',
'right-delete' => 'Pa àwọn ojúewé rẹ́',
'right-bigdelete' => 'Pa àwọn ojúewé pẹ̀lú àwọn ìtàn títóbi rẹ́',
'right-deletelogentry' => 'Ìparẹ́ àti ìdápadà ìparẹ́ àwọn ohun inú àkọọ́lẹ̀ pàtó',
'right-deleterevision' => 'Ìparẹ́ àti ìmúparẹ́ kúrò fún àwọn àtúnyẹ̀wò ojúewé pàtò',
'right-deletedhistory' => 'Ìwo àwọn ìtìbọ̀ ìtàn onípíparẹ́, láì ní ìkọ wọn',
'right-deletedtext' => 'Ìwo ìkọ onípíparẹ́ àti ìyípadà láàrin àwọn àtúnyẹ̀wò onípíparẹ́',
'right-browsearchive' => 'Wá àwọn ojúewé onípíparẹ́',
'right-undelete' => 'Ìmúkúrò ìparẹ́ ojúewé kan',
'right-suppressrevision' => 'Ìtúnwò àti ìtúndápadà àwọn àtúnyẹ̀wò àbòmọ́lẹ̀ sí àwọn olùmójútó',
'right-suppressionlog' => 'Ẹ wo àwọn àkọọ́lẹ̀ àdáni',
'right-block' => 'Ìdínà àwọn oníṣe yìókù láti ṣàtúnṣe',
'right-blockemail' => 'Ìdínà oníṣe kan láti fi e-mail ránṣẹ́',
'right-hideuser' => 'Ìdínà orúkọ oníṣe kan, ìbòmọ́lẹ̀ rẹ̀ kúrò ní ìgboro',
'right-ipblock-exempt' => 'Fo àwọn ìdínà IP, ìdínà araẹni àti àwọn ìdínà àdìmọ́',
'right-proxyunbannable' => 'Fo àwọn ìdínà aláraẹni àwọn ẹ̀rọ-ìwọ̀fà ẹlọ̀míràn',
'right-unblockself' => 'Ìmúkúrò ìdínà ara wọn',
'right-protect' => 'Ìyípadà àwọn ìpele àbò àti àtúnṣe àwọn ojúewé aláàbò',
'right-editprotected' => 'Àtúnṣe àwọn ojúewé aláàbò (láìsí àbò àjámọ́ra)',
'right-editinterface' => 'Àtúnṣe ìfojúkojú oníṣe',
'right-editusercssjs' => 'Àtúnṣe àwọn fáìlì CSS àti JS ti àwọn oníṣe mìíràn',
'right-editusercss' => 'Àtúnṣe àwọn fáìlì CSS ti àwọn oníṣe mìíràn',
'right-edituserjs' => 'Àtúnṣe àwọn fáìlì JS ti àwọn oníṣe mìíràn',
'right-rollback' => 'Kíákíá yí àwọn àtúnṣe oníṣe tó ṣàtúnṣe ojúewé kan pàtó gbẹ̀yìn sẹ́yìn',
'right-markbotedits' => 'Ṣe àmì sí àwọn àtúnṣe àyípadà bíi àtúnṣe bot',
'right-noratelimit' => 'Kò ní ní òpin ìdíye',
'right-import' => 'Ìkówọlé àwọn ojúewé láti ọ̀dọ̀ àwọn wiki míràn',
'right-importupload' => 'Ìkówọlé àwọn ojúewé láti inú ìrùsókè fáìlì',
'right-patrol' => "Ṣ'àmì sí àtúnṣe àwọn ẹlọ̀míràn bíi onísíṣọ́",
'right-autopatrol' => 'Mú kí àwọn àtúnṣe araẹni ó jẹ́ ṣíṣáàmì sí bíi onísíṣọ́',
'right-patrolmarks' => 'Ìwo àwọn àtúnṣe tuntun tí wọ́n ní àmì ìṣọ́',
'right-unwatchedpages' => 'Ìwo àtòjọ àwọn ojúewé aláìṣọ́',
'right-mergehistory' => 'Ìdàpọ̀ ìtàn àwọn ojúewé',
'right-userrights' => 'Àtúnṣe gbogbo àwọn ẹ̀tọ́ oníṣe',
'right-userrights-interwiki' => 'Àtúnṣe àwọn ẹ̀tọ́ oníṣe àwọn oníṣe lórí àwọn wiki míràn',
'right-siteadmin' => 'Ìtìpa àti ìṣí ibùdó dátà',
'right-override-export-depth' => 'Ìkójáde àwọn ojúewé lámùúpọ̀ mọ́ àwọn ojúewé jíjápọ̀ títí dé ìbú 5',
'right-sendemail' => 'Fi e-mail ránṣẹ́ sí àwọn oníṣe míràn',
'right-passwordreset' => 'Ìwo àwọn e-mail fún ìtúntò ọ̀rọ̀ìpamọ́',

# Special:Log/newusers
'newuserlogpage' => 'Àkọsílẹ̀ ìdá oníṣe',
'newuserlogpagetext' => 'Àkọọ́lẹ̀ àwọn ìdá oníṣe nì yí.',

# User rights log
'rightslog' => 'Àwọn ẹ̀tọ́ oníṣe',
'rightslogtext' => 'Èyì ni àkọọ́lẹ̀ kan àwọn àtúnṣe sí àwọn ẹ̀tọ́ oníṣe.',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'wo ojúewé yìí',
'action-edit' => 'ṣàtúnṣe ojúewé yìí',
'action-createpage' => 'dá ojúewé yìí',
'action-createtalk' => 'dá ojúewé ìfọ̀rọ̀wérọ̀',
'action-createaccount' => 'dá àpamọ́ oníṣe yìí',
'action-minoredit' => 'fagisí àtúnṣe yìí gẹ́gẹ́ bíi kékeré',
'action-move' => 'yípò ojúewé yìí',
'action-move-subpages' => 'yípò ojúewé yìí àti àwọn ọmọ ojúewé rẹ̀',
'action-move-rootuserpages' => 'yípòdà gbọ̀ngàn àwọn ojúewé oníṣe',
'action-movefile' => 'yípò fáìlì yìí',
'action-upload' => 'ìrùsókè fáìlì yìí',
'action-reupload' => 'kọléṣórí fáìlì tó wà yìí',
'action-reupload-shared' => 'ṣe ìrékọjá fáìlì yìí nínú ibi-àkójọ àjọpín',
'action-upload_by_url' => 'rùsókè fáìlí yìí láti URL',
'action-writeapi' => 'lo ìkọ API',
'action-delete' => 'pa ojúewé yìí rẹ́',
'action-deleterevision' => 'pa àtúnyẹ̀wò yìí rẹ́',
'action-deletedhistory' => 'bojúwo ìtàn ìparẹ́ ojúewé yìí',
'action-browsearchive' => 'wá àwọn ojúewé onípíparẹ́',
'action-undelete' => 'yípadà ìparẹ́ ojúewé yìí',
'action-suppressrevision' => 'gbéwò tàbí yíṣẹ́yìn àtúnyẹ́wò pípamọ́ yìí',
'action-suppressionlog' => 'wo àkọọ́lẹ̀ àdáni yìí',
'action-block' => 'dínà oníṣe yìí láti ṣàtúnṣe',
'action-protect' => 'yí irú àbò padà fún ojúewé yìí',
'action-rollback' => 'kíákíá yí àwọn àtúnṣe oníṣe tó ṣàtúnṣe ojúewé kan pàtó gbẹ̀yìn sẹ́yìn',
'action-import' => 'kó ojúewé yìí wolé wá láti ọ̀dọ̀ wíkì mìíràn',
'action-importupload' => 'ìkówọlé ojúewé yìí láti inú ìrùsókè fáìlì kan',
'action-patrol' => "ṣ'àmì sí àtúnṣe àwọn ẹlọ̀míràn bíi onísíṣọ́",
'action-autopatrol' => 'mú kí àwọn àtúnṣe yín ó jẹ́ ṣíṣáàmì sí bíi onísíṣọ́',
'action-unwatchedpages' => 'ìwo àtòjọ àwọn ojúewé aláìṣọ́',
'action-mergehistory' => 'ìdàpọ̀ ìtàn ojúewé yìí',
'action-userrights' => 'àtúnṣe gbogbo àwọn ẹ̀tọ́ oníṣe',
'action-userrights-interwiki' => 'àtúnṣe àwọn ẹ̀tọ́ oníṣe àwọn oníṣe lórí àwọn wiki míràn',
'action-siteadmin' => 'tìpa tàbí ṣí ibùdó dátà',
'action-sendemail' => 'fi e-mail ránṣẹ́',

# Recent changes
'nchanges' => '{{PLURAL:$1|àtúnṣe|àwọn àtúnṣe}} $1',
'recentchanges' => 'Àwọn àtúnṣe tuntun',
'recentchanges-legend' => 'Àwọn àṣàyàn fún àtúnṣe tuntun',
'recentchanges-summary' => 'Ẹ tẹ̀ lé àwọn àtúnṣe tuntun sí wiki lórí ojúewé yìí.',
'recentchanges-feed-description' => 'Ẹ tẹ̀ lé àwọn àtúnṣe àìpẹ́ ọjọ́ sí wiki nínú àkótán feed yìí.',
'recentchanges-label-newpage' => 'Àtúnṣe yìí dá ojúewé tuntun',
'recentchanges-label-minor' => 'Àtùnṣe kékeré nìyí',
'recentchanges-label-bot' => 'Rọ́bọ́ọ̀tì ni ó ṣe àtúnṣe yìí',
'recentchanges-label-unpatrolled' => 'Àtúnṣe yìí kò tí ì jẹ́ onísíṣọ́',
'rcnote' => "Lábẹ́ ni {{PLURAL:$1|àtúnṣe '''kan'''|àwọn àtúnṣe '''$1''' tí wọn gbẹ̀yìn}} láàrin {{PLURAL:$2|ọjọ́ kan|ọjọ́ '''$2'''}} sẹ́yìn ní ago $5, lọ́jọ́ $4.",
'rcnotefrom' => "Àwọn àtúnṣe láti ''''$2''' (títí dé '''$1''' hàn) lábẹ́.",
'rclistfrom' => 'Àfihàn àwọn àtúnṣe tuntun nípa bíbẹ̀rẹ̀ láti $1',
'rcshowhideminor' => '$1 àwọn àtúnṣe kékéèké',
'rcshowhidebots' => '$1 àwọn bot',
'rcshowhideliu' => '$1 àwọn oníṣe tótiwọlé',
'rcshowhideanons' => '$1 àwọn oníṣe aláìlórúkọ',
'rcshowhidepatr' => '$1 àwọn àtúnṣe ọlùṣọ́',
'rcshowhidemine' => '$1 àwọn àtúnṣe mi',
'rclinks' => "Ṣ'àfihàn àtúnṣe $1 tó kẹ̀yìn ní ọjọ́ $2 sẹ́yìn<br />$3",
'diff' => 'ìyàtọ̀',
'hist' => 'ìtàn',
'hide' => 'Ìbòmọ́lẹ̀',
'show' => 'Ìfihàn',
'minoreditletter' => 'k',
'newpageletter' => 'T',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[{{PLURAL:$1|Oníṣe $1|Àwọn oníṣe $1}} ún ṣe ìmójútó]',
'rc_categories' => 'Òpin sí àwọn ẹ̀ka (pínsọ́tọ̀ pẹ̀lú "|")',
'rc_categories_any' => 'Èyíkéyìí',
'rc-change-size-new' => '$1 {{PLURAL:$1|byte|bytes}} lẹ́yìn àtúnṣe',
'newsectionsummary' => '/* $1 */ abala tuntun',
'rc-enhanced-expand' => 'Ìfihàn ẹ̀kúnrẹ́rẹ́ (JavaScript pọndandan)',
'rc-enhanced-hide' => 'Ìfipamọ́ ẹ̀kúnrẹ́rẹ́',
'rc-old-title' => 'dídá tẹ́lẹ̀tẹ́lẹ̀ bíi "$1"',

# Recent changes linked
'recentchangeslinked' => 'Àtúnṣe tó báramu',
'recentchangeslinked-feed' => 'Àtúnṣe tó báramu',
'recentchangeslinked-toolbox' => 'Àtúnṣe tó báramu',
'recentchangeslinked-title' => 'Àtúnṣe tó báramu mọ́ "$1"',
'recentchangeslinked-noresult' => 'Kò sí ìyàtọ̀ nínú àwọn ojúewé ìjápọ̀ láàrin ìgbà tí ẹ sọ.',
'recentchangeslinked-summary' => "Àkójọ àwọn àtúnṣe tí a sẹ̀sẹ̀ ṣe sí àwọn ojúewé tó jápọ̀ wá láti ojúewé pàtó kan (tàbí sí ìkan nìnú ẹ̀ka pàtó kan).
Àwọn ojúewé inú [[Special:Watchlist|ìmójútó yín]] jẹ́ '''kedere'''.",
'recentchangeslinked-page' => 'Orúkọ ojúewé:',
'recentchangeslinked-to' => 'Àfihàn àwọn àtúnṣe sí àwọn ojúewé tójápọ̀ mọ́ ojúewé ọ̀hún dípò',

# Upload
'upload' => 'Ìrùsókè fáìlì',
'uploadbtn' => 'Ìrùsókè fáìlì',
'reuploaddesc' => 'Fagilé ìrùsókè kí ó tó padà sí fọ́ọ̀mù ìrùsókè',
'upload-tryagain' => 'Ìkóólẹ̀ fáìlì ìjúwe aláàtúnṣe',
'uploadnologin' => 'Ẹ kò tíì wọlé',
'uploadnologintext' => 'Ẹ gbọ́dọ̀ [[Special:UserLogin|wọlè]] láti rùsókè faili.',
'upload_directory_missing' => 'Àpò ìrùsókè ($1) kòsí bẹ́ẹ̀sìni kò le jẹ́ dídá látọwọ́ ẹ̀rọ-ìwọ̀fà.',
'upload_directory_read_only' => 'Àpò ìrùsókè ($1) kò ṣeékọ sí nínú látọwọ́ ẹ̀rọ-ìwọ̀fà.',
'uploaderror' => 'Àsìse ìrùsókè',
'upload-recreate-warning' => "'''Ìkìlọ̀: Fáìlì kan pẹ̀lú orúkọ báun ti jẹ́ píparẹ́ tàbí yíyípódà.'''

Àkọọ́lẹ̀ ìparẹ́ àti ìyípòdà fún ojúewé yìí nìyí fún ìrọ̀rùn:",
'uploadtext' => "Ẹ lọ fọ́ọ̀mù ìsàlẹ̀ láti ṣèrùsókè àwọn fáìlì.
Láti wò tàbí wá àwọn fáìlì àrùsókè tẹ́lẹ̀ ẹ lọ sí [[Special:FileList|àtòjọ àwọn fáìlì àrùsókè]], àwọn à(tùn)rùsókè náà jẹ́ kíkọọ́lẹ̀ nínú [[Special:Log/upload|àkọọ́lẹ̀ ìrùsókè]], àwọn ìparẹ́ nínú [[Special:Log/delete|àkọọ́lẹ̀ ìparẹ́]].

Láti fí fáìlì pọ̀mọ́ sínú ojúewé kan, ẹ lo àjápọ̀ bíi ìkan nínù àwọn ti ìsàlẹ̀ yìí:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fáìlì.jpg]]</nowiki></code>''' láti lo àtẹ̀jáde kíkún fáiø ọ̀hún
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fáìlì.png|200px|thumb|left|ìkọ̀rọ̀]]</nowiki></code>''' láti lo ìgbéhàn fífẹ̀ tó 200 pixel nínú àpótí ní apá ọwọ́ òsì pẹ̀lú 'ìkọ̀rọ̀' bíi ìjúwe
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Fáìlì.ogg]]</nowiki></code>''' láti ṣèjápọ̀ tààrà sí fáìlì náà láì sàgbéhàn fáìlì ọ̀hún",
'upload-permitted' => 'Àwọn irú fáìlì yíyọ̀nda: $1',
'upload-preferred' => 'Àwọn irú fáìlì fífẹ́ràn: $1',
'upload-prohibited' => 'Àwọn irú fáìlì dídènà: $1',
'uploadlog' => 'àkọọ́lẹ̀ ìrùsókè',
'uploadlogpage' => 'Àkọsílẹ̀ ìrùsókè',
'uploadlogpagetext' => 'Lábẹ́ yìí ni àkójọ àwọn ìrùsókè fáìlì áìpẹ́.
Ẹ wo [[Special:NewFiles|ọ̀dẹ̀dẹ̀ àwọn fáìlì tuntun]] fún àgbéwò aláfojúrí',
'filename' => 'Ọrúkọ fáìlì',
'filedesc' => 'Àkótán',
'fileuploadsummary' => 'Àkótán:',
'filereuploadsummary' => 'Àwọn àtúnṣe fáìlì:',
'filestatus' => 'Ipò ẹ̀tọ́àwòkọ:',
'filesource' => 'Orísun:',
'uploadedfiles' => 'Àwọn fáìlì ajẹ́rírùsókè',
'ignorewarning' => 'Fojúfo ìkìlọ̀ sì fi faili pamọ́',
'ignorewarnings' => 'Fojúfo ìkìlọ̀ tó wù kó jẹ́',
'minlength1' => 'Ó kéréjù àwọn orúkọ fáìlì gbọdọ̀ jẹ́ lẹ́tà kan.',
'illegalfilename' => 'Orúkọ fáìlì "$1" ní àwọn àmììkọ̀rọ̀ tí kò jẹ́ gbígbà láàyè nínú àkọlé ojúewé.
Ẹ jọ̀wọ́ ẹ tún fáìlì sọlórúkọ kì ẹ sì gbìyànjú láti tún rùúsókè.',
'filename-toolong' => 'Àwọn orúkọ fáìlì kò gbọdọ̀ gùnju 240 bytes lọ.',
'badfilename' => 'Orúkọ fáìlì ti yípadà sí "$1".',
'filetype-mime-mismatch' => 'Ìfàgùn fáìlì ".$1" kò ní ìbámu mọ́ irú MIME fáìlì náà ($2).',
'filetype-badmime' => 'Àwọn fáìlì MIME irú "$1" kò jẹ́ gbígbà láyè láti rù wọ́n sókè.',
'filetype-bad-ie-mime' => 'Ìrùsókè fáìlì yìí kò ṣeéṣe nítorípé Internet Explorer yíò ri bíi "$1", irú fáìlì ti kò gbà láàyè nítorípé ó léwu.',
'filetype-unwanted-type' => "'''\".\$1\"''' jẹ́ irú fáìlì àìfẹ́.
{{PLURAL:\$3|Irú fáìlì|Àwọn irú fáìlì}} tí à únfẹ́ ni \$2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|kìí ṣe|kìí ṣe àwọn}} irú fáìlì tí agbàláàyè.
{{PLURAL:$3|Irú|Àwọn irú}} fáìlì tí agbàláàyè ni $2.',
'filetype-missing' => 'Fáìlì yìí kò ní ìfàgùn (fún àpẹrẹ ".jpg").',
'empty-file' => 'Fáílì tí ẹ fúnsílẹ̀ jẹ́ òfo nínú.',
'file-too-large' => 'Fáílì tí ẹ fúnsílẹ̀ jẹ́ títóbijù',
'filename-tooshort' => 'Orúkọ fáílì kéréjú bó ṣe yẹ lọ.',
'filetype-banned' => 'Irú fáílì yìí ti jẹ́ dídí lọ́nà.',
'verification-error' => 'Fáìlì yìí kò kọjá ìfidájú fáìlì.',
'hookaborted' => 'Ìtúndáṣe tí ẹ fẹ́ ṣe ti jẹ́ dídálẹ́kun látọwọ́ ìfàgùn.',
'illegal-filename' => 'Orúkọ fáílì yìí kò jẹ́ gbígbàláàyè.',
'overwrite' => 'Ìkọsórí fáìlì tó wà kò jẹ́ gbígbà láàyè.',
'unknown-error' => 'Àsìṣe àìdámọ̀ kan ti ṣẹlẹ̀.',
'tmp-create-error' => 'Kò le dá fáìlì onígbàdíẹ̀.',
'tmp-write-error' => 'Àsìṣe kíkọ fáìlí onígbàdíẹ̀.',
'large-file' => 'O jẹ́ gbígbàníyànjú pé àwọn fáìlì ò gbọdọ̀ tóbi ju $1 lọ; 
fáìlì yìí jẹ́ $2.',
'largefileserver' => 'Fáìlì yìí tóbi ju ìtòsílẹ̀ ẹ̀rọ-ìwọ̀fà lọ.',
'emptyfile' => 'Fáìlì tí ẹ rùsókè dà bíi olófo.
Ó ṣe é ṣe pé ẹ si orúkọ rẹ̀ kọ.
Ẹ jọ̀wọ́ ẹ yẹ fáìlì náà wò bóyá òhun lẹ fẹ́ rùsókè.',
'windows-nonascii-filename' => 'Wiki yìí kò ní àtìlẹ́yìn fún àwọn orúkọ fáìlì pẹ̀lú àwọn àmììkọ̀rọ̀ àkànṣe.',
'fileexists' => 'Fáìlì kan tilẹ̀ wà pẹ̀lú orúkọ yìí, ẹ jọ̀wọ́ ẹ yẹ <strong>[[:$1]]</strong> wò tí kò bá dá yín lójú pé ẹ fẹ́ yipadà.
[[$1|thumb]]',
'filepageexists' => 'Ojúewé ìjúwe fún fáìlì yìí tilẹ̀ ti wà ní <strong>[[:$1]]</strong>, sùgbọ́n fáìlì kankan kò sí pẹ̀lú orúkọ yìí rárá. 
Àkótán tí ẹ kọ kò ní hàn lórí ojúewé ìjúwe náà.
Tí ẹ bá fẹ́ kí àkótán yín ó hàn níbẹ̀, ẹ gbọ́dọ̀ kọ ọ́ síbẹ̀ fún raara yín.
[[$1|thumb]]',
'fileexists-extension' => 'Fáìlì kan wà pẹ̀lú orúkọ tó jọra: [[$2|thumb]]
* Orúkọ fáìlì ìrùsókè: <strong>[[:$1]]</strong>
* Orúkọ fáìlì tó wà: <strong>[[:$2]]</strong>
Ẹ jọ̀wọ́ ẹ mú orúkọ tó yàtọ̀.',
'fileexists-thumbnail-yes' => "Fáìlì náà dàbí pé ó jẹ́ àwòrán ìtóbi onírẹ̀sílẹ̀ ''(thumbnail)''.
[[$1|thumb]]
Ẹ jọ̀wọ́ ẹ yẹ fáìlì <strong>[[:$1]]</strong> wò.
Tí fáìlì náà bá jẹ́ àwòrán kannáà kò pọndandan láti ṣe ìrùsókè thumbnail míràn.",
'file-thumbnail-no' => "Orúkọ fáìlì náà bẹ̀rẹ̀ pẹ̀lú <strong>$1</strong>.
Ó dàbí pé ó jẹ́ àwòrán ìtóbi onírẹ̀sílẹ̀ ''(thumbnail)''.
Tí ẹ bá ní àwòrán yìí ní ìgbéhàn kúnkún ẹ ṣe ìrùsókè èyí, bíbẹ́ẹ̀kọ́ ẹ jọ̀wọ́ ẹ yí orúkọ fáìlì náà padà sí òmíràn.",
'fileexists-forbidden' => 'Fáìlì kan wà tó ní orúkọ yìí, bẹ́ẹ̀sìni kò ṣe é kọ lélórí.
Tí ẹ bá síbẹ̀ fẹ́ ṣe ìrùsókè fáìlì yín yìí, ẹ jọ̀wọ́ ẹ padà sẹ́yìn lọ fún un ní orúkọ tuntun.
[[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Fáìlì kan wà tó ní orúkọ yìí nínú ibi-àkójọ fáìlì àjọpín.
Tí ẹ bá síbẹ̀ fẹ́ ṣe ìrùsókè fáìlì yín yìí, ẹ jọ̀wọ́ ẹ padà sẹ́yìn lọ fún un ní orúkọ tuntun.
[[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Fáìlì yìí jẹ́ àwòkọ kan {{PLURAL:$1|fáìlì yìí|àwọn fáìlì wọ̀nyí}}:',
'file-deleted-duplicate' => 'Fáìlì kan tó jọ fáìlì yìí ([[:$1]]) ti jẹ́ píparẹ́ tẹ́lẹ̀.
Ẹ gbọ́dọ̀ yẹ ìtàn ìparẹ́ fáìlì náà wò kí ẹ tó gbéra láti tún un rùsókè.',
'uploadwarning' => 'Ìkìlọ̀ ìrùsókè',
'uploadwarning-text' => 'Ẹ jọ̀wọ́ ẹ tún ìjúwe fáìlì ìsàlẹ̀ náà ṣe kí ẹ tó gbìyànjú lẹ́ẹ̀kan síi.',
'savefile' => 'Ìmúpamọ́ fáìlì',
'uploadedimage' => '"[[$1]]" ti jẹ́rírùsókè',
'overwroteimage' => 'ṣe ìrùsókè àtúnyẹ̀wò tuntun "[[$1]]"',
'uploaddisabled' => 'Dídálẹ́kun àwọn ìrùsókè.',
'copyuploaddisabled' => 'Ìdálẹ́kun ìrùsókè pẹ̀lú URL.',
'uploadfromurl-queued' => 'Ìrùsókè yín ti wà lóríìlà.',
'uploaddisabledtext' => 'Dídálẹ́kun àwọn ìrùsókè fáìlì.',
'php-uploaddisabledtext' => 'Ìrùsókè fáìlì jẹ́ dídálẹ́kun nínú PHP.
Ẹ jọ̀wọ́ bojúwo ìtò ìrùsókè fáìlì.',
'uploadscripted' => 'Fáìlì yìí ní àmìọ̀rọ̀ HTML tàbí ìkọ̀rọ̀ tó le jẹ́ títúmọ̀ pẹ̀lú àsìṣe látọwọ́ àwòtakùn.',
'uploadvirus' => 'Fáìlì náà ní èràn nínú!
Ẹ̀kúnrẹ́rẹ́: $1',
'uploadjava' => 'Fáìlì náà jẹ́ fáìlì ZIP kan tó ní fáìlì .class ti Java kan.
A kò fàyè gba ìrùsókè àwọn fáìlì Java, nítorípé wọ́n le fàá kí àbò kó mọ́ ṣiṣẹ́.',
'upload-source' => 'Fáìlì ìsun',
'sourcefilename' => 'Orúkọ fáìlì orísun:',
'sourceurl' => 'Orísun URL:',
'destfilename' => 'Ìdópin orúkọ fáìlì:',
'upload-maxfilesize' => 'Púpọ̀jùlọ ìtóbi fáìlì: $1',
'upload-description' => 'Ìjúwe fáìlì',
'upload-options' => 'Àwọn àṣàyàn ìrùsókè',
'watchthisupload' => "M'ójútó fáilì yìí",
'filewasdeleted' => 'Fáìlì kan tó ní orúkọ yìí ti jẹ́ rírùsòkè tẹ́lẹ̀ tó sì ti jẹ́ píparẹ́ lẹ́yìn náà.
Ẹ gbọ́dọ̀ yẹ $1 wò kí ẹ tó gbéra láti rù ú sókè lẹ́ẹ̀kan síi.',
'filename-bad-prefix' => "Orúkọ fáìlì tí ẹ̀ únrùsókè bẹ̀rẹ̀ pẹ̀lú '''\"\$1\"''', tó jẹ́ orúkọ aláì-júwe tí únsábà jẹ́ fífikún fúnrara rẹ̀ látọwọ́ àwọn kámẹ́rà ẹlẹ́yọìka.
Ẹ jọ̀wọ́ ẹ mú orúkọ ìjúwe tódáa fún fáìlì yín.",
'upload-success-subj' => 'Ìjásírere ìrùsókè',
'upload-success-msg' => 'Ìrùsókè yín láti [$2] ti jásírere. Ó ṣeéwò níbí: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Ìṣòro ìrùsókè',
'upload-failure-msg' => 'Ìṣòro kan wà pẹ̀lú fọ́ọ̀mù ìrùsókè yín [$2]:

$1',
'upload-warning-subj' => 'Ìkìlọ̀ ìrùsókè',
'upload-warning-msg' => 'Ìṣòro kan wà pẹ̀lú ìrùsókè yín láti [$2]. Ẹ le padà sí orí [[Special:Upload/stash/$1|fọ́ọ́mù ìrùsókè]] láti ṣàtúnṣe ìṣòro náà.',

'upload-proto-error' => 'Prótókólù àìtọ́',
'upload-proto-error-text' => 'Ìrùsókè ọ̀ọ́kán pọndandan pé kí àwọn URL ó bẹ̀rẹ̀ pẹ̀lú <code>http://</code> tàbí <code>ftp://</code>.',
'upload-file-error' => 'Àsiṣe ínú',
'upload-file-error-text' => 'Àsìṣe abẹ́inú wáyé nígbà ìgbéra láti dá fáìlì onígbàdíẹ̀ kan lórí ẹ̀rọ-ìwọ̀fà náà.
Ẹ jọ̀wọ́ ẹ bẹ [[Special:ListUsers/sysop|olùmójútó]] kan wò fún ìrànlọ́wọ́.',
'upload-misc-error' => 'Àsìṣe àìmọ̀ ìrùsókè',
'upload-misc-error-text' => 'Àsìṣe àìmọ̀ kan ṣẹlẹ̀ lásìkò ìrùsókè.
Ẹ jọ̀wọ́ ẹ ridájú pé URL náà jẹ́ oníbáámu, tó sí ṣe é bọ́sí, kí ẹ tó tún gbìyànjú.
Tí ìṣòro náà ò bá jáwọ́, ẹ bẹ [[Special:ListUsers/sysop|olùmójútó]] kan wò fún ìrànlọ́wọ́.',
'upload-too-many-redirects' => 'URL náà ní àwọn àtúnjúwe pípọ̀jùlọ',
'upload-unknown-size' => 'Iye ìtóbi kòsí',
'upload-http-error' => 'Àṣìṣe HTTP ti ṣẹlẹ̀: $1',
'upload-copy-upload-invalid-domain' => 'Àwòkọ àwọn ìrùsókè kò sí láti apá yìí.',

# File backend
'backend-fail-stream' => 'Kò le ṣe ìgbéhànjáde fáìlì "$1".',
'backend-fail-backup' => 'Kò le ṣe àwòkọpamọ́ fáìlì "$1".',
'backend-fail-notexists' => 'Fáìlì $1 kò sí.',
'backend-fail-hashes' => 'Kò le gba àwọn àmí hash fáìlì fún ìfiwéra.',
'backend-fail-notsame' => 'Fáìlì aláìjọra kan pilẹ̀ ti wà ní $1.',
'backend-fail-invalidpath' => '$1 kìí ṣe ojúọ̀nà ibi-ìkópamọ́ oníìbámu.',
'backend-fail-delete' => 'Ìparẹ́ fáìlì $1 kò ṣe é ṣe.',
'backend-fail-describe' => 'Kò le yí metadátà padà fún fáìlì "$1".',
'backend-fail-alreadyexists' => 'Fáìlì $1 pilẹ̀ ti wà.',
'backend-fail-store' => 'Kò le ṣe ìkópamọ́ fáìlì $1 sí $2.',
'backend-fail-copy' => 'Àwòkọ faili $1 sí $2 kò ṣe é ṣe.',
'backend-fail-move' => 'Ìyípòdà faili $1 sí $2 kò ṣe é ṣe.',
'backend-fail-opentemp' => 'Kò le sí fáìlì onígbàdíẹ̀.',
'backend-fail-writetemp' => 'Kò le kọ sínú fáìlì onígbàdíẹ̀.',
'backend-fail-closetemp' => 'Kò le de fáìlì onígbàdíẹ̀.',
'backend-fail-read' => 'Kò le ka fáìlì "$1".',
'backend-fail-create' => 'Kò le kọ fáìlì $1.',
'backend-fail-maxsize' => 'Kò le kọ fáìlì "$1" ntorípé o tóbi ju {{PLURAL:$2|byte kan|byte $2}} lọ.',
'backend-fail-readonly' => 'Ibi ìfipamọ́ "$1" jẹ́ kíà nìkan báyìí. Ìdí rẹ̀ ni: "\'\'$2\'\'"',
'backend-fail-synced' => 'Fáìlì "$1" wà ní àyè àìbáramu nínú àwọn ibi ìfipamọ́.',
'backend-fail-connect' => 'Kò le sorapọ̀ mọ́ ibi ìfipamọ́ "$1".',
'backend-fail-internal' => 'Àsìṣe àìdámọ̀ ṣẹlẹ̀ nínú ibi ìfipamọ́ "$1".',
'backend-fail-contenttype' => 'Irú àkóónú fáìlì fún ìmúpamọ́ sí "$1" kò ṣe é sọ.',
'backend-fail-batchsize' => 'Ibi ìfipamọ́ gba àdìpọ̀ {{PLURAL:$1|ìmúṣe|ìmúṣe}} fáìlì $1; ẹ̀kun jẹ́ {{PLURAL:$2|ìmúṣe|ìmúṣe}} $2.',
'backend-fail-usable' => 'Kò le kà tàbí kọ fáìlì "$1" nítorí àìní ìyọ̀nda tàbí àìsí àpò/ìkóhunsí.',

# File journal errors
'filejournal-fail-dbconnect' => 'Kò le sorapọ̀ mọ́ ibùdó dátà fún ibi ìfipamọ́ "$1".',
'filejournal-fail-dbquery' => 'Kò le sọ ibùdó dátà di ọ̀tun fún ibi ìfipamọ́ "$1".',

# Lock manager
'lockmanager-notlocked' => 'Kò le sí àgádágodo "$1" sílẹ̀; kò jẹ́ dídè.',
'lockmanager-fail-closelock' => 'Kò le pa àgádágodo fáìlì de fún "$1".',
'lockmanager-fail-deletelock' => 'Kò le pa àgádágodo fáìlì rẹ́ fún "$1".',
'lockmanager-fail-acquirelock' => 'Kò le gba àgádágodo fáìlì lò fún "$1".',
'lockmanager-fail-openlock' => 'Kò le sí àgádágodo fáìlì sílẹ̀ fún "$1".',
'lockmanager-fail-releaselock' => 'Kò le fi àgádágodo fáìlì sílẹ̀ fún "$1".',
'lockmanager-fail-db-bucket' => 'Kò le pàdé àgádágodo ibùdó dátà nínú garawa $1.',
'lockmanager-fail-db-release' => 'Kò le fi àwọn àgádágodo sílẹ̀ lórí ìbùdó dátà $1.',
'lockmanager-fail-svr-acquire' => 'Kò sí àgádágodo fún ẹ̀rọ-ìpèsè $1.',
'lockmanager-fail-svr-release' => 'Kò le fi àwọn àgádágodo sílẹ̀ lórí ẹ̀rọ-ìwọ̀fà $1.',

# ZipDirectoryReader
'zip-file-open-error' => 'Àsìṣe kan ṣẹlẹ̀ lásìkò ìsísílẹ̀ fáìlì náà fún ìyẹ̀wò ZIP.',
'zip-wrong-format' => 'Fáìlì tí a tọ́kasí kì í ṣe fáìlì ZIP.',
'zip-bad' => 'Fáìlì náà jẹ́ fáìlì ZIP tó ti bàjẹ́ tàbí tí kò ṣe é kà.
Kò ṣe é yẹ̀wò dáadáa fún àbò.',
'zip-unsupported' => 'Fáìlì náà jẹ́ fáìlì ZIP kan tó únlo àwọn ojúàbùdá ZIP tí MediaWiki kò tì lẹ́yìn.
Kò ṣe é yẹ̀wò fún àbò.',

# Special:UploadStash
'uploadstash' => 'Ìrùsókè àkódání',
'uploadstash-summary' => 'Ojúewé yí jẹ́ ibi ìbọ́sí sí àwọn fáìlì tó jẹ́ rírùsókè (tàbí tí wọ́n únjẹ́ rírùsókè) sùgbọ́n tí wọn kò tíì jẹ́ títẹ̀jáde sí wiki. Oníṣe tó rù wọ́n sókè nìkan ló le rí àwọn fáìlì wọ̀nyí.',
'uploadstash-clear' => 'Pa àwọn fáìlì àkódání rẹ́',
'uploadstash-nofiles' => 'Ẹ kò ní fáìlì àkódání kankan',
'uploadstash-badtoken' => 'Ohun tí ẹ fẹ́ ṣe kò yọrí sí rere, bóyá agbára ìṣàtúnṣe yín ti parí. Ẹ tún dán wò.',
'uploadstash-errclear' => 'Ìparẹ́ àwọn fáìlì náà kò yorísírere.',
'uploadstash-refresh' => 'Àtúnraṣe àtòjọ àwọn fáìlì',

# img_auth script messages
'img-auth-accessdenied' => 'Ìdínà igbàwọlé',
'img-auth-nopathinfo' => 'Kò sí PATH_INFO.
Ẹ̀rọ-ìwọ̀fà yín kò létò láti mú dátà yìí kọjá.
O ṣe é ṣe kó jẹ́ ti CGI tí kò ní ìtìlẹ́yìn fún img_auth.
Ẹ wo [https://www.mediawiki.org/wiki/Manual:Image_Authorization àṣẹ àwòrán.]',
'img-auth-notindir' => 'Ojúọ̀nà tí ẹ tọrọ kò ní nínú àpò ìrùsókè alátòsílẹ̀.',
'img-auth-badtitle' => 'Àkọlé oníìbámu kò ṣe é dá láti "$1".',
'img-auth-nologinnWL' => 'Ẹ kò tíì wọlẹ́ bẹ́ẹ̀sìni "$1" kò sí nínú àtòjọ funfun.',
'img-auth-nofile' => 'Fáìlì "$1" kò sí.',
'img-auth-isdir' => 'Ẹ̀ úngbira láti bọ́sí àpò "$1".
Ìbọ́sí fáìlì nìkan ló jẹ́ gbígbà láyè.',
'img-auth-streaming' => 'Ó únṣe ìgbéhànjáde "$1".',
'img-auth-public' => 'Ìmúṣe img_auth.php ni láti ṣe ìtìjáde àwọn fáìlì láti ọ̀dọ̀ wiki àdáni.
Wiki eléyìí jẹ́ títòólẹ̀ bíi wiki ìgboro.
Fún àbò kúnkún, img_auth.php ti jẹ́ dídálẹ́kun.',
'img-auth-noread' => 'Oníṣe kò ní ààyè láti wo "$1".',
'img-auth-bad-query-string' => 'URL náà ní ìsọpọ̀-ọ̀rọ̀ ìtọrọ aláìníìbámu.',

# HTTP errors
'http-invalid-url' => 'URL àìtọ́: $1',
'http-invalid-scheme' => 'Àwọn URL pẹ̀lú ètò "$1" kò jẹ́ títìlẹ́yìn.',
'http-request-error' => 'Ìtọrọ HTTP kùnà nítorí àsìṣe àìmọ̀.',
'http-read-error' => 'Àṣìṣe kíkà HTTP.',
'http-timed-out' => 'Àsìkò ìtọrọ HTTP ti tán.',
'http-curl-error' => 'Àsìṣe ìmúwá URL: $1',
'http-host-unreachable' => 'Kò le dé ibi URL.',
'http-bad-status' => 'Ìṣòro kan ṣẹlẹ̀ nìgbà ìtọrọ HTTP: $1, $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Kò le jámọ́ URL',
'upload-curl-error6-text' => 'URL tí ẹ pèsè kò ṣe é bọ́sí.
Ẹ jọ̀wọ́ ẹ tún un yẹ̀wò pé URL náà jẹ́ òótọ́, ó sí únṣiṣẹ́.',
'upload-curl-error28' => 'Àsìkò ìrùsókè ti parí',
'upload-curl-error28-text' => 'Ibiìtakùn pẹ́ kó tó dáhùn.
Ẹ ríi dájú pé ibiìtakùn náà únṣiṣẹ́, ẹ dúró fún ìgbà díẹ̀ kí ẹ tó tún gbìyànjú.
Bóyá kí ẹ sì tún gbìyànjú nìgbà tí èrò kò ní pọ̀.',

'license' => 'Ìwé àṣẹ:',
'license-header' => 'Ìwé àṣẹ',
'nolicense' => 'Ìkankan kò jẹ́ yíyàn',
'license-nopreview' => '(Àkọ́yẹ̀wò kò sí)',
'upload_source_url' => ' (URL oníìbámu kan tó ṣe é bọ́sí látigboro)',
'upload_source_file' => '(fáìlì lórí kọ̀mpútà yín)',

# Special:ListFiles
'listfiles-summary' => 'Ojúewé pàtàkì yìí ṣe àfihàn gbogbo àwọn fáìlì àrùsókè.
Tó bá jẹ́ jíjọ̀ gẹ́gẹ́bí oníṣe, àwọn fáìlì tí oníṣe náà tí ru àtúnyẹ̀wò tuntun sòkè sí nìkan ni yíò hàn.',
'listfiles_search_for' => 'Ṣàwàrí fún orúkọ amóhùnmáwòrán:',
'imgfile' => 'fáìlì',
'listfiles' => 'Àkójọ 	fáìlì',
'listfiles_thumb' => 'Àwòrán kékeré',
'listfiles_date' => 'Ọjọ́ọdún',
'listfiles_name' => 'Orúkọ',
'listfiles_user' => 'Oníṣe',
'listfiles_size' => 'Ìtóbi',
'listfiles_description' => 'Ìjúwe',
'listfiles_count' => 'Àwọn àtẹ̀jáde',

# File description page
'file-anchor-link' => 'Fáìlì',
'filehist' => 'Ìtàn fáìlì',
'filehist-help' => 'Ẹ kan kliki lórí ọjọ́ọdún/àkókò kan láti wo fáìlì ọ̀ún bó ṣe hàn ní àkókò na.',
'filehist-deleteall' => 'ìparẹ́ gbogbo wọn',
'filehist-deleteone' => 'paarẹ́',
'filehist-revert' => 'dápadà',
'filehist-current' => 'lọ́wọ́',
'filehist-datetime' => 'Ọjọ́ọdún/Àkókò',
'filehist-thumb' => 'Àwòrán kékeré',
'filehist-thumbtext' => 'Àwòrán kékeré fún ní $1',
'filehist-nothumb' => 'Kò sí àwòrán kékeré',
'filehist-user' => 'Oníṣe',
'filehist-dimensions' => 'Àwọn ìwọ̀n',
'filehist-filesize' => 'Ìtóbi fáìlì',
'filehist-comment' => 'Àríwí',
'filehist-missing' => 'Fáìlì kò sí',
'imagelinks' => 'Ìlò fáìlì',
'linkstoimage' => '{{PLURAL:$1|Ojúewé kan yìí|Àwọn ojúewé $1 wọ̀nyí}} jápọ̀ mọ́ fáìlì yí:',
'linkstoimage-more' => '{{PLURAL:$1|Ojúewé|Àwọn ojúewé}} tó pọ̀ju $1 lọ jápọ̀ mọ́ fáìlì yìí.
Àkòjọ ìṣàlẹ̀ yìí ṣàfihàn {{PLURAL:$1|ojúewé àkọ́kọ́|ojúewé $1 àkọ́kọ́}} tó jápọ̀ mọ́ fáìlì yìí nìkan.
[[Special:WhatLinksHere/$2|Àkójọ kíkúnrẹ́rẹ́]] wà nígbèéwọ́.',
'nolinkstoimage' => 'Kò sí ojúewé tó jápọ̀ mọ́ fáìlì yìí.',
'morelinkstoimage' => 'Ìwòrán [[Special:WhatLinksHere/$1|àwọn ìjápọ̀ míhìn]] sí fáìlì yìí.',
'linkstoimage-redirect' => '$1 (àtúnjúwe fáìlì) $2',
'duplicatesoffile' => '{{PLURAL:$1|Fáìlì ìsàlẹ̀|Àwọn fáìli ìsàlẹ̀ $1}} yìí jẹ́ àwòkọ fáìlì yìí ([[Special:FileDuplicateSearch/$2|ẹ̀kúnrẹ́rẹ́]]):',
'sharedupload' => 'Fáìlì yìí jẹ́ ìrùsókè láti $1 à ṣì le pin pẹ̀lú àwọn iṣẹ́owọ́ mìíràn tí wọ́n n lòó.',
'sharedupload-desc-there' => 'Fáìlì yìí wá látí $1 ó sí ṣe é lò nínú àwọn iṣẹ́ọwọ́ míràn.
Ẹ jọ̀wọ́ ẹ wọ [$2 ojúewé ìjúwe fáìlì] fún ẹ̀kúnrẹ́rẹ́.',
'sharedupload-desc-here' => 'Fáìlì yìí wá láti $1, ó sì ṣe é lò nínú àwọn iṣẹ́ ọwọ́ míràn.
Ìjúwe lórí [$2 ojúewé ìjúwe fáìlì] rẹ̀ níbẹ̀ nìyí lábẹ́.',
'sharedupload-desc-edit' => 'Fáìlì yìí wá láti $1, ó sì ṣe é lò nínú àwọn iṣẹ́ ọwọ́ míràn. 
Ó ṣe é ṣe kó jẹ́ pé ẹ fẹ́ ṣàtúnṣe ìjúwe lórí [$2 ojúewé ìjúwe fáìlì] rẹ̀ níbẹ̀.',
'sharedupload-desc-create' => 'Fáìlì yìí wá láti $1, ó sì ṣe é ṣe pé ó jẹ́ lílò nínú àwọn iṣẹ́ ọwọ́ míràn. 
Ó ṣe é ṣe kó jẹ́ pé ẹ fẹ́ ṣàtúnṣe ìjúwe lórí [$2 ojúewé ìjúwe fáìlì] rẹ̀ níbẹ̀.',
'filepage-nofile' => 'Kò sí fáìlì pẹ̀lú orúkọ yìí.',
'filepage-nofile-link' => 'Kò sí fáìlì pẹ̀lú orúkọ yìí, sùgbọ́n ẹ le [$1 rùúsókè].',
'uploadnewversion-linktext' => 'Ẹ ṣe ìrùsókè àtúnṣe tuntun fáìlì yìí',
'shared-repo-from' => 'láti $1',
'shared-repo' => 'ibi-àkójọ àjọpín kan',
'upload-disallowed-here' => 'Ẹ kò le ṣe ìkọlélórí fáìlì yìí.',

# File reversion
'filerevert' => 'Dá $1 padà',
'filerevert-legend' => 'Dá fáìlì padà',
'filerevert-intro' => "Ẹ ti fẹ́ dá fáìlì '''[[Media:$1|$1]]''' padà sí [$4 àtẹ̀jáde bó ṣe wà ní $3, $2].",
'filerevert-comment' => 'Ìdíẹ̀:',
'filerevert-defaultcomment' => 'Jẹ́ dídápadà sí àtẹ̀jáde bó ṣe wà ní $2, $1',
'filerevert-submit' => 'Dápadà',
'filerevert-success' => "'''[[Media:$1|$1]]''' ti jẹ́ dídápadà sí [$4 àtẹ̀jáde bó ṣe wà ní $3, $2].",
'filerevert-badversion' => 'Kò sí àtúnyẹ̀wò abẹ́lé tẹ́lẹ̀ fún fáìlì yìí pẹ̀lú àmì àsìkò tí ẹ pèsè.',

# File deletion
'filedelete' => 'Ìparẹ́ $1',
'filedelete-legend' => 'Ìparẹ́ fáìlì',
'filedelete-intro' => "Ẹ ti fẹ́ pa fáìlì '''[[Media:$1|$1]]''' àti gbogbo ìtàn rẹ̀ rẹ́.",
'filedelete-intro-old' => "Ẹ̀ únpa àtúnyẹ̀wò  '''[[Media:$1|$1]]''' rẹ́ bó ṣe wà ní [$4 $3, $2].",
'filedelete-comment' => 'Ìdíẹ̀:',
'filedelete-submit' => 'Paarẹ́',
'filedelete-success' => "'''$1''' ti jẹ́ píparẹ́.",
'filedelete-success-old' => "Àtúnyẹ̀wò '''[[Media:$1|$1]]''' bó ṣe wà ní $3, $2 ti jẹ́ píparẹ́.",
'filedelete-nofile' => "'''$1''' kò sí.",
'filedelete-nofile-old' => "Kò sí àtúnyẹ̀wò ìpamọ́ '''$1''' pẹ̀lú àwọn ìdámọ̀ tí ẹ tọ́kasí.",
'filedelete-otherreason' => 'Ìdíẹ̀ míràn/àfikún:',
'filedelete-reason-otherlist' => 'Ìdí mìíràn',
'filedelete-reason-dropdown' => '*Àwọn ìdí fún ìparẹ́ 
**Ìtakùnà ẹ̀tọ́àwòkọ
**Fáìlì ẹ̀mejì',
'filedelete-edit-reasonlist' => 'Àtúnṣe àwọn ìdí ìparẹ́',
'filedelete-maintenance' => 'Ìparẹ àti ìdápadà àwọn fáìlì ìgbàdíẹ̀ jẹ́ dídálẹ́kun nígbà ìṣètọ́jú.',
'filedelete-maintenance-title' => 'Fáìlì náà kò ṣeé parẹ́',

# MIME search
'mimesearch' => 'àwáàrí pẹ́lú MIME',
'mimesearch-summary' => 'Ojúewé yìí únṣe ìgbàláàyè ajọ̀ àwọn fáìlì fún irú MIME wọn.
Ìtìbọnú: contenttype/subtype, f.a. <code>image/jpeg</code>.',
'mimetype' => 'irú MIME:',
'download' => 'ìrùsílẹ̀',

# Unwatched pages
'unwatchedpages' => 'Àwọn ojúewé aláìṣọ́',

# List redirects
'listredirects' => 'Àkójọ àwọn àtúnjúwe',

# Unused templates
'unusedtemplates' => 'Àdàkọ àìlò',
'unusedtemplatestext' => 'Ojúewé yìí ṣe àtòjọ gbogbo àwọn ojúewé inú orúkọàyè {{ns:template}} tí wọn kò jẹ́ fífikún inú ojúewé míràn.
Ẹ ṣe rántí láti yẹ ẹ́ wò bóyá o ní àjápọ̀ míràn sí àdàkọ kí ẹ tó pa á rẹ́.',
'unusedtemplateswlh' => 'àwọn ìjápọ̀ míràn',

# Random page
'randompage' => 'Ojúewé àrìnàkò',
'randompage-nopages' => 'Kò sí ojúewé kankan nínú {{PLURAL:$2|orúkọàyè|àwọn orúkọàyè}} ìsàlẹ̀ yìí: $1',

# Random redirect
'randomredirect' => 'Àtúndarí àrìnàkò',
'randomredirect-nopages' => 'Kò sí àtúnjúwe kankan nínú orúkọàyè "$1".',

# Statistics
'statistics' => 'Àwọn statistiki',
'statistics-header-pages' => 'Àwọn statistiki ojúewé',
'statistics-header-edits' => 'Àwọn statistiki àtúnṣe',
'statistics-header-views' => 'Ẹ wo àwọn statístíkì',
'statistics-header-users' => 'Àwọn statistiki oníṣe',
'statistics-header-hooks' => 'Àwọn statistiki míràn',
'statistics-articles' => 'Àwọn ojúewé àkóónú',
'statistics-pages' => 'Àwọn ojúewé',
'statistics-pages-desc' => 'Gbogbo àwọn ojúewé inú wiki, lámùpọ́ọ̀ mọ́ àwọn ojúewé ọ̀rọ̀, àwọn àtúnjúwe, at. bb.lo',
'statistics-files' => 'Àwọn fáìlì ajẹ́rírùsókè',
'statistics-edits' => 'Àwọn iye àtúnṣe ojúewé láti ìgbà tí {{SITENAME}} ti bẹ̀rẹ̀',
'statistics-edits-average' => 'Iye àtúnṣe apínlàrin fún ojúewé kọ̀ọ̀kan',
'statistics-views-total' => 'Àpapọ̀ iye ìwò',
'statistics-views-total-desc' => 'Ìwò sí àwọn ojúewé tí kò sí àti àwọn ojúewé pàtàkì kò jẹ́ àmúpọ̀.',
'statistics-views-peredit' => 'Iye ìwò fún àtúnṣe kọ̀ọ̀kan',
'statistics-users' => '[[Special:ListUsers|Àwọn oníṣe]] ajẹ́fífilórúkọsílẹ̀',
'statistics-users-active' => 'Àwọn oníṣe agbéṣe',
'statistics-users-active-desc' => 'Àwọn oníṣe tí wọ́n ti ṣe ìgbéṣe kan ní {{PLURAL:$1|ọjọ́ kan|ọjọ́ $1}} sẹ́yìn',
'statistics-mostpopular' => 'Àwọn ojúewé tí wọ́n jẹ́ wíwò jùlọ',

'disambiguations' => 'Àwọn ojúewé tó jápọ̀ mọ́ àwọn ojúewé ìṣeojútùú',
'disambiguationspage' => 'Template:ojútùú',
'disambiguations-text' => "Àwọn ojúewé ìsàlẹ̀ yìí, ó kéréjù ní àjápọ̀ kan sí '''ojúewé ìṣeojúùtú'''.
Ó yẹ kí wọn ó jápọ̀ sí ojúewé tó yẹ wọ́n.<br />
Ojúewé kan jẹ́ ṣíṣe bíi ojúewé ìṣeojúùtú tí ó bá lo àdàkọ tó jápọ̀ láti [[MediaWiki:Disambiguationspage]].",

'doubleredirects' => 'Àwọn àtúnjúwe ẹ̀mẹjì',
'doubleredirectstext' => 'Ojúewé yìí ṣe àtòjọ àwọn ojúewé tó ṣe àtúnjúwe sí àwọn ojúewé àtúnjúwe míràn. 
Oríìlà kọ̀ọ̀kan ní àjápọ̀ sí àtúnjúwe àkọ́kọ́ àti èkejì, àti bákannáà ibi tí àtúnjúwe kejì tókasí, tó jẹ́ pé òhun ""gangan" ni ojúewé ìtọ́kasí tó yẹ kí àtúnjúwe àkọ́kọ́ nawọ́ sí.
Àwọn ìkọsínú <del>fífagi lé lórí</del> ti jẹ́ ṣíṣe ojútùú.',
'double-redirect-fixed-move' => '[[$1]] ti yípò padà.
Ó ti ṣe àtúnjúwe sí [[$2]].',
'double-redirect-fixed-maintenance' => 'Óún ṣe àtúnṣe àtúnjúwe ẹ̀mẹjì láti [[$1]] sí [[$2]].',
'double-redirect-fixer' => 'Asẹàtúnṣe àtúnjúwe',

'brokenredirects' => 'Àwọn àtúnjúwe tótigé',
'brokenredirectstext' => 'Àwọn ìsàlẹ̀ yìí ṣe àtúnjúwe àjápọ̀ sí àwọn ojúewé tí kò sí:',
'brokenredirects-edit' => 'àtúnṣe',
'brokenredirects-delete' => 'ìparẹ́',

'withoutinterwiki' => 'Àwọn ojúewé tí kò ní ìjápọ̀ èdè',
'withoutinterwiki-summary' => 'Àwọn ojúewé ìsàlẹ̀ wọ̀nyì kò ṣe ìjápọ̀ mọ́ onírúirú èdè míràn.',
'withoutinterwiki-legend' => 'Àlẹ̀mọ́wájú',
'withoutinterwiki-submit' => 'Ìfihàn',

'fewestrevisions' => 'Àwọn ojúewé pẹ̀lú àwọn àtúnyẹ̀wọ̀ tókéréjù',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories' => '{{PLURAL:$1|ẹ̀ka|àwọn ẹ̀ka}} $1',
'ninterwikis' => '{{PLURAL:$1|interwiki|àwọn interwiki}} $1',
'nlinks' => '{{PLURAL:$1|ìjápọ̀|àwọn ìjápọ̀}} $1',
'nmembers' => '{{PLURAL:$1|ará|àwọn ará}} $1',
'nrevisions' => '{{PLURAL:$1|àtúnyẹ̀wò|àwọn àtúnyẹ̀wò}} $1',
'nviews' => '{{PLURAL:$1|Ìwò|Àwọn ìwò}} $1',
'nimagelinks' => 'Lílò lórí {{PLURAL:$1|ojúewé|àwọn ojúewé}} $1',
'ntransclusions' => 'lílò lórí {{PLURAL:$1|ojúewé|àwọn ojúewé}} $1',
'specialpage-empty' => 'Kò sí àwọn èsì kankan fún ìjábọ̀ yìí.',
'lonelypages' => 'Àwọn ojúewé aláìlóbìí',
'lonelypagestext' => 'Àwọn ojúewé wọ̀nyí kò ní ìjápọ̀ láti ọ̀dọ̀ tàbí ìdàpọ̀ mọ́ àwọn ojúewé míràn nínú {{SITENAME}}.',
'uncategorizedpages' => 'Àwọn ojúewé aláìlẹ́ka',
'uncategorizedcategories' => 'Àwọn ẹ̀ka aláìlẹ́ka',
'uncategorizedimages' => 'Àwọn faili aláìlẹ́ka',
'uncategorizedtemplates' => 'Àwọn àdàkọ aláìlẹ́ka',
'unusedcategories' => 'Ẹ̀ka àìlò',
'unusedimages' => 'Faili àìlò',
'popularpages' => 'Ojúewé tógbajúmọ̀',
'wantedcategories' => 'Àwọn ẹ̀ka wíwá',
'wantedpages' => 'Àwọn ojúewé àìsí',
'wantedpages-badtitle' => 'Àkọlé aláìníìbámu nínú ìtò èsì: $1',
'wantedfiles' => 'Àwọn fáìlì àìsí',
'wantedfiletext-cat' => 'Àwọn fáìlì ìsàlẹ̀ wọ̀nyí jẹ́ lílò sùgbọ́n wọn kò sí. Àwọn fáìlì láti ibi-àkósí òkèrè le jẹ́ títò síbẹ̀ bótilẹ̀jẹ́pé wọ́n wà. Ìrú àwọn àdájú irọ́ báhun yíò jẹ́ <del>fífagi lé lórí</del>. Láfikún, àwọn ojúewé tí wọ́n ní fáìlì tí kò sí nínú jẹ́ títòjọ sínú [[:$1]].',
'wantedfiletext-nocat' => 'Àwọn fáìlì ìsàlẹ̀ wọ̀nyí jẹ́ lílò sùgbọ́n wọn kò sí. Àwọn fáìlì láti ibi-àkósí òkèrè le jẹ́ títò síbẹ̀ bótilẹ̀jẹ́pé wọ́n wà. Ìrú àwọn àdájú irọ́ báhun yíò jẹ́ <del>fífagi lé lórí</del>.',
'wantedtemplates' => 'Àwọn àdàkọ àìsí',
'mostlinked' => 'Àwọn ojúewé tó ní ìjápọ̀ mọ́ jùlọ',
'mostlinkedcategories' => 'Àwọn ẹ̀ka tó ní ìjápọ̀ mọ́ jùlọ',
'mostlinkedtemplates' => 'Àwọn àdákọ tó ní ìjápọ̀mọ́ jùlọ',
'mostcategories' => 'Àwọn ojúewé pẹ̀lú àwọn ẹ̀ka tópọ̀jùlọ',
'mostimages' => 'Àwọn fáìlì tó ní ìjápọ̀mọ́ jùlọ',
'mostinterwikis' => 'Àwọn ojúewé tó ní ìjápọ̀mọ́ra wiki tó pọ̀jùlọ',
'mostrevisions' => 'Àwọn ojúewé pẹ̀lu àwọn àtúnyẹ̀wò tópọ̀jùlọ',
'prefixindex' => 'Gbogbo ojúewé tó ní ìtọ́ka ìpele',
'prefixindex-namespace' => 'Gbogbo ojúewé pẹ̀lú àlẹ̀mọ́wájú (orúkọàyè $1)',
'shortpages' => 'Àwọn ojúewé kúkúrú',
'longpages' => 'Ojúewé gúngùn',
'deadendpages' => 'Àwọn ojúewé aláìníjàápọ́',
'deadendpagestext' => 'Àwọn ojúewé wọ̀nyí kò jápọ̀ mọ́ àwọn ojúewé míràn ní {{SITENAME}}.',
'protectedpages' => 'Àwọn ojúewé aláàbò',
'protectedpages-indef' => 'Àwọn àbò aláìlópin',
'protectedpages-cascade' => 'Àwọn àbò atẹ̀léra nìkan',
'protectedpagestext' => 'Àwọn ojúewé ìsàlẹ̀ yìí jẹ́ dídáàbòbò láti yínìpòdà tàbí síṣàtúnṣe',
'protectedpagesempty' => 'Kò sí àwọn ojúewé kankan tó ní àbò pẹ̀lú àwọn pàrámítà wọ̀nyí.',
'protectedtitles' => 'Àwọn àkọlé ajẹ́dídáàbòbò',
'protectedtitlestext' => 'Àwọn àkọlé ìsàlẹ̀ yìí jẹ́ dídáàbòbò láti dá',
'protectedtitlesempty' => 'Kò sí àwọn àkolé kankan tó ní àbò pẹ̀lú àwọn pàrámítà wọ̀nyí.',
'listusers' => 'Àkójọ àwọn oníṣe',
'listusers-editsonly' => 'Ìfihàn àwọn oníṣe tí wọ́n ní àtúnṣe níkan',
'listusers-creationsort' => 'Ìtò gẹ́gẹ́bí ọjọ́ ìdá',
'usereditcount' => '{{PLURAL:$1|Àtúnṣe|Àwọn àtúnṣe}} $1',
'usercreated' => '{{GENDER:$3|Dídá}} ní ọjọ́ $1 ní ago $2',
'newpages' => 'Àwọn ojúewé tuntun',
'newpages-username' => 'Orúkọ oníṣe:',
'ancientpages' => 'Àwọn ojúewé tópẹ́jùlọ',
'move' => 'Ìyípòdà',
'movethispage' => 'Yípò ojúewé yìí',
'unusedimagestext' => 'Àwọn fáìlì ìsàlẹ̀ yìí wà sùgbọ́n wọn kò jẹ̀ lílò nínú ojúewé kankan.
Ẹ jọ̀wọ́ ẹ kíyèsi pé àwọn ibiìtakùn míràn le jápọ̀ mọ́ fáìlì kan pẹ̀lú URL tààrà, àti bíi bẹ́ẹ̀ le sì jẹ́ títòjẹ níbí bótijẹ̀ pé ó wà ní lílò.',
'unusedcategoriestext' => 'Àwọn ojúewé ẹ̀ka ìsàlẹ̀ wọ̀nyí wà, bótilẹ̀jẹ́pé kò sí ojúewé tàbí ẹ̀ka kankan tó ún lò wọ́n.',
'notargettitle' => 'Àfojúsùn kò sí',
'notargettext' => 'Ẹ kò tíì tọ́kasí ojúewé àfojúsùn kan tàbí oníṣe tí ìmúṣe yìí yíò ṣẹlẹ̀ lé lórí.',
'nopagetitle' => 'Kò sí irú ojúewé àfojúsùn báhun',
'nopagetext' => 'Ojúewé àfojúsùn tí ẹ tọ́kasí kò sí.',
'pager-newer-n' => '{{PLURAL:$1|tuntunjùlọ 1|tuntunjùlọ $1}}',
'pager-older-n' => '{{PLURAL:$1|pípẹ́jùlọ 1|pípẹ́jùlọ $1}}',
'suppress' => 'Alábẹ̀wò',
'querypage-disabled' => 'Ojúewé pàtàkì yìí jẹ́ ìdálẹ́kun nítorí ìsiṣẹ́.',

# Book sources
'booksources' => 'Àwọn orísun ìwé',
'booksources-search-legend' => 'Àwáàrí fún áwọn ìwé ìtọ́ka',
'booksources-go' => 'Lọ',
'booksources-text' => 'Nísàlẹ̀ ni àtòjọ àwọn àjápọ̀ mọ́ àwọn ibiìtakùn míràn tí wọ́n únta ìwé tuntun àti ìwé àtijọ́, wọ́n sì le ní ọ̀rọ̀ ẹ̀kúnrẹ́rẹ́ nípa àwọn ìwé tí ẹ únwá:',
'booksources-invalid-isbn' => 'ISBN náà kò dà bíi pé ó jẹ́ oníìbámu; ẹ yẹ̀ ẹ́ wò bóyá àsìṣe wà láti ibi tó jẹ́ kíkọ wá.',

# Special:Log
'specialloguserlabel' => 'Olùṣe:',
'speciallogtitlelabel' => 'Àfojúsùn (àkọlé tàbí oníṣe):',
'log' => 'Àwọn àkọọ́lẹ̀',
'all-logs-page' => 'Gbogbo àkọsílẹ̀',
'alllogstext' => 'Ìfihàn àpapọ̀ gbogbo àwọn àkọọ́lẹ̀ tó wà fún {{SITENAME}}.
Ẹ le dín iwó kù nípa yíyan irú àkọọ́lẹ̀, orúkọ oníṣe (irú lẹ́tà ṣe kókó), tàbí ojúewé tókàn (irú lẹ́tà ṣe kókó).',
'logempty' => 'Kò sí ohun ìbámu kankan nínú àkọọ́lẹ̀.',
'log-title-wildcard' => 'Wá àkọlé tó bẹ̀rẹ̀ pẹ̀lú ìkọ yìí',
'showhideselectedlogentries' => 'Ìfihàn/ìbòmọ́lẹ̀ àwọn ohun inú àkọọ́lẹ̀ àṣàyàn',

# Special:AllPages
'allpages' => 'Gbogbo ojúewé',
'alphaindexline' => '$1 dé $2',
'nextpage' => 'Ojúewé tókàn ($1)',
'prevpage' => 'Ojúewé tókọjá ($1)',
'allpagesfrom' => 'Ìfihàn àwọn ojúewé nípa bíbẹ̀rẹ̀ láti:',
'allpagesto' => 'Ìfihàn àwọn ojúewé tó parí pẹ̀lú:',
'allarticles' => 'Gbogbo ojúewé',
'allinnamespace' => 'Gbogbo ojúewé ($1 namespace)',
'allnotinnamespace' => 'Gbogbo ojúewé (tí kòsí ní $1 namespace)',
'allpagesprev' => 'Tókọjá',
'allpagesnext' => 'Tóúnbọ̀',
'allpagessubmit' => 'Lọ',
'allpagesprefix' => 'Ìgbéhàn àwọn ojúewé tóbẹ̀rẹ̀ pẹ̀lú:',
'allpagesbadtitle' => 'Àkọlé ojúewé náà kò ní ìbáramu, tàbí ó ní àlẹ̀mọ́wájú aláàrin èdè tàbí aláàrin wiki.
Ó ṣe é ṣe kó jẹ́pé ó ní ìkan tàbí ọ̀pọ̀ àmi-lẹ́tà tí kò ṣe é lò nínú àkọlé.',
'allpages-bad-ns' => '{{SITENAME}} kò ní orúkọààyè "$1".',
'allpages-hide-redirects' => 'Ìbòmọ́lẹ̀ àtúnjúwe',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Ẹ̀ únwo àtúnyẹ̀wò ojúewé yìí láti inú cache, ó le pẹ́ tó $1.',
'cachedspecial-viewing-cached-ts' => 'Ẹ únwo ojúewé yìí tó wà lati cache, ó le mọ́ bá ti gidi mú.',
'cachedspecial-refresh-now' => 'Ẹ wo ti áìpẹ́.',

# Special:Categories
'categories' => 'Àwọn ẹ̀ka',
'categoriespagetext' => '{{PLURAL:$1|Ẹ̀ka|Àwọn ẹ̀ka}} yìí ní ojúewé tàbí amóhùnmáwòrán.
[[Special:UnusedCategories|Àwọn ẹ̀ka aláìlò]] kò hàn níbí.
Bákannáà ẹ wo [[Special:WantedCategories|àwọn ẹ̀ka wíwá]].',
'categoriesfrom' => 'Ìfihàn àwọn ẹ̀ka nípa bíbẹ̀rẹ̀ láti:',
'special-categories-sort-count' => 'títò bíi nọ́mbà',
'special-categories-sort-abc' => 'títò bíi lẹ́tà',

# Special:DeletedContributions
'deletedcontributions' => 'Àwọn àfikún píparẹ́ oníṣe',
'deletedcontributions-title' => 'Àwọn àfikún píparẹ́ oníṣe',
'sp-deletedcontributions-contribs' => 'àwọn àfikún',

# Special:LinkSearch
'linksearch' => 'Àwáàrí àwọn àjápọ̀ òde',
'linksearch-pat' => 'Ọ̀nà àwáàrí:',
'linksearch-ns' => 'Orúkọàyè:',
'linksearch-ok' => 'Ṣàwárí',
'linksearch-text' => 'Àwọn ọ̀rọ̀ àfiwá bíi "*.wikipedia.org" le ṣe é lò.
Orúkọ ibiàyè pọndandan, fún àpẹrẹ "*.org".<br />
{{PLURAL:$2|Prótókólù|Àwọn prótókólù}} tí a ṣàtìlẹ́yìn fún: <code>$1</code> (yíó bẹ̀rẹ̀ pẹ̀lú http:// tí prótókólù kankan kò bá jẹ́ títọ́kasí).',
'linksearch-line' => '$1 jẹ́ jíjápọ̀ láti $2',
'linksearch-error' => 'Àwọn ọ̀rọ̀ àfiwá le hàn ní ìbẹ̀rẹ̀ orúkọ ibiìtakùn (hostname) nìkan.',

# Special:ListUsers
'listusersfrom' => 'Ìfihàn àwọn oníṣe nípa bíbẹ̀rẹ̀ láti:',
'listusers-submit' => 'Ìfihan',
'listusers-noresult' => 'Kò rí oníṣe kankan.',
'listusers-blocked' => '(dídínà)',

# Special:ActiveUsers
'activeusers' => 'Àtòjọ àwọn oníṣe aláàgbéṣe',
'activeusers-intro' => 'Èyí ni àtòjọ àwọn oníṣe tí wọ́n ní irú àgbéṣe kan láàrin {{PLURAL:$1|ọjọ́|ọjọ́}} $1 sẹ́yìn.',
'activeusers-count' => '{{PLURAL:$1|Àtúnṣe|Àwọn àtúnṣe}} $1 ní {{PLURAL:$3|ọjọ́|ọjọ́}} $3 sẹ́yìn',
'activeusers-from' => 'Ìfihàn àwọn oníṣe nípa bíbẹ̀rẹ̀ láti:',
'activeusers-hidebots' => 'Ìbòmọ́lẹ̀ àwọn bọt',
'activeusers-hidesysops' => 'Ìbòmọ́lẹ̀ àwọn olùmójútó',
'activeusers-noresult' => 'Kò rí oníṣe kankan.',

# Special:ListGroupRights
'listgrouprights' => 'Àwọn ẹ̀tọ́ ẹgbẹ́ oníṣe',
'listgrouprights-summary' => 'Nísàlẹ̀ ni àtòjọ àwọn ẹgbẹ́ oníṣe tó nítumọ̀ lórí wiki yìí, pẹ̀lú àwọn ẹ̀tọ́ lílò wọn.
Ó ṣe é ṣe kí [[{{MediaWiki:Listgrouprights-helppage}}|ẹ̀kúnrẹ́rẹ́]] ó wà nípa ẹ̀tọ́ kọ̀ọ̀kan.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Ẹ̀tọ́ tó ní</span>
* <span class="listgrouprights-revoked">Ẹ̀tọ́ tí kò ní mọ́</span>',
'listgrouprights-group' => 'Ẹgbẹ́',
'listgrouprights-rights' => 'Àwọn ẹ̀tọ́',
'listgrouprights-helppage' => 'Help:Àwọn ẹ̀tọ́ ẹgbẹ́',
'listgrouprights-members' => '(àkójọ àwọn ọmọ ẹgbẹ́)',
'listgrouprights-addgroup' => 'Ṣàfikún {{PLURAL:$2|ẹgbẹ́|àwọn ẹgbẹ́}}: $1',
'listgrouprights-removegroup' => 'Múkúrò {{PLURAL:$2|ẹgbẹ́|àwọn ẹgbẹ́}}: $1',
'listgrouprights-addgroup-all' => 'Ṣàfikún gbogbo ẹgbẹ́',
'listgrouprights-removegroup-all' => 'Mú gbogbo ẹgbẹ́ kúrò',
'listgrouprights-addgroup-self' => 'Ìfikún {{PLURAL:$2|ẹgbẹ́|àwọn ẹgbẹ́}} mọ́ àpamọ́ araẹni: $1',
'listgrouprights-removegroup-self' => 'Ìyọkúrò {{PLURAL:$2|ẹgbẹ́|àwọn ẹgbẹ́}} kúrò nínú àpamọ́ araẹni: $1',
'listgrouprights-addgroup-self-all' => 'Ìfikún gbogbo ẹgbẹ́ mọ́ àpamọ́ araẹni',
'listgrouprights-removegroup-self-all' => 'Ìyọkúrò gbogbo ẹgbẹ́ kúrò nínú àpamọ́ araẹni',

# Email user
'mailnologin' => 'Kò sí àdírẹ́sì àfiránṣẹ́',
'mailnologintext' => 'Ẹ gbọ́dọ̀ ti [[Special:UserLogin|wọlé]] kí ẹ sì ní àdírẹ́ẹ̀sì e-mail oníìbámu nínú [[Special:Preferences|àwọn ìfẹ́ràn]] yín láti le baà le fi e-mail ránṣẹ́ sí àwọn onísẹ míràn.',
'emailuser' => 'Ẹ fi e-mail ránṣẹ́ sí oníṣe yìí',
'emailuser-title-target' => 'E-mail sí {{GENDER:$1|oníṣe}} yìí',
'emailuser-title-notarget' => 'E-mail sí oníṣe',
'emailpage' => 'E-mail sí oníṣe',
'emailpagetext' => 'Ẹ le lo fọ́ọ̀mù ìsàlẹ̀ yìí láti fi e-mail ránṣẹ́ sí {{GENDER:$1|oníṣe}} yìí.
Àdírẹ́ẹ̀sì e-mail tí ẹ tìbọ sínú [[Special:Preferences|àwọn ìfẹ́ràn oníṣe yín]] yíò hàn bíi "Láti" àdírẹ́ẹ̀sì e-mail náà, kí agbaìránṣẹ́ ó le baà fi ìdáhùn ránṣẹ́ tààrà sí yín.',
'usermailererror' => 'Ẹ̀rọ ìránṣẹ́ mú àsìṣe padà:',
'defemailsubject' => 'E-mail {{SITENAME}} látọwọ́ oníṣe "$1"',
'usermaildisabled' => 'Àdálẹ́kun e-mail oníṣe',
'usermaildisabledtext' => 'Ẹ kò le fi e-mail ránṣẹ́ sí àwọn oníṣe míràn lórí wiki yìí',
'noemailtitle' => 'Kò sí àdírẹ̀sì e-mail',
'noemailtext' => 'Oníṣe yìí kò tìí ṣètò àdírẹ́ẹ̀sì e-mail tótọ́ kankan.',
'nowikiemailtitle' => 'E-mail kankan kò jẹ́ gbígbà láyè',
'nowikiemailtext' => 'Oníṣe yìí ti yàn láti mọ́ gba e-mail látọ̀dọ̀ àwọn oníṣe míràn.',
'emailnotarget' => 'Orúkọ oníṣe aláìníìbámu tàbí aláìsí fún agbaìránṣẹ́.',
'emailtarget' => 'Ìtìbọnú orúkọ oníṣe agbaìránṣẹ́',
'emailusername' => 'Orúkọ oníṣe:',
'emailusernamesubmit' => 'Fúnsílẹ̀',
'email-legend' => 'Fi e-mail ránṣẹ́ sí oníṣe {{SITENAME}} mìíràn',
'emailfrom' => 'Láti:',
'emailto' => 'Sí:',
'emailsubject' => 'Oríọ̀rọ̀:',
'emailmessage' => 'Ìránṣẹ́:',
'emailsend' => 'Firánṣẹ́',
'emailccme' => 'Fi e-mail àwòkọ ìránṣẹ́ mi ránṣẹ́ sí mi',
'emailccsubject' => 'Àwòkọ ìránṣẹ́ yín sí $1: $2',
'emailsent' => 'E-mail ti jẹ́ fìfiránṣẹ́',
'emailsenttext' => 'Ìránṣẹ̀ e-mail yín ti jẹ́ fífiránṣé.',
'emailuserfooter' => 'E-mail yìí wá látọ̀dọ̀ $1 sí $2 pẹ̀lú ìfigbéṣe "E-mail oníṣe" ní {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Ẹ̀ únfi sístẹ́mù ìránṣẹ́ sílẹ̀.',
'usermessage-editor' => 'Sìstẹ́mú olúránṣẹ́',

# Watchlist
'watchlist' => 'Ìmójútó',
'mywatchlist' => 'Ìmójútó',
'watchlistfor2' => 'Fún $1 $2',
'nowatchlist' => 'Ẹ kò ní ohun kankan nínú ìmójútó yín.',
'watchlistanontext' => 'Ẹ jọ̀wọ́ $1 láti wò tàbí ṣàtúnṣe àwọn ohun inú ìmójútó yín.',
'watchnologin' => 'Ẹ kò tíì wọlé',
'watchnologintext' => 'Ẹ gbọ́dọ̀ [[Special:UserLogin|wọlè]] láti ṣàtúnṣe ìmójútó yín.',
'addwatch' => 'Ìfikún mọ́ ìmójútó',
'addedwatchtext' => 'A ti ṣ\'àfikún "[[:$1]]" sí [[Special:Watchlist|ìmójútó]] yín.
A óò ṣ\'àkójọ àwọn àtúnṣe ọjọ́wajú sí ojúewé yìí àti ojúewé ọ̀rọ̀ rẹ̀ sí bẹ̀.',
'removewatch' => 'Ìyọkúrò nínú ìmójútó',
'removedwatchtext' => 'A ti yọ ojúewé "[[:$1]]" kúrò nínú [[Special:Watchlist|ìmójútó yín]].',
'watch' => 'Ìmójútó',
'watchthispage' => "M'ójútó ojúewé yi",
'unwatch' => "Já'wọ́ ìmójútó",
'unwatchthispage' => "Já'wọ́ ìmójútó ojúewé yi",
'notanarticle' => 'Kìí ṣe ojúewé àkóónú',
'notvisiblerev' => 'Àtúnyẹ̀wò gbígbẹ̀yìn látọwọ́ oníṣe míràn ti jẹ́ píparẹ́',
'watchnochange' => 'Kò sí ìkankan nínú àwọn ohun ìmójútó yín tó jẹ́ títúnṣe láàrin àsìkò títẹ́kalẹ̀.',
'watchlist-details' => '{{PLURAL:$1|Ojúewé $1|Àwọn ojúewé $1}} ló wà nínú ìmójútó yín, tí a kò bá ka àwọn ojúewé ọ̀rọ̀.',
'wlheader-enotif' => '* Ìfitónilétí e-mail wà ní gbígbàláyè.',
'wlheader-showupdated' => "* Àwọn ojúewé tí wọn ti yípadà látìgbà tí ẹ ṣàbẹ̀wò wọn gbẹ̀yìn jẹ́ fífihàn ní ''kedere'''",
'watchmethod-recent' => 'únwo àwọn àtúnṣe tuntun fún àwọn ojúewé mímójútó',
'watchmethod-list' => 'únwo àwọn ojúewé mímójútó fún àwọn àtúnṣe tuntun',
'watchlistcontains' => 'Àwọn ìmójútó yín ní {{PLURAL:$1|ojúewé|àwọn ojúewé}} $1 nínú.',
'iteminvalidname' => "Ìṣòro wà pẹ̀lú '$1', orúkọ àìtọ́...",
'wlnote' => "Lábẹ́ {{PLURAL:$1|ni àtúnṣe tó gbẹ̀yìn|ni àwọn àtúnṣe '''$1''' tí wọn gbẹ̀yìn}} ní {{PLURAL:$2|wákàtí kan|wákàtí '''$2'''}} sẹ́yìn, títí dí ọjọ́ $3, $4.",
'wlshowlast' => 'Ìfihàn wákàtí $1 sẹ́yìn ọjọ́ $2 sẹ́yìn $3',
'watchlist-options' => 'Àṣàyàn ìmójútọ́',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Ó ún mójútó...',
'unwatching' => 'Jíjáwọ́ ìmójútó...',
'watcherrortext' => 'Àsìṣe ti wáyé lásìkò kánnáà tí ẹ ùnyí ìtòólẹ̀ ìmójútó yín padà fún "$1".',

'enotif_mailer' => 'Olùránṣẹ́ ìfitọ́nilétí {{SITENAME}}',
'enotif_reset' => 'Fàlà sí gbogbo àwọn ojúewé bíi bíbẹ̀wò',
'enotif_impersonal_salutation' => 'Oníṣe {{SITENAME}}',
'enotif_subject_deleted' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ píparẹ́ látọwọ́ {{gender:$2|$2}}',
'enotif_subject_created' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ dídá látọwọ́ {{gender:$2|$2}}',
'enotif_subject_moved' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ kíkólọ látọwọ́ {{gender:$2|$2}}',
'enotif_subject_restored' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ dídápadà látọwọ́ {{gender:$2|$2}}',
'enotif_subject_changed' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ yíyípadà látọwọ́ {{gender:$2|$2}}',
'enotif_body_intro_deleted' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ píparẹ́ ní $PAGEEDITDATE látọwọ́ {{gender:$2|$2}}, ẹ wo $3.',
'enotif_body_intro_created' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ dídá ní $PAGEEDITDATE látọwọ́ {{gender:$2|$2}}, ẹ wo $3 fún àtúnyẹ̀wò ìgbàyí.',
'enotif_body_intro_moved' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ kíkólọ ní $PAGEEDITDATE látọwọ́ {{gender:$2|$2}}, ẹ wo $3 fún àtúnyẹ̀wò ìgbàyí.',
'enotif_body_intro_restored' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ dídápadà ní $PAGEEDITDATE látọwọ́ {{gender:$2|$2}}, ẹ wo $3 fún àtúnyẹ̀wò ìgbàyí.',
'enotif_body_intro_changed' => 'Ojúewé {{SITENAME}} tó únjẹ́ $1 ti jẹ́ yíyípadà ní $PAGEEDITDATE látọwọ́ {{gender:$2|$2}}, ẹ wo $3 fún àtúnyẹ̀wò ìgbàyí.',
'enotif_lastvisited' => 'Ẹ wo $1 fún gbogbo àwọn àtúnṣe látìgbà ìbẹ̀wò yín gbẹ̀yìn.',
'enotif_lastdiff' => 'Ẹ wo $1 láti wo àtúnṣe yìí.',
'enotif_anon_editor' => 'oníṣe aláìlórúkọ $1',
'enotif_body' => '$WATCHINGUSERNAME ọ̀wọ́n,

$PAGEINTRO $NEWPAGE

Àkótán olùtúnṣe: $PAGESUMMARY $PAGEMINOREDIT

Ìpàdé pẹ̀lú olùtúnṣe:
lẹ́tà: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Kò ní sí ìfitọ́nilétí míràn mọ́ fún àyípadà ọjọ́ọwájú àyàfi tí ẹ bá ṣàbẹ̀wò ojúewé yìí.
Ẹ sì tún le ṣe àtúntò àwọn àmì ìfitọ́nilétí fún gbogbo àwọn ojúewé mímójútó nínú ìmójútó yín.

Sístẹ́mù ìfitọ́nilétí {{SITENAME}} yín 

---
Láti ṣàyípadà ìtò ìṣeàkíyèsí e-mail yín, ẹ lọ sí
{{canonicalurl:{{#special:Preferences}}}}

Láti ṣèyípadà ìtò ìmójútó yín, ẹ lọ sí
{{canonicalurl:{{#special:EditWatchlist}}}}

Láti ṣèparẹ́ ojúewé náà kúrò nínú ìmjútó yín, ẹ lọ sí
$UNWATCHURL

Fún ìrànwọ́ àti ìbérè:
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'dídá',
'changed' => 'títúnṣẹ',

# Delete
'deletepage' => 'Ìparẹ́ ojúewé',
'confirm' => 'Ìmúdájú',
'excontent' => "àkóónú rẹ̀ jẹ́: '$1'",
'excontentauthor' => 'àkóónú jẹ́: "$1" (aláfikún rẹ̀ kan soso jẹ́ "[[Special:Contributions/$2|$2]]")',
'exbeforeblank' => 'àkóónú kó tó jẹ́ píparẹ́ jẹ́: "$1"',
'exblank' => 'ojúewé jẹ́ òfo',
'delete-confirm' => 'Ìparẹ́ "$1"',
'delete-legend' => 'Paárẹ́',
'historywarning' => "'''Ìkìlọ̀:''' Ojúewé tí ẹ fẹ́ parẹ́ ní ìtàn pẹ̀lú {{PLURAL:$1|àtúnyẹ̀wò|àwọn àtúnyẹ̀wò}} $1:",
'confirmdeletetext' => 'Ẹ ti fẹ́ ṣe ìparẹ́ ojúewé kan pọ̀mọ́ gbogbo ìtàn rẹ̀.
Ẹ jọ̀wọ́ ẹ fìdájú pé èyí ni èrò yín, pé ohun tí yíò ṣẹlẹ̀ yé yín, àti pé ẹ ún ṣe èyí gẹ́gẹ́ bí
[[{{MediaWiki:Policy-url}}|ìlànà]] ṣe làá kalẹ̀.',
'actioncomplete' => 'Ìmúṣe ti parí',
'actionfailed' => 'Ìkùnà ìgbéṣe',
'deletedtext' => 'A ti pa "$1" rẹ́.
Ẹ wo $2 fún àkọọ́lẹ̀ àwọn ìparẹ́ àìpẹ́.',
'dellogpage' => 'Àkọsílẹ̀ ìparẹ́',
'dellogpagetext' => 'Nísàlẹ̀ ni àkójọ àwọn ìparẹ́ tuntun àìpẹ́.',
'deletionlog' => 'àkọsílẹ̀ ìparẹ́',
'reverted' => 'Jẹ́ dídápadà sí àtẹ̀jáde ti tẹ́lẹ̀',
'deletecomment' => 'Ìdíẹ̀:',
'deleteotherreason' => 'Àwọn ìdí mìíràn:',
'deletereasonotherlist' => 'Ìdí mìíràn',
'deletereason-dropdown' => '*Àwọn ìdí tówọ́pọ̀ fún ìparẹ́
**Olùkọ̀wé ló tọrọ
**Àìtẹ̀lé ẹ́tọ́àwòkọ
**Ìbàjẹ́',
'delete-edit-reasonlist' => 'Àwọn ìdí fún àtúnṣe ìparẹ́',
'delete-toobig' => 'Ojúewé yìí ní ìtàn àtúnṣe tótóbi, ó pọ̀ ju {{PLURAL:$1|àtúnyẹ̀wò}} $1 lọ.
Ìparẹ́ irú àwọn ojúewé báyìí ti jẹ́ dídílọ́nà láti dènà àsìṣe ìdílọ́wọ́ sí {{SITENAME}}.',
'delete-warning-toobig' => 'Ojúewé yìí ní ìtàn àtúnṣe tótóbi, ó pọ̀ ju {{PLURAL:$1|àtúnyẹ̀wò}} $1 lọ.
Ìparẹ́ rẹ̀ le dí ìsiṣẹ́ ibùdó dátà lọ́wọ́ lórí {{SITENAME}}; ẹ ṣè fura.',

# Rollback
'rollback' => 'Yí àwọn àtúnṣe sẹ́yìn',
'rollback_short' => 'Yísẹ́yìn',
'rollbacklink' => 'yísẹ́yìn',
'rollbacklinkcount' => 'ìyíṣẹ́yìn {{PLURAL:$1|àtúnṣe|àtúnṣe}} $1',
'rollbacklinkcount-morethan' => 'ìyíṣẹ́yìn {{PLURAL:$1|àtúnṣe|àtúnṣe}} tó ju $1 lọ',
'rollbackfailed' => 'Ìyípadà kùnà',
'cantrollback' => 'Kò le dá àtúnṣe padà;
oníṣe tógbẹ̀yìn nìkan ni olùdá ojúewé yìí.',
'alreadyrolled' => 'Kò le ṣe ìdápadà àtúnṣe tógbèyìn sí [[:$1]] látọwọ́ [[User:$2|$2]] ([[User talk:$2|ọ̀rọ̀]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]); ẹlòmíràn ti ṣàtúnṣe tàbí ṣe ìdápadà ojúewé náà tẹ̀lẹ̀.

Àtúnṣe tógbẹ̀yìn sí ojúewé náà wá látọwọ́ [[User:$3|$3]] ([[User talk:$3|ọ̀rọ̀]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Àkótán àtúnṣe náà jẹ́: \"''\$1''\".",
'revertpage' => 'Ìdápadà àwọn àtúnṣe ti [[Special:Contributions/$2|$2]] ([[User talk:$2|ọ̀rọ̀]]) sí àtúnyẹ̀wò tógbẹ̀yìn látọwó [[User:$1|$1]]',
'revertpage-nouser' => 'Ìdápadà àwọn àtúnṣe ti (ọrúkọ oníṣe jẹ́ yíyọkúrò) sí àtúnyẹ̀wò tógbẹ̀yìn látọwọ́ [[User:$1|$1]]',
'rollback-success' => 'Ìdápadà àwọn àtúnṣe ti $1;
jẹ́ yíyípadà sí àtúnyẹ̀wò tógbẹ̀yìn látọwọ́ $2.',

# Edit tokens
'sessionfailure-title' => 'Ìkùnà ètò iṣẹ́',
'sessionfailure' => 'Ó dà wípé ìsòro wà pẹ̀lú ìwọlé yín;
a ti fagilé gbogbo ohun tí ẹ ti ṣe nísìnsinyì kí ẹlòmíràn ó mọ́ baà ji mú.
Ẹ padà sí ojúewé tó kọjá, ẹ tún ojúewé náà gbéjáde, kí ẹ tó tún tó dán wó.',

# Protect
'protectlogpage' => 'Àkọsílẹ̀ àbò',
'protectlogtext' => 'Nísàlẹ̀ ni àtòjọ àwọn àtúnṣe sí àwọn àbò ojúewé.
Ẹ wo [[Special:ProtectedPages|àtòjọ àwọn ojúewé aláàbò]] fún àtòjọ àwọn àbò ojúewé ìgbàyí.',
'protectedarticle' => 'ti dá àbò bo "[[$1]]"',
'modifiedarticleprotection' => 'yí ìpele àbò padà fún "[[$1]]"',
'unprotectedarticle' => 'yọ àbò kúrò lórí "[[$1]]"',
'movedarticleprotection' => 'ti yípò àwọn ìtòólẹ̀ àbò padà láti "[[$2]]" sí "[[$1]]"',
'protect-title' => 'Ìyípadà ìpele àbò fún "$1"',
'protect-title-notallowed' => 'Ìwo ìpele àbò fún "$1"',
'prot_1movedto2' => '[[$1]] ti yípò sí [[$2]]',
'protect-badnamespace-title' => 'Orúkọàyè aláìleèní àbò',
'protect-badnamespace-text' => 'Àwọn ojúewé nínú orúkọàyè yìí kò ṣe é dá àbò bò.',
'protect-legend' => 'Ìmúdájú ìdábòbò',
'protectcomment' => 'Ìdíẹ̀:',
'protectexpiry' => 'Ìparí:',
'protect_expiry_invalid' => 'Àkókò ìparí kò ní ìbámu.',
'protect_expiry_old' => 'Ìgbà tó ti kọjá ni ìparí.',
'protect-unchain-permissions' => 'Ẹ ṣí àwọn àṣàyàn àbò yìókù',
'protect-text' => "Ẹ lè wo, bẹ́ ẹ̀ sìni ẹ lè ṣ'àtúnṣe ibi àbò níbí fún ojúewé '''$1'''.",
'protect-locked-blocked' => "Ẹ kò le yí ibi àbò padà lásìkò kannáà tí ẹ jẹ́ dídílọ́nà.
Àwọn ìtòólẹ̀ ìgbàyí nìyí fún ojúewé '''$1''':",
'protect-locked-dblock' => "Ìpele àbò kò ṣe é yí padà nítorí ìdè àgádágodo ibùdọ́ dátà báyìí.
Àwọn ìtòólẹ̀ ìgbàyí nìyí fún ojúewé '''$1''':",
'protect-locked-access' => "Àpamọ́ yín kò ní àyè láti ṣ'àtúnṣe àwọn ibi àbò.
Bí a ṣe to ojúewé '''$1''' nì yí:",
'protect-cascadeon' => 'Ojúewé yìí jẹ́ dídàbòbò lọ́wọ́lọ́wọ́ nítorí ó jẹ́ mímúpọ nínú {{PLURAL:$1|ojúewé ìsàlẹ̀ yìí, tó ní|àwọn ojúewé ìsàlẹ̀ wọ̀nyí, tí wọ́n ní}} àbò onípele tó ún ṣiṣé.
Ẹ le paradà ìpele àbò ojúewé yìí, sùgbọ́n kò ní nípa lórí àbò onípele náà.',
'protect-default' => 'Ẹ gba gbogbo àwọn oníṣe láàyè',
'protect-fallback' => 'Ìyọ̀nda "$1" pọn dandan',
'protect-level-autoconfirmed' => 'Dínà àwọn oníṣe tuntun àti tíkòforúkọ sílẹ́',
'protect-level-sysop' => 'Gba àwọn alámùójútó nìkan láyè',
'protect-summary-cascade' => 'títẹ̀léra',
'protect-expiring' => 'parí ní $1 (UTC)',
'protect-expiring-local' => 'yíò parí ní $1',
'protect-expiry-indefinite' => 'kòdájú',
'protect-cascade' => 'Àbò títẹ̀léra wọn - ó ún dá àbò bo àwọn ojúewé yìówù tí wọ́n bá jẹ́ mímúpọ̀ mọ́ ojúewé yìí.',
'protect-cantedit' => "Ẹ kò le è ṣe àyípadà ibi àbò ojúewé yìí, nítorípé a kò yọ̀nda yín láti ṣ'àtúnṣe rẹ̀.",
'protect-othertime' => 'Àkókò míràn:',
'protect-othertime-op' => 'àkókò míràn',
'protect-existing-expiry' => 'Àsìkò ìparí tó wà: $3, $2',
'protect-otherreason' => 'Ìdí míràn/àfikún:',
'protect-otherreason-op' => 'Ìdí míràn',
'protect-dropdown' => '*Àwọn ìdí àbò awọ́pọ̀
** Ìbàjẹ́ ti pọ̀ jù
** Spam ti pọ̀ jù
** Àtúnṣe alòdì sí ara wọn
** Ojúewé oníbẹ̀wò púpọ̀',
'protect-edit-reasonlist' => 'Àwọn ìdí fún àtúnṣe àbò',
'protect-expiry-options' => '1 wákàtí:1 hour,1 ọjọ́:1 day,1 ọ̀ṣẹ̀:1 week,2 ọ̀ṣẹ̀:2 weeks,1 osù:1 month,3 osù:3 months,6 osù:6 months,1 ọdún:1 year,láìlópin:infinite',
'restriction-type' => 'Ìyọ̀nda:',
'restriction-level' => 'Ibi ìpààlà:',
'minimum-size' => 'Ìtóbi kíkéréjúlọ',
'maximum-size' => 'Ìtóbi púpọ̀jùlọ:',
'pagesize' => '(bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Àtúnṣe',
'restriction-move' => 'Ìyípò',
'restriction-create' => 'Ìṣèdá',
'restriction-upload' => 'Ìrùsókè',

# Restriction levels
'restriction-level-sysop' => 'aláàbò kúnnúnkúnnún',
'restriction-level-autoconfirmed' => 'aláàbò díẹ̀',
'restriction-level-all' => 'ìpele yìówù',

# Undelete
'undelete' => 'Wíwò àwọn ojúewé tí a ti parẹ́',
'undeletepage' => 'Wíwò àti dídápadà àwọn ojúewé tí a ti parẹ́',
'undeletepagetitle' => "'''Ìwọ̀nyí ni àwọn àtúnyẹ̀wò píparẹ́ ti [[:$1|$1]]'''.",
'viewdeletedpage' => 'Wíwò àwọn ojúewé tí a ti parẹ́',
'undeletepagetext' => '{{PLURAL:$1|Ojúewé yìí ti jẹ́ píparẹ́ ṣùgbọ́n ó sì wà nínú àpòìkópamọ́. Ó sì ṣe é mú padà.|Àwọn ojúewé $1 wọ̀nyí ti jẹ́ píparẹ́ ṣùgbọ́n wọn sì wà nínú àpòìkópamọ́. Wọn sì ṣe é mú padà.}} Àpòìkópamọ́ náà ṣe é fọ̀nù nígbàkúgbà.',
'undelete-fieldset-title' => 'Ìdápadà àwọn àtúnyẹ̀wò',
'undeleteextrahelp' => "Láti ṣe ìdápadà gbogbo ìtàn ojúewé, ẹ fi gbogbo ihò-àpótí sílẹ̀ láì fi àmì sí, kí ẹ sì tẹ klíkì sórí '''''{{int:undeletebtn}}'''''.
Láti ṣe ìdápadà àwọn àtúnyẹ̀wò pàtó, ẹ ṣàmì àwọn ihò-àpótí tó bá àwọn àtúnyẹ̀wò náà mu, kí ẹ sì tẹ klíkì sórí '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '{{PLURAL:$1|Àtúnyẹ̀wò|Àwọn àtúnyẹ̀wò}} $1 ti jẹ́ kíkó sínú àpòìkópamọ́',
'undeletehistory' => 'Tí ẹ bá dá ojúewé náà padà, gbogbo àwọn àtúnyẹ̀wò yíò jẹ́ títún dápadà sí ibi ìtàn.
Tó bá jẹ́ pé ojúewé tuntun pẹ̀lú orúkọ kannáà jẹ́ dídá látìgbà ìparẹ́, àwọn àtúnyẹ̀wò tí wọn yíó jẹ́ dídápadà yíó hàn ní inú ìtàn bó ṣe wà tẹ́lẹ̀.',
'undeleterevdel' => 'Ìdápadà ìparẹ́ kò ní ṣe é ṣe tí yíò bá fa kí ojúewé òkè tàbí àtúnyẹ̀wò fáìlì ó jẹ́ píparẹ́ díẹ̀.
Tó bá jẹ́ báyìí, ẹ gbọ́dọ̀ yọ àmì ihò-àpótí tàbí kí ẹ ṣe àfíhàn àtúnyẹ̀wò tó tuntun julọ tó ti jẹ́ píparẹ́.',
'undeletehistorynoadmin' => 'Ojúewé yìí ti jẹ́ píparẹ́.
Ìdíẹ̀ fún ìparẹ́ hàn nínú àkòtán ìsàlẹ̀, lápapọ̀ mọ́ ẹ̀kúnrẹ́rẹ́ àwọn oníṣe tí wọ́n ti ṣàtúnṣe ojúewé yìí kí ó tó jẹ́ píparẹ́.
Ìkọ gangan àwọn àtúnyẹ̀wò onípíparẹ́ wọ̀nyí wà fún àwọn olùmójútó nìkan.',
'undelete-revision' => 'Àtúnyẹ̀wò píparẹ́ ti $1 (ní ọjọ́ $4, ní ago $5) látọwọ́ $3:',
'undeleterevision-missing' => 'Àtúnyẹ̀wò tí kò yẹ tàbí tí kò sí.
Ẹ le ní àjápọ̀ búburú, tàbí kó jẹ́ pé àtúnyẹ̀wò ti jẹ́ dídápadà tàbí yíyọkúrò kúrò ní ìpamọ́.',
'undelete-nodiff' => 'Kò rí àtúnyẹ̀wò tẹ́lẹ̀ kankan.',
'undeletebtn' => 'Dápadà',
'undeletelink' => 'wò/dápadà',
'undeleteviewlink' => 'wo',
'undeletereset' => 'Ìtúnṣètò',
'undeleteinvert' => 'Pàṣípààrọ̀ àsàyàn',
'undeletecomment' => 'Ìdíẹ̀:',
'undeletedrevisions' => '{{PLURAL:$1|Àtúnyẹ̀wò 1|Àwọn àtúnyẹ̀wò $1}} ti jẹ́ dídápadà',
'undeletedrevisions-files' => '{{PLURAL:$1|Àtúnyẹ̀wò 1|Àwọn àtúnyẹ̀wò $1}} àti {{PLURAL:$2|fáìlì 1|àwọn fáìlì $2}} ti jẹ́ dídápadà',
'undeletedfiles' => '{{PLURAL:$1|Fáílì 1|Àwọn fáìlì $1}} ti jẹ́ dídápadà',
'cannotundelete' => 'Ìdápadà ìparẹ́ kùnà:
$1',
'undeletedpage' => "'''$1 ti jẹ́ dídápadà'''

Ẹ wo [[Special:Log/delete|àkọọ́lẹ̀ ìparẹ́]] fún àkọpamọ́ àwọn ìparẹ́ àti ìdápadà àìpẹ́.",
'undelete-header' => 'Ẹ wo [[Special:Log/delete|àkọọ́lẹ̀ ìparẹ́]] fún àwọn ojúewé píparẹ́ láìpẹ́',
'undelete-search-title' => 'Wá àwọn ojúewé onípíparẹ́',
'undelete-search-box' => 'Wá àwọn ojúewé onípíparẹ́',
'undelete-search-prefix' => 'Ìfihàn ojúewé tó bẹ̀rẹ̀ pẹ̀lú:',
'undelete-search-submit' => 'Ṣàwárí',
'undelete-no-results' => 'Kò sí ojúewé kankan tó jọọ́ nínú ìpamọ́ ìparẹ́.',
'undelete-filename-mismatch' => 'Kò le ṣe àìjẹ́píparẹ́ àtúnyẹ̀wò fáìlì pẹ̀lú àmìàsìkò $1: Àìjọra orúkọ fáìlì.',
'undelete-bad-store-key' => 'Kò le ṣe àìjẹ́píparẹ́ àtúnyẹ̀wò fáìlì pẹ̀lú àmìàsìkò $1: Fáìlì kò sí kí ìparẹ́ ó tó ṣẹlẹ̀.',
'undelete-cleanup-error' => 'Àsìṣe láti pa fáìlì ìpamọ́ àìlòmọ́ "$1" rẹ́.',
'undelete-missing-filearchive' => 'Kò le dá fáìlì ìpamọ́ nọ́mbà ìdámọ̀ $1 padà nítorí pé kò sí nínú ibùdó dátà.
Ó le ti jẹ́ àìjẹ́píparẹ́.',
'undelete-error' => 'Àsìṣe ìdápadà ìparẹ́ ojúewé',
'undelete-error-short' => 'Àsìṣe láti ìmúkúrò ìparẹ́ fáílì: $1',
'undelete-error-long' => 'Àwọn àsìṣe ṣẹlẹ̀ nígbà ìdápadà fáìlì náà:

$1',
'undelete-show-file-confirm' => 'Ṣé ẹ ní ìdálójú pé ẹ fẹ́ wo àtúnyẹ̀wó píparẹ́ fáìlì "<nowiki>$1</nowiki>" látọjọ́ $2 ní ago $3?',
'undelete-show-file-submit' => 'Bẹ́ẹ̀ni',

# Namespace form on various pages
'namespace' => 'Orúkọàyè:',
'invert' => 'Pàṣípààrọ̀ àsàyàn',
'tooltip-invert' => 'Ẹ dínú àpótí yìí láti ṣe ìbòmọ́lẹ̀ àwọn àtúnṣe sí ojúewé nínú orúkọàyè tí ẹ yàn (àti nínú orúkọàyè àjọṣe tí ẹ bá mú òhun náà)',
'namespace_association' => 'Orúkọàyè àjọṣe',
'tooltip-namespace_association' => 'Ẹ tẹ ihò-àpótí yìí láti ṣàkómọ́ orúkọàyè ọ̀rọ̀ tàbí olúdálélórí tó ní ìbáṣe mọ́ orúkọàyè sísàyàn.',
'blanknamespace' => '(Gbangba)',

# Contributions
'contributions' => 'Àwọn àfikún {{GENDER:$1|oníṣe}}',
'contributions-title' => 'Àwọn àfikún oníṣe fún $1',
'mycontris' => 'Àwọn àfikún',
'contribsub2' => 'Fún $1 ($2)',
'nocontribs' => 'Kò sí àtúnṣe tuntun tó bá àwárí mu.',
'uctop' => '(lókè)',
'month' => 'Láti osù (àti sẹ́yìn):',
'year' => 'Láti ọdún (àti sẹ́yìn):',

'sp-contributions-newbies' => 'Àfihàn àwọn àfikún àwọn àpamọ́ tuntun nìkan',
'sp-contributions-newbies-sub' => 'Fún àwọn àpamọ́ tuntun',
'sp-contributions-newbies-title' => 'Àwọn àfikún oníṣe fún àwọn àpamọ́ tuntun',
'sp-contributions-blocklog' => 'Àkọsílẹ̀ ìdínà',
'sp-contributions-deleted' => 'àwọn àfikún píparẹ́ oníṣe',
'sp-contributions-uploads' => 'àwọn ìrùsókè',
'sp-contributions-logs' => 'àwọn àkọọ́lẹ̀',
'sp-contributions-talk' => 'ọ̀rọ̀',
'sp-contributions-userrights' => 'ìmójútó àwọn ẹ̀tọ́ oníṣe',
'sp-contributions-blocked-notice' => 'Lọ́wọ́lọ́wọ́ oníṣe yìí jẹ́ dídílọ́nà.
Àkọsílẹ̀ ìdínà àìpẹ́ nìyí nísàlẹ̀ fún ìtọ́kasí:',
'sp-contributions-blocked-notice-anon' => 'Lọ́wọ́lọ́wọ́ àdírẹ́ẹ̀sì IP yìí jẹ́ dídílọ́nà.
Àkọọ́lẹ̀ ìdínà àìpẹ́ nìyí nísàlẹ̀ fún ìtọ́kasí:',
'sp-contributions-search' => 'Àwáàrí fún àwọn àfikún',
'sp-contributions-username' => 'Àdírẹ́ẹ̀sì IP tàbí orúkọ oníṣe:',
'sp-contributions-toponly' => 'Ìfihàn àwọn àtúnṣe tí wọn jẹ́ àtúnyẹ̀wò àìpẹ́ nìkan',
'sp-contributions-submit' => 'Ṣàwárí',

# What links here
'whatlinkshere' => 'Ìjápọ̀ mọ́ ojúewé yí',
'whatlinkshere-title' => 'Àwọn ojúewé tó jápọ̀ mọ́ "$1"',
'whatlinkshere-page' => 'Ojúewé:',
'linkshere' => "Àwọn ojúewé wọ̀nyí jápọ̀ mọ́ '''[[:$1]]''':",
'nolinkshere' => "Kò sí ojúewé tó jápọ̀ mọ́ '''[[:$1]]'''.",
'nolinkshere-ns' => "Kò sí ojúewé kankan tó jápọ̀ mọ́ '''[[:$1]]''' nínú orúkọàyè yíyàn.",
'isredirect' => 'àtúnjúwe ojúewé',
'istemplate' => 'ìkómọ́ra',
'isimage' => 'ìjápọ̀ fáìlì',
'whatlinkshere-prev' => '{{PLURAL:$1|tẹ́lẹ̀|tẹ́lẹ̀ $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|tókàn|tókàn $1}}',
'whatlinkshere-links' => '← àwọn ìjápọ̀',
'whatlinkshere-hideredirs' => '$1 àtúnjúwe',
'whatlinkshere-hidetrans' => '$1 ìkómọ́ra',
'whatlinkshere-hidelinks' => '$1 ìjápọ̀',
'whatlinkshere-hideimages' => '$1 àwọn ìjápọ̀ fáìlì',
'whatlinkshere-filters' => 'Ajọ̀',

# Block/unblock
'autoblockid' => 'Ìdínàaláraẹni #$1',
'block' => 'Dínà oníṣe',
'unblock' => 'Ìmúkúrò ìdínà oníṣe',
'blockip' => 'Dínà oníṣe',
'blockip-title' => 'Ìdínà oníṣẹ',
'blockip-legend' => 'Ìdínà oníṣẹ',
'blockiptext' => 'Ẹ lo fọ́ọ̀mù ìsàlẹ̀ láti dínà ìle kọ láti ọ̀dọ̀ àdírẹ́ẹ̀sì IP pàtó kan tàbí orúkọ oníṣe.
Ẹyí gbọ́dọ̀ jẹ́ síṣe láti dínà ìṣèbàjẹ́ nìkan, àtí gẹ́gẹ́bí [[{{MediaWiki:Policy-url}}|ètò ìsiṣẹ́]].
Ẹ sọ ìdí pàtó nísàlẹ̀ (fún àpẹrẹ, ìtọ́kasí àwọn ojúewé pàtó tí wọ́n jẹ́ bíbàjẹ́).',
'ipadressorusername' => 'Àdírẹ́ẹ̀sì IP tàbí orúkọ oníṣe:',
'ipbexpiry' => 'Ìwásópin:',
'ipbreason' => 'Ìdíẹ̀:',
'ipbreasonotherlist' => 'Ìdí mìíràn',
'ipbreason-dropdown' => '*Àwọn ìdí fún ìdínà
** Àròyé tí kò jẹ́ òtítọ́
** Yíyọ àkóónú kúrò nínú ojúewé
** Kíkọ àjápọ̀ sí àwọn ibi tí kò ní ìbámu mọ́ ojúewé
** Ìkọkúkọ sínú ojúewé
** Iwùwà ìpayà sí ẹlòmíràn
** Ìlòkulò ọ̀pọ̀lọpọ̀ àpamọ́
** Lílo orúkọ oníṣe tí kò tọ́',
'ipb-hardblock' => 'Ìdínà àwọn oníṣe agbàwọlé láti ṣàtúnṣe láti ibi àdírẹ́ẹ̀sì IP yìí',
'ipbcreateaccount' => 'Ìdínà dídá àpamọ́',
'ipbemailban' => 'Ìdínà oníṣe láti fi e-mail ránṣẹ́',
'ipbenableautoblock' => 'Ní fúnrararẹ̀ dínà àdírẹ́sì IP tí oníṣe yìí lò gbẹ̀yìn, àti àwọn àdírẹ́sì IP ọjọ́ọwájú yìówù tí ó bá fẹ́ lò láti ṣátúnṣe',
'ipbsubmit' => 'Dínà oníṣe yìí',
'ipbother' => 'Àkókò míràn:',
'ipboptions' => '2 wákàtí:2 hours,1 ọjọ́:1 day,3 ọjọ́:3 days,1 ọ̀ṣẹ̀:1 week,2 ọ̀ṣẹ̀:2 weeks,1 osù:1 month,3 osù:3 months,6 osù:6 months,1 ọdún:1 year,àílópin:infinite',
'ipbotheroption' => 'òmíràn',
'ipbotherreason' => 'Ìdí míràn/àfikún:',
'ipbhidename' => 'Ìbómọ́lẹ̀ orúkọ oníṣe nínú àwọn àtúnṣe àti àwọn àkójọ',
'ipbwatchuser' => 'Ìmójútó àwọn ojúewé oníṣe àti ọ̀rọ̀ oníṣe yìí',
'ipb-disableusertalk' => 'Ìdínà oníṣe yìí láti ṣàtúnṣe ojúewé ọ̀rọ̀ wọn lásìkò kannáà tí wọ́n jẹ́ dídílọ́nà',
'ipb-change-block' => 'Ìtún dílọ́nà oníṣe pẹ̀lú àwọn ìtòólẹ̀ yìí',
'ipb-confirm' => 'Ìmúdájú ìdínà',
'badipaddress' => 'Àdírẹ́ẹ̀sì IP tíkòtọ́',
'blockipsuccesssub' => 'Ìdínà yọrí sí rere',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] ti jẹ́ dídílọ́nà.<br />
Ẹ wo [[Special:BlockList|àtòjọ ìdínà]] láti ṣàtúnyẹ̀wò àwọn ìdínà.',
'ipb-blockingself' => 'Ẹ ti fẹ́ dínà ara yín! Ṣé èyí dáa yín lójú?',
'ipb-confirmhideuser' => 'Ẹ ti fẹ́ dínà oníṣe pẹ̀lú "ìbómọ́lẹ̀ oníṣe" ní ṣíṣí. Èyí yíò ṣe ìrẹ̀mọ́lẹ̀ orúkọ oníṣe nínú gbogbo àtòjọ àtí àkọọ́lẹ̀. Ṣé ó dá yín lójú pé èyí ní ẹ fẹ́ ṣe?',
'ipb-edit-dropdown' => 'Àtúnṣe àwọn ìdí ìdínà',
'ipb-unblock-addr' => 'Ìmúkúrò ìdínà $1',
'ipb-unblock' => 'Ìmúkúrò ìdínà orúkọ oníṣe kan tàbí àdírẹ́sì IP',
'ipb-blocklist' => 'Ìwo àwọn ìdínà tó wà',
'ipb-blocklist-contribs' => 'Àwọn àfikún fún $1',
'unblockip' => 'Ìmúkúrò ìdínà oníṣe',
'unblockiptext' => 'Lo fọ́ọ́mù ìsàlẹ̀ láti dá ẹ̀tọ́ ìkọ padà fún àdírẹ́ẹ̀sì IP tàbí orúkọ oníṣe dídílọ́nà tẹ́lẹ̀.',
'ipusubmit' => 'Ìmúkúrò ìdínà yìí',
'unblocked' => '[[User:$1|$1]] ti jẹ́ mímú kúrò nínú ìdínà',
'unblocked-range' => '$1 ti jẹ́ aláìdílọ́nà',
'unblocked-id' => 'Ìdínà $1 ti jẹ́ mímúkúrò',
'blocklist' => 'Àwọn oníṣe aládìílọ́nà',
'ipblocklist' => 'Àwọn oníṣe adílọ́nà',
'ipblocklist-legend' => 'Wá oníṣe adílọ́nà kan',
'blocklist-userblocks' => 'Ìbòmọ́lẹ̀ àwọn ìdínà àpamọ́',
'blocklist-tempblocks' => 'Ìbòmọ́lẹ̀ àwọn ìdínà onígbàdíẹ̀',
'blocklist-addressblocks' => 'Ìbòmọ́lẹ̀ àwọn ìdínà IP ẹyọkan',
'blocklist-rangeblocks' => 'Ìbòmọ́lẹ̀ àwọn ìdínà àdìmọ́',
'blocklist-timestamp' => 'Àmì àsìkò',
'blocklist-target' => 'Afojúsùn',
'blocklist-expiry' => 'Ìparí',
'blocklist-by' => 'Olùmójútó tó ṣe ìdínà',
'blocklist-params' => 'Àwọn pàrámítà ìdínà',
'blocklist-reason' => 'Ìdíẹ̀',
'ipblocklist-submit' => 'Ṣàwárí',
'ipblocklist-localblock' => 'Ìdínà abẹ́lé',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Ìdínà|Àwọn ìdínà}} mííràn',
'infiniteblock' => 'àìlópin',
'expiringblock' => 'yíò parí ní ọjọ́ $1 ní ago $2',
'anononlyblock' => 'aláìlórúkọ nìkan',
'noautoblockblock' => 'dídálẹ́kun ìdínà fúnrararẹ̀',
'createaccountblock' => 'ìdínà ìṣèdá àkópamọ́',
'emailblock' => 'e-mail jẹ́ dídílọ́nà',
'blocklist-nousertalk' => 'kò le ṣàtúnṣe ojúewé ọ̀rọ̀ taraẹni',
'ipblocklist-empty' => 'Àkójọ ìdínà jẹ́ òfo.',
'ipblocklist-no-results' => 'Àdírẹ́sì IP àti orúkọ oníṣe tì ẹ tọrọ kó jẹ́ dídílọ́nà.',
'blocklink' => 'dínà',
'unblocklink' => 'jáwọ́ ìdínà',
'change-blocklink' => 'yí ìdínà padà',
'contribslink' => 'àfikún',
'emaillink' => 'fi e-mail ránṣẹ́',
'autoblocker' => 'Ẹ ti jẹ́ dídílọ́nà nítọrípé àdírẹ́ẹ̀sì IP yín ti jẹ́ lílò láìpẹ́ látọwọ́ "[[User:$1|$1]]".
Ìdíẹ̀ fún ìdínà $1 ni: "$2"',
'blocklogpage' => 'Àkosílẹ̀ ìdínà',
'blocklog-showlog' => 'Oníṣe yìí ti jẹ́ dídílọ́nà tẹ́lẹ̀.
Àkọọ́lẹ̀ ìdínà nìyí nísàlẹ̀ fún ìtọ́kasí:',
'blocklog-showsuppresslog' => 'Oníṣe yìí ti jẹ́ dídílọ́nà àti bíbòmọ́lẹ̀ tẹ́lẹ̀.
Àkọọ́lẹ̀ ìfisílẹ̀ nìyí nísàlẹ̀ fún ìtọ́kasí:',
'blocklogentry' => 'ìdínà [[$1]] yíò parí ní $2 $3',
'reblock-logentry' => 'ti yí ìtòólẹ̀ ìdínà padà fún [[$1]] pẹ̀lú àsìkò ìparí $2 $3',
'blocklogtext' => 'Àkọọ́lẹ̀ ìṣe ìdínà àti ìgbéìdínàkúrò nìyí.
Àwọn àdìrẹ́ẹ̀sì IP tí wọn jẹ́ dídílọ́nà nífúnra wọn kò sí nínú àtòjọ yìí.
Ẹ wo [[Special:BlockList|àtòjọ ìdínà]] fún àtòjọ àwọn gbogbo ohun tí a dílọ́nà báyìí.',
'unblocklogentry' => 'mú ìdínà kúrò fùn $1',
'block-log-flags-anononly' => 'àwọn oníṣe aláìlórúkọ nìkan',
'block-log-flags-nocreate' => 'ìdálẹ́kun ṣíṣèdá àkópamọ́',
'block-log-flags-noautoblock' => 'dídálẹ́kun ìdínà fúnrararẹ̀',
'block-log-flags-noemail' => 'e-mail jẹ́ dídílọ́nà',
'block-log-flags-nousertalk' => 'kò le ṣàtúnṣe ojúewé ọ̀rọ̀ taraẹni',
'block-log-flags-angry-autoblock' => 'ìgbàyè ìdínà ìfúnraẹni oníkíkan',
'block-log-flags-hiddenname' => 'orúkọ oníṣe jẹ́ bíbòmọ́lẹ̀',
'range_block_disabled' => 'Agbára olùmójútó láti dá ìdínà àdìmọ́ jẹ́ dídálẹ́kun.',
'ipb_expiry_invalid' => 'Àkókò ìparí kò ní ìbámu.',
'ipb_expiry_temp' => 'Àwọn ìdínà orúkọ oníṣe bíbòmọ́lẹ̀ gbọ́dọ̀ jẹ́ aláìyẹ̀.',
'ipb_hide_invalid' => 'Ìrẹ̀mọ́lẹ̀ àpamọ́ yìí kò ṣe é ṣe; ó le jẹ́ pé ó ní àtúnṣe púpọ̀.',
'ipb_already_blocked' => '"$1" jẹ́ dídèlọ́nà tẹ́lẹ̀',
'ipb-needreblock' => '"$1" jẹ́ dídèlọ́nà tẹ́lẹ̀. Ṣé ẹ fẹ́ yí àwọn ìtòólẹ̀ yí padà?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Ìdínà|Àwọn ìdínà}} mìíràn',
'unblock-hideuser' => 'Ẹ kò le gbé ìdínà oníṣe yìí kúrò, orúkọ rẹ̀ ti jẹ́ bíbòmọ́lẹ̀.',
'ipb_cant_unblock' => 'Àsìṣe: Ìdínà ID $1 kò sí. Ó le ti jẹ́ aláìjẹ́ dídílọ́nà tẹ́lẹ̀.',
'ipb_blocked_as_range' => 'Àsìṣe: Àdírẹ́ẹ̀sì IP $1 kò jẹ́ dídílọ́nà tààrà, bí bẹ́ẹ̀ kò ṣe é mọ́ dí lọ́nà.
Sùgbọ́n ó jẹ́ dídílọ́nà gẹ́gẹ́bí ìkan nínú ìgbàjá $2, èyí sì ṣe é mọ́ dí lọ́nà mọ́.',
'ip_range_invalid' => 'Àdìmọ́ IP aláìníìbámu.',
'ip_range_toolarge' => 'Ìgbàjá ìdínà tó tóbi ju /$1 kò jẹ́ gbígbà ní àyè.',
'blockme' => 'Dínà mi',
'proxyblocker' => 'Olùdínà ẹ̀rọ-ìwọ̀fà ẹlòmíràn',
'proxyblocker-disabled' => 'Ìmúṣe yìí jẹ́ dídálẹ́kun.',
'proxyblockreason' => 'Àdírẹ́ẹ̀sì IP yín ti jẹ́ dídílọ́nà nítorípé ó jẹ́ ẹ̀rọ alàìlórúkọ ẹlòmíràn ìgboro. Ẹ sọ ìsòro yìí fún olùpèsè ìwọ̀fà Internet yín tàbí aṣeàtìlẹyìn ẹ̀rọ-ìpèsè ibiiṣẹ́ yín.',
'proxyblocksuccess' => 'Ṣetán',
'sorbsreason' => 'Àdírẹ́ẹ̀sì IP yín jẹ́ títòjọ bíi ẹ̀rọ-ìwọ̀fà ẹlòmíràn àsíílẹ̀ nínú DNSBL tí {{SITENAME}} lò.',
'sorbs_create_account_reason' => 'Àdírẹ́ẹ̀sì IP yín jẹ́ títòjọ bíi ẹ̀rọ-ìwọ̀fà ẹlòmíràn àsíílẹ̀ nínú DNSBL tí {{SITENAME}} lò.
Ẹ kò le dá àpamọ́.',
'cant-block-while-blocked' => 'Ẹ kò le dínà àwọn oníṣe míràn lásìkò kannáà tí ẹ jẹ́ dídílọ́nà.',
'cant-see-hidden-user' => 'Oníṣe tí ẹ fẹ́ dínà tilẹ̀ ti jẹ́ dídílọ́nà, ó sì jẹ́ bíbòmọ́lẹ̀.
Nítorípé ẹ kò ní ẹ̀tọ́ ìbòmọ́lẹ̀ oníṣe, ẹ kò le rí tàbí ṣàtúnṣe ìdínà oníṣe náà.',
'ipbblocked' => 'Ẹ kò le dínà tàbí ṣe àìdínà àwọn oníṣe míràn nítorípé ẹ̀yin gangan jẹ́ dídínà.',
'ipbnounblockself' => 'Ẹ kò le yí ìdínà ara yín padà',

# Developer tools
'lockdb' => 'De ìbùdó dátà',
'unlockdb' => 'Ṣí ibùdó dátà sílẹ̀',
'lockdbtext' => 'Ìdè ibùdó dátà yíò jáwọ́ agbára gbogbo àwọn oníṣe láti ṣàtúnṣe sí ojúewé, sí ìfẹ́ràn wọn, sí ìmójútó wọn, àti gbogbo ohun míràn to bá únfẹ́ àtúnṣe nínú ibúdó dátà.
Ẹ jọ̀wọ́ ẹ fidájú pé èyí ní ẹ fẹ́ ṣe, àti pé ẹ ó ṣí ibùdọ́ dátà nígbàtí ìṣètọ́jú bá ṣe tán.',
'unlockdbtext' => 'Ìsísílẹ̀ ibùdó dátà yíò dá agbára gbogbo àwọn oníṣe láti ṣàtúnṣe sí ojúewé, sí ìfẹ́ràn wọn, sí ìmójútó wọn, àti gbogbo ohun míràn to bá únfẹ́ àtúnṣe nínú ibúdó dátà padà.
Ẹ jọ̀wọ́ ẹ fidájú pé èyí ní ẹ fẹ́ ṣe.',
'lockconfirm' => 'Bẹ́ẹ̀ni, mo fẹ́ ẹ́ de ibùdó dátà pa.',
'unlockconfirm' => 'Bẹ́ẹ̀ni, mo fẹ́ ẹ́ sí ibùdó dátà sílẹ̀.',
'lockbtn' => 'De ibùbó dátà',
'unlockbtn' => 'Ṣí ibùdó dátà sílẹ̀',
'locknoconfirm' => 'Ẹ kò ṣe àmì àpótí ìmúdájú.',
'lockdbsuccesssub' => 'Ìdèpa ibùdó dátà yọrísírere',
'unlockdbsuccesssub' => 'Ìyọkúrò àgádágodo ibùdọ́ dátà',
'lockdbsuccesstext' => 'Ìbùdó dátà ti jẹ́ dídèpa.<br />
Ẹ rántí láti [[Special:UnlockDB|yọ ìdè kúrò]] lẹ́yìn tí ẹ bá parí ìtọ́jú.',
'unlockdbsuccesstext' => 'Ìbùdó dátà ti jẹ́ sísí sílẹ̀.',
'lockfilenotwritable' => 'Fáìlì àgádágodo ibùdó dátà kò ṣe é kọ ùnkan sí.
Láti sí tàbí de ibúdó dátà, èyí pọndandan kó ṣe é kọ ùnkan sí látọwọ́ ẹ̀rọ-ìpèsè ibiìtakùn.',
'databasenotlocked' => 'Ibùdó dátà kò jẹ́ dídèpa,',
'lockedbyandtime' => '(látọwọ́ {{GENDER:$1|$1}} ní ọjọ́ $2 ago $3)',

# Move page
'move-page' => 'Yípò $1',
'move-page-legend' => 'Ìyípò ojúewé',
'movepagetext' => "Fọ́ọ̀mù ìsàlẹ̀ yìí ṣàtúnṣọlórúkọ ojúewé, yíò kó gbogbo ìtàn rẹ̀ sí ojúewé tuntun.
Àkọlé rẹ̀ tẹ́lẹ̀ yíò di ojúewé àtúndarí sí ọ̀dọ̀ àkọlẹ́ tuntun.
Ẹ lè ṣọdọ̀tun àwọn àtúndarí tí wọ́n tọ́kasí àkọlé tìbẹ̀rẹ̀ fúnrararẹ̀.
Tí ẹ kò bá fẹ́ ṣèyí, ẹ ríi dájú pé ẹ kíyèsí [[Special:DoubleRedirects|ẹ̀mejì]] tàbí [[Special:BrokenRedirects|àwọn àtúndarí jíjá]].
Ojúṣe yín ni pé àwọn ìjápọ̀ ún tọ́kasí ibi tó yẹ kí wọn ó lọ sí.

Ẹ kíyèsí pé ojúewé '''kò''' ní yípò tí ojúewé mìíràn bá wà tó ní orúkọ ojúewé tuntun ọ̀hún, àyàfi tó bá jẹ́ òfo tàbí àtúndarí tí kò sì ní ìtàn àtúnṣe ṣẹ́yìn.
Èyí túmọ́sí wípé ẹ lẹ̀ ṣàtúnṣọlórúkọ ojúewé padà sí ibi tó ti jẹ́ ṣíṣàtúnṣọlórúkọ wá tí ẹ bá ṣe àṣìṣe, àti pé ẹ kò le ṣàkọléṣórí ojúewé tó wà.

'''Ìkìlọ̀!'''
Èyí le fa ìdàrú sí ojúewé tó gbajúmọ́;
ẹ ríi wípé ohun tí yíò ṣẹlẹ̀ ye yín kí ẹ tó tẹ̀síwájú.",
'movepagetext-noredirectfixer' => "Lílo fọ́ọ̀mù ìsàlẹ̀ yìí yíò ṣe àtúnsọlórúkọ ojúewé, yíò sì kó gbogbo ìtàn rẹ̀ lọ sí orí orúkọ tuntun.
Àkọlé tó ní tẹ́lẹ̀ yíò di ojúewé àtúnjúwe sí àkọlé tuntun.
Ẹ kí yèsi pé kò sí [[Special:DoubleRedirects|àtúnjúwe ẹ̀mejì]] tàbí [[Special:BrokenRedirects|jíjá]].
Ojúṣe yín ni láti rí pé àwọn àjápọ̀ únnawọ́ sí ibi tó yẹ kí wọn ó lọ.

Àkíyèsí pé ojúewé náà '''kò''' ní jẹ́ yíyínípòpadà tí ojúewé míràn bá ti wà ní ibi àkọlé tuntun náà, àyàfi tó bá jẹ́ òfo tàbí àtúnjúwe, tí kò sì ní ìtàn àtúnṣe tẹ́lẹ̀.
Èyí túmọ̀sí pé ẹ le dá orúkọ ojúewé padà sí orúkọ rẹ̀ tẹ́lẹ̀ tí ẹ bá ṣe àsìṣe, tí ẹ kò sì le ṣàkọlélórí ojúewé tí únbẹ.

'''Ìkìlọ̀!'''
Èyí le jẹ́ àtúnṣe òjijì fún ojúewé tó gbajúmọ̀; Ẹ ri dájú pé ohun tí yíò ṣẹlẹ̀ yé yín kí ẹ tó tẹ̀ síwájú.",
'movepagetalktext' => "Ojúewé ọ̀rọ̀ tó sopọ̀ mọ náà yíó yípò pọ̀ mọ fún ra rẹ̀ '''àfibí:'''
*Tí ọ̀rọ̀ ojúewé tí kò jẹ́ òfo wà pẹ̀lú orúkọ tuntun náà, tàbí
*Ẹ mú àmí kúrò nínú àpótí ìṣàlẹ̀ yìí.

Tí ó bá jẹ́ báhun, ẹ gbúdọ̀ ṣe ìyípò rẹ̀ fúnra yín.",
'movearticle' => 'Yípò ojúewé:',
'moveuserpage-warning' => "'''Ìkìlọ̀:''' Ẹ ti fẹ́ yí ipò ojúewé oníṣe kan padà. Ẹ kíyèsi pé ojúewé ọ̀hún nìkan ni yíò jẹ́ yíyípòpadà, oníṣe ọ̀hún ''kò'' ní jẹ́ títúnsọlọ́rúkọ.",
'movenologin' => 'Ẹ kò tíì wọlé',
'movenologintext' => 'Ẹ gbọ́dọ̀ jẹ́ oníṣe ajẹ́fíforúkọsílẹ̀ kí ẹ sì [[Special:UserLogin|wọlẹ́]] láti yípò ojúewé kan.',
'movenotallowed' => 'Ẹ kò ní ìyọ̀nda láti yípò ojúewé.',
'movenotallowedfile' => 'Ẹ kò ní ìyọ̀nda láti yípò fáìlì.',
'cant-move-user-page' => 'Ẹ kò ní ìyọ̀nda láti yípò àwọn ojúewé oníṣe (àyàfi láti ọ̀dọ̀ àwọn abẹ́ojúewé).',
'cant-move-to-user-page' => 'Ẹ kò ní ìyọ̀nda láti yípò àwọn ojúewé sí ojúewé oníṣe (àyàfi sí abẹ́ojúewé oníṣe).',
'newtitle' => 'Sí àkọlé tuntun:',
'move-watch' => 'Mójútó ojúewé yìí',
'movepagebtn' => 'Yípò ojúewé',
'pagemovedsub' => 'Ìyípò ti já sí rere',
'movepage-moved' => '\'\'\'"$1" ti yípò sí "$2"\'\'\'.',
'movepage-moved-redirect' => 'Àtúndarí ti jẹ́ dídá.',
'movepage-moved-noredirect' => 'Ìdá àtúnjúwe sí ojúewé yìí kò wáyé.',
'articleexists' => 'Ojúewé pẹ̀lú orúkọ un wà tẹ́lẹ̀, tàbí kójẹ́pé orúkọ tí ẹ yàn kò ní ìbámu.
Ẹ jọ̀wọ́ ẹ yan orúkọ mìíràn.',
'cantmove-titleprotected' => 'Ẹ kò le yí ojúewé kan padà sí ibí yìí, nítorípé àkọlé tuntun tí ẹ kọ ti jẹ́ dídílọ́nà láti jẹ́ dídá.',
'talkexists' => "'''Bótilẹ̀jẹ́pé ìyípò ojúewé ọ̀hún jásí rere, ojúewé ọ̀rọ̀ kò se é yípọ̀ nítorípé ìkan tiwà ní àkọlé tuntun.
Ẹ jọ̀wọ́ ẹ ti fún ra yín dà wọ́n pọ̀.'''",
'movedto' => 'tiyípò sí',
'movetalk' => 'Yípò ojúewé ọ̀rọ̀ rẹ̀',
'move-subpages' => 'Yípò àwọn ọmọ ojúewé (títí dé $1)',
'move-talk-subpages' => 'Ìyípòdà àwọn ojúewé abẹ́ ojúewé ọ̀rọ̀ (títí dé $1)',
'movepage-page-exists' => 'Ojúewé $1 pilẹ̀ ti wà, kò ṣe é kọlélórí nífúnra rẹ̀.',
'movepage-page-moved' => 'Ojúewé $1 ti jẹ́ yíyípò sí $2.',
'movepage-page-unmoved' => 'Ojúewé $1 kò ṣe é yípò sí $2.',
'movepage-max-pages' => '{{PLURAL:$1|Ojúewé|Àwọn ojúewé}} $1 ti jẹ́ yíyínípòpadà, ìyókù kò ní yí nípò fún ra ra rẹ̀.',
'movelogpage' => 'Àkọsílẹ́ ìyípò',
'movelogpagetext' => 'Nísàlẹ̀ ni àtòjọ gbogbo àwọn ìyípòdà ojúewé.',
'movesubpage' => '{{PLURAL:$1|Ojúewé abẹ́|Àwọn ojúewé abẹ́}}',
'movesubpagetext' => 'Ojúewé yìí ní {{PLURAL:$1|ojúewé abẹ́|àwọn ojúewé abẹ́}} $1 tó hàn nísàlẹ̀.',
'movenosubpage' => 'Ojúewé yìí kò ní àwọn abẹ́ojúewé.',
'movereason' => 'Ìdíẹ̀:',
'revertmove' => 'dápadà',
'delete_and_move' => 'Parẹ́ kí o sì yípò',
'delete_and_move_text' => '== Ìparẹ́ pọndandan ==
Ojúewé àdésí "[[:$1]]" wà tẹ́lẹ̀tẹ́lẹ̀.
Ṣé ẹ fẹ́ paárẹ́ láti sínà fún ìyípò?',
'delete_and_move_confirm' => 'Bẹ́ẹ̀ni, pa ojúewé náà rẹ́',
'delete_and_move_reason' => 'Jẹ́ píparẹ́ láti baà fi ayè lẹ̀ fún ìyípòdà láti "[[$1]]"',
'selfmove' => 'Àwọn àkọlé orísun àti ibiàyè jẹ́ ọ̀kannáà;
kò le yípò ojúewé padà sí ara rẹ̀.',
'immobile-source-namespace' => 'Ìyípò àwọn ojúewé nínú orúkọàyè ""$1" kò ṣe é ṣe.',
'immobile-target-namespace' => 'Ìyípò àwọn ojúewé sínú orúkọàyè ""$1" kò ṣe é ṣe.',
'immobile-target-namespace-iw' => 'Àjápọ̀ aláàrinwiki kò jẹ́ àfojúsùn oníìbámu fún ìyípòdà ojúewé yìí.',
'immobile-source-page' => 'Ojúewé yìí kòṣe é yínípò',
'immobile-target-page' => 'Kò le yípòpadà sí ibiàyè àkọlé hun.',
'bad-target-model' => 'Ibi tí ẹ fẹ́ kó lọ únlo àfijúwe àkóónú tó yàtọ̀. Kò le yí $1 sí $2.',
'imagenocrossnamespace' => 'Kò le ṣe ìyípòdà fáìlì sí orúkọàyè tí kìí ṣe ti fáìlì',
'nonfile-cannot-move-to-file' => 'Kò le yípòpadà aláìjẹ́ fáìlì sí orúkọàyè fáìlì',
'imagetypemismatch' => 'Ìfàgùn fáìlì tuntun kó ní ìbámu mọ́ irú rẹ̀',
'imageinvalidfilename' => 'Orúkọ fáìlì àfojúsùn kò tọ́',
'fix-double-redirects' => 'Ìsọdọ̀tun àtúnjúwe yìówù tó bá nawọ́ sí àkọlé tàkọ́kọ́',
'move-leave-redirect' => 'Ẹ fún ní àtúnjúwe',
'protectedpagemovewarning' => "'''Àkíyèsí:''' Ojúewé yìí ti jẹ́ dídáàbòbò nítoríẹ̀ àwọn olùmójútó tí wọ́n ní ẹ̀tọ́ nìkan ni wọ́n le yínípòpadà.
Àkọọ́lẹ̀ àìpẹ́ nìyí nísàlẹ̀ fún ìtọ́kasí:",
'semiprotectedpagemovewarning' => "'''Àkíyèsí:''' Ojúewé yìí ti jẹ́ dídáàbòbò nítoríẹ̀ àwọn oníṣe tí wọ́n ti forúkọsílẹ̀ nìkan ni wọ́n le yínípòpadà.
Àkọọ́lẹ̀ àìpẹ́ nìyí nísàlẹ̀ fún ìtọ́kasí:",
'move-over-sharedrepo' => '==Fáìlì wà ==
[[:$1]] wà lórí ibi-àkójọ àjọpín kan. Ìyípò fáìlì kan padà sí àkọlé yìí yíò gun fáìlì àjọpin náà lórí.',
'file-exists-sharedrepo' => 'Orúkọ fáìlì tí ẹ yàn pilẹ̀ tí únjẹ́ lílò lórí ibi-àkójọ àjọpín kan.
Ẹ jọ̀wọ́ ẹ yan orúkọ míràn.',

# Export
'export' => 'Ìkójáde àwọn ojúewé',
'exporttext' => 'Ẹ le ṣàkójáde ìkọ̀rọ̀ àti ìtàn àtúnṣe ojúewé pàtó kan tàbí àpapọ̀ àwọn ojúewé tí a fi XML yí.
Èyí ṣe é kówọlé sínú wiki míràn pẹ̀lú MediaWiki láti orí [[Special:Import|ìkówọlé ojúewé]].

Láti ṣàkójáde àwọn ojúewé, ẹ tẹ àkọlé wọn sínú àpótí ọ̀rọ̀ ìsàlẹ̀, àkọlé kan lórí ìlà kan, kí ẹ sì sọ bóyá ẹ fẹ́ àtúnyẹ̀wò ìwòyí àti àwọn àtúnyẹ̀wò tó ti pẹ́, pẹ̀lú ìlà ìtàn ojúewé, tàbí àtúnyẹ̀wò ìwòyí pẹ̀lú ẹ̀kúnrẹ́rẹ́ ọ̀rọ̀ nípa àtúnṣe tó gbẹ̀yìn.

Ẹ tún le lo àjápọ̀, fún àpẹrẹ  [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] fún ojúewé "[[{{MediaWiki:Mainpage}}]]".',
'exportall' => 'Ìkójáde gbogbo àwọn ojúewé',
'exportcuronly' => 'Ìmúpọ̀ àtúnyẹ̀wò ìwòyí nìkan, kí ṣe fún gbogbo ìtàn',
'exportnohistory' => "----
'''Àkíyèsí:''' Ìkówọlé gbogbo ìtàn àwọn ojúewé pẹ̀lú fọ́ọ̀mù yìí ti jẹ́ dídálẹ́kun nítorípé kò siṣẹ́ dáadáa.",
'exportlistauthors' => 'Ìmúpọ̀ ẹ̀kúnrẹ́rẹ́ àtòjọ àwọn olùkópa fún ojúewé kọ̀ọ̀kan',
'export-submit' => 'Kósíta',
'export-addcattext' => 'Àfikún àwọn ojúewé láti inú ẹ̀ka:',
'export-addcat' => 'Ìròpọ̀',
'export-addnstext' => 'Àfikún àwọn ojúewé láti inú orúkọààyè:',
'export-addns' => 'Ìròpọ̀',
'export-download' => 'Ìmúpamọ́ gẹ́gẹ́ bi faili',
'export-templates' => 'Ìmúpọ̀ àwọn àdàkọ',
'export-pagelinks' => 'Ìmúpọ̀ àwọn ojúewé jíjápọ̀mọ́ dé ìwọnú:',

# Namespace 8 related
'allmessages' => 'Àwọn ìránṣẹ́ sistẹmu',
'allmessagesname' => 'Orúkọ',
'allmessagesdefault' => 'Ìkọ ìránṣẹ́ àtìbẹ̀rẹ̀',
'allmessagescurrent' => 'Ìkọ ìránṣẹ́ lọ́wọ́',
'allmessagestext' => 'Èyí ni àtòjọ àwọn ìránṣẹ́ sístẹ́mù tó wà nínú orúkọàyè MediaWiki.
Ẹ lọ sí [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] àti [//translatewiki.net translatewiki.net] tí ẹ bá fẹ́ kópa nínú ìyèdèpadà ìsiṣẹ́ MediaWiki.',
'allmessagesnotsupportedDB' => "Ojúewé yìí kò ṣe é lò nítorípé '''\$wgUseDatabaseMessages''' ti jẹ́ dídálẹkun.",
'allmessages-filter-legend' => 'Ajọ̀',
'allmessages-filter' => 'Ajọ̀ gẹ́gẹ́bí ipò ìṣàyàn:',
'allmessages-filter-unmodified' => 'Àìtúnṣe',
'allmessages-filter-all' => 'Gbogbo wọn',
'allmessages-filter-modified' => 'Títúnṣe',
'allmessages-prefix' => 'Ajọ̀ pẹ̀lú àlẹ̀mọ́wájú:',
'allmessages-language' => 'Èdè:',
'allmessages-filter-submit' => 'Lọ',

# Thumbnails
'thumbnail-more' => 'Ìmútóbi',
'filemissing' => 'Fáìlì kò sí',
'thumbnail_error' => 'Asìṣẹ ìdá àwòrán kékeré: $1',
'djvu_page_error' => 'Ojúewé DjVu kọjá àdìmọ́',
'djvu_no_xml' => 'Kò le mú XML wá fún fáìlì DjVu',
'thumbnail-temp-create' => 'Kò le dá fáìlì àwòrán kékeré ìgbàdíẹ̀',
'thumbnail-dest-create' => 'Kò le mú àwòrán kékeré pamọ́ sí ibiàyè rẹ̀',
'thumbnail_invalid_params' => 'Àwọn pàrámìtà àwòrán kékeré tí kò yẹ',
'thumbnail_dest_directory' => 'Kò le dá àpò ibiàyè',
'thumbnail_image-type' => 'Kò sí àtìlẹ́yìn fún irú àwòrán yìí',
'thumbnail_gd-library' => 'Ìtò ibi GD kò ì parí: Kò sí ìmúṣe $1',
'thumbnail_image-missing' => 'Fáìlì dà bíi pé kòsí: $1',

# Special:Import
'import' => 'Ìkówọlé àwọn ojúewé',
'importinterwiki' => 'Ìkówọlé láàrin àwọn wiki',
'import-interwiki-text' => 'Ẹ mú wiki àti àkọlé ojúewé tí ẹ fẹ́ kówọlé.
Ọjọ́ àti orúkọ olùtúnṣe àtúnyẹ̀wò kò ní yàtọ̀.
Gbogbo ìkówọlé láàrin wiki jẹ́ kíkọsílẹ̀ sí [[Special:Log/import|àkọọ́lẹ̀ ìkówọlé]].',
'import-interwiki-source' => 'Orísún wiki/ojúewé:',
'import-interwiki-history' => 'Ṣe àwòkọ gbogbo àwọn àtúnyẹ̀wò ìtàn fún ojúewé yìí',
'import-interwiki-templates' => 'Ìmúpọ̀ gbogbo àwọn àdàkọ',
'import-interwiki-submit' => 'Ìkówọlé',
'import-interwiki-namespace' => 'Orúkọàyè ìdópin:',
'import-interwiki-rootpage' => 'Ojúewé ìpasẹ̀ ìbọ́sí (àṣàyàn):',
'import-upload-filename' => 'Orúkọ faili:',
'import-comment' => 'Àríwí:',
'importtext' => 'Ẹ jọ̀wọ́ ṣe ìkójáde fáìlì láti wiki orísun pẹ̀lú [[Special:Export|aṣe ìkójáde]].
Ẹ fipamọ́ sínú kọ̀mpútà yín, kí ẹ sì ṣe ìrùsókè rẹ̀ síbí.',
'importstart' => 'Óúnkó àwọn ojúewé wọlé...',
'import-revision-count' => '{{PLURAL:$1|Àtúnyẹ̀wò|Àwọn àtúnyẹ̀wò}} $1',
'importnopages' => 'Kò sí àwọn ojúewé kankan láti kówọlé.',
'imported-log-entries' => '{{PLURAL:$1|Ìtìbọ̀ àkọọ́lẹ̀|Ìtìbọ̀ àwọn àkọọ́lẹ̀}} $1 jẹ́ kíkọ́wọlé.',
'importfailed' => 'Ìkówọlé kùnà: <nowiki>$1</nowiki>',
'importunknownsource' => 'Irú orísun ìkówọlé àìmọ̀',
'importcantopen' => 'Kò le sí fáìlì ìkówọlé',
'importbadinterwiki' => 'Ìjápọ̀ interwiki búburú',
'importnotext' => 'Òfo tàbí kòsí ìkọ',
'importsuccess' => 'Ìkówọlé ti parí!',
'importhistoryconflict' => 'Àtúnyẹ̀wò ìtàn tó tako èyí únbẹ (bóya ẹ ti ṣe ìkọ́wọlé ojúewé yìí tẹ́lẹ̀)',
'importnosources' => 'Kò ì tí sí orísun ìkòwọlẹ́ láàrin wiki, bẹ́ẹ̀sìni ìrùsókè ìtàn tààrà jẹ́ dídálẹ́kun.',
'importnofile' => 'Fáìlì àkówọlé kankan kò jẹ́ rírùsókè.',
'importuploaderrorsize' => 'Ìrùsókè fáìlì àkówọlé kùnà.
Fáìlì náà tóbi ju bó ṣe yẹ lọ.',
'importuploaderrorpartial' => 'Ìrùsókè fáìlì àkówọlé kùnà.
Fáìlì náà jẹ́ rírùsóké ní àbọ̀.',
'importuploaderrortemp' => 'Ìrùsókè fáìlì àkówọlé kùnà.
Àpò ìgbàdíẹ̀ fun kò sí.',
'import-parse-failure' => 'Ìkùnà ìtúwò ìkówọlé XML',
'import-noarticle' => 'Kò sí ojúewé kankan láti kówọlé!',
'import-nonewrevisions' => 'Gbogbo àtúnyẹ̀wò ti jẹ́ kíkówọlé tẹ́lẹ̀.',
'xml-error-string' => '$1 lórí ìlà $2, orí ìnàró $3 (byte $4): $5',
'import-upload' => 'Ìrùsókè àwọn dátà XML',
'import-token-mismatch' => 'Ìkùnà àwọn dátà ìgbàyí. 
Ẹ jọ̀wọ́ ẹ gbìdánwò lẹ́ẹ̀kansíi.',
'import-invalid-interwiki' => 'Kò le ṣe ìkówọlé látọ̀dọ̀ wiki tí ẹ tọ́kasí.',
'import-error-edit' => 'Ojúewé "$1" kò jẹ́ kíkówọlé nítorípé ẹ kò jẹ́ gbígbà láyè láti ṣàtúnṣe rẹ̀.',
'import-error-create' => 'Ojúewé "$1" kò jẹ́ kíkówọlé nítorípé ẹ kò jẹ́ gbígbà láyè láti ṣèdá rẹ̀.',
'import-error-interwiki' => 'Ojúewé "$1" kò jẹ́ kíkówọlé nítorípé orúkọ rẹ̀ wà fún ìṣàjápọ̀ òde (láàrin wiki).',
'import-error-special' => 'Ojúewé "$1" kò jẹ́ kíkówọlé nítorípé ó wà fún orúkọàyè pàtàkì tí kò gba ojúewé ní àyè.',
'import-error-invalid' => 'Ojúewé "$1" kò jẹ́ kíkówọlé nítorí orúkọ rẹ̀ tí kò yẹ.',
'import-options-wrong' => '{{PLURAL:$2|Ìṣsàyàn|Ìṣsàyàn}} tí kò dára: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Ipasẹ̀ ojúewé tó jẹ́ títọ́kasí jẹ́ àkọlé àìyẹ.',
'import-rootpage-nosubpage' => 'Orúkọàyè "$1" fún ipasẹ̀ ojúewé kò gba ojúewé abẹ́ ní àyè.',

# Import log
'importlogpage' => 'Ìgbéwọlé àkọọ́lẹ̀',
'importlogpagetext' => 'Ìkówọlé olùmójútó àwọn ojúewé pẹ̀lú ìtàn àtúnṣe láti àwọn wiki míràn.',
'import-logentry-upload' => 'ìkówọlé [[$1]] pẹ̀lú ìrùsókè fáìlì',
'import-logentry-upload-detail' => '{{PLURAL:$1|Àtúnyẹ̀wò|Àwọn àtúnyẹ̀wò}} $1',
'import-logentry-interwiki' => 'mú $1 wá láti inú wiki míràn',
'import-logentry-interwiki-detail' => '{{PLURAL:$1|Àtúnyẹ̀wò|Àwọn àtúnyẹ̀wò}} $1 láti $2',

# JavaScriptTest
'javascripttest' => 'Ìdánwò JavaScript',
'javascripttest-title' => 'Únṣe ìdánwò $1',
'javascripttest-pagetext-noframework' => 'Ojúewé yìí jẹ́ dídásílẹ̀ fún ṣíṣe ìdánwò JavaScript.',
'javascripttest-pagetext-skins' => 'Ẹ mú irú ojú ara tí ẹ fẹ́ lò láti ṣe àdánwò náà:',
'javascripttest-qunit-intro' => 'Ẹ wo [$1 ìwé aṣàlàyé ìdánwò] ní mediawiki.org.',
'javascripttest-qunit-heading' => 'Ibi ìdánwò QUnit JavaScript MediaWiki',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Ojúewé oníṣe yín',
'tooltip-pt-anonuserpage' => 'Ojúewé oníṣe fún àdírẹ́ẹ̀sì IP tí ẹ únlò láti ṣàtúnṣe',
'tooltip-pt-mytalk' => 'Ojúewé ọ̀rọ̀ yín',
'tooltip-pt-anontalk' => 'Ọ̀rọ̀ nípa àtúnṣe láti àdírẹ́ẹ̀sì IP yìí',
'tooltip-pt-preferences' => 'Àwọn ìfẹ́ràn mi',
'tooltip-pt-watchlist' => 'Àkójọ àwọn ojúewé tí ẹ̀ ún mójútó bóyá wọ́nyí padà',
'tooltip-pt-mycontris' => 'Àkójọ àwọn àfikún yín',
'tooltip-pt-login' => 'A gbà yín níyànjú kí ẹwọlé, bótilẹ̀jẹ́pẹ́ kò pọndandan.',
'tooltip-pt-anonlogin' => 'A gbàyín níyànjú láti wọlé, bótilẹ̀jẹ́pé kò ṣe dandan.',
'tooltip-pt-logout' => 'Ìjáde',
'tooltip-ca-talk' => 'Ìfọ̀rọ̀wérọ̀ nípa ohun inú ojúewé yìí',
'tooltip-ca-edit' => 'Ẹ le ṣe àtúnṣe sí ojúewé yìí.
Ẹ jọ̀wọ́ ẹ lo bọtini àyẹ̀wò kí ẹ tó fipamọ́.',
'tooltip-ca-addsection' => 'Ẹ bẹ̀rẹ̀ abẹlẹ tuntun',
'tooltip-ca-viewsource' => 'Àbò wà lórí ojúewé yìí.
Ẹ le wo àmìọ̀rọ̀ rẹ̀.',
'tooltip-ca-history' => 'Àwọn àtúnṣe tókọjá sí ojúewé yìí',
'tooltip-ca-protect' => 'Dábòbò ojúewé yìí',
'tooltip-ca-unprotect' => 'Ìyípadà àbò ojúewé yìí',
'tooltip-ca-delete' => 'Ẹ pa ojúewé yìí rẹ́',
'tooltip-ca-undelete' => 'Ìdápadà àwọn àtúnṣe sí ojúewé yìí kó tó di pé ó jẹ́ píparẹ́',
'tooltip-ca-move' => 'Ìyípòdà ojúewé yìí',
'tooltip-ca-watch' => 'Ṣe ìfikún ojúewé yìí mọ́ ìmójútó yín',
'tooltip-ca-unwatch' => 'Ẹ yọ ojúewé yìí kúrò nínú ìmójútó yín',
'tooltip-search' => "Ṣ'àwáàrí nínú {{SITENAME}}",
'tooltip-search-go' => 'Lọ sí ojúewé tó ní orúkọ yìí tí ọ́ bá wà',
'tooltip-search-fulltext' => 'Ṣe àwáàrí nínú àwọn ojúewé fún ìkọ yìí',
'tooltip-p-logo' => 'Ojúewé Àkọ́kọ́',
'tooltip-n-mainpage' => 'Ẹ ṣe àbẹ̀wò sí Ojúewé Àkọ́kọ́',
'tooltip-n-mainpage-description' => 'Àbẹ̀wò sí ojúewé àkọ́kọ́',
'tooltip-n-portal' => 'Ẹ̀kúnrẹ́rẹ́ nípa iṣẹ́ọwọ́ yìí',
'tooltip-n-currentevents' => 'Ìròhìn lọ́wọ́lọ́wọ́',
'tooltip-n-recentchanges' => 'Àkójọ àwọn àtúnṣe tuntun nínú wiki.',
'tooltip-n-randompage' => 'Ẹ ṣe àrìnàkò ojúewé kan',
'tooltip-n-help' => 'Fún ìrànlọ́wọ́.',
'tooltip-t-whatlinkshere' => "Àkójọ gbogbo ojúewé wiki tó jápọ̀ s'íbí",
'tooltip-t-recentchangeslinked' => 'Àwọn àtúnṣe tuntun nínú àwọn ojúewé tójápọ̀ láti inú ojúewé yìí',
'tooltip-feed-rss' => 'RSS feed fùn ojúewé yìí',
'tooltip-feed-atom' => 'Atom feed fún ojúewé yìí',
'tooltip-t-contributions' => 'Ẹ wo àkójọ àwọn àfikún oníṣe yìí',
'tooltip-t-emailuser' => 'Ẹ fi e-mail ránṣẹ́ sí oníṣe yìí',
'tooltip-t-upload' => 'Ìrùsókè àwọn fáìlì',
'tooltip-t-specialpages' => 'Àkójọ gbogbo àwọn ojúewé pàtàkì',
'tooltip-t-print' => "Ojúewé tí ó ṣe é tẹ̀ ṣ'íwèé",
'tooltip-t-permalink' => 'Ìjápọ̀ tíkòyípadà sí àtúnyẹ̀wò fún ojúewé náà',
'tooltip-ca-nstab-main' => 'Ìfihàn inú ojúewé',
'tooltip-ca-nstab-user' => 'Ẹ wo ojúewé oníṣe',
'tooltip-ca-nstab-media' => 'Ẹ wò ojúewé amóhùnmáwòrán',
'tooltip-ca-nstab-special' => "Ojúewé yìí ṣe pàtàkì, ẹ kò le è ṣ'àtúnṣe rẹ̀",
'tooltip-ca-nstab-project' => 'Ẹ wo ojúewé iṣẹ́ọwọ́',
'tooltip-ca-nstab-image' => 'Ẹ wo ojúewé faili',
'tooltip-ca-nstab-mediawiki' => 'Iwo ìránṣẹ́ sístẹ́mù',
'tooltip-ca-nstab-template' => 'Ẹ wo àdàkọ náà',
'tooltip-ca-nstab-help' => 'Ẹ wo ojúewé ìrànlọ́wọ́',
'tooltip-ca-nstab-category' => 'Ẹ wo ẹ́ka ojúewé',
'tooltip-minoredit' => "Ṣ'àmì sí èyí gẹ́gẹ́ bi àtúnṣe kékeré",
'tooltip-save' => 'Ìmúpamọ́ àwọn àtúnṣe yín',
'tooltip-preview' => 'Àyẹ̀wò àwọn àtúnṣe yín, ẹ jọ̀wọ́ ẹ kọ́kọ́ lo è yí kí ẹ tó fipamọ́!',
'tooltip-diff' => 'Ìfihàn àwọn àtúnṣe tí ẹ ṣe sí ìkọ yìí.',
'tooltip-compareselectedversions' => 'Ẹ wo ìyàtò láàrin àwọn àtúnṣe tí a ṣàyàn fún ojúewé yìí.',
'tooltip-watch' => "Ẹ ṣ'àfikún ojúewé yìí mọ́ ìmójútó yín",
'tooltip-watchlistedit-normal-submit' => 'Ìyọkúrò àwọn àkọlé',
'tooltip-watchlistedit-raw-submit' => 'Ìsọdọ̀tun ìmójútó',
'tooltip-recreate' => 'Ìtúndá ojúewé náà bótilẹ̀jẹ́pé ó ti jẹ́ píparẹ́',
'tooltip-upload' => 'Bẹ̀rẹ̀ ìrùsókè',
'tooltip-rollback' => '"Ìyíṣẹ́yìn" ún ṣe ìdápadà àwọn àtúnṣe sí ojúewé yìí',
'tooltip-undo' => '"Dápadà" ṣèyíṣẹ́yìn àtúnṣe yìí, yíò ṣí fọ́ọ̀mù àtúnṣe bíi àkọ́bojúwò. Ó gba ààyè láti sọ ìdí nínú àkótán.',
'tooltip-preferences-save' => 'Ìmúpamọ́ àwọn ìfẹ́ràn',
'tooltip-summary' => 'Ẹ kọ àkótán kúkúrú kan',

# Metadata
'notacceptable' => 'Ẹ̀rọ-ìpèsè wiki kò le pèsè dátà irú èyí tí ẹ̀rọ-ìbárà yín le kà.',

# Attribution
'anonymous' => '{{PLURAL:$1|Oníṣe|Àwọn oníṣe}} aláìlórúkọ ti {{SITENAME}}',
'siteuser' => 'Oníṣe $1 lórí {{SITENAME}}',
'anonuser' => 'Oníṣe aláìlórúkọ $1 {{SITENAME}}',
'lastmodifiedatby' => 'Ìgbà tí a ṣe àtúnṣe sí ojúewé yìí gbẹ̀yín ni $2, $1 látọwọ́ $3.',
'othercontribs' => 'Dídálórí iṣẹ́ ti $1.',
'others' => 'àwọn mìíràn',
'siteusers' => '{{PLURAL:$2|Oníṣe|Àwọn oníṣe}} $1  {{SITENAME}}',
'anonusers' => '{{PLURAL:$2|Oníṣe|Àwọn oníṣe}} aláìlórúkọ $1 {{SITENAME}}',
'creditspage' => 'Àwọn ìdáwìn ojúewé',
'nocredits' => 'Kò sí ẹ̀kúnrẹ́rẹ́ọ̀rọ̀ ìdáwìn fún ojúewé yìí.',

# Spam protection
'spamprotectiontitle' => 'Ajọ̀ àbò spam',
'spamprotectiontext' => 'Ikọ-ọ̀rọ̀ tí ẹ fẹ́ múpamọ́ ti jẹ́ dídílọ́nà látọwọ́ ajọ̀ spam.
Èyí le jẹ́ nítorí àjápọ̀ sí ibi-ìtakùn òde adílọ́nà.',
'spamprotectionmatch' => 'Ikọ-ọ̀rọ̀ ìsàlẹ̀ yìí ló fa ajọ̀ spam: $1',
'spambot_username' => 'Ìgbálẹ̀ spam MediaWiki',
'spam_reverting' => 'Ìdápadà sí àtúnyẹ̀wò tó gbẹ̀yìn tí kò ní àjápọ̀ sí $1',
'spam_blanking' => 'Gbogbo àtúnyẹ̀wò ní àjápọ̀ sí $1, ìmúkúrò',
'spam_deleting' => 'Gbogbo àtúnyẹ̀wò ní àjápọ̀ sí $1, ìparẹ́',

# Info page
'pageinfo-title' => 'Àròyé fún "$1"',
'pageinfo-not-current' => 'Ìforíjì, kò ṣe é ṣe láti pèsè ẹ̀kúnrẹ̀rẹ̀-ọ̀rọ̀ fún àwọn àtúnyẹ̀wò tó ti pẹ́.',
'pageinfo-header-basic' => 'Ọ̀rọ̀ẹ̀kúnrẹ́rẹ́ oníkókó',
'pageinfo-header-edits' => 'Ìtàn àtúnṣe',
'pageinfo-header-restrictions' => 'Àbò ojúewé',
'pageinfo-header-properties' => 'Àwọn ìníara ojúewé',
'pageinfo-display-title' => 'Àkọlé orí',
'pageinfo-default-sort' => 'Kọ́kọ́rọ́ ìtò àyàntẹ́lẹ̀',
'pageinfo-length' => 'Ìgùn ojúewé (ní iye byte)',
'pageinfo-article-id' => 'Nọ́mbà ìdámọ̀ ojúewé',
'pageinfo-language' => 'Èdè àkóónú ojúewé',
'pageinfo-robot-policy' => 'Ipò ẹ̀rọ ìṣàwárí',
'pageinfo-robot-index' => 'Ṣíṣeéwárí',
'pageinfo-robot-noindex' => 'Kò ṣeéwárí',
'pageinfo-views' => 'Iye àwọn ìwò',
'pageinfo-watchers' => 'Iye àwọn olùṣọ́ ojúewé',
'pageinfo-redirects-name' => 'Àwọn àtúnjúwe sí ojúewé yìí',
'pageinfo-subpages-name' => 'Àwọn ojúewé tó wà lábẹ́ ojúewé yìí',
'pageinfo-subpages-value' => '$1 ({{PLURAL:$2|àtúnjúwe|àtúnjúwe}} $2; {{PLURAL:$3|àìjẹ́-àtúnjúwe|àìjẹ́-àtúnjúwe}} $3)',
'pageinfo-firstuser' => 'Olùdá ojúewé',
'pageinfo-firsttime' => 'Ọjọ́ ìdá ojúewé',
'pageinfo-lastuser' => 'Olùtúnṣe ìkẹ́yìn',
'pageinfo-lasttime' => 'Ọjọ́ àtúnṣe ìkẹ́yìn',
'pageinfo-edits' => 'Àpapọ̀ iye àwọn àtúnṣe',
'pageinfo-authors' => 'Àpapọ̀ iye àwọn olùdá ọ̀tọ̀ọ̀tọ̀',
'pageinfo-recent-edits' => 'Iye àwọn àtúnṣe àìpẹ́ (láàrin $1 sẹ́yìn)',
'pageinfo-recent-authors' => 'Iye àwọn olùtúnṣe ọ̀tọ̀ọ̀tọ̀ àìpẹ́',
'pageinfo-magic-words' => '{{PLURAL:$1|Ọ̀rọ̀|Àwọn ọ̀rọ̀}} májìkì ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Ẹ̀ka|Àwọn ẹ̀ka}} bíbòmọ́lẹ̀ ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Àdàkọ|Àwọn àdàkọ}} ìkópọ̀mọ́ra ($1)',
'pageinfo-toolboxlink' => 'Ọ̀rọ̀ẹ̀kúnrẹ́rẹ́ ojúewé',
'pageinfo-redirectsto' => 'Àtúnjúwe sí',
'pageinfo-redirectsto-info' => 'ọ̀rọ̀ẹ̀kúnrẹ̀rẹ̀',
'pageinfo-contentpage' => 'Kíkà bíi ojúewé àkóónú',
'pageinfo-contentpage-yes' => 'Bẹ́ẹ̀ni',
'pageinfo-protect-cascading' => 'Àbò bẹ̀rẹ̀ láti ibí',
'pageinfo-protect-cascading-yes' => 'Bẹ́ẹ̀ni',
'pageinfo-protect-cascading-from' => 'Àbò bẹ̀rẹ̀ láti',
'pageinfo-category-pages' => 'Iye àwọn ojúewé',
'pageinfo-category-files' => 'Iye àwọn fáìlì',

# Patrolling
'markaspatrolleddiff' => 'Ìṣààmí sí bíi sísọ́',
'markaspatrolledtext' => 'Ìṣààmí sí ojúewé yìí bíi sísọ́',
'markedaspatrolled' => 'Jẹ́ síṣààmí sí bíi sísọ́',
'markedaspatrolledtext' => 'Àtúnyẹ̀wò [[:$1]] tó jẹ́ síṣàyàn ti jẹ́ síṣààmìsí bíi sísọ́.',
'rcpatroldisabled' => 'Ìdálẹ́kun ìsọ́ àwọn àtúnṣe àìpẹ́',
'rcpatroldisabledtext' => 'Àfiṣe ìsọ́ àtúnṣe àìpẹ́ jẹ́ dídálẹ́kun níwòyí.',
'markedaspatrollederror' => 'Kò le jẹ́ síṣààmí sí bíi sísọ́',
'markedaspatrollederrortext' => 'Ẹ gbọ́dọ̀ tọ́ka àtúnyẹ̀wò kan láti ṣe àmì sí bíi sísọ́.',
'markedaspatrollederror-noautopatrol' => 'Ẹ kò ní àyè láti ṣe àmì sí àwọn àtúnṣe yín bíi sísọ́.',
'markedaspatrollednotify' => 'Àtúnṣe yìí sí $1 ti jẹ́ síṣàmìṣí bíi sísọ́.',
'markedaspatrollederrornotify' => 'Ìkùnà ìṣàmìsí bíi sísọ́.',

# Patrol log
'patrol-log-page' => 'Àkọọ́lẹ̀ ìsọ́',
'patrol-log-header' => 'Àkọọ́lẹ̀ àwọn àtúnyẹ̀wò sísọ́ nì yí.',
'log-show-hide-patrol' => '$1 àkọọ́lẹ̀ ìsọ́',

# Image deletion
'deletedrevision' => 'Àtúnyẹ̀wò àtijọ́ píparẹ́ $1',
'filedeleteerror-short' => 'Àsìṣe ìparẹ́ fáílì: $1',
'filedeleteerror-long' => 'Àwọn àsìṣe ṣẹlẹ̀ nígbà ìṣeìparẹ́ fáìlì náà:

$1',
'filedelete-missing' => 'Fáìlì "$1" náà kò ṣe é parẹ́ nítorípé kò sí.',
'filedelete-old-unregistered' => 'Àtúnyẹ̀wò fáìlì "$1" tí ẹ tọ́kasí kò sí nínú ibùdó dátà.',
'filedelete-current-unregistered' => 'Fáìlì "$1" tí ẹ tọ́kasí kò sí nínú ibùdó dátà.',
'filedelete-archive-read-only' => 'Àpò ibi ìpamọ́ "$1" kò ṣe é kọ sí nínú látọwọ́ ẹ̀rọ-ìwọ̀fà.',

# Browsing diffs
'previousdiff' => '← Àtúnṣe tópẹ́jù',
'nextdiff' => 'Àtúnṣe tótuntunjù →',

# Media information
'mediawarning' => "'''Ìkìlọ̀!''': Irú fáìlì yìí le ní àmìọ̀rọ̀ oníbájẹ́ nínú.
Tí ẹ bá jẹ́ ó ṣiṣẹ́, ẹ̀rọ sístẹ́mù yín le kó sí ewu.",
'imagemaxsize' => "Ẹ̀kun ìtóbi àwòrán:<br />''(fún ojúewé ìjúwe fáìlì)''",
'thumbsize' => 'Ìtóbi àwòrán kékeré:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|ojúewé|àwọn ojúewé}}',
'file-info' => 'ìtóbi faili: $1, irú MIME: $2',
'file-info-size' => '$1 × $2 pixel, ìtóbi faili: $3, irú MIME: $4',
'file-info-size-pages' => '$1 × $2 pixel, ìtóbi faili: $3, irú MIME: $4, {{PLURAL:$5|ojúewé|ojúewé}} $5',
'file-nohires' => 'Kò sí ìgbéhàn gíga jù báun lọ.',
'svg-long-desc' => 'faili SVG, pẹ̀lú $1 × $2 pixels, ìtòbi faili: $3',
'svg-long-desc-animated' => 'Fáìlì SVG alámùúrìn, tó jẹ́ $1 × $2 pixels, ìtóbi fáìlì: $3',
'svg-long-error' => 'Fáìlì SVG àìyẹ: $1',
'show-big-image' => 'Pẹ̀lú ìgbéhàn gíga',
'show-big-image-preview' => 'Ìtóbi ìkọ́yẹ̀wò yìí: $1.',
'show-big-image-other' => '{{PLURAL:$2|Ìgbéhàn|Àwọn ìgbéhàn}} míràn: $1.',
'show-big-image-size' => '$1 × $2 pixels',
'file-info-gif-looped' => 'lílọ́po',
'file-info-gif-frames' => '{{PLURAL:$1|fèrèsé àwòrán|fèrèsé àwòrán}} $1',
'file-info-png-looped' => 'lílọ́po',
'file-info-png-repeat' => 'jẹ́ títa ní {{PLURAL:$1|ìgbà|ìgbà}} $1',
'file-info-png-frames' => '{{PLURAL:$1|fèrèsé àwòrán|fèrèsé àwòrán}} $1',
'file-no-thumb-animation' => "'''Ìkíyèsí: Nítorí ìdẹ́kun ìṣeṣẹ́ ẹ̀rọ, àwọn àwòrán kékeré fáìlì yìí kò ní jẹ́ mímúrìn.'''",
'file-no-thumb-animation-gif' => "''Ìkíyèsí: Nítorí ìdẹ́kun ìṣeṣẹ́ ẹ̀rọ, àwọn àwòrán kékeré ìgbéhàn gíga GIF irú èyí kò ní jẹ́ mímúrìn.'''",

# Special:NewFiles
'newimages' => 'Ọ̀dẹ̀dẹ̀ àwòrán àwọn faili tuntun',
'imagelisttext' => "Nísàlẹ̀ ni àtòjọ {{PLURAL:$1|fáìlì|àwọn fáìlì}} '''$1''' ní títò $2.",
'newimages-summary' => 'Ojúewé pàtàkì yìí ṣe àfihàn àwọn fáìlì ìrùsókè gbẹ̀yìn.',
'newimages-legend' => 'Ajọ̀',
'newimages-label' => 'Orúkọ faili (tàbí apá kan rẹ̀):',
'showhidebots' => '(àwọn bot $1)',
'noimages' => 'Kò sí àwòrán.',
'ilsubmit' => 'Ṣàwárí',
'bydate' => 'bíi ọjọ́ọdún',
'sp-newimages-showfrom' => 'Ìfihàn àwọn fáìlì tuntun nípa bíbẹ̀rẹ̀ láti ago $2, ọjọ́ $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1| ìṣẹ́júàáyá $1}}',
'minutes' => '{{PLURAL:$1|ìṣẹ́jú $1}}',
'hours' => '{{PLURAL:$1|wákàtí $1}}',
'days' => '{{PLURAL:$1|ọjọ́ $1}}',
'ago' => '$1 sẹ́yìn',
'just-now' => 'nísinsìnyí',

# Bad image list
'bad_image_list' => 'Onírú jẹ́ gẹ́gẹ́ bíi àtèlé yìí:
Àwọn ohun àkójọ nìkan (àwọn ìlà tí wọ́n bẹ̀rẹ̀ pẹ̀lú *) ni wọ́n jẹ́ gbígbérò.
Ìjápọ̀ àkọ́kọ́ lórí ìlà gbọdọ̀ jẹ́ ìjápọ̀ mọ́ fáìlì búburú.
Àwọn ìjápọ̀ yìówù lẹ́yìn èyí lórí ìlà kannáà jẹ́ gbígbà pé wọ́n jẹ́ ọ̀tọ̀, wípé àwọn ojúewé níbití fáìlì náà le ṣẹlẹ̀ nínú ìlà.',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'Fáìlì yìí ní ìfitólétí aláròpọ̀mọ́, ó ṣe é ṣe kí ó jẹ́ ríròpọ̀ látọwọ́ kámẹ́rà oníka tàbí ẹ̀rọ skani lílò fún ìdá rẹ̀ tàbí ṣoníka rẹ̀.
Tóbájẹ́pé fáìlì ọ̀hún ti jẹ́ títúnṣe sí bóṣewà ní bẹ̀rẹ̀, àwọn ẹ̀kúnrẹ́rẹ́ méèló kan le mọ́ fi fáìlì títúnṣe náà hàn dáadáa.',
'metadata-expand' => 'Ìfihàn gbogbo ẹ̀kúnrẹ́rẹ́',
'metadata-collapse' => 'Ìbòmọ́lẹ̀ ẹ̀kúnrẹ́rẹ́',
'metadata-fields' => "Pápá metadata àwòrán tí a tòjọ sínú ìránṣẹ́ yìí yíò jẹ́ fífipọ̀ sínú ojúewé àwòrán tí yìò hàn ti tábìlì metadata bá súnpọ̀.
Àwọn yìókù yíò pamọ́ lát'ìbẹ̀rẹ̀.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude",

# EXIF tags
'exif-imagewidth' => 'Fífẹ̀sí',
'exif-imagelength' => 'Gígasí',
'exif-bitspersample' => 'Bit fún àkóónú kọ̀ọ̀kan',
'exif-compression' => 'Ètò ìtẹ̀pọ̀',
'exif-orientation' => 'Ìdojúdé',
'exif-samplesperpixel' => 'Iye àkóónú',
'exif-planarconfiguration' => 'Ìṣètò dátà',
'exif-ycbcrpositioning' => 'Ipò Y àti C',
'exif-xresolution' => 'Ìgbéga onígbọlọjọ',
'exif-yresolution' => 'Ìgbéga onínàró',
'exif-stripoffsets' => 'Ìbùdó dátà àwòrán',
'exif-rowsperstrip' => 'Iye oríìlà fún strip kan',
'exif-stripbytecounts' => 'Iye byte fún àfúnpọ̀ strip kan',
'exif-jpeginterchangeformat' => 'Fò sí JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Iye byte dátà JPEG',
'exif-datetime' => 'Ọjọ́ àti àsìkò ìyípadà fáìlì',
'exif-imagedescription' => 'Àkọlé àwòrán',
'exif-make' => 'Olùṣẹ̀rọ kámẹ́rà',
'exif-model' => 'Irú kámẹ́rà',
'exif-software' => 'Atòlànà kọ̀mpútà lílò',
'exif-artist' => 'Olùdá',
'exif-copyright' => 'Ẹni tóni ẹ̀tọ́ àwòkọ',
'exif-exifversion' => 'Irú Exif',
'exif-flashpixversion' => 'Ìṣàtìlẹ́yìn irú Flashpix',
'exif-colorspace' => 'Àyè àwọ̀',
'exif-componentsconfiguration' => 'Ìtumọ̀ àkóónú kọ̀ọ̀kan',
'exif-compressedbitsperpixel' => 'Àyè ìtẹ̀pọ̀ àwòrán',
'exif-pixelydimension' => 'Ìfẹ̀ àwòrán',
'exif-pixelxdimension' => 'Ìga àwòrán',
'exif-usercomment' => 'Àwọn àwìsọ oníṣe',
'exif-relatedsoundfile' => 'Fáìlì ìfohùn tó jọra',
'exif-datetimeoriginal' => 'Ọjọ́ àti àsìkò tí dátà jade',
'exif-datetimedigitized' => 'Ọjọ́ àti àsìkò ìsọdi dígítà',
'exif-subsectime' => 'Ọjọ́Àsìkò ìpín-ìṣẹ́júàáyá',
'exif-subsectimeoriginal' => 'Ọjọ́ÀsìkòNíbẹ̀rẹ̀ ìpín-ìṣẹ́júàáyá',
'exif-subsectimedigitized' => 'Ọjọ́ÀsìkòDígítà ìpín-ìṣẹ́júàáyá',
'exif-exposuretime-format' => '$1 ìṣẹ́j/kejì ($2)',
'exif-fnumber' => 'Nọ́mbà F',
'exif-brightnessvalue' => 'Ìmọ́lẹ̀ APEX',
'exif-subjectdistance' => 'Ìjìnnà olùdálélórí',
'exif-lightsource' => 'Ìsun ìmọ́lẹ̀',
'exif-flash' => 'Fláàṣì',
'exif-focallength' => 'Ìbú ìtẹjúmọ́ dígí',
'exif-subjectarea' => 'Àyè olùdálélórí',
'exif-flashenergy' => 'Agbára okun fláàṣì',
'exif-subjectlocation' => 'Ibùdó adálélórí',
'exif-filesource' => 'Orísun fáìlì',
'exif-whitebalance' => 'Ìbámu àwò funfun',
'exif-focallengthin35mmfilm' => 'Ìbú ìtẹjúmọ́ nínú fílmù 35 mm',
'exif-subjectdistancerange' => 'Ìgbàjá ìjìnnà ìdálélórí',
'exif-imageuniqueid' => 'Nọ́mbà ìdámọ̀ àwòrán ọ̀tọ̀ọ̀tọ̀',
'exif-gpsversionid' => 'Irú àlẹ̀mọ́ GPS',
'exif-gpstimestamp' => 'Àsìkò GPS (ago átọ́mù)',
'exif-gpsmeasuremode' => 'Àyè ìwọ̀n',
'exif-gpsspeedref' => 'Ẹ̀yọ ìyárasí',
'exif-gpsspeed' => 'Ìyárasí ẹ̀rọ ìmú GPS',
'exif-gpsimgdirectionref' => 'Ìtọ́kasí fún ìdojúkọ àwòrán',
'exif-gpsimgdirection' => 'Ìdojúkọ àwòrán',
'exif-gpsdestbearingref' => 'Ìtọ́kasí fún òye ìbọ́sí',
'exif-gpsdestbearing' => 'Òye ìbósí',
'exif-gpsdestdistanceref' => 'Ìtọkasí fún ìjìnnà sí ìbọ́sí',
'exif-gpsdestdistance' => 'Ìjìnnà sí ìbọ́sí',
'exif-gpsprocessingmethod' => 'Orúkọ ọ̀nà ìgbẹ́ṣe GPS',
'exif-gpsareainformation' => 'Orúkọ agbègbè GPS',
'exif-gpsdatestamp' => 'Ọjọ́ọdún GPS',
'exif-gpsdifferential' => 'Ìtúnṣe ìyàtọ̀ GPS',
'exif-jpegfilecomment' => 'Àwísọ fáìlì JPEG',
'exif-keywords' => 'Àwọn kókóọ̀rọ̀',
'exif-worldregioncreated' => 'Agbègbè àgbáyé tí wọ́n ti ya àwòrán',
'exif-countrycreated' => 'Orílẹ̀-èdè tí wọ́n ti ya àwòrán',
'exif-countrycodecreated' => 'Àmìọ̀rọ̀ fún orílẹ̀-èdè tí wọ́n ti ya àwòrán',
'exif-provinceorstatecreated' => 'Ìgbèríko tàbí ìpínlẹ̀ tí wọ́n ti ya àwòrán',
'exif-citycreated' => 'Ìlú tí wọ́n ti ya àwòrán',
'exif-sublocationcreated' => 'Àdúgbò ìlú tí wọ́n ti ya àwòrán',
'exif-worldregiondest' => 'Agbègbè àgbáyé híhàn',
'exif-countrydest' => 'Orílẹ̀-èdè híhàn',
'exif-countrycodedest' => 'Àmìọ̀rọ̀ fún orílẹ̀-èdè híhàn',
'exif-provinceorstatedest' => 'Ìgbéríko tàbí ìpínlẹ̀ tó ní',
'exif-citydest' => 'Ìlú híhàn',
'exif-sublocationdest' => 'Ibùdó ní ìlú àfihàn',
'exif-objectname' => 'Àkọlé kúkúrú',
'exif-specialinstructions' => 'Àwọn ìlànà pàtàkì',
'exif-headline' => 'Àkọlé',
'exif-credit' => 'Adálórúkọ/Olùpèsè',
'exif-source' => 'Orísun',
'exif-urgency' => 'Ìkánjú',
'exif-locationdest' => 'Ibùdó afihàn',
'exif-locationdestcode' => 'Àmìọ̀rọ̀ ibùdó àfihàn',
'exif-objectcycle' => 'Àsìkò ọjọ́ tí amóhùnmáwòrán jẹ́ fífètòsí',
'exif-contact' => 'Ibi ìbárapàdé',
'exif-writer' => 'Olùkọ̀wé',
'exif-languagecode' => 'Èdè',
'exif-iimversion' => 'Àtẹ̀jáde IIM',
'exif-iimcategory' => 'Ẹ̀ka',
'exif-iimsupplementalcategory' => 'Àwọn ẹ̀ka aláfikún',
'exif-datetimeexpires' => 'Ẹ mọ́ lò ó lẹ́yìn',
'exif-datetimereleased' => 'Fisílẹ̀ ní',
'exif-identifier' => 'Oludámọ̀',
'exif-lens' => 'Irú awò',
'exif-serialnumber' => 'Nọ́mbà ìtẹ̀léra kámẹ́rà',
'exif-cameraownername' => 'Ẹni tó ni kámẹ́rà',
'exif-label' => 'Àlẹ̀mọ́',
'exif-datetimemetadata' => 'Ọjọ́ tí mẹtadátà jẹ́ títúnṣe kẹ́yìn',
'exif-nickname' => 'Orúkọ àìdájú àwòrán',
'exif-rating' => 'Máàkì (nínú 5)',
'exif-copyrighted' => 'Ipò ẹ̀tọ́àwòkọ',
'exif-copyrightowner' => 'Ẹni tóni ẹ̀tọ́ àwòkọ',
'exif-usageterms' => 'Àdéhùn ìmúlò',
'exif-licenseurl' => 'URL fún ìwé-ẹ̀rí ẹ̀tọ́àwòkọ',
'exif-attributionurl' => 'Nígbà tí ẹ bá ṣe àtúnlò iṣẹ́ yìí, ẹ jọ̀wọ́ ẹ ṣe àjápọ̀ sí',
'exif-preferredattributionname' => 'Nígbà tí ẹ bá ṣe àtúnlò iṣẹ́ yìí, ẹ jọ̀wọ́ ẹ ṣe ìdálórúkọ',
'exif-pngfilecomment' => 'Àwísọ fáìlì PNG',
'exif-contentwarning' => 'Ìkìlọ̀ àkóónú',
'exif-giffilecomment' => 'Àwísọ fáìlì GIF',
'exif-intellectualgenre' => 'Irú ohun',
'exif-subjectnewscode' => 'Àmíọ̀rọ̀ olùdálélórí',
'exif-event' => 'Ìṣẹ̀lẹ̀ tó ṣe',
'exif-organisationinimage' => 'Àgbájọ tó ṣe',
'exif-personinimage' => 'Ẹni àfihàn',

# EXIF attributes
'exif-compression-1' => 'Àìtẹ̀pọ̀',

'exif-copyrighted-true' => 'Ó ní ẹ̀tọ́-àwòkọ',
'exif-copyrighted-false' => 'Àyè ìgboro',

'exif-unknowndate' => 'Ọjọ́ọdún àìmọ̀',

'exif-orientation-1' => 'Déédé',
'exif-orientation-3' => 'Yíyínípo 180°',
'exif-orientation-4' => 'Dídoríkodò',
'exif-orientation-5' => 'Yíyínípo sí 90° CCW àti dídà lórí kudò',
'exif-orientation-6' => 'Yíyínípo sí 90° CCW',
'exif-orientation-7' => 'Yíyínípo sí 90° CW àti dídà lórí kudò',
'exif-orientation-8' => 'Yíyínípo sí 90° CW',

'exif-componentsconfiguration-0' => 'kòsí',

'exif-exposureprogram-0' => 'Kò ní ìtumọ̀',
'exif-exposureprogram-1' => 'Aláfọwọ́ṣe',

'exif-subjectdistance-value' => 'mítà $1',

'exif-meteringmode-0' => 'Aláìmọ̀',
'exif-meteringmode-1' => 'Ìpínláàrin',
'exif-meteringmode-3' => 'Ojúàmì',
'exif-meteringmode-4' => 'Ojúàmì-Orísi',
'exif-meteringmode-6' => 'Onídíẹ̀',
'exif-meteringmode-255' => 'Òmíràn',

'exif-lightsource-0' => 'Aláìmọ̀',
'exif-lightsource-1' => 'Ojúmọ́',
'exif-lightsource-4' => 'Fláàṣì',
'exif-lightsource-9' => 'Ojúọjọ́ dídára',
'exif-lightsource-10' => 'Ojúọjọ́ tó ṣú',
'exif-lightsource-11' => 'Ìbòji',
'exif-lightsource-255' => 'Orísun ìmọ́lẹ̀ míràn',

# Flash modes
'exif-flash-fired-0' => 'Fláàṣì kò yọ iná',
'exif-flash-fired-1' => 'Fláàṣì yọ iná',
'exif-flash-mode-3' => 'nífúnrara',
'exif-flash-function-1' => 'Fláàṣì kò siṣẹ́',

'exif-focalplaneresolutionunit-2' => 'inches',

'exif-sensingmethod-1' => 'Àìtúmọ̀',

'exif-filesource-3' => 'Kámẹ́rà dígítà amúdúró',

'exif-scenetype-1' => 'Àwòrán tó jẹ́ yíyà ní fọ́tò tààrà',

'exif-customrendered-0' => 'Ìgbéṣe déédé',

'exif-scenecapturetype-3' => 'Inú òkùnkùn',

'exif-gaincontrol-0' => 'Ìkankan',

'exif-contrast-0' => 'Déédé',

'exif-saturation-0' => 'Déédé',

'exif-sharpness-0' => 'Déédé',

'exif-subjectdistancerange-0' => 'Aláìmọ̀',
'exif-subjectdistancerange-2' => 'Ìpadé ìwòran',
'exif-subjectdistancerange-3' => 'Ìwòran ọ̀ọ́kán',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|meter|meters}} ló fiwà lókè omi-òkun',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|meter|meters}} ló fiwà lábẹ́ omi-òkun',

'exif-gpsmeasuremode-2' => 'Ìwọ̀n ẹlẹ́gbẹ̀ẹ́ 2',
'exif-gpsmeasuremode-3' => 'Ìwọ̀n ẹlẹ́gbẹ̀ẹ́ 3',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilometers láàrin wákàtí kan',
'exif-gpsspeed-m' => 'Mẹ́ẹ̀lì ní wákàtí kan',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometers',
'exif-gpsdestdistance-m' => 'Mẹ́ẹ̀lì',
'exif-gpsdestdistance-n' => 'Mẹ́ẹ̀lì orí-omi',

'exif-gpsdop-good' => 'Dáradára ($1)',
'exif-gpsdop-poor' => 'Àìdára ($1)',

'exif-objectcycle-a' => 'Àárọ̀ nìkan',
'exif-objectcycle-p' => 'Ìrọ̀lẹ́ nìkan',
'exif-objectcycle-b' => 'Àárọ̀ àti ìrọ̀lẹ́',

'exif-ycbcrpositioning-1' => 'Gbígbésáàrin',

'exif-dc-contributor' => 'Àwọn olùkópa',
'exif-dc-date' => 'Ọjọ́ọdún',
'exif-dc-publisher' => 'Olùtẹ̀jáde',
'exif-dc-relation' => 'Amóhùnmáwórán ajọra',
'exif-dc-rights' => 'Àwọn ẹ̀tọ́',
'exif-dc-source' => 'Orísun amóhùnmáwórán',
'exif-dc-type' => 'Irú amóhùnmáwòrán',

'exif-rating-rejected' => 'Kíkọ̀',

'exif-isospeedratings-overflow' => 'Ó tóbi ju 65535 lọ',

'exif-iimcategory-ace' => 'Ìṣẹ́ọnà, àṣà àti fàájì',
'exif-iimcategory-clj' => 'Ìdanràn àti òfin',
'exif-iimcategory-edu' => 'Ẹ̀kọ́',
'exif-iimcategory-evn' => 'Àyíká',
'exif-iimcategory-hth' => 'Ìlera',
'exif-iimcategory-lab' => 'Ìsẹ́',
'exif-iimcategory-pol' => 'Ìṣèlú',
'exif-iimcategory-rel' => 'Ẹ̀sìn àti ìgbàgbọ́',
'exif-iimcategory-sci' => 'Sáyẹ̀nsì àti ọ̀rọ̀iṣẹ́ọnà',
'exif-iimcategory-soi' => 'Àwọn ọ̀rọ̀ àwùjọ',
'exif-iimcategory-spo' => 'Àwọn eréìdárayá',
'exif-iimcategory-wea' => 'Ojúọjọ́',

'exif-urgency-normal' => 'Déédé ($1)',
'exif-urgency-low' => 'Kúkúrú ($1)',
'exif-urgency-high' => 'Gíga ($1)',

# External editor support
'edit-externally' => "Ẹ lo ìmúlò òde láti ṣ'àtúnṣe fáìlì yìí",
'edit-externally-help' => '(Ẹ wo [//www.mediawiki.org/wiki/Manual:External_editors ìlànà ìṣètò] fún ẹ̀kúnrẹ́rẹ́)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'gbogbo',
'namespacesall' => 'gbogbo',
'monthsall' => 'gbogbo',
'limitall' => 'gbogbo',

# Email address confirmation
'confirmemail' => "Ṣè'múdájú àdírẹ́ẹ̀sì e-mail",
'confirmemail_noemail' => 'Ẹ kò tíì ṣètò àdírẹ́ẹ̀sì e-mail tó tótọ́ nínú [[Special:Preferences|ìfẹ́ràn oníṣe]] yín.',
'confirmemail_send' => 'Fi àmìọ̀rọ̀ ìmúdájú ránṣẹ́',
'confirmemail_sent' => 'E-mail ìmúdájú ti jẹ́ fífiránṣẹ́.',
'confirmemail_oncreate' => 'A ti fi àmìọ̀rọ̀ ìmúdájú ránṣẹ́ sí ojúọ̀nà e-mail yín.
Àmìọ̀rọ̀ yìí kò pọndandan láti mú yín wọlé, sùgbọ́n ẹ gbọ́dọ̀ mu padà kí gbogbo àwọn ohun inú wiki yìí tó dúró lórí e-mail ó tó lè ṣiṣẹ́.',
'confirmemail_sendfailed' => '{{SITENAME}} kò le fi lẹ́tà ìmúdájú yín ránṣẹ́.
Ẹ jọ̀wọ́ ẹ ye àdírẹ́ẹ̀sì e-mail yín wò fún irú lẹ́tà-ọ̀rọ̀ tí kò yẹ.

Èsi ẹ̀rọ ìránṣẹ́: $1',
'confirmemail_invalid' => 'Àmìọ̀rọ̀ ìmúdájú àìyẹ.
Ó ṣe é ṣe kó jẹ́ pé àmìọ̀rọ̀ kò ṣiṣẹ́ mọ́.',
'confirmemail_needlogin' => 'Ẹ gbọ́dò $1 láti ṣe ìmúdájú àdírẹ́ẹ́sì e-mail yín.',
'confirmemail_success' => 'Àdírẹ́ẹ́sì e-mail yín ti jẹ́ mímúdájú.
Ẹ le [[Special:UserLogin|wọlé]] nísìnhin láti gbádùn wiki yìí.',
'confirmemail_loggedin' => 'Àdírẹ́ẹ̀sì e-mail yín ti dájú.',
'confirmemail_error' => 'Àsìṣe ṣẹlẹ̀ láti fi ìmójútó yín pamọ́.',
'confirmemail_subject' => 'Ìmúdájú àdírẹ́ẹ̀sì e-mail fún {{SITENAME}}',
'confirmemail_body' => 'Ẹnìkan, bóyá ẹ̀yin sì ni, láti àdírẹ́ẹ̀sì IP $1,
ti ṣe ìforúkọsílẹ̀ àpamọ́ kan "$2" pẹ̀lú àdírẹ́ẹ̀sì e-mail yìí lórí {{SITENAME}}.

Láti fidájú pé àpamọ́ yìí gangan jẹ́ ti yín àtí láti bẹ́rẹ́ àwọn iṣẹ́ e-mail lórí {{SITENAME}}, ẹ sí àjápọ̀ yìí lórí ẹ̀rọ ìtakùn yín:

$3

Tó bá jẹ́ pé ẹ *kò* forúkọ àpamọ́ sílẹ̀, ẹ tẹ̀lé àjápọ̀ yìí láti fagilé àdírẹ́ẹ̀sì e-mail ìmúdájú:

$5

Àmíọ̀rọ̀ ìmúdájú yìí kò ní ṣiṣẹ́ mọ́ lẹ́yìn $4.',
'confirmemail_body_changed' => 'Ẹnìkan, bóyá ẹ̀yin sì ni, láti àdírẹ́ẹ̀sì IP $1,
ti ṣe ìyípadà àdírẹ́ẹ̀sì e-mail àpamọ́ "$2" sí àdírẹ́ẹ̀sì yìí lórí {{SITENAME}}.

Láti fidájú pé àpamọ́ yìí gangan jẹ́ ti yín àtí láti bẹ́rẹ́ àwọn iṣẹ́ e-mail lórí {{SITENAME}}, ẹ sí àjápọ̀ yìí lórí ẹ̀rọ ìtakùn yín:

$3

Tó bá jẹ́ pé àpamọ́ náà *kò* jẹ́ ti yín, ẹ tẹ̀lé àjápọ̀ yìí láti fagilé àdírẹ́ẹ̀sì e-mail ìmúdájú:

$5

Àmíọ̀rọ̀ ìmúdájú yìí kò ní ṣiṣẹ́ mọ́ lẹ́yìn $4.',
'confirmemail_body_set' => 'Ẹnìkan, bóyá ẹ̀yin sì ni, láti àdírẹ́ẹ̀sì IP $1,
ti yí àdírẹ́ẹ̀sì e-mail àpamọ́ "$2" sí àdírẹ́ẹ̀sì yìí lórí {{SITENAME}}.

Láti fidájú pé àpamọ́ yìí gangan jẹ́ ti yín àtí láti bẹ́rẹ́ àwọn iṣẹ́ e-mail lórí {{SITENAME}}, ẹ sí àjápọ̀ yìí lórí ẹ̀rọ ìtakùn yín:

$3

Tó bá jẹ́ pé àpamọ́ náà *kò* jẹ́ ti yín, ẹ tẹ̀lé àjápọ̀ yìí láti fagilé àdírẹ́ẹ̀sì e-mail ìmúdájú:

$5

Àmíọ̀rọ̀ ìmúdájú yìí kò ní ṣiṣẹ́ mọ́ lẹ́yìn $4.',
'confirmemail_invalidated' => 'Ìmúdájú àdìrẹ́ẹ́sì e-mail ti jẹ́ fífagilé',
'invalidateemail' => 'Fagilé ìmúdájú e-mail',

# Scary transclusion
'scarytranscludedisabled' => '[Ìdálẹ́kun ìjámọ́ra interwiki]',
'scarytranscludefailed' => '[Ìmjjáde àdàkọ kùnà fún $1]',
'scarytranscludefailed-httpstatus' => '[Ìmjjáde àdàkọ kùnà fún $1: HTTP $2]',
'scarytranscludetoolong' => '[URL ti gùn jù]',

# Delete conflict
'deletedwhileediting' => "'''Ìkìlọ̀''': Ojúewé yìí ti jẹ́ píparẹ́ lẹ́yìn tí ẹ bẹ̀rẹ̀ àtúnṣe rẹ̀!",
'confirmrecreate' => "Oníṣe [[User:$1|$1]] ([[User talk:$1|ọ̀rọ̀]]) pa ojúewé yìí rẹ́ lẹ́yìn tí ẹ bẹ̀rẹ̀ àtúnṣe lórí rẹ̀ nítorípè:
: ''$2''
Ẹ jọ̀wọ́ ẹ ṣe ìmúdájú pé ẹ fẹ́ tún ojúewé yìí dá.",
'confirmrecreate-noreason' => 'Oníṣe [[User:$1|$1]] ([[User talk:$1|ọ̀rọ̀]]) pa ojúewé yìí rẹ́ lẹ́yìn tí ẹ bẹ̀rẹ̀ àtúnṣe lórí rẹ̀ nítorípè. Ẹ jọ̀wọ́ ẹ ṣe ìmúdájú pé ẹ fẹ́ tún ojúewé yìí dá.',
'recreate' => 'Ìtúndá',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'Pa cache ojúewé yìí rẹ́?',

# action=watch/unwatch
'confirm-watch-button' => 'OK',
'confirm-watch-top' => 'Ṣe ìfikún ojúewé yìí mọ́ ìmójútó yín?',
'confirm-unwatch-button' => 'OK',
'confirm-unwatch-top' => 'Yọ ojúewé yìí kúrò nínú ìmójútó yín?',

# Multipage image navigation
'imgmultipageprev' => '← ojúewé tókọjá',
'imgmultipagenext' => 'ojúewé tóúnbọ̀ →',
'imgmultigo' => 'Lọ!',
'imgmultigoto' => 'Lọ sí ojúewé $1',

# Table pager
'ascending_abbrev' => 'ròkè',
'descending_abbrev' => 'relẹ̀',
'table_pager_next' => 'Ojúewé tóúnbọ̀',
'table_pager_prev' => 'Ojúewé tókọjá',
'table_pager_first' => 'Ojúewé ìkíní',
'table_pager_last' => 'Ojúewé tógbẹ̀yìn',
'table_pager_limit' => 'Ìfihàn ohun $1 lójúewé kọ̀ọ̀kan',
'table_pager_limit_label' => 'Iye ohun ní ojúewé kọ̀ọ̀kan:',
'table_pager_limit_submit' => 'Lọ',
'table_pager_empty' => 'Kò sí èsì',

# Auto-summaries
'autosumm-blank' => 'Sọ ojúewé di òfo',
'autosumm-replace' => 'Dípò àkóónú pẹ̀lú "$1"',
'autoredircomment' => 'Ti ṣàtunjúwe ojúewé sí [[$1]]',
'autosumm-new' => 'Ṣ\'èdá ojúewé pẹ̀lú "$1"',

# Live preview
'livepreview-loading' => 'Óúnbọ̀wá...',
'livepreview-ready' => 'Úngbéyọ... Ti ṣetán!',
'livepreview-failed' => 'Àkọ́yẹ̀wò ẹsẹ̀kẹsẹ̀ kùnà!
Ẹ lo àkóyẹ̀wò onídéédé.',
'livepreview-error' => 'Ó kùnà láti sorapọ̀: $1 "$2".
Ẹ lo àkóyẹ̀wò onídéédé.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Àwọn àtúnṣe tí kò pẹ́ ju {{PLURAL:$1|ìṣẹ́jú-àáyá|ìṣẹ́jú-àáyá}} $1 lọ le mọ́ hàn nínú àtòjọ yìí.',

# Watchlist editor
'watchlistedit-numitems' => 'Ìmójútó yín ní {{PLURAL:$1|àkọlé 1|àkọlé $1}}, láìka àwọn ojúewé ọ̀rọ̀.',
'watchlistedit-noitems' => 'Ìmójútó yín kò ní àwọn àkọlé kankan.',
'watchlistedit-normal-title' => 'Àtúnṣe ìmójútó',
'watchlistedit-normal-legend' => 'Ìyọkúrò àwọn àkọlé láti inú ìmójútó',
'watchlistedit-normal-submit' => 'Ìyọkúrò àwọn àkọlé',
'watchlistedit-normal-done' => '{{PLURAL:$1|Àkọlé 1|Àkọlé $1}} jẹ́ yíyọkúrò látinú ìmójútó yín:',
'watchlistedit-raw-titles' => 'Àwọn àkọlé:',
'watchlistedit-raw-submit' => 'Ìsọdọ̀tun ìmójútó',
'watchlistedit-raw-done' => 'Àwọn àmójútó yín ti dọ̀tun.',
'watchlistedit-raw-added' => '{{PLURAL:$1|Àkọlé 1|Àwọn àkọlẹ́ $1}} ti jẹ́ fífikún:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|Àkọlé 1|Àwọn àkọlẹ́ $1}} ti jẹ́ yíyọkúrò:',

# Watchlist editing tools
'watchlisttools-view' => 'Ẹ wo àwon àtúnṣe tóbaamu',
'watchlisttools-edit' => 'Ìwò àti àtúnṣe ìmójútó',
'watchlisttools-raw' => "Ẹ ṣ'àtúnṣe àkójọ ìmójútó látìbẹ̀rẹ̀",

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|ọ̀rọ̀]])',

# Core parser functions
'unknown_extension_tag' => 'Àlẹ̀mọ́ ìfàgùn àìdámọ̀ "$1"',
'duplicate-defaultsort' => '\'\'\'Ìkìlọ̀:\'\'\' Bọ́tìnì ìtò àkọ́kọ́ṣe "$2" dípò Bọ́tìnì ìtò àkọ́kọ́ṣe "$1" tẹ́lẹ̀.',

# Special:Version
'version' => 'Àtẹ̀jáde',
'version-extensions' => 'Àwọn ìfàgùn kíkànsínú',
'version-specialpages' => 'Àwọn ojúewé pàtàkì',
'version-variables' => 'Ayàtọ̀',
'version-antispam' => 'Ìdínà spam',
'version-skins' => 'Skin (Àwọ̀)',
'version-other' => 'Òmíràn',
'version-hooks' => 'Àwọn hook',
'version-extension-functions' => 'Àwọn ìmúṣe ìfàgùn',
'version-hook-name' => 'Orúkọ hook',
'version-version' => '(Àtẹ̀jáde $1)',
'version-license' => 'Ìwé àṣẹ',
'version-poweredby-credits' => "Agbára ìṣiṣẹ́ wiki yìí wá látọwọ́ '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'àwọn mìíràn',
'version-credits-summary' => 'Ìdùnnú wa ni láti rántí àwọn ẹni wọ̀nyí fún ìdáwọ́lé wọn sí [[Special:Version|MediaWiki]].',
'version-software' => 'Atòlànà kọ̀mpútà kíkànsínú',
'version-software-product' => 'Èso',
'version-software-version' => 'Àtẹ̀jáde',
'version-entrypoints' => 'Àwọn URL ojú ìwọlé',
'version-entrypoints-header-entrypoint' => 'Ojú ìwọlé',
'version-entrypoints-header-url' => 'URL',

# Special:FilePath
'filepath' => 'Ipaṣẹ̀ fáìlì',
'filepath-page' => 'Faili:',
'filepath-submit' => 'Lọ',
'filepath-summary' => 'Ojúewé pàtàkì yìí úndá gbogbo ipasẹ̀ fáìlì kan padà.
Àwọn àwòrán únhàn ní kedere, àwọn irú fáìlì míràn jẹ́ bíbẹ̀rẹ̀ pẹ̀lú ètò ìbáṣe wọn tàràtà.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Ìṣàwárí fún àwọn fáìlì àdáwòkọ',
'fileduplicatesearch-summary' => 'Ìṣàwárí fún àwọn fáìlì àdáwòkọ gẹ́gẹ́bí nọ́mbà hash',
'fileduplicatesearch-legend' => 'Ìṣàwárí fún àdáwòkọ kan',
'fileduplicatesearch-filename' => 'Orúkọ fáìlì:',
'fileduplicatesearch-submit' => 'Àwárí',
'fileduplicatesearch-info' => '$1 × $2 pixel<br />Ìtóbi fáìlì: $3<br />Irú MIME: $4',
'fileduplicatesearch-result-1' => 'Fáìlì "$1" kò ní ìdáwòkọ jíjọra',
'fileduplicatesearch-result-n' => 'Fáìlì "$1" ní {{PLURAL:$2|ìdáwòkọ jíjọra 1|ìdáwòkọ jíjọra $2}}.',
'fileduplicatesearch-noresults' => 'Kò sí fáìlì tó únjẹ́ "$1".',

# Special:SpecialPages
'specialpages' => 'Àwọn ojúewé pàtàkì',
'specialpages-note' => '----
* Àwọn ojúewé pàtàkì onídéédé.
* <span class="mw-specialpagerestricted">Àwọn ojúewé pàtàkì àìgbàláyè.</span>',
'specialpages-group-maintenance' => 'Àwọn ìjábọ̀ ìtọ́jú',
'specialpages-group-other' => 'Àwọn ojúewé pàtàkì míràn',
'specialpages-group-login' => 'Ìwọlé / ìdá àpamọ́',
'specialpages-group-changes' => 'Àwọn àtúnṣe àti àkọọ́lẹ̀ àìpẹ́',
'specialpages-group-media' => 'Ìrùsókè àti àbọ̀ amóhùnmáwòrán',
'specialpages-group-users' => 'Àwọn oníṣe àti àwọn ẹ̀tọ́ wọn',
'specialpages-group-highuse' => 'Àwọn ojúewé ìlò gíga',
'specialpages-group-pages' => 'Àkójọ àwọn ojúewé',
'specialpages-group-pagetools' => 'Àwọn irinṣẹ́ ojúewé',
'specialpages-group-wiki' => 'Àwọn irinṣẹ́ àti dátà',
'specialpages-group-redirects' => 'Ìtúnjúwe àwọn ojúewé pàtàkì',
'specialpages-group-spam' => 'Irínṣẹ́ spam',

# Special:BlankPage
'blankpage' => 'Ojúewé òfo',
'intentionallyblankpage' => 'Ojúewé yìí mọ́hánmọ̀ jẹ́ òfo.',

# External image whitelist
'external_image_whitelist' => ' #Ẹ fi ìlà yìí sílẹ̀ bó ṣe wà<pre>
#Ẹ fi àwọn abala regular expression (èyunhùn apá tó wà ní àrin // nìkan) sísàlẹ̀
#Àwọn wọ̀nyí yíò jẹ́ bíbámu mọ́ àwọn URL àwọn àwòrán òde (hotlinked)
#Àwọn tó báramu yíò jẹ́ fífihàn bíi àwòrán, bíbẹ́ẹ̀kọ́ àjápọ̀ sí àwòrán náà nìkan ni yíò hàn
#Àwọn ìlà tí wọ́n bẹ̀rẹ̀ pẹ̀lú # jẹ́ ṣíṣe bíi àròyé
#Èyí jẹ́ bíbámu mọ́ ìtóbi lẹ́tà (case-insensitive)


#Ẹ fi gbogbo àwọn abala regular expression sí òkè ìlà yí. Ẹ fi ìlà yìí sílẹ̀ bó ṣe wà</pre>',

# Special:Tags
'tags' => 'Àwọn àlẹ̀mọ́ tuntun gidi',
'tag-filter' => 'Ajọ̀ [[Special:Tags|àlẹ́mọ́]]:',
'tag-filter-submit' => 'Ajọ̀',
'tags-title' => 'Àwọn àlẹ̀mọ́',
'tags-intro' => 'Ojúewé yìí ṣe àtòjọ àwọn àlẹ̀mọ́ tí atọ́nà kọ̀mpútà le ṣe àmì àtúnṣe pẹ̀lú, àti ìtumọ̀ wọn.',
'tags-tag' => 'Orúkọ àlẹ́mọ́',
'tags-display-header' => 'Ìhàn lórí àtòjọ tuntun',
'tags-description-header' => 'Ìjúwe kíkún ohun tó túmọ́sì',
'tags-hitcount-header' => 'Àwọn àtúnṣe oníàlẹ̀mọ́',
'tags-edit' => 'àtúnṣe',
'tags-hitcount' => '{{PLURAL:$1|Àtúnṣe|Àwọn àtúnṣe}} $1',

# Special:ComparePages
'comparepages' => 'Ìfiwéra àwọn ojúewé',
'compare-selector' => 'Ìfiwéra àwọn àtúnyẹ̀wò ojúewé',
'compare-page1' => 'Ojúewé 1',
'compare-page2' => 'Ojúewé 2',
'compare-rev1' => 'Àtúnyẹ̀wò 1',
'compare-rev2' => 'Àtúnyẹ̀wò 2',
'compare-submit' => 'Ṣàfiwé',
'compare-invalid-title' => 'Àkọlè tí ẹ nàkasí kò tọ́.',
'compare-title-not-exists' => 'Àkọlé tí ẹ tọ́kasí kò sí.',
'compare-revision-not-exists' => 'Àtúnyẹ̀wò tí ẹ tọ́kasí kò sí.',

# Database error messages
'dberr-header' => 'Wiki yìí ní ìsòro',
'dberr-problems' => 'Àforìjì!
Ibiìtakùn yìí únkojú ìsòro ìṣìṣẹ́ẹ̀rọ.',
'dberr-again' => 'Ẹ mú sùúrù fún ìṣẹ́jú díẹ̀ kí ẹ tó tún ṣe ìrùsókè.',
'dberr-info' => '(Kò le farakan ẹ̀rọ-ìpèsè ibùdó dátà: $1)',
'dberr-usegoogle' => 'Ẹ le ṣàwárí lórí Google báyìí ná.',
'dberr-outofdate' => 'Ẹ mọ̀ pé atọ́ka wọn fún àkóónú wa le mọ́ jẹ́ tuntun.',
'dberr-cachederror' => 'Àwòkọ ojúewé tí ẹ tọrọ nìyí láti cache, ó le mọ́ jẹ́ tuntun.',

# HTML forms
'htmlform-invalid-input' => 'Díẹ̀ nínú ìtẹ̀kọsínú yín ní ìsòro',
'htmlform-select-badoption' => 'Iye tí ẹ tọ́kasí kì í ṣe àṣàyàn tótọ́.',
'htmlform-int-invalid' => 'Iye tí ẹ tọ́kasí kì í ṣe nọ́mbà odidi.',
'htmlform-float-invalid' => 'Iye tí ẹ tọ́kasí kì í ṣe nọ́mbà.',
'htmlform-int-toolow' => 'Iye tí ẹ tọ́kasí kéré ju $1 tó yẹ kó kéréjùlọ',
'htmlform-int-toohigh' => 'Iye tí ẹ tọ́kasí pọ̀ ju $1 tó yẹ kó pọ̀jùlọ',
'htmlform-required' => 'Iye yìí ṣe dandan',
'htmlform-submit' => 'Fúnsílẹ̀',
'htmlform-reset' => 'Ìdápadà àwọn àtúnṣe',
'htmlform-selectorother-other' => 'Òmíràn',

# SQLite database support
'sqlite-has-fts' => '$1 pẹ̀lú àtìlẹ́yìn àwárí ìkọ̀rọ̀ kíkún',
'sqlite-no-fts' => '$1 láìní àtìlẹ́yìn àwárí ìkọ̀rọ̀ kíkún',

# New logging system
'logentry-delete-delete' => '$1 pa ojúewé $3 rẹ́',
'logentry-delete-restore' => '$1 dá ojúewé $3 padà',
'logentry-delete-event' => '$1 ṣe àyípadà ìhànsí {{PLURAL:$5|ìṣẹ̀lẹ̀ àkọọ́lẹ̀ kan|àwọn ìṣẹ̀lẹ̀ àkọọ́lẹ̀ $5}} lórí $3: $4',
'logentry-delete-revision' => '$1 ṣe àyípadà ìhànsí {{PLURAL:$5|àtúnyẹ̀wò kan|àwọn àtúnyẹ̀wò $5}} lórí $3: $4',
'logentry-delete-event-legacy' => '$1 ṣe àyípadà ìhànsí àwọn ìṣẹ̀lẹ̀ àkọọ́lẹ̀ lórí $3',
'logentry-delete-revision-legacy' => '$1 ṣe àyípadà ìhànsí àwọn àtúnyẹ̀wò lórí ojúewé $3',
'logentry-suppress-delete' => '$1 fi ojúewé $3 sílẹ̀',
'logentry-suppress-event' => '$1 ṣe àyípadà ìhànsí {{PLURAL:$5|ìṣẹ̀lẹ̀ àkọọ́lẹ̀ kan|àwọn ìṣẹ̀lẹ̀ àkọọ́lẹ̀ $5}} níkọ̀kọ̀rọ̀ lórí $3: $4',
'logentry-suppress-revision' => '$1 ṣe àyípadà ìhànsí {{PLURAL:$5|àtúnyẹ̀wò kan|àwọn àtúnyẹ̀wò $5}} níkọ̀kọ̀rọ̀ lórí $3: $4',
'logentry-suppress-event-legacy' => '$1 ṣe àyípadà ìhànsí àwọn ìṣẹ̀lẹ̀ àkọọ́lẹ̀ lórí $3 níkọ̀kọ̀rọ̀',
'logentry-suppress-revision-legacy' => '$1 ṣe àyípadà ìhànsí àwọn àtúnyẹ̀wò lórí ojúewé $3 níkọ̀kọ̀rọ̀',
'revdelete-content-hid' => 'ìbòmọ́lẹ̀ àkóónú',
'revdelete-summary-hid' => 'ìbòmọ́lẹ̀ àkótán àtúnṣe',
'revdelete-uname-hid' => 'ìbòmọ́lẹ̀ orúkọ oníṣe',
'revdelete-content-unhid' => 'àìbòmọ́lẹ̀ àkóónú',
'revdelete-summary-unhid' => 'àìbòmọ́lẹ̀ àkótán àtúnṣe',
'revdelete-uname-unhid' => 'orúkọ oníṣe kò pamọ́',
'revdelete-restricted' => 'ṣe ìmúlò ìpàlà fún àwọn olúmójútó',
'revdelete-unrestricted' => 'yọ ìpàlà fún àwọn olúmójútó',
'logentry-move-move' => '$1 ṣeyípòdà ojúewé $3 sí $4',
'logentry-move-move-noredirect' => '$1 ṣeyípòdà ojúewé $3 sí $4 láìfi àtúnjúwe sílẹ̀',
'logentry-move-move_redir' => '$1 ṣeyípòdà ojúewé $3 sí $4 lórí àtúnjúwe',
'logentry-move-move_redir-noredirect' => '$1 ṣeyípòdà ojúewé $3 sí $4 lórí àtúnjúwe láìfi àtúnjúwe sílẹ̀',
'logentry-patrol-patrol' => '$1 ṣe àmí àtúnyẹ̀wò $4 ojúewé $3 bíi sísọ́',
'logentry-patrol-patrol-auto' => '$1 fúnraẹni ṣàmì àtúnyẹ̀wò $4 ti ojúewé $3 bíi síṣọ́',
'logentry-newusers-newusers' => 'Àpamọ́ oníṣe $1 jẹ́ dídá',
'logentry-newusers-create' => 'Àpamọ́ oníṣe $1 jẹ́ dídá',
'logentry-newusers-create2' => 'Àpamọ́ oníṣe $3 jẹ́ dídá látọwọ́ $1',
'logentry-newusers-autocreate' => 'Àkópamọ́ $1 jẹ́ dídá fúnrarẹ̀',
'logentry-rights-rights' => '$1 yí ìjọ́mọ ẹgbẹ́ padà fún $3 láti $4 sí $5',
'logentry-rights-rights-legacy' => '$1 yí ìjọ́mọ ẹgbẹ́ padà fún $3',
'logentry-rights-autopromote' => '$1 jẹ́ gbígbéga nífúnraẹni láti $4 sí $5',
'rightsnone' => '(kòsí)',

# Feedback
'feedback-bugornote' => 'Tí ẹ bá ti ṣetán láti ṣàlàyé ìsòrò iṣẹ́ẹ̀rọ́ lẹ́ẹ̀kúnrẹ́rẹ́ ẹ jọ̀wọ́ [$1 ẹ sọ irú ìsòro náà]
Bíbẹ̀ẹ̀kọ́, ẹ le lo fọ́ọ̀mù ìsàlẹ̀. Ẹjọ́ yín yíò jẹ́ fífikún mọ́ ojúewé "[$3 $2]", bákannáà mọ́ orúkọ oníṣe yín.',
'feedback-subject' => 'Oríọ̀rọ̀:',
'feedback-message' => 'Ìránṣẹ́:',
'feedback-cancel' => 'Fagilé',
'feedback-submit' => 'Ìfisílẹ̀ ìdáhùn',
'feedback-adding' => 'Ìfikún ìdáhùn sí ojúewé...',
'feedback-error1' => 'Àsìṣe: Èsì aláìdámọ́ látọ̀dọ̀ API',
'feedback-error2' => 'Àsìṣe: Àtúnṣe kùnà',
'feedback-error3' => 'Àsìṣe: Kò sí ìdáhùn látọ̀dọ̀ API',
'feedback-thanks' => 'Adúpẹ́! Ìdáhùn yín ti jẹ́ fífikún sí ojúewé "[$2 $1]".',
'feedback-close' => 'Ṣetán',
'feedback-bugcheck' => 'Ó dáa bẹ́ẹ̀! Ẹ rí pé kò í ṣe ìkan nínú [$1 àwọn ìsòrò tí a ti mọ̀ tẹ́lẹ̀].',
'feedback-bugnew' => 'Mo ti yẹ́wò. Fi ìsòrò sùn',

# Search suggestions
'searchsuggest-search' => 'Ṣàwárí',
'searchsuggest-containing' => 'tó ní...',

# API errors
'api-error-badaccess-groups' => 'Ẹ kò ní àṣẹ láti ru fáìlì wọlé sí orí wiki yìí.',
'api-error-badtoken' => 'Àsìṣe inú: Ìdáramọ̀ búburú.',
'api-error-copyuploaddisabled' => 'Ìrùsókè pẹ̀lú URL jẹ́ dídálẹ́kun lórí ẹ̀rọ-ìpèsè yìí.',
'api-error-duplicate' => '{{PLURAL:$1|[$2 Fáìlì míràn]|[$2 Àwọn fáìlì míràn]}} kan tilẹ̀ wà lórí ibiìtàkùn pẹ̀lú àkóónú kannáà.',
'api-error-duplicate-archive' => '{{PLURAL:$1|[$2 Fáìlì míràn]|[$2 Àwọn fáìlì míràn]}} kan tilẹ̀ wà lórí ibiìtàkùn pẹ̀lú àkóónú kannáà, sùgbọ́n {{PLURAL:$1|ó|wọ́n}} ti jẹ́ píparẹ́.',
'api-error-duplicate-archive-popup-title' => '{{PLURAL:$1|Fáìlì àdáwòkọ tó ti|Àwọn fáìlì àdáwòkọ tí wọ́n ti}} jẹ́ píparẹ́.',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Fáìlì|Àwọn fáìlì}} àdáwòkọ.',
'api-error-empty-file' => 'Fáílì tí ẹ fisílẹ̀ jẹ́ òfo.',
'api-error-emptypage' => 'Ẹ kò ní àyè láti dá ojúewé tuntun tó jẹ́ òfo.',
'api-error-fetchfileerror' => 'Àsìṣe inú: Kò le mú fáìlì ná jáde nítorí àsìṣe.',
'api-error-fileexists-forbidden' => 'Fáìlì kan wà pẹ̀lú orúkọ "$1", kò ṣe é kọlélórí.',
'api-error-fileexists-shared-forbidden' => 'Fáìlì kan wà pẹ̀lú orúkọ "$1" nínú ibi àkójọsí fáìlì, kò ṣe é kọlélórí.',
'api-error-file-too-large' => 'Fáílì tí ẹ fisílẹ̀ jẹ́ tí tóbijù.',
'api-error-filename-tooshort' => 'Orúkọ fáílì kéréjú bó ṣe yẹ lọ.',
'api-error-filetype-banned' => 'Irú fáílì yìí ti jẹ́ dídí lọ́nà.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|kíì ṣe|kìí ṣe àwọn}} irú fáìlì tí à gbàláyè. {{PLURAL:$3|Irú fáìlì|Àwọn irú fáìlì}} tí à gbàláyè ni $2.',
'api-error-filetype-missing' => 'Orúkọ fáìlì kò ní ìfàgùn.',
'api-error-hookaborted' => 'Ìtúndáṣe tí ẹ fẹ́ ṣe ti jẹ́ dídálẹ́kun látọwọ́ ìfàgùn.',
'api-error-http' => 'Àsìṣe inú: Ìfarakan ẹ̀rọ-ìpèsè kò ṣe é ṣe.',
'api-error-illegal-filename' => 'Orúkọ fáílì yìí kò jẹ́ gbígbàláàyè.',
'api-error-internal-error' => 'Àsìṣe inú: Wàhálà wáyé láti ṣe ìgbéṣe ìrùsókè yín lórí wiki yìí.',
'api-error-invalid-file-key' => 'Àsìṣe inú: Fáìlì kò sí nínú ibi ìfipamọ́ ìgbàdíẹ̀.',
'api-error-missingparam' => 'Àsìṣe inú: Kò sí pàrámítà tó tọrọ.',
'api-error-missingresult' => 'Àsìṣe inú: Kò le sọ bóyá àwòkọ yọrí sí rere.',
'api-error-mustbeloggedin' => 'Ẹ gbọ́dọ̀ wọlé láti ru fáìlì sókè.',
'api-error-mustbeposted' => 'Àsìṣe inú: Ìtọrọ bèèrè fún HTTP POST.',
'api-error-noimageinfo' => 'Ìrùsòkè jásí rere, sùgbọ́n ẹ̀rọ-ìpèsè kò sọ ohùn kankan nípa fáìlì ọ̀hún.',
'api-error-nomodule' => 'Àsìṣe inú: Ẹyọ ìrùsókè kankan kò sí.',
'api-error-ok-but-empty' => 'Àsìṣe inú: Kò sí ìdáhùn látọwọ́ ẹ̀rọ-ìpèsè.',
'api-error-overwrite' => 'Ìkọlélórí fáìlì tó wà kò jẹ́ gbígbà ní àyè.',
'api-error-stashfailed' => 'Àsìṣe inú: Ẹ̀rọ-ìpèsè kùnà láti fi fáìlì ìgbàdíẹ̀ pamọ́.',
'api-error-timeout' => 'Ẹ̀rọ-ìpèsè kò dáhùn ní àrin àsìkò tó yẹ.',
'api-error-unclassified' => 'Àsìṣe àìdámọ̀ kan ti ṣẹlẹ̀.',
'api-error-unknown-code' => 'Àsìṣe aláìlójúùtú: "$1".',
'api-error-unknown-error' => 'Àsìṣe inú: Àsìṣe ṣẹlẹ̀ láti ṣe ìrùsókè fáìlì yín.',
'api-error-unknown-warning' => 'Ìkìlọ̀ àìmọ̀: "$1".',
'api-error-unknownerror' => 'Àsìṣe aláìlójúùtú: "$1".',
'api-error-uploaddisabled' => 'Ìdálẹ́kun ìrùsókè lórí wiki yìí.',
'api-error-verification-error' => 'Fáìlì náà le ti bàjẹ́, tàbí ó ní ìfàgún tí kò yẹ.',

# Durations
'duration-seconds' => '{{PLURAL:$1|ìṣẹ́júkejì|ìṣẹ́júkejì}} $1',
'duration-minutes' => '{{PLURAL:$1|ìṣẹ́jú|ìṣẹ́jú}} $1',
'duration-hours' => '{{PLURAL:$1|wákàtí|wákàtí}} $1',
'duration-days' => '{{PLURAL:$1|ọjọ́|ọjọ́}} $1',
'duration-weeks' => '{{PLURAL:$1|ọ̀sẹ̀|ọ̀sẹ̀}} $1',
'duration-years' => '{{PLURAL:$1|ọdún|ọdún}} $1',
'duration-decades' => '{{PLURAL:$1|ẹ̀wàdún|ẹ̀wàdún}} $1',
'duration-centuries' => '{{PLURAL:$1|ọ̀rúndún|ọ̀rúndún}} $1',
'duration-millennia' => '{{PLURAL:$1|ẹ̀rúndún|ẹ̀rúndún}} $1',

);
