<?php
/**
 * page template
 *
 *
 * @package ShenAleph
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="container-fluid">
			<div class="row volumeIssue">
			</div>
			</section>

			<section class="container page-contributors">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					if ( have_posts() ) :
						if ( is_home() && ! is_front_page() ) :
							?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
				
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

					?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
