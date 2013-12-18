<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="<?php if (is_singular('suite')) { ?> suite <?php } ?> no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		<script type="text/javascript" src="//use.typekit.net/kmj6kit.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>

	<body <?php body_class(); ?>>
		
		<?php if (is_singular('suite')) { ?> 
		<div id="container">
	
			<div id="oc-wrap"> 
			<?php } else { ?>  

		<nav role="navigation" id="side" >
		<?php  wp_nav_menu(array(
  	'container' => false,                           // remove nav container
  	'container_class' => 'menu clearfix',           // class of container (should you choose to use it)
  	'menu' => __( 'side-nav', 'bonestheme' ),  // nav name
  	'menu_class' => 'nav top-nav clearfix',         // adding custom nav class
  	'before' => '',                                 // before the menu
      'after' => '',                                  // after the menu
      'link_before' => '',                            // before each link
      'link_after' => '',                             // after each link
      'depth' => 0,                                   // limit the depth of the nav
  	'fallback_cb' => 'bones_main_nav_fallback'      // fallback function
		)); ?>
		</nav>
		<div id="container">
			<div id="oc-wrap">
			<header class="header" role="banner">

				<div id="inner-header" class="clearfix">
					<h3 class="tenant-login site-width-wrap clearfix"><a href="http://sterlingplaza.axisportal.com/login.axis" >Sterling Plaza</a><a href="http://prestoncommons.axisportal.com/login.axis">Preston Commons</a><span>Tenant</span> Login</h3>
					<a class="menu-button menu-trigger ss-icon" href="#">Menu</a>
					<a href="<?php echo home_url()?>" class="logo logo-link"></a>
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>
					
				</div><?php // #inner-header ?>

			</header><?php // header ?><?php } // end else ?>