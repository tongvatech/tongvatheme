<?php

function kiyono_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        	=> '.site-title a',
				'render_callback' 	=> 'kiyono_customize_partial_blogname',
			)
		);

		// Option to show site description
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array (
				'selector'        	=> '.site-description',
				'render_callback' 	=> 'kiyono_customize_partial_blogdescription',
		) );

		$wp_customize->add_setting( 'display_title_and_tagline', array (
				'capability'        => 'edit_theme_options',
				'default'           => true,
				'sanitize_callback' => 'kiyono_sanitize_checkbox',
		) );

		$wp_customize->add_control( 'display_title_and_tagline', array (
				'type'    					=> 'checkbox',
				'section' 					=> 'title_tagline',
				'label'   					=> esc_html__( 'Display Site Title & Tagline', 'kiyono' ),
		) );

		// Big site name
		$wp_customize->add_section( 'options', array (
      'title'             	=>  __( 'Theme Options', 'kiyono' ),
      'priority'          	=>  40,
      'capability'        	=> 'edit_theme_options',
    ) );

		$wp_customize->add_setting( 'big_site_name', array (
				'capability'        => 'edit_theme_options',
				'default'           => true,
				'sanitize_callback' => 'kiyono_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'big_site_name', array (
				'type'              => 'checkbox',
				'section'           => 'options',
				'priority'          => 10,
				'label'             => __( 'Make site name big on desktop.', 'kiyono' ),
		) );

		// Enable modal search in header 
		$wp_customize->add_section( 'options', array (
      'title'             	=>  __( 'Theme Options', 'kiyono' ),
      'priority'          	=>  40,
      'capability'        	=> 'edit_theme_options',
    ) );

		$wp_customize->add_setting( 'enable_header_search', array (
				'capability'        => 'edit_theme_options',
				'default'           => true,
				'sanitize_callback' => 'kiyono_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'enable_header_search', array (
				'type'              => 'checkbox',
				'section'           => 'options',
				'priority'          => 10,
				'label'             => __( 'Show search in header on desktop.', 'kiyono' ),
		) );


		// Enable placeholder image on archive page
		$wp_customize->add_section( 'options', array (
      'title'             	=>  __( 'Theme Options', 'kiyono' ),
      'priority'          	=>  40,
      'capability'        	=> 'edit_theme_options',
    ) );

		$wp_customize->add_setting( 'enable_placeholder_thumb', array (
				'capability'        => 'edit_theme_options',
				'default'           => true,
				'sanitize_callback' => 'kiyono_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'enable_placeholder_thumb', array (
				'type'              => 'checkbox',
				'section'           => 'options',
				'priority'          => 20,
				'label'             => __( 'Add a placefolder image when a post is missing featured image.', 'kiyono' ),
		) );


		// Remove feature image on single post page.
		$wp_customize->add_section( 'options', array (
      'title'             	=>  __( 'Theme Options', 'kiyono' ),
      'priority'          	=>  40,
      'capability'        	=> 'edit_theme_options',
    ) );

		$wp_customize->add_setting( 'remove_featured_img_on_single', array (
				'capability'        => 'edit_theme_options',
				'default'           => false,
				'sanitize_callback' => 'kiyono_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'remove_featured_img_on_single', array (
				'type'              => 'checkbox',
				'section'           => 'options',
				'priority'          => 30,
				'label'             => __( 'Remove feature image on single post page.', 'kiyono' ),
		) );

		
		// Remove animation on featured images
		$wp_customize->add_section( 'options', array (
      'title'             	=>  __( 'Theme Options', 'kiyono' ),
      'priority'          	=>  40,
      'capability'        	=> 'edit_theme_options',
    ) );

		$wp_customize->add_setting( 'remove_animation', array (
				'capability'        => 'edit_theme_options',
				'default'           => false,
				'sanitize_callback' => 'kiyono_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'remove_animation', array (
				'type'              => 'checkbox',
				'section'           => 'options',
				'priority'          => 30,
				'label'             => __( 'Remove animation on featured images.', 'kiyono' ),
		) );


		// Hide read more in the excerpt
		$wp_customize->add_section( 'options', array (
			'title'             	=>  __( 'Theme Options', 'kiyono' ),
			'priority'          	=>  60,
			'capability'        	=> 'edit_theme_options',
		  ) );
	  
		$wp_customize->add_setting( 'hide_readmore', array (
				'capability'        => 'edit_theme_options',
				'default'           => false,
				'sanitize_callback' => 'kiyono_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'hide_readmore', array (
				'type'              => 'checkbox',
				'section'           => 'options',
				'priority'          => 30,
				'label'             => __( 'Hide the ellipsis and "Read More" in the excerpt.', 'kiyono' ),
		) );

		function kiyono_sanitize_checkbox( $checked = null ) {
			return (bool) isset( $checked ) && true === $checked;
		}

	}
}
add_action( 'customize_register', 'kiyono_customize_register' );


function kiyono_customize_partial_blogname() {
	bloginfo( 'name' );
}

function kiyono_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


function kiyono_customize_preview_js() {

	$ver  =   wp_get_theme( 'kiyono' )->get( 'Version' );
	
	wp_enqueue_script( 'kiyono-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), $ver, true );
}
add_action( 'customize_preview_init', 'kiyono_customize_preview_js' );
