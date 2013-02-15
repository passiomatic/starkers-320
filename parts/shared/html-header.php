<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->
<head>
  <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">  
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">

  <!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- http://t.co/dKP3o1e -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">

  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
  <!--[if (lt IE 9) & (!IEMobile)]>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/selectivizr-min.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
