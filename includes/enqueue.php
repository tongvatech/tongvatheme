<?php

if ( ! function_exists( 'kiyono_register_styles' ) ) :

  function kiyono_register_styles(){

    $ver  =   wp_get_theme( 'kiyono' )->get( 'Version' );

    wp_register_style( 
      'kiyono_google_fonts', 
      'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800&display=swap',
      [],
      $ver
    );
    wp_enqueue_style( 'kiyono_google_fonts' );
    wp_enqueue_style( 'kiyono_style', get_stylesheet_uri(), [] , $ver, 'all');
    wp_enqueue_script( 'kiyono_navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $ver, true );
    wp_enqueue_script( 'kiyono_custom', get_template_directory_uri() . '/assets/js/custom.js', array(), $ver, true );
    wp_enqueue_script( 'kiyono_modal', get_template_directory_uri() . '/assets/js/modal.js', array(), $ver, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

  }
  add_action( 'wp_enqueue_scripts', 'kiyono_register_styles' );
endif;
