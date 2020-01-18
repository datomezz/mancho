<?php get_header() ?>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part("includes/article", "excerpt"); ?>
            <?php endwhile; ?>
            <div class="row col-12 pagination mx-0 mt-5 justify-content-center">
                <?php   $args = array(
                        'prev_text'    => __('&#10094;'),
                        'next_text'    => __('&#10095;'),
                    );
                echo paginate_links( $args );
                ?>
            </div>
    <?php else : ?>
        <p> NO POSTS </p>
    <?php endif; ?>
</section>
<?php get_footer() ?>