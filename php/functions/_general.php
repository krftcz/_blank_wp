<?php
// menu
register_nav_menu('primary', __('Main menu', 'project_name'));

// remove some admin menu items
function remove_menus(){
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}

add_action( 'admin_menu', 'remove_menus' );

// thumbnails
//add_theme_support( 'post-thumbnails' );

// image sizes
//add_image_size("img", 1140, 332, true);

// remove emoji styles
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//if( function_exists('acf_add_options_page') ) {
//	acf_add_options_page(array(
//		'page_title' 	=> 'More settings',
//		'menu_title'	=> 'More settings',
//		'menu_slug' 	=> 'theme-general-settings',
//		'capability'	=> 'edit_posts',
//		'redirect'		=> false
//	));
//}

// button
//function button_shortcode($atts, $content = null) {
//	return '<span class="btn">' . $content . '</span>';
//}
//add_shortcode('button', 'button_shortcode');

// jazyky
$lang_dir = get_template_directory() . '/languages';
load_theme_textdomain('project_name', $lang_dir);
