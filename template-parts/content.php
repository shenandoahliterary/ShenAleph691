<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShenAleph
 */

?>
<div class="row">
<div class="col-md-8 offset-md-2">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<!-- add byline -->
				<p class="workAuthorByline"><?php
 				$custom_fields = get_post_custom();

				$my_custom_field = $custom_fields['author_lastname'];
				echo "$my_custom_field[1]";

				  foreach ( $my_custom_field as $key => $value ) {
				    echo $key . " => " . $value . "<br />";

						if ($key > 0) {

							$args_authors = array(
							           // 'user_login'   => 'lillywimberly'
													 'meta_key' => "last_name",
													 'meta_value' => "$my_custom_field[1]",
													 'meta_compare' => 'LIKE'
												 );
							echo '<pre>'; print_r($args_authors); echo '</pre>';
								$author_loop = new WP_User_Query($args_authors);
							  $author_names = $author_loop->get_results();


								if (! empty($author_names)) {

									foreach ($author_names as $author_name) {

										echo "$author_name->display_name";
									}
								}
									else {echo "No authors found";}

								}
						}
						// query user database on lastname to get dsiplay_name for second author_name
						// how to prioritize display of author names?









			 the_author_meta('display_name') ?></p>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php shenAleph_post_thumbnail(); ?>

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
<!-- author bio -->
<section>
	<p class="workAuthor"><?php the_author_meta('display_name') ?></p>
	<p class="workAuthorBio"><?php the_author_meta('description') ?></p>

</section>
	<footer class="entry-footer">
		<?php shenAleph_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
</div>
