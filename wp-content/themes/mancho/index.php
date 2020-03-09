<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php echo $_SERVER["PHP_SELF"]; ?>

<?php 
    $ajax_link = admin_url("admin-ajax.php") . "?action=loadmore";
    echo "<div class='ajax-link' style='display:none'>$ajax_link</div>";
?>
<?php 
    $categories = array("economics", "society", "politics", "culture");
    $categories_names = array("ეკონომიკა", "საზოგადოება", "პოლიტიკა", "კულტურა");
?>

<div class="hr-category row mt-5 mb-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">სიახლეები</a>
</div>
<section class="news-section row mx-0 mb-5 px-md-2 px-0">
    <?php
        $posts = get_posts( array(
            'numberposts' => 3,
            'category'    => null,
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
        <a href="javascript:void(0)" class="see-more rounded-pill bg-main px-4 py-2" id="true_loadmore">მეტის ნახვა</a>
    </div>
</section>

<?php for($i = 0; $i < 4; $i++) : ?>
    <div class="hr-category row mt-3 mx-0">
        <a href="#" class="hr-category__text m-0"><?php echo $categories_names[$i]; ?></a>
    </div>
    <section class="row mx-0 mb-5 px-md-2 px-0">
        <?php $posts = get_posts($args);
                $args = array(
                'numberposts' => 3,
                'category_name' => $categories[$i],
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
<?php endfor ?>

<script>

let loadMoreBtn = document.querySelector("#load_more");
let postsContainer = document.querySelector(".news-section");

loadMoreBtn.onclick = function(){
	ajaxLoadMore();
}

function ajaxLoadMore(){
	let req = new XMLHttpRequest();
    let data = document.querySelector(".ajax-link").innerText;

	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            postsContainer.innerHTML = req.responseText;
            // alert(req.responseText);
		}
	}
	
	req.open("GET", data, true);
	req.send();
}

</script>
<?php get_footer(); ?>