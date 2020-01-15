<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="hr-category row mt-5 mb-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">სიახლეები</a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <?php $posts = get_posts( array(
            'numberposts' => 6,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true )); 
    ?>
    <?php foreach( $posts as $post ) : ?>
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
    <?php endforeach ?>
    <div class="col-12 d-flex flex-row justify-content-center mx-0 mt-5">
        <a href="#" class="see-more rounded-pill bg-main px-4 py-2">მეტის ნახვა</a>
    </div>
</section>
<div class="hr-category row mt-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">
        <?php 
            $category = get_the_category(); 
            echo $category[0]->cat_name;
        ?>
    </a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <?php $posts = get_posts( array(
            'numberposts' => 3,
            'category'    => 0,
            'category_name'    => "economics",
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true )); 
    ?>
    <?php foreach( $posts as $post ) : ?>
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
    <?php endforeach ?>
</section>
<div class="hr-category row mt-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">ეკონომიკა</a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <?php $posts = get_posts( array(
            'numberposts' => 3,
            'category'    => 0,
            'category_name'    => "society",
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true )); 
    ?>
    <?php foreach( $posts as $post ) : ?>
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
    <?php endforeach ?>
</section>
<div class="hr-category row mt-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">პოლიტიკა</a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <?php $posts = get_posts( array(
            'numberposts' => 3,
            'category'    => 0,
            'category_name'    => "politics",
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true )); 
    ?>
    <?php foreach( $posts as $post ) : ?>
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
    <?php endforeach ?>
</section>
<div class="hr-category row mt-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">კულტურა</a>
</div>
<section class="row mx-0 px-md-2 px-0">
    <?php $posts = get_posts( array(
            'numberposts' => 3,
            'category'    => 0,
            'category_name'    => "culture",
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true )); 
    ?>
    <?php foreach( $posts as $post ) : ?>
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
    <?php endforeach ?>
</section>
<?php get_footer(); ?>
