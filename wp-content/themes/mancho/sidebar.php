<section class="row mx-0 my-3">
	<div class="slider col-lg-8 col-12 carousel slide my-lg-0 p-0" data-ride="carousel" id="slider">
		<ol class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class="active slider__dot"></li>
			<li data-target="#slider" data-slide-to="1" class="slider__dot"></li>
			<li data-target="#slider" data-slide-to="2" class="slider__dot"></li>
		</ol>
		<div class="carousel-inner">
			<?php $posts = get_posts( array(
				'numberposts' => 3,
				'category'    => 0,
				'orderby'     => 'meta_value_num',
				'order'       => 'DESC',
				'include'     => array(),
				'exclude'     => array(),
				'meta_key'    => 'post_views_count',
				'meta_value'  =>'',
				'post_type'   => 'post',
				'suppress_filters' => true )); 
			?>
			<?php foreach( $posts as $post ) : ?>
				<div class="carousel-item">
					<?php if(has_post_thumbnail()) : ?>
						<img src="<?php the_post_thumbnail_url("slider");?>" alt=""  class="slider__img">
					<?php else :?>
						<img src="<?php bloginfo( "template_directory" ); ?>/assets/img/empty_img.png" alt=""  class="slider__img">
					<?php endif ?>
					<div class="carousel-caption d-none d-md-block">
						<a href="<?php the_permalink() ?>"><h5 class="slider__headText"><?php the_title(); ?></h5></a>
					</div>
				</div>
			<?php endforeach ?>
			<a class="carousel-control-prev slider__arrow" href="#slider" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Prev</span>
			</a>
			<a class="carousel-control-next slider__arrow" href="#slider" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Prev</span>
			</a>
		</div>
	</div>
	<div class="col-lg-4 col-12 p-0">
			<div class="topnews col-lg-11 offset-lg-1 col-12 offset-0 mt-lg-0 mt-3 h-100 p-0 bg-light">
				<?php dynamic_sidebar("test_sidebar"); ?>
			</div>
	</div>
</section>