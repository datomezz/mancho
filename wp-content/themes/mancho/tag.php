<?php get_header(); ?>
<section class="row mx-0 mb-5 px-md-2 px-0">
<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
                <div class="article-news card">
                    <div class="img-container">
                        <?php if(has_post_thumbnail()):?>
                            <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('lg') ?>" alt="article-news" class="article-news__img card-img-top"></a>
                        <?php else:?>
                            <a href="<?php the_permalink() ?>"><img src="<?php bloginfo( "template_directory" ); ?>/assets/img/empty_img.png" alt="article-news" class="article-news__img card-img-top"></a>
                        <?php endif;?>
                        <?php the_category(); ?>
                    </div>
                    <div class="article-news__body card-body">
                        <a href="<?php the_permalink() ?>" class="article-news__title card-title h6"><?php the_title(); ?></a>
                        <p class="article-news__text card-text text-muted"><?php the_excerpt(); ?></p>
                    </div>
                    <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                        <p class="article-news__footer-data m-0"><?php the_time('d F Y') ?></p>
                        <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i><?php echo getPostViews(get_the_ID());?></p>
                    </div>
                </div>
            </article>
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
<?php get_footer(); ?>