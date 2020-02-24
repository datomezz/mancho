<div class="col-12 my-3 px-0">
    <div class="search__result bg-light p-2">
        <span class="search__result-title">საძიებო სიტყვა : </span><?php the_search_query(); ?><span class="search__result-title"> ვერ მოიძებნა</span>
    </div>
    <div class="search__result bg-light p-2 mt-3">
        <h3 class="search__result-title">შეიძლება გაინტერესებდეთ : </h3>
    </div>
</div>

<section class="news-section row mx-0 mb-5 px-md-2 px-0">
    <?php $posts = get_posts( array(
            'numberposts' => 12,
            'category'    => 0,
            'orderby'     => 'rand',
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
</section>