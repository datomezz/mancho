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

        foreach( $posts as $post){
            get_template_part("includes/article", "excerpt");
        }
    ?>
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
            <?php get_template_part("includes/article", "excerpt"); ?>
        <?php endforeach ?>
    </section>
<?php endfor ?>

<?php get_footer(); ?>
