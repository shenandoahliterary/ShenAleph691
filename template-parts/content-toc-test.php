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










</div> <!-- close column -->
</div> <!-- close row -->

</section>

<section class="container TOC-quote">
<div class="row">
	<div class="col-md-8 offset-md-2">
		<p>test</p>
<?php
$query = new WP_Query( array( 'meta_key' => 'add-quote-to-toc' ) );

$args = array(
    'meta_key'         => 'add-quote-to-toc',
		'meta_value'   => 'Yes',
		'compare' => 'Like',
		'post_type'        => 'page',
    'post_status'      => 'publish',

);

$query = new WP_Query($args);

//$pages = get_pages( $query );

//foreach ( $pages as $page ) {
  //  $title = $page->post_title;
  //  $content = wpautop( $page->post_content );
    //echo "In foreach";
	//	echo "$content";
//}

if ($query->have_posts()) :
		 while($query->have_posts()) :
				$query->the_post();
?>

				<div class='post-content'><?php the_content() ?></div>

<?php
		 endwhile;
	else:
?>

		 Oops, there are no posts.

<?php
	endif;



$content = wpautop( $query->post_content );
echo "$content";
//echo "$query->post_content";
?>

<p>here is the quote</p>
</section>
