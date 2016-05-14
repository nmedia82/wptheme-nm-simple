<?php
/**
 * NM-Simple theme function file
 * */
 
 
if( !function_exists('nmsimple_setup') ){
    
    function nmsimple_setup(){
    
    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );    
	
	if (! isset ( $content_width )){
			global $content_width;
			$content_width = 800;
		}
		
	
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	
    $header_image = array (
			'uploads' => false 
	);
	
	add_theme_support ( 'custom-header', $header_image );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support ( 'automatic-feed-links' );


	/*
	 * Enable support for Post Thumbnails on posts and pages. @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support ( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 200 );
	add_image_size('home-block', 175, 80);
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	// the_excerpt Settings
	remove_filter ( 'the_excerpt', 'wpautop' );
	
	// Setup the WordPress core custom background feature.
	add_theme_support ( 'custom-background' );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus ( array (
			'top' => 'Theme Top Menu',
			'sub' => 'Theme sub Menu'
	) );


    }
    
}
add_action ( 'after_setup_theme', 'nmsimple_setup' );


if( !function_exists('nmsimple_scripts') ){
    
    function nmsimple_scripts(){
    	
    	// Load our main stylesheet.
		wp_enqueue_style( 'nmsimple-style', get_stylesheet_uri() );
    	
    }
    
}

add_action( 'wp_enqueue_scripts', 'nmsimple_scripts' );

if( !function_exists('nmsimple_widgets') ){
    
    function nmsimple_widgets(){
    	
    	//register widgets for footer
    	register_sidebar( 
				array(
					'name' => __( 'Footer Widget 1', 'nm-simple' ),
					'id' => 'footer-w-1',
					'description' => __( 'Footer widget', 'nm-simple' ),
					'before_widget' => '',
					'after_widget' => '',
					'before_title' => '<div class="header_05">',
					'after_title' => '</div>',
				));

    }
}

add_action( 'widgets_init', 'nmsimple_widgets' );