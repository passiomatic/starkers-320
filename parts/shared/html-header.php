<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->
<head>
  <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">  

  <!-- http://t.co/dKP3o1e -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">

  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!-- Icons -->
  
  <!-- 16x16 -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">

  <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
  <!-- <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-precomposed.png"> -->
  <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
  <!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72-precomposed.png"> -->
  <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
  <!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-114x114-precomposed.png"> -->
  <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
  <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-144x144-precomposed.png"> -->
  
  <!--iOS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?>"> -->
  <!-- <meta name="viewport" content="initial-scale=1.0"> (Use if apple-mobile-web-app-capable below is set to yes) -->
  <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
  <!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
  
  <!-- Startup images -->
  
  <!-- iPhone 3GS, pre-2011 iPod Touch -->
  <!-- <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/images/startup/startup-320x460.png" media="screen and (max-device-width:320px)"> -->
  <!-- iPhone 4, 4S and 2011 iPod Touch-->
  <!-- <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/images/startup/startup-640x920.png" media="(max-device-width:480px) and (-webkit-min-device-pixel-ratio:2)"> -->
  <!-- iPhone 5 and 2012 iPod Touch -->
  <!-- <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/images/startup/startup-640x1096.png" media="(max-device-width:548px) and (-webkit-min-device-pixel-ratio:2)"> -->
  <!-- iPad landscape -->
  <!-- <link rel="apple-touch-startup-image" sizes="1024x748" href="<?php echo get_stylesheet_directory_uri(); ?>/images/startup/startup-1024x748.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:landscape)"> -->
  <!-- iPad Portrait -->
  <!-- <link rel="apple-touch-startup-image" sizes="768x1004" href="<?php echo get_stylesheet_directory_uri(); ?>/images/startup/startup-768x1004.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:portrait)"> -->
  
  <!-- Windows 8 / RT -->
  <meta name="msapplication-TileImage" content="img/apple-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#000">
  
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
  <!--[if (lt IE 9) & (!IEMobile)]>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/selectivizr-min.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
