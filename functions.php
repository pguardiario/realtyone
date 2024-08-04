<?php

/**
 * Theme setup.
 */

function realtyone_setup()
{
	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'realtyone'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'realtyone_setup');

/**
 * Enqueue theme assets.
 */
function realtyone_enqueue_scripts()
{
	$theme = wp_get_theme();
	$version="1.0.3";

	wp_enqueue_style('realtyone', realtyone_asset('css/app.css'), array(), $version);
	wp_enqueue_script('realtyone', realtyone_asset('js/app.js'), array(), $version);
}

add_action('wp_enqueue_scripts', 'realtyone_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function realtyone_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}


/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function realtyone_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'realtyone_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function realtyone_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'realtyone_nav_menu_add_submenu_class', 10, 3);

$themePages = array('bio', 'testimonials', 'sellers', 'buyers', 'listings');

foreach ($themePages as $title) {
	if(empty(get_page_by_title($title, 'OBJECT', 'page'))){
		$page_id = wp_insert_post(
			array(
			'comment_status' => 'close',
			'ping_status'    => 'close',
			'post_author'    => 1,
			'post_title'     => $title,
			'post_name'      => $title,
			'post_status'    => 'publish',
			'post_content'   => $title == "listings" ? '[es_my_listing][es_search_form]' : '',
			'post_type'      => 'page'
			)
	);
	}
}

$pgthemes = json_decode(file_get_contents(get_stylesheet_directory() . "/config.json"), true);