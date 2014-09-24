<?php

//make admin urls more dynamic
//make wordpress menu links dynamic using string replace with ###site_url###
function replaceNavURL( $atts, $item, $args ) {
	$siteURL = site_url();
    $newlink = str_replace("###site_url###", $siteURL, $atts['href']);
    $atts['href'] = $newlink;
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'replaceNavURL', 10, 3 );
//make links in content dynamic
function replaceContentURL($content){
	$siteURL = site_url()."/";
	$content = str_replace('###site_url###', $siteURL,$content);
	return $content;
}
add_filter('the_content','replaceContentURL');


//disable the admin bar, if only for development
show_admin_bar(false);

//remove default image sizes
function remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');

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

?>
