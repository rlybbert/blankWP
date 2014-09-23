<?php

?>
		</div><!-- end of body div -->
		<div class="footer clearfix">
			I'm your footer file (footer.php) and here is your footer menu:
     	 	<?php wp_nav_menu( array('theme_location' => 'footer-menu') ); ?>
			<div class="source-org vcard copyright" role="contentinfo">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>
		</div>

	</div>

	<?php wp_footer(); ?>

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

</body>

</html>
