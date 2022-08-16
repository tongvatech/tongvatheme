<?php

/*  Register Block Pattern Category
----------------------------------------------------------*/
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category( 'kiyono', array( 
    'label' => esc_html__( 'Kiyono', 'kiyono' ) 
    )
	);
}

/*  Register Block Patterns
----------------------------------------------------------*/
if ( function_exists( 'register_block_pattern' ) ) {



  // Big heading and subtitle with white background
	register_block_pattern(
		'kiyono/big-heading',
		array(
			'title'         => esc_html__( 'Big heading and subtitle', 'kiyono' ),
			'categories'    => array( 'kiyono' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Big heading with subtitle followed by a separator.', 'Block pattern description', 'kiyono' ),
      'content'       =>  '<!-- wp:group --><div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"90px"}},"className":"has-text-align-center"} --><h2 class="has-text-align-center" style="font-size:90px">' . esc_html__('About', 'kiyono') .'</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html__( 'How did I get here?', 'kiyono' ) . '</p><!-- /wp:paragraph --><!-- wp:separator --><hr class="wp-block-separator"/><!-- /wp:separator --></div><!-- /wp:group -->'
		)
	);

	// Big heading and subtitle with black background
	register_block_pattern(
		'kiyono/big-heading-black-background',
		array(
			'title'         => esc_html__( 'Big heading and subtitle with black background', 'kiyono' ),
			'categories'    => array( 'kiyono' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Big heading with subtitle followed by a separator with black background.', 'Block pattern description', 'kiyono' ),
      'content'       =>  '<!-- wp:group {"align":"full","backgroundColor":"black"} --><div class="wp-block-group alignfull has-black-background-color has-background"><!-- wp:heading {"style":{"typography":{"fontSize":"90px"}},"textColor":"white","className":"has-text-align-center"} --><h2 class="has-text-align-center has-white-color has-text-color" style="font-size:90px">'. esc_html__('About', 'kiyono') .'</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center","textColor":"white"} --><p class="has-text-align-center has-white-color has-text-color">' . esc_html__( 'How did I get here?', 'kiyono' ) . '</p><!-- /wp:paragraph --><!-- wp:separator {"color":"white"} --><hr class="wp-block-separator has-text-color has-background has-white-background-color has-white-color"/><!-- /wp:separator --></div><!-- /wp:group -->'
		)
	);

	// Image and text side by side in a full width column with beige background color.
	register_block_pattern(
		'kiyono/image-text-side-by-side-beige',
		array(
			'title'         => esc_html__( 'Image and text side by side in full width column with beige background', 'kiyono' ),
			'categories'    => array( 'kiyono' ),
			'viewportWidth' => 1440,
			'description'   => esc_html__( 'Two columns block with beige background color.', 'kiyono' ),
			'content'       => '<!-- wp:group {"align":"full","style":{"color":{"background":"#faf9f4"}}} --><div class="wp-block-group alignfull has-background" style="background-color:#faf9f4"><div class="wp-block-group__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"full","className":"block-column-outer-wrapper"} --><div class="wp-block-columns alignfull are-vertically-aligned-center block-column-outer-wrapper"><!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:columns {"align":"wide","className":"block-column-inner-wrapper"} -->
			<div class="wp-block-columns alignwide block-column-inner-wrapper"><!-- wp:column {"width":""} --><div class="wp-block-column"><!-- wp:image {"id":1992,"linkDestination":"none","className":"size-large"} --><figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/leaf.jpg" alt="' . esc_attr__( 'Maranta Porteana', 'kiyono' ) . '" class="wp-image-1992"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","width":""} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","dropCap":true,"textColor":"black"} --><p class="has-drop-cap has-text-align-left has-black-color has-text-color">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida id, odio.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:column --></div><!-- /wp:columns --></div></div><!-- /wp:group -->'
		)
	);

	// Image and text side by side in a full width column with black background color.
	register_block_pattern(
		'kiyono/image-text-side-by-side-black',
		array(
			'title'         => esc_html__( 'Image and text side by side in full width column with black background', 'kiyono' ),
			'categories'    => array( 'kiyono' ),
			'viewportWidth' => 1440,
			'description'   => esc_html__( 'Two columns block with black background color.', 'kiyono' ),
			'content'       => '
			<!-- wp:group {"align":"full","backgroundColor":"black"} --><div class="wp-block-group alignfull has-black-background-color has-background"><!-- wp:columns {"verticalAlignment":"center","align":"full","className":"block-column-outer-wrapper"} --><div class="wp-block-columns alignfull are-vertically-aligned-center block-column-outer-wrapper"><!-- wp:column {"verticalAlignment":"center","width":"75%"} --><div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:columns {"align":"wide","className":"block-column-inner-wrapper"} --><div class="wp-block-columns alignwide block-column-inner-wrapper"><!-- wp:column {"width":""} --><div class="wp-block-column"><!-- wp:image {"id":1992,"linkDestination":"none","className":"size-large"} --><figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/leaf.jpg" alt="' . esc_attr__( 'Maranta Porteana', 'kiyono' ) . '" class="wp-image-1992"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","width":""} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","dropCap":true,"textColor":"white"} --><p class="has-drop-cap has-text-align-left has-white-color has-text-color">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida id, odio.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->'
			)
	);

	// Big header on top in black background. Image and text side by side combination.
	register_block_pattern(
		'kiyono/big-heading-and-image-text-two-columns',
		array(
			'title'         => esc_html__( 'Big heading in black background. Image and text side by side', 'kiyono' ),
			'categories'    => array( 'kiyono' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'Big heading in black background. Image and text side by side', 'Block pattern description', 'kiyono' ),
      'content'       =>  '
			<!-- wp:group {"align":"full"} -->
			<div class="wp-block-group alignfull"><!-- wp:columns {"align":"full","backgroundColor":"black"} -->
			<div class="wp-block-columns alignfull has-black-background-color has-background"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"80px"}},"textColor":"white","className":"is-adjusted-height-h2"} --><h2 class="has-text-align-center is-adjusted-height-h2 has-white-color has-text-color" style="font-size:80px">' . esc_html__( 'ABOUT' , 'kiyono') . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center","textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color">' . esc_html__( 'How did I get here?', 'kiyono') . '</p><!-- /wp:paragraph --><!-- wp:separator {"color":"white","align":"center"} -->
			<hr class="wp-block-separator aligncenter has-text-color has-background has-white-background-color has-white-color"/><!-- /wp:separator --></div><!-- /wp:column --></div><!-- /wp:columns -->

			<!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":1992,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/leaf.jpg" alt="' . esc_attr__( 'Maranta Porteana', 'kiyono' ) . '" size-full"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","dropCap":true} --><p class="has-drop-cap has-text-align-left">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida id, odio. Maecenas suscipit, risus et eleifend imperdiet, nisi orci ullamcorper massa, et adipiscing orci velit quis magna.', 'kiyono' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns -->
			
			<!-- wp:paragraph --><p>' . esc_html__( 'Cras volutpat, lacus quis semper pharetra, nisi enim dignissim est, et sollicitudin quam ipsum vel mi. Sed commodo urna ac urna. Nullam eu tortor. Curabitur sodales scelerisque magna. Donec ultricies tristique pede. Nullam libero. Nam sollicitudin felis vel metus. Nullam posuere molestie metus. Nullam molestie, nunc id suscipit rhoncus, felis mi vulputate lacus, a ultrices tortor dolor eget augue. Aenean ultricies felis ut turpis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse placerat tellus ac nulla. Proin adipiscing sem ac risus. Maecenas nisi. Cras semper.?', 'kiyono' ) . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . esc_html__( 'Praesent interdum mollis neque. In egestas nulla eget pede. Integer eu purus sed diam dictum scelerisque. Morbi cursus velit et felis. Maecenas faucibus aliquet erat. In aliquet rhoncus tellus. Integer auctor nibh a nunc fringilla tempus. Cras turpis urna, dignissim vel, suscipit pulvinar, rutrum quis, sem. Ut lobortis convallis dui. Sed nonummy orci a justo. Morbi nec diam eget eros eleifend tincidunt.', 'kiyono' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:group -->'
		)
	);

}