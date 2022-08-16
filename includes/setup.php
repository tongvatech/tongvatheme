<?php 

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/includes/back-compat.php';
}

if ( ! function_exists( 'kiyono_setup_theme' ) ) :

  function kiyono_setup_theme() {

		add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    add_theme_support( 'html5', array(
      'navigation-widgets',
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
		) );

    add_theme_support(
			'custom-background',
			apply_filters( 'kiyono_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		) );

		// Add support for core custom logo
    add_theme_support( 'custom-logo', array(
      'height'      => 80,
      'width'       => 100,
      'flex-width' => true,
    ) );

    // Translation ready
		load_theme_textdomain( 'kiyono', get_template_directory() . '/languages' );

    // Add theme support for blocks 
    add_theme_support( 'align-wide' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    
    $editor_stylesheet_path = './assets/css/style-editor.css';

    add_editor_style( $editor_stylesheet_path );

    // Register Navigation
    register_nav_menu( 'primary', esc_html__('Primary Menu', 'kiyono') );
  }
  endif;
add_action( 'after_setup_theme', 'kiyono_setup_theme');



function test_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'test_content_width', 640 );
}
add_action( 'after_setup_theme', 'test_content_width', 0 );




