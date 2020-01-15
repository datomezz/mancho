<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo("description");?>">
    <meta neme="author" content="zzD">
    <link rel="icon" href="<?php bloginfo("template_directory");?>/assets/img/favicon.ico">
    <title><?php bloginfo("name");?></title>
    <?php wp_head() ?>
</head>
<body>
    <main class="container bg-color p-0">
        <header class="header row p-2 pb-md-4 m-0" id="head">
            <div class="col-md-6 offset-md-3 d-flex flex-column align-items-center justify-content-between">
                <div class="col-4 py-3">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/header-logo.png" class="img-fluid">
                </div>
                <div class="col-md-12">
                    <form class="search form-group row justify-content-center">
                        <input type="text" name="search" class="search__input form-control form-control-sm w-50" placeholder="ჩაწერეთ საძიებო სიტყვა">
                        <input type="submit" value="ძებნა" class="search__submit form-control"> 
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row justify-content-md-end align-items-md-center justify-content-center h-100 m-0">
                    <div class="socials d-flex flex-md-column flex-row mt-md-0 mt-2">
                        <a class="socials__link mr-md-0 mr-2" href="#" target="_blank"><i class="socials__icon fab fa-facebook-square"></i></a>
                        <a class="socials__link mr-md-0 mr-2" href="#" target="_blank"><i class="socials__icon fab fa-instagram"></i></a>    
                        <a class="socials__link mr-md-0 mr-2" href="#" target="_blank"><i class="socials__icon fab fa-twitter-square"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <nav class="topnav navbar navbar-expand-lg navbar-light bg-light">
            <a href="http://localhost/wordpress_media" class="navbar-brand"><i class="topnav__brand fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnavMenu" aria-controls="topnavMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="topnavMenu"> -->
			<?php wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'topnavMenu',
						'menu_class'      => 'topnav__ul',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 2,
						'walker'          => new WP_Bootstrap_Navwalker(),
					  ) ); ?>
            <!-- </div> -->
        </nav>