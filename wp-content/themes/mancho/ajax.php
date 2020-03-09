<?php 
$numberPosts = 6;
$query = new WP_Query( array( 'category' => 0, 'orderby'=> 'date'));
while ( $query->have_posts() ) {
	$query->the_post();

	get_template_part("includes/article", "excerpt");
}
?>
<div class="col-12 d-flex flex-row justify-content-center mx-0 mt-5" id="load_more">
	<a href="javascript:void(0)" class="see-more rounded-pill bg-main px-4 py-2" id="true_loadmore">მეტის ნახვა</a>
</div>