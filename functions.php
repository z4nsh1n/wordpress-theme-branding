<?php 
require_once('wp_bootstrap_navwalker.php');
//register scripts
function wpbootstrap_scripts_width_jquery()
{
	wp_register_script('custom-script', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));
	wp_enqueue_script('custom-script');
}

add_action('wp_enqueue_scripts',  'wpbootstrap_scripts_width_jquery');

//register widgets
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'id' => 'sidebar-2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

//register menus
if ( !function_exists('wpt_setup') ) {
	function wpt_setup(){
		register_nav_menu('primary', __('Primary navigation', 'wptuts'));
	}
}
add_action('after_setup_theme', 'wpt_setup');

?>
