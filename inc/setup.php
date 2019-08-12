<?php
/**
 * Theme basic setup.
 *
 * @package homelife
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'homelife_setup' );

if ( ! function_exists ( 'homelife_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function homelife_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on homelife, use a find and replace
		 * to change 'homelife' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'homelife', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'homelife' ),
			'footer' => __( 'Footer Menu', 'homelife' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
	}
}


add_filter( 'excerpt_more', 'homelife_custom_excerpt_more' );

if ( ! function_exists( 'homelife_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function homelife_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt', 'homelife_all_excerpts_get_more_link' );

if ( ! function_exists( 'homelife_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function homelife_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' [...]<p><a class="btn btn-secondary homelife-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More...',
			'homelife' ) . '</a></p>';
		}
		return $post_excerpt;
	}
}

/**
 * Image sizes
 */
add_image_size('col-3', 295);
add_image_size('col-4', 434);
add_image_size('col-5', 542);
add_image_size('col-6', 650);
add_image_size('col-7', 759);
add_image_size('card-3', 255, 141, true);
add_image_size('card-4', 362, 200, true);
add_image_size('hero banner large', 1800, 997, array( 'center', 'center' ));
add_image_size('hero banner small', 1800, 650, array( 'center', 'center' ));
add_image_size('hero banner mobile', 500, 800, array( 'center', 'center' ));
add_image_size('content block', 530, 640, true);


/**
 * Advanced Custom Fields
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

function acf_load_cta_choices( $field ) {
    // reset choices
    $field['choices'] = array();
    // if has rows
    if( have_rows('call_to_action_blocks', 'option') ) {        
        // while has rows
        while( have_rows('call_to_action_blocks', 'option') ) {
            // instantiate row
            the_row();
            
            // vars
            $value = get_sub_field('cta_title');
            $label = get_sub_field('cta_title');

            // append to choices
            $field['choices'][ $value ] = $label;
        }
    }
    // return the field
    return $field;
} 
add_filter('acf/load_field/name=page_cta_block', 'acf_load_cta_choices');

/**
 * Function: Return List of Children or Sibling Page IDs
 */
function get_page_links( $page_id ) {

	if ( $parent = wp_get_post_parent_id( $page_id ) ) {
		
		$page_ids = get_pages(array('child_of' => $parent, 'parent' => $parent, 'sort_column' => 'menu_order', 'depth' => 1));
		
	} else {
		
		$page_ids = get_pages(array('child_of' => $page_id, 'parent' => $page_id, 'sort_column' => 'menu_order', 'depth' => 1));
		
	}

	return $page_ids;
} 

function get_parent_object($page_id) {
	
	if ( $parent = wp_get_post_parent_id($page_id) ) {

		$parent = get_post($parent);
		
		return $parent;
		
	} else {
		
		global $post;

		return $post;
		
	}
}