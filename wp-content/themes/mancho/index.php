<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php 
    $ajax_link = admin_url("admin-ajax.php") . "?action=loadmore";
    echo "<div class='ajax-link' style='display:none'>$ajax_link</div>";
?>
<?php 
    $categories = array("news", "economics", "society", "politics", "culture");
    $categories_names = array("სიახლეები", "ეკონომიკა", "საზოგადოება", "პოლიტიკა", "კულტურა");
?>

<?php for($i = 0; $i < 5; $i++) : ?>
    <div class="hr-category row mt-3 mx-0">
        <a href="#" class="hr-category__text m-0"><?php echo $categories_names[$i]; ?></a>
    </div>
    <section class="row mx-0 mb-5 px-md-2 px-0" id="section_<?php echo $categories[$i];?>">
        <?php $posts = get_posts($args);
                $args = array(
                'numberposts' => 3,
                'category_name' => $categories[$i + 1],
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true ); 
        ?>
        <?php foreach( $posts as $post ) : ?>
            <?php get_template_part("includes/article", "excerpt"); ?>
        <?php endforeach ?>
    </section>
    <div class="col-12 d-flex flex-row justify-content-center mx-0 mt-5" id="load_more">
        <a href="javascript:void(0)" class="see-more rounded-pill bg-main px-4 py-2" id="true_loadmore">მეტის ნახვა</a>
    </div>
<?php endfor ?>

<?php get_footer(); ?>