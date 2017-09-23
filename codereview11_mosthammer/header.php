<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package palmTree
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- <div id="page" class="site"> -->
		
 <nav class="blog-nav" style="background-color: red;">

         <?php

           wp_nav_menu( array(

               'menu'              => 'primary',

               'theme_location'    => 'primary',

               'depth'             => 2,

               'container'         => 'div',

               'container_class'   => 'collapse navbar-collapse',

               'container_id'      => 'bs-example-navbar-collapse-1',

               'menu_class'        => 'nav navbar-nav',

               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',

               'walker'            => new WP_Bootstrap_Navwalker())

           );

       ?>

       </nav>
		<!-- <div class="site-branding"> -->
			
			<?php
			the_custom_logo();


			if ( is_front_page() && is_home() ) : ?>
				
				<h1 style="text-align: center; font-size: 40pt; color:#222222 !important; font-style: oblique;" class="site-title"><?php bloginfo( 'name' ); ?></h1>

			<?php else : ?>
				<h1 style="text-align: center; font-size: 40pt; color:#222222 !important;font-style: oblique;" class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		<!-- </div> site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'palmtree' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
		

