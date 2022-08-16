<?php

if ( function_exists( 'register_block_style' ) ) {

  function kiyono_register_block_styles() {

		// Image: Round corners
		register_block_style(
			'core/image',
			array(
				'name'  => 'kiyono-border-radius',
				'label' => esc_html__( 'Rounded Corners', 'kiyono' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kiyono-image-gradient-border',
				'label' => esc_html__( 'Frame', 'kiyono' ),
			)
		);

  }

  add_action( 'init', 'kiyono_register_block_styles' );
}