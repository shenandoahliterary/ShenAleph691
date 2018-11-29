<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
<!--	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.jpg" /> -->
<link rel="stylesheet" href="https://use.typekit.net/nci7nxi.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- start Bootstrap container -->
<div id="page" class="site">

			<section class="topbanner container-fluid" id="typelogo-container">
				<div class="row">
					<?php	the_custom_logo(); ?>
				</div>
				<div class="row">
		<div class="col-md-11">
			<h1 class="text-right" id="typelogo">Shenandoah</h1>
</div>
</div>
<div class="row">
	<div class="col-md-5">
		<div class="volumeIssueBanner">
		<span class="">Volume 68, Number 1 &middot; Fall 2018</span>
		</div>
	</div>

<div class="col-md-5">
				<div class="shen-nav d-flex flex-column flex-sm-row justify-content-end" >
					<a class="nav-item nav-link" href="#">About</a>
					<a class="nav-item nav-link" href="#">Issues</a>
					<a class="nav-item nav-link" href="#">Submit</a>
				</div>
				</div>
		</div>
		</section>


	<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
