<?php

?>
		</div>
		<div class="footer clearfix">
     		<?php wp_nav_menu( array('theme_location' => 'footer-menu') ); ?>
			<div class="source-org vcard copyright" role="contentinfo">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>
		</div>

	</div>

	<?php wp_footer(); ?>

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

</body>

</html>
