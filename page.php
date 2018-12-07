<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShenAleph
 */

get_header();
?>
<div class="row volumeIssue">
</div>
</section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
?>
					<div class="row">
					<div class="col-md-8 offset-md-2">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">




						</header><!-- .entry-header -->


						<div class="entry-content">
							<?php
							the_content( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shenAleph' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shenAleph' ),
								'after'  => '</div>',
							) );
							?>
						</div><!-- .entry-content -->


						<footer class="entry-footer">
							<?php shenAleph_entry_footer(); ?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-<?php the_ID(); ?> -->
					</div>
					</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
