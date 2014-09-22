<?php

//disable the admin bar, if only for development
show_admin_bar(false);

//setup theme menus
function blankwpMenus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'blankwpMenus' ); //use this to show in theme wp_nav_menu( array('theme_location' => 'header-menu') );

//debug queries
function varDumpVariable($result){
	echo '<pre>';
	var_dump($result);
	echo '</pre>';
}

// Load jQuery
if ( !function_exists( 'loadJquery' ) ) {
	function loadJquery() {
		if ( !is_admin() ) {
			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ), false);
			wp_enqueue_script( 'jquery' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'loadJquery' );
}

// Custom Menu
register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );

?>
