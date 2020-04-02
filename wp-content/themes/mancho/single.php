
<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>

<section class="row mx-0">
<article class="col-12 p-0">
	<div class="post card p-0 bg-color border-md-0 border border-bottom-0">
		<div class="post-container col-md-10 offset-md-1 col-12 offset-0 ">
			<?php if(has_post_thumbnail()) : ?>
				<img src="<?php the_post_thumbnail_url(); ?>" alt="article-news" class="rounded-0 post__img card-img-top">
			<?php else : ?>
				<img src="<?php bloginfo( "template_directory" ); ?>/assets/img/empty_img.png" alt="article-news" class="rounded-0 post__img card-img-top">
			<?php endif; ?>
				<?php the_category(); ?>
		</div>
		<div class="card-body col-md-10 offset-md-1 col-12 offset-0 bg-light">
			<h3 class="post__title card-title m-0"><?php the_title(); ?></h3>
			<div class="article-news__footer d-flex flex-row justify-content-start my-2 py-2">
				<p class="article-news__footer-data pr-3 m-0"><?php the_time('d F Y') ?></p>
				<p class="article-news__footer-view m-0 pr-3"><i class="fas fa-eye main-color mr-1"></i><?php echo getPostViews(get_the_ID());?></p>
			</div>
			<p class="card-text post__text">
				<?php the_post(); ?>
				<?php the_content(); ?>
				<a href="https://www.facebook.com/sharer?u=<?php the_permalink()?>" target="_blank" class="fb-share__text">გააზიარე</a>
			</p>
		</div>
	</div>
	<div class="col-md-10 offset-md-1 col-12 offset-0 my-3 px-0">
		<div class="tags bg-light p-2">
			<i class="fas fa-tag"></i>
			<?php the_tags("", " ", "");?>
		</div>
	</div>
</article>
</section>
<div class="hr-category row mt-3 mx-0">
	<a href="#" class="hr-category__text m-0">მსგავსი სიახლეები</a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
	<?php 
		$category = get_the_category();
		rsort($category);
		$slug = $category[0]->slug;
		$args = array('category_name' => $slug,
					  'numberposts' => 3);
		$posts = get_posts($args);
	?>
	<?php 
		foreach( $posts as $post ){ 
			get_template_part("includes/article", "excerpt");
		}
	?>
</section>
<?php get_footer(); ?>
