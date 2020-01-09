		<footer class="footer mt-5">
            <!-- <ul class="footer-menu row m-0 py-2 px-2">
                <a href="#" class="footer-menu__link">მთავარი</a>
                <a href="#" class="footer-menu__link">საიტის წესები</a>
                <a href="#" class="footer-menu__link">რეკლამა</a>
                <a href="#" class="footer-menu__link">კონტაქტი</a>
			</ul> -->
			<?php wp_nav_menu( 
				array(
					'menu'            => 'footer_menu',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'footer-menu row m-0 py-2 px-2',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'item_spacing'    => 'preserve',
					'depth'           => 0,
					'walker'          => '',
					'theme_location'  => '',
				))
			?>
            <div class="row justify-content-center py-3 mx-0">
                <img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="footer-logo" class="footer-img footer-img__responsive">
            </div>
            <div class="footer-bottom row align-items-center mx-0">
                <p class="footer-bottom__text m-0 py-1 px-2">© 2019. All Right Reserved</p>
            </div>
        </footer>
	</main>
    <a href="#head" class="go-top bg-main text-light">⮝</a>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/scripts/script.js"></script>
    <script src="<?php bloginfo('template_directory');?>/scripts/bootstrap/jquery-3.4.1.slim.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/scripts/bootstrap/popper.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/scripts/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>