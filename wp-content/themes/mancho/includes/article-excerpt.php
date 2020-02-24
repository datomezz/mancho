<article class="news-section__article col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
    <div class="article-news card">
        <div class="img-container">
            <?php if(has_post_thumbnail()):?>
                <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('post') ?>" alt="article-news" class="article-news__img card-img-top"></a>
            <?php else:?>
                <a href="<?php the_permalink() ?>"><img src="<?php bloginfo( "template_directory" ); ?>/assets/img/empty_img.png" alt="article-news" class="article-news__img card-img-top"></a>
            <?php endif;?>
            <a href="https://www.facebook.com/sharer?u=<?php the_permalink()?>" target="_blank" rel="noopener noreferrer" class="fb-share">
                <img src="<?php bloginfo( "template_directory" );?>/assets/img/fb-icon.png" class="fb-share__icon">
            </a>
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