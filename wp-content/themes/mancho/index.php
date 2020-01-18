<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php 
    $categories = array("economics", "society", "politics", "culture");
    $categories_names = array("ეკონომიკა", "საზოგადოება", "პოლიტიკა", "კულტურა");
?>

<div class="hr-category row mt-5 mb-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">სიახლეები</a>
</div>
<section class="news-section row mx-0 mb-5 px-md-2 px-0">
    <?php $posts = get_posts( array(
            'numberposts' => 30,
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
        <article class="news-section__article col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
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
        <div class="col-12 d-flex flex-row justify-content-center mx-0 mt-5" id="load_more">
            <a href="javascript:void(0)" onclick="loadMore()" class="see-more rounded-pill bg-main px-4 py-2" id="true_loadmore">მეტის ნახვა</a>
        </div>
</section>

<?php for($i = 0; $i < 4; $i++) : ?>
    <div class="hr-category row mt-3 mx-0">
        <a href="#" class="hr-category__text m-0"><?php echo $categories_names[$i]; ?></a>
    </div>
    <section class="row mx-0 mb-5 px-md-2 px-0">
        <?php $posts = get_posts( array(
                'numberposts' => 3,
                'category_name' => $categories[$i],
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
<?php endfor ?>
<script>
    //I don't know AJAX, so I do my way
    let article = document.querySelectorAll(".news-section article");
    let loadmore_button = document.querySelector(".see-more");
    console.log(loadmore_button);
    
    let loadmore = 6;
    
    for(let i = loadmore; i < article.length; i++){
        article[i].style.display = "none";
    }


    function loadMore(){
        loadmore += 6;
        if(loadmore > article.length){
            loadmore = article.length;
            loadmore_button.style.display = "none";
        }
        for(let i = 0; i < loadmore; i++){
            article[i].removeAttribute("style");
        }
    }
</script>
<?php get_footer(); ?>
