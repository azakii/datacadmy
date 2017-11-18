<?php
/**
 * Replace various active menu class names with "active" or nothing
 *
 */
 
 
 //////////// options

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	acf_add_options_page('Header');
	acf_add_options_page('Footer');


}

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Proton Theme' ),
    'secondary' => __( 'Footer Menu', 'Proton Theme' ),
) );

add_filter('tc_menu_display', 'custom_menu_display');
function custom_menu_display($output) {
	echo preg_replace('| class="dropdown-toggle" data-toggle="dropdown" data-target="#"(.+?)<b |', ' class="a-stripped" $1</a><a href="#" class="dropdown-toggle a-caret" data-toggle="dropdown" data-target="#"><b ', $output, -1);
	}
	
	
	
	
function the_breadcrumb() {
if (!is_home()) {
    echo '<a href="';
    echo get_option('home');
    echo '" class="breadcrumbs_item home">';
    echo "Home";//bloginfo('name');
    echo "</a> ";
    if (is_category() || is_single()) {
        if (is_single()) {
            echo '<span class="breadcrumbs_delimiter"></span>';
			echo '<span class="breadcrumbs_item current">';
			echo the_title();
			echo "</span> ";
            
        }
		if (is_category()) {
            echo '<span class="breadcrumbs_delimiter"></span>';
			echo '<span class="breadcrumbs_item current">';
			echo the_category('title_li=');
			echo "</span> ";
            
        }
    } elseif (is_page()) {
			echo '<span class="breadcrumbs_delimiter"></span>';
			echo '<span class="breadcrumbs_item current">';
			echo the_title();
			echo "</span> ";
    }
}
}


if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');


function new_excerpt_length($length) {
	return 10 ;
}
add_filter('excerpt_length', 'new_excerpt_length');


function new_excerpt_more($more) {
       global $post;
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


/////////////////////////////// widget

if(function_exists('register_sidebar'))
	register_sidebar(array('name' => 'sidebar-links',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

if(function_exists('register_sidebar'))
	register_sidebar(array('name' => 'sidebar',
        'before_widget' => '<div class="widget widget_top10">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget_title">',
        'after_title' => '</h5>'
    ));

	
if(function_exists('register_sidebar'))
	register_sidebar(array('name' => 'share',
        'before_widget' => '<div class="contenu_aside coordonnées">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

/////////////////////////////// Footer widget

if(function_exists('register_sidebar'))
	register_sidebar(array('name' => 'sidebar-Footer-about',
        'before_widget' => '<article>',
        'after_widget' => '</article>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));






if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');



?>