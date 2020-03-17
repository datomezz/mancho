<?php get_header(); ?>

<div class="hr-category row mt-5 mb-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">სიახლეები</a>
</div>
<section class="news-section row mx-0 mb-5 px-md-2 px-0">
    <?php 
		if ( have_posts() ) :
			?>
			<?php

			while ( have_posts() ) :
				the_post();
                
                get_template_part("includes/article", "excerpt");

			endwhile;

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
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
