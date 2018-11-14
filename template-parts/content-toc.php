<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
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
	<div class="col-md-4 offset-md-2">

		<h3>Fiction</h3>
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
		<h3>Nonfiction</h3>
		<div>
			<?php $nonfiction_loop = new WP_Query('cat=5&orderby=meta_value&meta_key=author_lastname&order=asc&nopaging=true');
					while ($nonfiction_loop->have_posts()) : $nonfiction_loop->the_post();
					 ?>
					 <a href="<?php the_permalink(); ?>">
 					<?php the_title(); ?>
 					</a><br />
					<span class="author_name"><?php the_author(); ?> </span>

			<?php endwhile; ?>
		</div>

		<h3>Interviews</h3>
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
		    			</div>

							<h3>Comics</h3>
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
						<a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
						<span class="author_name"><?php the_author(); ?> </span><br /><?php }
						?>

					<?php
					$i++;
				endwhile;
				}
				?>

		</div>






</div> <!-- close column -->
</div> <!-- close row -->

</section>
