<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple_Portfolio_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel='pingback' href="<?php bloginfo('pingback_url')?>">
	

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,|Raleway:300,700" rel="stylesheet">
	<link rel="stylesheet" href=" <?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href=" <?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css">
   

	<?php wp_head(); ?>
 
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simpleportfoliotheme' ); ?></a>

	
 <!-- NAV -->
 


 <nav class="navbar navbar-expand-xxl navbar-dark fixed-top bg-transparent " id="main-nav" role="navigation" >
       
            <a href="#home" class="navbar-brand">
                <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Logo-2.png" width="100" height="100" alt="">

            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-controls="bs-example-navbar-collapse-1"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 0,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav ml-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	
</nav>