<?php
/**
 *
 *
 */
?>
<section class="container-fluid">
<div class="row">
<img  class="img-fluid" src="http://shendev-clone.local/wp-content/uploads/2018/11/cover68.3.jpg">
</div>
<div class="row volumeIssue">
<span class="mx-auto align-middle">Volume 68, Number 1 &middot; Fall 2018</span>
</div>
</section>

<section class="container TOCsection">
<div class="row">
	<div class="col-md-4 offset-md-1">

		<h3>Fiction</h3>
		<div>
			<?php
			remove_all_filters('posts_orderby');
			$fiction_args = array(
				'category_name' => 'fiction',
				'order' => 'ASC',
				'meta_key' => 'TOC_order',
				'orderby' => 'meta_value_num',
				'meta_type' => 'NUMERIC',
				'nopaging' => 'true',

			);
			$fiction_loop = new WP_Query($fiction_args);
					while ($fiction_loop->have_posts()) : $fiction_loop->the_post();
					 ?>
					<p>	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />

						<span class="author_name"><?php the_author(); echo get_post_meta($post->ID, 'TOC_order', true); ?></span>

				</p>
			<?php endwhile;
wp_reset_postdata();
			?>

		</div>
		<h3>Nonfiction</h3>
		<div>
			<?php $nonfiction_loop = new WP_Query('cat=5&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
					while ($nonfiction_loop->have_posts()) : $nonfiction_loop->the_post();
					 ?>
					 <p>
					 <a href="<?php the_permalink(); ?>">
 					<?php the_title(); ?>
 					</a><br />
					<span class="author_name"><?php the_author(); ?> </span>
</p>
			<?php endwhile;
wp_reset_postdata();
			?>
		</div>

		<h3>Translations</h3>
		<div>
			<?php $nonfiction_loop = new WP_Query('cat=5&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
					while ($nonfiction_loop->have_posts()) : $nonfiction_loop->the_post();
					 ?>
					 <p>
					 <a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a><br />
					<span class="author_name"><?php the_author(); ?> </span>
	</p>
			<?php endwhile;
	wp_reset_postdata();
			?>
		</div>

							<h3>Comics</h3>
			    			<div>
			    				<?php 	$visualarts_loop = new WP_Query('cat=7&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
			    						while ($visualarts_loop->have_posts()) : $visualarts_loop->the_post();
			    						 ?>
			    						<span class="author_name"><?php the_author(); ?> </span><br />
			    						<a href="<?php the_permalink(); ?>">
			    						<?php the_title(); ?>
			    						</a>
			    				<?php endwhile;
wp_reset_postdata();

									?>
			    			</div>


	</div> <!-- close column -->
	<div class="col-md-4 offset-md-1">
		<h3>Poetry</h3>
		<div>

			<?php $poetry_loop = new WP_Query('cat=2&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
				$authornames = array();

					while ($poetry_loop->have_posts()) : $poetry_loop->the_post();
						$this_author= get_post_meta($post->ID, 'author_lastname', true);
						$this_author_id =get_the_author_meta('ID');
						$authornames[$this_author_id] = $this_author;

					endwhile;


				foreach ($authornames as $author_id=>$author_lastname) {
					$args = array(
				'cat' => '2',
				'author' => $author_id,
				'orderby' => 'title',
				'order' => 'asc',
				'nopaging' => 'true'
				);
				?>
				<?php
				$poetry_loop_single = new WP_Query($args);
				//the following returns an error in php 7.2
				//not clear that the count is needed
				//$numItems = count($poetry_loop_single);
				$i = 0;
					while ($poetry_loop_single->have_posts()) : 				$poetry_loop_single->the_post();
					if ($i == 0) { ?>

						<p><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
						<span class="author_name"><?php the_author(); ?> </span></p><?php }
						?>

					<?php
					$i++;
				endwhile;
				wp_reset_postdata();
				}
				?>

		</div>


		<h3>Interviews</h3>
							<div>
								<?php 	$reviews_loop = new WP_Query('cat=6&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
										while ($reviews_loop->have_posts()) : $reviews_loop->the_post();
										 ?>
										 <p>
										 <a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
										</a><br />
										<?php shenAleph_filter_authors(); ?>

										<span class="author_name"><?php the_author(); ?> </span>
									</p>
								<?php endwhile;
	wp_reset_postdata();
								?>
							</div>



</div> <!-- close column -->
</div> <!-- close row -->


<div class="row">
	<div class="col-md-8 offset-md-2 single-space-paragraphs">
<p><a href="">Editor's Note</a></p>
<p><a href="">Masthead</a></p>
<p><a href="">List of Contributors</a></p>


	</div>
</div>
</section>

<!--  Features section -->
<section class="container TOC-quote">
<div class="row">
	<div class="col-md-8 offset-md-2 h-100">
<?php
$args = array(
    'meta_key'         => 'add-quote-to-toc',
		'meta_value'   => 'Yes',
		'compare' => 'Like',
		'post_type'        => 'page',
    'post_status'      => 'publish',

);
$query = new WP_Query($args);

if ($query->have_posts()) :
		 while($query->have_posts()) :
				$query->the_post();
?>

				<?php the_content() ?>

<?php
		 endwhile;
	else:
?>

		 Oops, there are no posts.

<?php
	endif;
	wp_reset_postdata();
?>
		</div>
	</div>
</section>
<section class="container-fluid TOC-features">
		<div class="card-group">
			<?php
			$args = array(
			    'category_name'         => 'feature',

			);
			$category_posts = new WP_Query($args);

			if ($category_posts->have_posts()) :
					 while($category_posts->have_posts()) :
							$category_posts->the_post();
			?>
			<div class="card">
		   <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
			 <?php  the_post_thumbnail( 'full', array( 'class'=>'card-img img-fluid' ) );  ?>
		    <div class="card-body">
				<p class="card-text"><?php	the_content() ?></p>
			</div>
		</div>

			<?php
					 endwhile;
				else:
			?>

					 Oops, there are no features.

			<?php
				endif;
				wp_reset_postdata();
			?>

</section>
</div>
</div>
