<?php
/**
 * Back compat functionality
 *
 * Prevents the theme from running on WordPress versions prior to 5.3,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 5.3.
 */

/* Display upgrade notice on theme switch.
--------------------------------------------- */
function kiyono_switch_theme() {
	add_action( 'admin_notices', 'kiyono_upgrade_notice' );
}
add_action( 'after_switch_theme', 'kiyono_switch_theme' );



/* Adds a message for unsuccessful theme switch.
--------------------------------------------- */
function kiyono_upgrade_notice() {
	echo '<div class="error"><p>';
	printf(
		/* translators: %s: WordPress Version. */
		esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'kiyono' ),
		esc_html( $GLOBALS['wp_version'] )
	);
	echo '</p></div>';
}

/* Prevents the Customizer from being loaded on WordPress versions prior to 5.3.
--------------------------------------------- */
function kiyono_customize() {
	wp_die(
		sprintf(
			/* translators: %s: WordPress Version. */
			esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'kiyono' ),
			esc_html( $GLOBALS['wp_version'] )
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'kiyono_customize' );


/* Prevents the Theme Preview from being loaded on WordPress versions prior to 5.3.
--------------------------------------------- */
function kiyono_preview() {
	if ( isset( $_GET['preview'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification
		wp_die(
			sprintf(
				/* translators: %s: WordPress Version. */
				esc_html__( 'This theme requires WordPress 5.3 or newer. You are running version %s. Please upgrade.', 'kiyono' ),
				esc_html( $GLOBALS['wp_version'] )
			)
		);
	}
}
add_action( 'template_redirect', 'kiyono_preview' );
