<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShenAleph
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- start Bootstrap container -->
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'custom-theme-for-the-shenandoah-literary-magazine' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<section class="topbanner" id="typelogo-container">
				<div class="row">
			<div class="col-md-8">
					<span id="typelogo"><a href="#">Shenandoah</a></span>

				<nav class="nav nav-pills mx-auto my-3 mr-md-3  my-md-3 d-flex flex-column flex-sm-row nav-justified" >
					<a class="nav-item nav-link btn-ilqmenu" href="#">Archives</a>
					<a class="nav-item nav-link  btn-ilqmenu" href="#">Masthead</a>
					<a class="nav-item nav-link btn-ilqmenu" href="#">Submit</a>
				</nav>
				</div>
		</div>
		</section>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
