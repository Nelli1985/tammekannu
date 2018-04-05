<?php

// GENERAL functions
//-----------------------------------------------------------------------------
// Add scripts and stylesheets
function blogtheme_scripts() {
    wp_enqueue_style( 'tammekannu_stylesheet', get_template_directory_uri() . '/css/style.css' );
}

// Add widgets
function widgets_init(){
    register_sidebar( array(
    'name' => __('Sidebar', 'sidebar'),
    'id' => 'sidebar-1',
    ));
}
add_action('widgets_init', 'widgets_init');

/**
 * Plugin name: WP Trac #42573: Fix for theme template file caching.
 * Description: Flush the theme file cache each time the admin screens are loaded which uses the file list.
 * Plugin URI: https://core.trac.wordpress.org/ticket/42573
 * Author: Weston Ruter, XWP.
 * Author URI: https://weston.ruter.net
 */
function wp_42573_fix_template_caching( WP_Screen $current_screen ) {
	// Only flush the file cache with each request to post list table, edit post screen, or theme editor.
	if ( ! in_array( $current_screen->base, array( 'post', 'edit', 'theme-editor' ), true ) ) {
		return;
	}
	$theme = wp_get_theme();
	if ( ! $theme ) {
		return;
	}
	$cache_hash = md5( $theme->get_theme_root() . '/' . $theme->get_stylesheet() );
	$label = sanitize_key( 'files_' . $cache_hash . '-' . $theme->get( 'Version' ) );
	$transient_key = substr( $label, 0, 29 ) . md5( $label );
	delete_transient( $transient_key );
}
add_action( 'current_screen', 'wp_42573_fix_template_caching' );

// Gallery styling
add_filter( 'use_default_gallery_style', '__return_false' );

// HEADER.PHP
//-----------------------------------------------------------------------------
// this menu would appear in the "Theme Locations" box as "Header Menu".
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Add featured image support
add_theme_support( 'post-thumbnails' );

/**
* Add the images to the special submenu -> the submenu items with the parent with 'pt-special-dropdown' class.
*/
function isMobileDevice(){
    $aMobileUA = array(
        '/iphone/i' => 'iPhone', 
        '/ipod/i' => 'iPod', 
        '/ipad/i' => 'iPad', 
        '/android/i' => 'Android', 
        '/blackberry/i' => 'BlackBerry', 
        '/webos/i' => 'Mobile'
    );

    //Return true if Mobile User Agent is detected
    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            return true;
        }
    }
    //Otherwise return false..  
    return false;
}

function add_images_to_special_submenu( $items ) {
	$special_menu_parent_ids = array();
	
	foreach ( $items as $item ) {
		if ( in_array( 'pt-special-dropdown', $item->classes, true ) && isset( $item->ID ) && !isMobileDevice()) {
			$special_menu_parent_ids[] = $item->ID;
		}

		if ( in_array( $item->menu_item_parent, $special_menu_parent_ids ) && has_post_thumbnail( $item->object_id ) ) {
			$item->title = sprintf(
				'%1$s %2$s',
				get_the_post_thumbnail( $item->object_id, 'thumbnail', array( 'alt' => esc_attr( $item->title ) ) ),
				$item->title
			);
		}
	}

	return $items;
}

add_filter( 'wp_nav_menu_objects', 'add_images_to_special_submenu' );

/**
* Add hamburger menu for mobile
*/


?>
