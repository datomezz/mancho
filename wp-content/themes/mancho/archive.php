<?php get_header(); ?>

<div class="hr-category row mt-5 mb-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">სიახლეები</a>
</div>
<section class="news-section row mx-0 mb-5 px-md-2 px-0">
    <?php $posts = get_posts( array(
            'numberposts' => 0,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true )); 

        foreach( $posts as $post){
            get_template_part("includes/article", "excerpt");
        }
	?>
	<div class="row col-12 pagination mx-0 mt-5 justify-content-center">
		<?php   $args = array(
				'prev_text'    => __('&#10094;'),
				'next_text'    => __('&#10095;'),
			);
		echo paginate_links( $args );
		?>
	</div>
</section>

	
<?php get_footer(); ?>
