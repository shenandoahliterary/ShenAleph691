<?php
/**
 * template for the Contributors page
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
			<span class="mx-auto align-middle">Volume 68, Number 1 &middot; Fall 2018</span>
			</div>
			</section>

			<section class="container page-contributors">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h2>List of Contributors</h2>
					<dl>
		<?php
		if ( have_posts() ) :




							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								/*
								 *
								 *
								 * Pulls content into TOC
								 */
							//	get_template_part( 'template-parts/content', 'toc' );
							endwhile;
						//	the_posts_navigation();
						else :
					//		get_template_part( 'template-parts/content', 'none' );
						endif;


// Search WP User Database for authors

						$args = array(
							'role' => 'Contributor'
						);

						// The Query
						$user_query = new WP_User_Query( $args );

						// User Loop
						if ( ! empty( $user_query->get_results() ) ) {
							foreach ( $user_query->get_results() as $user ) {
								echo '<dt>' . $user->display_name . '</dt>';
								echo '<dd>' . $user->description . '</dd>';
							}
						} else {
							echo 'No users found.';
						}
						?>
					</dl>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
