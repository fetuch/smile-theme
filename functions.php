<?php

require get_theme_file_path('/inc/nav-menu-top-walker.php');
require get_theme_file_path('/inc/pagination.php');

/**
 * Theme setup.
 */
function tailpress_setup()
{
	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'tailpress'),
		)
	);

	register_nav_menu('headerMenuLocation', 'Header Menu Location');
	register_nav_menu('footer-1', 'Footer Menu 1');
	register_nav_menu('footer-2', 'Footer Menu 2');

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

	add_image_size('blogPostList', 624, 312, true);
	add_image_size('blogPostShow', 1280, 768, true);
}

add_action('after_setup_theme', 'tailpress_setup');

add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __('Primary Sidebar'),
			'description'   => __('A short description of the sidebar.'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
	$theme = wp_get_theme();

	wp_enqueue_style('custome-google-font', '//fonts.googleapis.com/css2?family=Inter:wght@100;400;700;900&display=swap');
	wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'), true);

	wp_localize_script('tailpress', 'primaryData', array(
		'root_url' => get_home_url(),
		'nonce' => wp_create_nonce('wp_rest')
	));
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
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
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);

// Redirect subscriber accounts out of admin and onto homepage
function redirectSubscribersToFrontend()
{
	$currentUser = wp_get_current_user();

	if (count($currentUser->roles) === 1 and $currentUser->roles[0] === 'subscriber') {
		wp_redirect(home_url('/'));
	}
}

add_action('admin_init', 'redirectSubscribersToFrontend');

// Hide admin bar for subscribers
function noAdminBarForSubscribers()
{
	$currentUser = wp_get_current_user();

	if (count($currentUser->roles) === 1 and $currentUser->roles[0] === 'subscriber') {
		show_admin_bar(false);
	}
}

add_action('wp_loaded', 'noAdminBarForSubscribers');

// removing the extra <p> tags generated by CF7
add_filter('wpcf7_autop_or_not', '__return_false');

function smile_post_types(): void
{
	//Professor Post Type
	register_post_type('professor', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'public' => true,
		'labels' => array(
			'name' => 'Lektorzy',
			'add_new_item' => 'Dodaj nowego lektora',
			'edit_item' => 'Edytuj lektora',
			'all_items' => 'Wszyscy lektorzy',
			'singular_name' => 'Lektor',
		),
		'menu_icon' => 'dashicons-welcome-learn-more'
	));
}

add_action('init', 'smile_post_types');
