<?php

function kiyono_get_icon_svg( $group, $icon, $size = 20 ) {
	return kiyono_One_SVG_Icons::get_svg( $group, $icon, $size );
}

function kiyono_body_classes( $classes ) {
	
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	$enable_header_search = get_theme_mod( 'enable_header_search', true );
   if ( true === $enable_header_search ) {
		$classes[] = 'has-search-nav';
	 }

	return $classes;
}
add_filter( 'body_class', 'kiyono_body_classes' );


function kiyono_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'kiyono_pingback_header' );

