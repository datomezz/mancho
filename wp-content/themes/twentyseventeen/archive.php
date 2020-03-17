<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="wrap">

	<?php if ( have_posts() ) : ?>

	<?php endif; ?>


		<?php
		if ( have_posts() ) :
			?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				echo "she yleo";

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', "excerpt");

			endwhile;

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>

</div><!-- .wrap -->

<?php
get_footer();
