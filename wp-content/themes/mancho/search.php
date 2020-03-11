<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
			<div class="col-12 my-3 px-0">
				<div class="search__result bg-light p-2">
					<span class="search__result-title">საძიებო სიტყვა : </span> <?php the_search_query(); ?></span>
				</div>
			</div>

		<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'includes/article', 'excerpt' );
			endwhile;
			else :
				get_template_part("includes/article", "search");

			endif;
		?>
<?php
get_footer();
