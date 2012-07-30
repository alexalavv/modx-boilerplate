<?php return array (
  'df6f532ae4983ae0318a6fed6fde8a5d' => 
  array (
    'criteria' => 
    array (
      'category' => 'MODX Boilerplate',
    ),
    'object' => 
    array (
      'id' => 2,
      'parent' => 0,
      'category' => 'MODX Boilerplate',
    ),
    'files' => 
    array (
      0 => '/var/www/vhosts/novolo.de/modxbp/assets',
    ),
  ),
  '8f7a0953f83a8e1a6542fcf937479de1' => 
  array (
    'criteria' => 
    array (
      'name' => 'bpSiteHeader',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'bpSiteHeader',
      'description' => 'Site Header',
      'editor_type' => 0,
      'category' => 2,
      'cache_type' => 0,
      'snippet' => NULL,
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => NULL,
    ),
  ),
  'df13705bbbdb99672ec36e04bb52fa13' => 
  array (
    'criteria' => 
    array (
      'name' => 'bpSiteHeader978',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'bpSiteHeader978',
      'description' => 'Site Header 978 grid',
      'editor_type' => 0,
      'category' => 2,
      'cache_type' => 0,
      'snippet' => '<!doctype html>
<!--[if IEMobile]> <html class="no-js iemobile" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if lt IE 7 ]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js lt-ie9 lt-ie8" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js lt-ie9" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->
<head>
<!-- Initialized DOCTYPE with Facebook FBML implementation. If not needed, please remove following code in <html> element before closing tag: xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" -->
	<base href="[[++site_url]]" />
    
    <!-- this should be set to UTF-8 -->
	<meta charset="[[++modx_charset:lcase]]" />
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame | ATTENTION: BREAKS VALIDATION! |||||||||| If you\'re not using htaccess you can (not recommended) use this code instead: <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
<title>[[*pagetitle]] - [[++site_name]]</title>
	<!-- change RSS ID or remove next line -->
	<link rel="alternate" type="application/rss+xml" title="[[++site_name]] RSS Feed" href="[[~1]]">
	<meta name="description" content="[[*introtext:empty=`[[*content:strip_tags]]`:limit=`200`]]">
	<meta name="author" content="[[If? &subject=`[[*publishedby]]` &operator=`>` &operand=`0` &then=`[[*publishedby:userinfo=`fullname`]]` &else=`[[*createdby:userinfo=`fullname`]]`]]" />
	<meta name="keywords" content="" />
	
	<!-- https://developers.facebook.com/docs/opengraph/ -->
	<meta property="og:title" content="[[*pagetitle]] - [[++site_name]]"/> 
    <meta property="og:type" content=""/> <!-- https://developers.facebook.com/docs/opengraph/#types -->
    <meta property="og:url" content="[[++site_url]][[*id:isnot=`[[++site_start]]`:then=`[[~[[*id]]]]`]]"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="fb:admins" content="USER_ID"/> <!-- set your facebook user / app-ID here -->
    <meta property="og:description" content="[[*introtext:empty=`[[*content:strip_tags:strip]]`:limit=`200`]]"/>
	
	<!-- Remove next line if you are NOT using multiple domains OR using Canonical Snippet (http://modxcms.com/extras/package/?package=705). | Google Canonical Tag SEO -->
	<link rel="canonical" href="[[++site_url]][[*id:isnot=`[[++site_start]]`:then=`[[~[[*id]]]]`]]" />
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<!-- If you use Webfonts, you use this script to detect font-smoothing. Please look at documentation how to use it: http://www.michael-van-laar.de/blog/artikel/webfont-load-enhancer/ -->
	<script src="[[++site_url]]assets/modx-boilerplate/main/js/libs/webfontloadenhancer-1.2.min.js"></script>
	<!-- Please load Webfontenhancer BEFORE the Webfont initialization / Webfont-CSS -->
	
	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">
	
	<!-- Load CSS files with media-queries |||�If your don\'t want to use media-queries, remove all m-qs and link to style.css -->
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/core.css" media="all">
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/smartphone.css" media="only screen and (min-device-width : 320px) and (max-device-width : 480px)">
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/ipad-portrait.css" media="only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait)">
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/ipad.css" media="only screen and (min-device-width : 768px) and (max-device-width : 1024px)">
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/iphone4.css" media="only screen and (-webkit-min-device-pixel-ratio : 1.5), only screen and (min-device-pixel-ratio : 1.5)">
	<!-- Load layout and large screen styles after quick loading mobile device stylesheets -->
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/display.css" media="only screen and (min-width : 1025px)">

	<!-- Do not remove Modernizr until you don\'t want to feature detect browser and don\'t need respond.js -->
	<script src="[[++site_url]]assets/modx-boilerplate/main/js/libs/modernizr.custom-v2.1pre.js"></script>
</head>
<body>
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<header class="container row">
	<!-- use this wrapper for your header of website with logotype, navigation etc. -->
</header>
<div class="container row" id="content" role="main">?',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<!doctype html>
<!--[if IEMobile]> <html class="no-js iemobile" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if lt IE 7 ]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js lt-ie9 lt-ie8" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js lt-ie9" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="[[++cultureKey]]" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->
<head>
<!-- Initialized DOCTYPE with Facebook FBML implementation. If not needed, please remove following code in <html> element before closing tag: xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" -->
	<base href="[[++site_url]]" />
    
    <!-- this should be set to UTF-8 -->
	<meta charset="[[++modx_charset:lcase]]" />
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame | ATTENTION: BREAKS VALIDATION! |||||||||| If you\'re not using htaccess you can (not recommended) use this code instead: <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
<title>[[*pagetitle]] - [[++site_name]]</title>
	<!-- change RSS ID or remove next line -->
	<link rel="alternate" type="application/rss+xml" title="[[++site_name]] RSS Feed" href="[[~1]]">
	<meta name="description" content="[[*introtext:empty=`[[*content:strip_tags]]`:limit=`200`]]">
	<meta name="author" content="[[If? &subject=`[[*publishedby]]` &operator=`>` &operand=`0` &then=`[[*publishedby:userinfo=`fullname`]]` &else=`[[*createdby:userinfo=`fullname`]]`]]" />
	<meta name="keywords" content="" />
	
	<!-- https://developers.facebook.com/docs/opengraph/ -->
	<meta property="og:title" content="[[*pagetitle]] - [[++site_name]]"/> 
    <meta property="og:type" content=""/> <!-- https://developers.facebook.com/docs/opengraph/#types -->
    <meta property="og:url" content="[[++site_url]][[*id:isnot=`[[++site_start]]`:then=`[[~[[*id]]]]`]]"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="fb:admins" content="USER_ID"/> <!-- set your facebook user / app-ID here -->
    <meta property="og:description" content="[[*introtext:empty=`[[*content:strip_tags:strip]]`:limit=`200`]]"/>
	
	<!-- Remove next line if you are NOT using multiple domains OR using Canonical Snippet (http://modxcms.com/extras/package/?package=705). | Google Canonical Tag SEO -->
	<link rel="canonical" href="[[++site_url]][[*id:isnot=`[[++site_start]]`:then=`[[~[[*id]]]]`]]" />
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<!-- If you use Webfonts, you use this script to detect font-smoothing. Please look at documentation how to use it: http://www.michael-van-laar.de/blog/artikel/webfont-load-enhancer/ -->
	<script src="[[++site_url]]assets/modx-boilerplate/main/js/libs/webfontloadenhancer-1.2.min.js"></script>
	<!-- Please load Webfontenhancer BEFORE the Webfont initialization / Webfont-CSS -->
	
	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">
	
	<!-- Load CSS files with media-queries |||�If your don\'t want to use media-queries, remove all m-qs and link to style.css -->
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/core.css" media="all">
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/smartphone.css" media="only screen and (min-device-width : 320px) and (max-device-width : 480px)">
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/ipad-portrait.css" media="only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait)">
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/ipad.css" media="only screen and (min-device-width : 768px) and (max-device-width : 1024px)">
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/iphone4.css" media="only screen and (-webkit-min-device-pixel-ratio : 1.5), only screen and (min-device-pixel-ratio : 1.5)">
	<!-- Load layout and large screen styles after quick loading mobile device stylesheets -->
	<link rel="stylesheet" href="[[++site_url]]assets/modx-boilerplate/main/css/display.css" media="only screen and (min-width : 1025px)">

	<!-- Do not remove Modernizr until you don\'t want to feature detect browser and don\'t need respond.js -->
	<script src="[[++site_url]]assets/modx-boilerplate/main/js/libs/modernizr.custom-v2.1pre.js"></script>
</head>
<body>
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<header class="container row">
	<!-- use this wrapper for your header of website with logotype, navigation etc. -->
</header>
<div class="container row" id="content" role="main">?',
    ),
  ),
  'ba9db633e7559821d31489a005da34fa' => 
  array (
    'criteria' => 
    array (
      'name' => 'bpSiteHeaderFluid',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'bpSiteHeaderFluid',
      'description' => 'Site Header Fluid Grid',
      'editor_type' => 0,
      'category' => 2,
      'cache_type' => 0,
      'snippet' => NULL,
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => NULL,
    ),
  ),
  '37d6240423af799eedf3f21b01ed6d71' => 
  array (
    'criteria' => 
    array (
      'name' => 'bpSiteFooter',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'bpSiteFooter',
      'description' => 'Site Footer',
      'editor_type' => 0,
      'category' => 2,
      'cache_type' => 0,
      'snippet' => '</div>
<!-- CLOSE all html-elements (+wrapper) before this line -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write(\'<script src="[[++site_url]]assets/modx-boilerplate/main/js/libs/jquery-1.7.1.min.js"><\\/script>\')</script>

<script src="[[++site_url]]assets/modx-boilerplate/main/js/plugins.js"></script>
<script src="[[++site_url]]assets/modx-boilerplate/main/js/scripts.js"></script>

<script>
    var _gaq=[[\'_setAccount\',\'UA-XXXXX-X\'],[\'_trackPageview\']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=(\'https:\'==location.protocol?\'//ssl\':\'//www\')+\'.google-analytics.com/ga.js\';
    s.parentNode.insertBefore(g,s)}(document,\'script\'));
</script>

<!-- Code for Facebook XBML implementation. Cut off if not needed. Please paste your own App-ID at \'AppID\' in plugins.js to get it working -->
<div id="fb-root"></div>

</body>
</html>?',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '</div>
<!-- CLOSE all html-elements (+wrapper) before this line -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write(\'<script src="[[++site_url]]assets/modx-boilerplate/main/js/libs/jquery-1.7.1.min.js"><\\/script>\')</script>

<script src="[[++site_url]]assets/modx-boilerplate/main/js/plugins.js"></script>
<script src="[[++site_url]]assets/modx-boilerplate/main/js/scripts.js"></script>

<script>
    var _gaq=[[\'_setAccount\',\'UA-XXXXX-X\'],[\'_trackPageview\']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=(\'https:\'==location.protocol?\'//ssl\':\'//www\')+\'.google-analytics.com/ga.js\';
    s.parentNode.insertBefore(g,s)}(document,\'script\'));
</script>

<!-- Code for Facebook XBML implementation. Cut off if not needed. Please paste your own App-ID at \'AppID\' in plugins.js to get it working -->
<div id="fb-root"></div>

</body>
</html>?',
    ),
  ),
);