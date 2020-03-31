		<footer class="footer mt-5">
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
                <img src="<?php bloginfo('template_directory');?>/assets/img/logo.png" alt="footer-logo" class="footer-img footer-img__responsive">
            </div>
            <div class="footer-bottom row align-items-center mx-0">
                <p class="footer-bottom__text m-0 py-1 px-2">© <?php echo date("Y");?>. All Right Reserved</p>
            </div>
        </footer>
	</main>
    <a href="#head" class="go-top bg-main text-light">⮝</a>
    <?php wp_footer(); ?>
</body>
</html>