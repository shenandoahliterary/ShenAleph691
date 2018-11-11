<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
	 		<h2>Table of Contents</h2>
			 <div id="accordion">

    			<h3><a href="#">Poetry</a></h3>
    			<div>
    				<ul>
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
							$numItems = count($poetry_loop_single);
							$i = 0;
								while ($poetry_loop_single->have_posts()) : 				$poetry_loop_single->the_post();
								if ($i == 0) { ?> <li><span class="author_name"><?php the_author(); ?> </span><br /><?php } ?>
								<a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
								<?php
								$i++;
							endwhile;
							}
							?>
					</ul>
    			</div>


    			<h3><a href="#">Fiction</a></h3>
    			<div>
    				<ul>
    				<?php 	$fiction_loop = new WP_Query('cat=3&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($fiction_loop->have_posts()) : $fiction_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?></span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div>
    			<h3><a href="#">Nonfiction</a></h3>
    			<div>
    				<ul>
    				<?php 	$nonfiction_loop = new WP_Query('cat=4&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($nonfiction_loop->have_posts()) : $nonfiction_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?> </span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div>
<!-- <h3><a href="#">Flash Fiction</a></h3>
    			<div>
    				<ul>
    				<?php 	$fiction_loop = new WP_Query('cat=5&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($fiction_loop->have_posts()) : $fiction_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?></span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div> -->
<!--    			<h3><a href="#">Visual Arts</a></h3>
    			<div>
    				<ul>
    				<?php 	$visualarts_loop = new WP_Query('cat=6&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($visualarts_loop->have_posts()) : $visualarts_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?> </span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div> -->
<!-- <h3><a href="#">Interviews</a></h3>
    			<div>
    				<ul>
    				<?php 	$reviews_loop = new WP_Query('cat=6&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($reviews_loop->have_posts()) : $reviews_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?> </span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div> -->
    			<h3><a href="#">Reviews</a></h3>
    			<div>
    				<ul>
    				<?php 	$reviews_loop = new WP_Query('cat=8&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($reviews_loop->have_posts()) : $reviews_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?> </span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div>
<!--    			<h3><a href="#">Recommended Reading</a></h3>
    			<div>
    				<ul>
    				<?php 	$reading_loop = new WP_Query('cat=7&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($reading_loop->have_posts()) : $reading_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?> </span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div>	-->
 <h3><a href="#">Gallery</a></h3>
    			<div>
    				<ul>
    				<?php 	$reading_loop = new WP_Query('cat=5&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($reading_loop->have_posts()) : $reading_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?> </span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div>
 <!-- <h3><a href="#">Audio</a></h3>
    			<div>
    				<ul>
    				<?php 	$fiction_loop = new WP_Query('cat=#&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
    						while ($fiction_loop->have_posts()) : $fiction_loop->the_post();
    						 ?>
    						<li><span class="author_name"><?php the_author(); ?></span><br />
    						<a href="<?php the_permalink(); ?>">
    						<?php the_title(); ?>
    						</a></li>
    				<?php endwhile; ?>
    				</ul>
    			</div> -->


    		 </div>
