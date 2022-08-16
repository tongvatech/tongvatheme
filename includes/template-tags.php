<?php

if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

// Display post author 
// ---------------------------------------------
if ( ! function_exists( 'kiyono_posted_by' ) ) {
	function kiyono_posted_by() {
		if ( ! get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) {
			echo '<span class="byline">';
			printf(
				/* translators: %s: Author name. */
				'<p>' . kiyono_get_icon_svg( 'ui', 'author' )  . esc_html__( 'Published by %s', 'kiyono' ),
				'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author() ) . '</a></p>'
			);
			echo '</span>';
		}
	}
}

// Display categories
// ---------------------------------------------
if ( ! function_exists( 'kiyono_category_list' )) {
	function kiyono_category_list() {
		$categories     =   get_the_category();

		if ( ! empty( $categories ) ) {
			echo '<p class="category">' . kiyono_get_icon_svg( 'ui', 'category' );
			foreach( $categories as $category ) {
				echo '<span><a href="' . esc_url( get_tag_link( $category ) ). '">' . esc_html($category->name) . '</a></span>' ; 
			};
		}
	}
}

// Display tags
// ---------------------------------------------
if ( ! function_exists( 'kiyono_tag_list' )) {
	function kiyono_tag_list() {
		$post_tags     =   get_the_tags();

		if ( ! empty( $post_tags ) ) {
			echo  kiyono_get_icon_svg( 'ui', 'tags' );
			foreach( $post_tags as $post_tag ) {
				echo '<span><a href="' . esc_url( get_tag_link( $post_tag ) ). '">' . esc_html($post_tag->name) . '</a></span>' ; 
			};
			echo '</p>';
		}
	}
}


// Display post date 
// ---------------------------------------------
if ( ! function_exists( 'kiyono_posted_on' ) ) {
	function kiyono_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);
		echo '<span class="posted-on">';
		printf(
			/* translators: %s: Publish date. */
			esc_html__( 'Published %s', 'kiyono' ),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
}


// Card wrapper start (For homepage (latest posts), archives, search )
// ---------------------------------------------
if ( ! function_exists( 'kiyono_grid_wrapper_start' )) {
	function kiyono_grid_wrapper_start() {
		echo '<div class="container">';
		echo '<div class="gird-area">';
	}
}


// Card wrapper end (For homepage (latest posts), archives, search )
// ---------------------------------------------
if ( ! function_exists( 'kiyono_grid_wrapper_end' )) {
	function kiyono_grid_wrapper_end() {
		echo '</div>';
		echo '</div>';
	}
}


// Display frontpage title (used on index.php)
// ---------------------------------------------
if ( ! function_exists ( 'kiyono_frontpage_title' )) {
	function kiyono_frontpage_title() {
		echo '<header>';
		echo '<h1 class="page-title visuallyhidden ">'; 
		echo single_post_title();
		echo '</h1></header>';
	}
}


// Display archive title (used on index.php)
// ---------------------------------------------
if ( ! function_exists ( 'kiyono_archive_title' )) {
	function kiyono_archive_title () {
		echo '<header class="page-header">';
		echo esc_html( the_archive_title( '<h1 class="page-title">', '</h1>' ) );
		echo esc_html( the_archive_description( '<span">', '</span>' ) );
		echo '</header>';
	}
}


// Display search result title (used on index.php)
// ---------------------------------------------
if ( ! function_exists ( 'kiyono_search_title' )) {
	function kiyono_search_title( ) {
		echo '<header class="page-header">';
		echo '<h1 class="page-title">';
		printf(
		 /* translators: %s: search query. */
		 esc_html__( 'Search Results for: %s', 'kiyono' ), '<span>' . get_search_query() . '</span>' );
		echo'</header>';
	}
}


// Pagination for archive and front page 
// ---------------------------------------------
if ( ! function_exists( 'kiyono_the_posts_navigation' ) ) {
	function kiyono_the_posts_navigation() {
		the_posts_pagination(
			array(
				'mid_size'    				=> 1,
				'prev_text' 					=> sprintf( esc_html__( 'Newer', 'kiyono' ), kiyono_get_icon_svg( 'ui', 'arrow_left' ) ),
				'next_text' 					=> sprintf( esc_html__( 'Older', 'kiyono' ), kiyono_get_icon_svg( 'ui', 'arrow_right' ) ),
				'before_page_number' 	=> '<span class="visuallyhidden">' . __( 'Go to page', 'kiyono' ) . ' </span>',
			)
		);
	}
};


// Pagination for indivisual post page
// ---------------------------------------------
if ( ! function_exists( 'kiyono_the_post_navigation' ) ) {
	function kiyono_the_post_navigation() {
	
		$kiyono_next = kiyono_get_icon_svg( 'ui', 'arrow_right' );
		$kiyono_prev = kiyono_get_icon_svg( 'ui', 'arrow_left' );

		the_post_navigation(
			array(
				'prev_text' => '<span class="post-title">' . $kiyono_prev . ' %title </span>',
				'next_text' => '<span class="post-title">%title' . $kiyono_next . '</span>',
			)
		);
	}
}


// Display number of comments
// ---------------------------------------------
if ( ! function_exists( 'kiyono_comment_numbers' ) ) {
	function kiyono_comment_numbers() {

		$kiyono_comment_count 	= 	get_comments_number();
		$comment_icon						= 	kiyono_get_icon_svg( 'ui', 'comments' );

		if ( '1' === $kiyono_comment_count ) {

			printf(	 
				kiyono_get_icon_svg( 'ui', 'comments' ) . '<a href="' . esc_url( '#comments') . '" title="'. esc_attr__('Skip to comment section', 'kiyono')  . ' " >' . esc_html__( '1 comment', 'kiyono'  ) . '<span class="visuallyhidden">' . esc_html__( 'Skip to comment section', 'kiyono' )  . '</span></a>'
			);

		} else {

			printf(	
				kiyono_get_icon_svg( 'ui', 'comments' ) . '<a href="' . esc_url( '#comments') . '" title="'. esc_attr__('Skip to comment section', 'kiyono')  . '">' 
				/* translators: %s: Comment count number. */
				. esc_html( _nx( '%s comment', '%s comments', $kiyono_comment_count, 'Comments title', 'kiyono' ) )  . '<span class="visuallyhidden">' . esc_html__( 'Skip to comment section', 'kiyono' )  . '</span></a>',
				esc_html( number_format_i18n( $kiyono_comment_count ) )
			);
		}
	}
}
	

// Navigation - Add button if menu item has sub menu
// ---------------------------------------------
function kiyono_add_sub_menu_toggle( $output, $item, $depth, $args ) {
	if ( 0 === $depth && in_array( 'menu-item-has-children', $item->classes, true ) ) {

		// Add toggle button.
		$output .= '<button class="sub-menu-toggle" aria-expanded="false" onClick="kiyonoExpandSubMenu(this)">';
		$output .= '<span class="icon-plus">' . kiyono_get_icon_svg( 'ui', 'arrow_down', 18 ) . '</span>';
		$output .= '<span class="icon-minus">' . kiyono_get_icon_svg( 'ui', 'arrow_up', 18 ) . '</span>';
		$output .= '<span class="visuallyhidden">' . esc_html__( 'Open menu', 'kiyono' ) . '</span>';
		$output .= '</button>';
	}
	return $output;
}
add_filter( 'walker_nav_menu_start_el', 'kiyono_add_sub_menu_toggle', 10, 4 );


