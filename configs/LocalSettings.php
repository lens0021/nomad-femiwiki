<?php
# This file was automatically generated by the MediaWiki 1.27.0
# installer at first.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgSitename = '페미위키';

# The URL base path to the directory containing the wiki;
# defaults for all runtime URL paths are based off of this.
# For more information on customizing the URLs
# (like /w/index.php/Page_title to /wiki/Page_title) please see:
# https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = '';
$wgArticlePath = "/w/$1";

# The protocol and server name to use in fully-qualified URLs
$wgServer = 'https://femiwiki.com';
$wgCanonicalServer = 'https://femiwiki.com';
$wgEnableCanonicalServerLink = true;

# The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

$wgStyleVersion = '20191101_0';
$wgResourceLoaderMaxage = [
	'versioned' => [
		# Squid/Varnish but also any other public proxy cache between the client and MediaWiki
		'server' => 90 * 24 * 60 * 60, # 90 days
		# On the client side (e.g. in the browser cache).
		'client' => 90 * 24 * 60 * 60, # 90 days
	],
	'unversioned' => [
		# 3 minutes
		'server' => 3 * 60,
		# 3 minutes
		'client' => 3 * 60,
	],
];

# Trust an X-Forwarded-For (XFF) header specifying a private IP in requests
# from a trusted forwarding proxy
$wgUsePrivateIPs = true;

# The URL path to the logo.  Make sure you change this from the default,
# or else you'll overwrite your logo when you upgrade!
#
# References:
#   https://www.mediawiki.org/wiki/Manual:$wgLogo
#   https://www.mediawiki.org/wiki/Manual:$wgLogoHD
$wgLogo = "$wgResourceBasePath/skins/Femiwiki/images/logo-1200-630.png";

# UPO means: this is also a user preference option
#
# Reference:
#   https://www.mediawiki.org/wiki/Help:User_preference_option
$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO
$wgAllowHTMLEmail = true;
$wgSMTP = [
	'host' => 'email-smtp.us-east-1.amazonaws.com',
	'IDHost' => 'femiwiki.com',
	'port' => 587,
	'auth' => true,
	'username' => 'AKIAJ472HG7XALTXZ5QA',
];

$wgEmergencyContact = 'admin@femiwiki.com';
$wgPasswordSender = 'admin@femiwiki.com';
$wgUserEmailUseReplyTo = true;

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

# Database settings
$wgDBtype = 'mysql';
$wgDBname = 'femiwiki';

# MySQL specific settings
$wgDBprefix = '';

# MySQL table options to use during installation or update
$wgDBTableOptions = 'ENGINE=InnoDB, DEFAULT CHARSET=binary';

# Change the default password type to use when hashing user passwords.
$wgPasswordDefault = 'argon2';

# Change settings related to password strength and security.
$wgPasswordPolicy['policies']['default'] = [
	'MinimalPasswordLength' => [ 'value' => 8, 'suggestChangeOnLogin' => true ]
];

# Shared memory settings
$wgMainCacheType = CACHE_MEMCACHED;
$wgSessionCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED;
$wgMessageCacheType = CACHE_MEMCACHED;

# To enable image uploads, make sure the 'images' directory
# is writable, then set this to true:
$wgEnableUploads = true;
$wgFileExtensions[] = 'svg';
$wgAllowTitlesInSVG = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = '/usr/bin/convert';
$wgSVGConverter = 'rsvg';

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# If you use ImageMagick (or any other shell command) on a
# Linux server, this will need to be set to the name of an
# available UTF-8 locale
$wgShellLocale = 'C.UTF-8';

# Set $wgCacheDirectory to a writable directory on the web server
# to make your wiki go slightly faster. The directory should not
# be publically accessible from the web.
$wgCacheDirectory = '/tmp/cache';
$wgUseFileCache = true;

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = 'ko';
$wgLocaltimezone = 'Asia/Seoul';
date_default_timezone_set( $wgLocaltimezone );
$wgDefaultUserOptions['timecorrection'] = 9;
$wgPageLanguageUseDB = true;

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = '1';

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = '/usr/bin/diff3';

# Default skin: you can change the default skin. Use the internal symbolic
# names, ie 'vector', 'monobook':
$wgDefaultSkin = 'femiwiki';

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'Vector' );
wfLoadSkin( 'Femiwiki' );
$wgFemiwikiHeadItems = [
	'fav1' => "<link rel='apple-touch-icon' sizes='57x75' href='/fw-resources/favicons/apple-icon-57x57.png'>",
	'fav2' => "<link rel='apple-touch-icon' sizes='60x60' href='/fw-resources/favicons/apple-icon-60x60.png'>",
	'fav3' => "<link rel='apple-touch-icon' sizes='72x72' href='/fw-resources/favicons/apple-icon-72x72.png'>",
	'fav4' => "<link rel='apple-touch-icon' sizes='76x76' href='/fw-resources/favicons/apple-icon-76x76.png'>",
	'fav5' => "<link rel='apple-touch-icon' sizes='114x114' href='/fw-resources/favicons/apple-icon-114x114.png'>",
	'fav6' => "<link rel='apple-touch-icon' sizes='120x120' href='/fw-resources/favicons/apple-icon-120x120.png'>",
	'fav7' => "<link rel='apple-touch-icon' sizes='144x144' href='/fw-resources/favicons/apple-icon-144x144.png'>",
	'fav8' => "<link rel='apple-touch-icon' sizes='152x152' href='/fw-resources/favicons/apple-icon-152x152.png'>",
	'fav9' => "<link rel='apple-touch-icon' sizes='180x180' href='/fw-resources/favicons/apple-icon-180x180.png'>",
	'fav10' => "<link rel='icon' type='image/png' sizes='192x192' href='/fw-resources/favicons/android-icon-192x192.png'>",
	'fav11' => "<link rel='icon' type='image/png' sizes='32x32' href='/fw-resources/favicons/favicon-32x32.png'>",
	'fav12' => "<link rel='icon' type='image/png' sizes='96x96' href='/fw-resources/favicons/favicon-96x96.png'>",
	'fav13' => "<link rel='icon' type='image/png' sizes='16x16' href='/fw-resources/favicons/favicon-16x16.png'>",
	'fav14' => "<link rel='manifest' href='/fw-resources/favicons/manifest.json'>",
	'fav15' => "<meta name='msapplication-TileColor' content='#ffffff'>",
	'fav16' => "<meta name='msapplication-TileImage' content='/fw-resources/favicons/ms-icon-144x144.png'>",
	'fav17' => "<meta name='theme-color' content='#ffffff'>"
];
$wgFemiwikiTwitterAccount = 'femiwikidotcome';

#
# Namespace settings
#
# BBS
define( 'NS_BBS', 3906 );
define( 'NS_BBS_TALK', 3907 );
$wgExtraNamespaces[NS_BBS] = '게시판';
$wgExtraNamespaces[NS_BBS_TALK] = '게시판토론';

# Permission
$wgGroupPermissions['*']['createaccount'] = true;
$wgGroupPermissions['sysop']['usermerge'] = true;
$wgGroupPermissions['sysop']['renameuser'] = true;
$wgGroupPermissions['sysop']['interwiki'] = true;
$wgGroupPermissions['oversight']['deletelogentry'] = true;
$wgGroupPermissions['oversight']['deleterevision'] = true;
$wgGroupPermissions['bot']['patrolmarks'] = true;

# Prevent anonymous users from edit pages
$wgGroupPermissions['*']['edit'] = false;

# Set when users become autoconfirmed users
$wgAutoConfirmCount = 0;
$wgAutoConfirmAge = 3600;

$wgAutopromote = [
	'autoconfirmed' => [ '&',
		[ APCOND_EDITCOUNT, &$wgAutoConfirmCount ],
		[ APCOND_AGE, &$wgAutoConfirmAge ],
	],
];

# Allow autoconfirmed users to edit pages
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['autoconfirmed']['edit'] = true;

# Add restricted-sysop group
$wgGroupPermissions['restricted-sysop'] = $wgGroupPermissions['sysop'];
$wgGroupPermissions['restricted-sysop']['apihighlimits'] = false;
$wgGroupPermissions['restricted-sysop']['editinterface'] = false;
$wgGroupPermissions['restricted-sysop']['editusercss'] = false;
$wgGroupPermissions['restricted-sysop']['edituserjs'] = false;
$wgGroupPermissions['restricted-sysop']['managechangetags'] = false;
$wgGroupPermissions['restricted-sysop']['move-rootuserpages'] = false;
$wgGroupPermissions['restricted-sysop']['unblockself'] = false;

# FemiwikiTeam is just a list of all Femiwiki team member
$wgGroupPermissions['femiwiki-team']['editprotected'] = true;

# Remain commemorative Seeder group
$wgGroupPermissions['seeder']['edit'] = true;

# Show numbers on headings
$wgDefaultUserOptions['numberheadings'] = 1;

# Enable Enhanced recent changes to opt-out
$wgDefaultUserOptions['rcenhancedfilters-disable'] = 0;

# Hide some Preferences
$wgHiddenPrefs[] = 'gender';
$wgHiddenPrefs[] = 'realname';
# See https://github.com/femiwiki/mediawiki/issues/211
$wgHiddenPrefs[] = 'numberheadings';

# Allow display titles not only to titles that normalize to the same canonical
# DB key as the real page title.
$wgRestrictDisplayTitle = false;

# Open external links in new tab
$wgExternalLinkTarget = '_blank';

# Allow partial blocks to be created
$wgEnablePartialBlocks = true;

# Copyright
$wgRightsPage = '페미위키:저작권';
$wgRightsUrl = 'https://creativecommons.org/licenses/by-sa/4.0/deed.ko';
$wgRightsText = '크리에이티브 커먼즈 저작자표시-동일조건변경허락 4.0 국제 라이선스';
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-sa.png";

# User CSS and JS
$wgAllowUserCss = true;
$wgAllowUserJs = true;

# Allow external image link
$wgAllowExternalImages = true;
$wgAllowImageTag = true;

# all pages (that are not redirects) are considered as valid articles
$wgArticleCountMethod = 'any';

# Prevent Search for some namespaces
$wgNamespaceRobotPolicies = [
	NS_USER => 'noindex,nofollow',
	NS_USER_TALK => 'noindex,nofollow',
];

# Provide Naspace Aliases
$wgNamespaceAliases = [
	'도' => NS_HELP,
	'페' => NS_PROJECT
];

# Parsoid server Setting
$wgVirtualRestConfig['modules']['parsoid'] = [
	'url' => 'http://parsoid:8000',
	'domain' => 'femiwiki.com'
];

# Restbase server Setting
# 잠시 끔. https://github.com/femiwiki/femiwiki/issues/82 참고
# $wgVirtualRestConfig['modules']['restbase'] = [
# 	'url' => 'http://restbase:7231',
# 	'domain' => 'femiwiki.com'
# ];
# $wgVisualEditorRestbaseURL = 'https://femiwiki.com/femiwiki.com/v1/page/html/';
# $wgVisualEditorFullRestbaseURL = 'https://femiwiki.com/femiwiki.com/';

# Set a cookie when a user is autoblocked
$wgCookieSetOnAutoblock = true;

#
# Extensions
#

# AbuseFilter
wfLoadExtension( 'AbuseFilter' );
$wgGroupPermissions['sysop']['abusefilter-modify'] = false;
$wgGroupPermissions['abusefilter']['abusefilter-modify'] = true;
$wgGroupPermissions['abusefilter']['changetags'] = true;
$wgGroupPermissions['abusefilter']['managechangetags'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = false;
$wgGroupPermissions['abusefilter']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = false;
$wgGroupPermissions['checkuser']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;

# AntiSpoof
wfLoadExtension( 'AntiSpoof' );

# AWS
wfLoadExtension( 'AWS' );
$wgAWSRegion = 'ap-northeast-1';
$wgAWSBucketPrefix = 'femiwiki-uploaded-files';
$wgAWSRepoHashLevels = 2;
$wgAWSRepoDeletedHashLevels = 2;

# BetaFeatures
wfLoadExtension( 'BetaFeatures' );

# BounceHandler
wfLoadExtension( 'BounceHandler' );

# CategoryIntersectionSearch
wfLoadExtension( 'CategoryIntersectionSearch' );

# CategoryTree
wfLoadExtension( 'CategoryTree' );

# CharInsert
wfLoadExtension( 'CharInsert' );

# CheckUser
wfLoadExtension( 'CheckUser' );

# Cite
wfLoadExtension( 'Cite' );

# CiteThisPage
wfLoadExtension( 'CiteThisPage' );

# CodeEditor
wfLoadExtension( 'CodeEditor' );

# CodeMirror
wfLoadExtension( 'CodeMirror' );

# CollaborationKit
wfLoadExtension( 'CollaborationKit' );

# ConfirmEdit
wfLoadExtensions( [ 'ConfirmEdit', 'ConfirmEdit/ReCaptchaNoCaptcha' ] );
$wgCaptchaClass = 'ReCaptchaNoCaptcha';
$wgCaptchaTriggers['createaccount'] = true;
# If you plan to use VisualEditor forget about this new and better No Captcha solution from Google.
$wgCaptchaTriggers['edit'] = false;
$wgCaptchaTriggers['create'] = false;
$wgCaptchaTriggers['addurl'] = false;
$wgCaptchaTriggers['badlogin'] = false;

# Description2
wfLoadExtension( 'Description2' );

# DisableAccount
wfLoadExtension( 'DisableAccount' );
$wgGroupPermissions['sysop']['disableaccount'] = true;

# Disambiguator
wfLoadExtension( 'Disambiguator' );

# DiscordNotifications
wfLoadExtension( 'DiscordNotifications' );
$wgDiscordFromName = '바뀐글';
$wgWikiUrl = "{$wgCanonicalServer}/";
$wgDiscordShowNewUserEmail = false;
$wgDiscordShowNewUserFullName = false;
$wgDiscordShowNewUserIP = false;
$wgExcludedPermission = 'bot';
$wgDiscordExcludeNotificationsFrom = [ 'Translations:' ];
# VisualEditor setting
# See https://github.com/kulttuuri/DiscordNotifications#customize-request-call-method-fix-extension-not-working-with-visualeditor
$wgDiscordSendMethod = 'file_get_contents';
$wgWikiUrlEndingUserRights = "Special:UserRights/";
$wgWikiUrlEndingBlockUser = '특수:제재안목록/';

# Echo
wfLoadExtension( 'Echo' );
$wgEchoMaxMentionsInEditSummary = 5;

# EmbedVideo
wfLoadExtension( 'EmbedVideo' );

# EventLogging
wfLoadExtension( 'EventLogging' );
$wgEventLoggingBaseUri = 'http://localhost:8080/event.gif';
$wgEventLoggingFile = '/var/log/mediawiki/events.log';

# FacetedCategory
wfLoadExtension( 'FacetedCategory' );

# Flow
wfLoadExtension( 'Flow' );
$wgFlowEditorList = [ 'visualeditor', 'none' ];
$wgNamespaceContentModels[NS_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_USER_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_PROJECT_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_FILE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_MEDIAWIKI_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_TEMPLATE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_HELP_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_CATEGORY_TALK] = 'flow-board';
$wgNamespaceContentModels[275] = 'flow-board'; # Widget talk
$wgNamespaceContentModels[829] = 'flow-board'; # Module talk
$wgNamespaceContentModels[1199] = 'flow-board'; # Translations talk
$wgNamespaceContentModels[2301] = 'flow-board'; # Gadget talk
$wgNamespaceContentModels[2303] = 'flow-board'; # Gadget definition talk
$wgNamespaceContentModels[NS_BBS] = 'flow-board';
$wgNamespaceContentModels[NS_BBS_TALK] = 'flow-board';
$wgFlowDefaultLimit = 2;

# Gadgets
wfLoadExtension( 'Gadgets' );
$wgGadgetsRepoClass = 'GadgetDefinitionNamespaceRepo';
$wgGroupPermissions['interface-admin']['gadgets-edit'] = true;
$wgGroupPermissions['interface-admin']['gadgets-definition-edit'] = true;

# Graph
wfLoadExtension( 'Graph' );

# GuidedTour
wfLoadExtension( 'GuidedTour' );

# HTMLTags
require_once "$IP/extensions/HTMLTags/HTMLTags.php";
$wgHTMLTagsAttributes['a'] = [ 'href', 'class', 'itemprop' ];
$wgHTMLTagsAttributes['link'] = [ 'href', 'itemprop' ];
$wgHTMLTagsAttributes['meta'] = [ 'content', 'itemprop' ];
$wgHTMLTagsAttributes['iframe'] = [ 'src', 'class', 'style' ];

# InputBox
wfLoadExtension( 'InputBox' );

# Interwiki
wfLoadExtension( 'Interwiki' );

# Josa
wfLoadExtension( 'Josa' );

# Nuke
wfLoadExtension( 'Nuke' );

# LocalisationUpdate
wfLoadExtension( 'LocalisationUpdate' );
$wgLocalisationUpdateRepositories = [
	'github' => [
		'mediawiki' => 'file:///var/lib/l10nupdate/mediawiki/core/%PATH%',
		'extension' => 'file:///var/lib/l10nupdate/mediawiki/extensions/%NAME%/%PATH%',
		'skin' => 'file:///var/lib/l10nupdate/mediawiki/skins/%NAME%/%PATH%',
	],
	'femiwiki' => [
		'extension' => 'https://raw.github.com/femiwiki/%NAME%/master/%PATH%',
		'skin' => 'https://raw.github.com/femiwiki/FemiwikiSkin/master/%PATH%',
	]
];

# LoginNotify
wfLoadExtension( 'LoginNotify' );

# OATHAuth
wfLoadExtension( 'OATHAuth' );

# OpenGraphMeta
wfLoadExtension( 'OpenGraphMeta' );

# PageImages
wfLoadExtension( 'PageImages' );

# ParserFunctions
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

# Poem
wfLoadExtension( 'Poem' );

# Renameuser
wfLoadExtension( 'Renameuser' );

# ReplaceText
wfLoadExtension( 'ReplaceText' );

# RevisionSlider
wfLoadExtension( 'RevisionSlider' );

# Sanctions
wfLoadExtension( 'Sanctions' );

# Scribunto
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';

# SimpleMathJax
wfLoadExtension( 'SimpleMathJax' );

# SpamBlacklist
wfLoadExtension( 'SpamBlacklist' );
# Empty Meta-Wiki blacklist
$wgBlacklistSettings = [
	'spam' => [
		'files' => []
	]
];

# SyntaxHighlight
wfLoadExtension( 'SyntaxHighlight_GeSHi' );

# TemplateData
wfLoadExtension( 'TemplateData' );

# TemplateStyles
wfLoadExtension( 'TemplateStyles' );

# TemplateWizard
wfLoadExtension( 'TemplateWizard' );
$wgDefaultUserOptions['templatewizard-betafeature'] = 1;

# Thanks
wfLoadExtension( 'Thanks' );

# TitleBlacklist
wfLoadExtension( 'TitleBlacklist' );

# Translate
include_once "$IP/extensions/Translate/Translate.php";
$wgGroupPermissions['autoconfirmed']['translate'] = true;
$wgGroupPermissions['translationadmin']['pagetranslation'] = true;
$wgGroupPermissions['translationadmin']['translate-manage'] = true;
$wgGroupPermissions['translationadmin']['translate-messagereview'] = true;
$wgGroupPermissions['translationadmin']['pagelang'] = true;
$wgTranslatePageTranslationULS = true;
$wgPageTranslationLanguageList = 'sidebar-always';
$wgTranslatePermissionUrl = 'Project:번역';
$wgTranslateSecondaryPermissionUrl = 'Project:번역';

# TwoColConflict
wfLoadExtension( 'TwoColConflict' );
# Enable twocolconflict to opt-out
$wgDefaultUserOptions['twocolconflict'] = true;

# UnifiedExtensionForFemiwiki
wfLoadExtension( 'UnifiedExtensionForFemiwiki' );
$wgSpecialPages['Uncategorizedcategories'] = 'SpecialUncategorizedCategoryTree';
$wgSpecialPages['Whatlinkshere'] = 'SpecialOrderedWhatlinkshere';

# UniversalLanguageSelector
wfLoadExtension( 'UniversalLanguageSelector' );
$wgULSPosition = 'interlanguage';
$wgULSIMEEnabled = false;
$wgULSCompactLinksEnableAnon = true;
# Enable ULS compact links beta feature to opt-out
$wgDefaultUserOptions['uls-compact-links'] = 1;

# UploadWizard
wfLoadExtension( 'UploadWizard' );
# Needed to make UploadWizard work in IE, see https://phabricator.wikimedia.org/T41877
$wgApiFrameOptions = 'SAMEORIGIN';
$wgExtensionFunctions[] = function () {
	$GLOBALS['wgUploadNavigationUrl'] = SpecialPage::getTitleFor( 'UploadWizard' )->getLocalURL();
	return true;
};
$wgUploadWizardConfig = [];
$wgUploadWizardConfig['alternativeUploadToolsPage'] = '특수:파일올리기';
$wgUploadWizardConfig['licensing']['thirdParty']['licenseGroups'] = [
	[
		'head' => 'mwe-upwiz-license-cc-head',
		'subhead' => 'mwe-upwiz-license-cc-subhead',
		'licenses' => [
			'cc-by-sa-4.0',
			'cc-by-sa-3.0',
			'cc-by-sa-2.5',
			'cc-by-4.0',
			'cc-by-3.0',
			'cc-by-2.5',
			'cc-zero'
		]
	],
	[
		'head' => 'mwe-upwiz-license-custom-head',
		'special' => 'custom',
		'licenses' => [ 'custom' ],
	],
	[
		'head' => 'mwe-upwiz-license-none-head',
		'licenses' => [ 'none' ]
	],
];
# Skip the tutorial
$wgUploadWizardConfig['tutorial'] = [ 'skip' => true ];
$wgUploadWizardConfig['uwLanguages'] = [
	'en' => 'English',
	'ko' => '한국어',
];
$wgDefaultUserOptions['upwiz_skiptutorial'] = 1;
$wgHiddenPrefs[] = 'upwiz_skiptutorial';
# Tweaks for permissions
$wgGroupPermissions['sysop']['upwizcampaigns'] = false;
$wgGroupPermissions['sysop']['mass-upload'] = false;
$wgAddGroups['sysop']['upwizcampeditors'] = false;
$wgRemoveGroups['sysop']['upwizcampeditors'] = false;
$wgAddGroups['bureaucrat']['upwizcampeditors'] = true;
$wgRemoveGroups['bureaucrat']['upwizcampeditors'] = true;

# UserMerge
wfLoadExtension( 'UserMerge' );

# VisualEditor
wfLoadExtension( 'VisualEditor' );
$wgVisualEditorAvailableNamespaces = [
	NS_SPECIAL => true,
	NS_MAIN => true,
	NS_TALK => true,
	NS_USER => true,
	NS_USER_TALK => true,
	NS_PROJECT => true,
	NS_PROJECT_TALK => true,
	NS_FILE => true,
	NS_FILE_TALK => true,
	NS_MEDIAWIKI => true,
	NS_MEDIAWIKI_TALK => true,
	NS_TEMPLATE => true,
	NS_TEMPLATE_TALK => true,
	NS_HELP => true,
	NS_HELP_TALK => true,
	NS_CATEGORY => true,
	NS_CATEGORY_TALK => true,
	'_merge_strategy' => 'array_plus',
];
$wgVisualEditorEnableTocWidget = true;
# Enable 2017 Wikitext Editor to opt-out
$wgVisualEditorEnableWikitext = true;
$wgDefaultUserOptions['visualeditor-newwikitext'] = 1;
# Enable Visual diffs on history pages
$wgVisualEditorEnableDiffPage = true;
# Enable Single Edit Tab to opt-in
$wgVisualEditorUseSingleEditTab = true;
$wgDefaultUserOptions['visualeditor-tabs'] = 'multi-tab';
# enable the section editing
$wgVisualEditorEnableVisualSectionEditing = true;

# Widgets
require_once "$IP/extensions/Widgets/Widgets.php";
$wgNamespaceContentModels[274] = CONTENT_MODEL_TEXT;

# WikiEditor
wfLoadExtension( 'WikiEditor' );
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
$wgDefaultUserOptions['wikieditor-publish'] = 1;
$wgHiddenPrefs[] = 'usebetatoolbar';
# Enable Visual Editor to opt-out
$wgDefaultUserOptions['visualeditor-enable'] = 1;
$wgHiddenPrefs[] = 'visualeditor-enable';
$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;
$wgVisualEditorSupportedSkins[] = 'femiwiki';

#
# Load secret.php
#
require_once '/a/secret.php';

#
# Debug Mode
#
if ( defined( 'DEBUG_MODE' ) ) {
	# 도메인 변경
	$wgServer = 'http://' . DEBUG_MODE;
	$wgCanonicalServer = 'http://' . DEBUG_MODE;
	# 잠시 끔. https://github.com/femiwiki/femiwiki/issues/82 참고
	# $wgVirtualRestConfig['modules']['restbase']['url'] = 'http://restbase:7231';
	# $wgVisualEditorRestbaseURL = 'http://' . DEBUG_MODE . '/femiwiki.com/v1/page/html/';
	# $wgVisualEditorFullRestbaseURL = 'http://' . DEBUG_MODE . '/femiwiki.com/';
	$wgBounceHandlerInternalIPs = [ '0.0.0.0/0' ];

	# 디버그 툴 활성화
	$wgShowExceptionDetails = true;
	$wgDebugToolbar = true;
	$wgShowDBErrorBacktrace = true;

	# File Cache가 비활성화되어있어야 디버그 툴을 쓸 수 있음
	$wgUseFileCache = false;

	# AWS 플러그인 비활성화
	$wgAWSBucketName = null;
	$wgAWSBucketPrefix = null;
}
