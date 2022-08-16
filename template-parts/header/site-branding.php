<?php
	$blog_info    	= 	get_bloginfo( 'name' );
	$description  	= 	get_bloginfo( 'description', 'display' );
	$big_site_name 	= 	get_theme_mod( 'big_site_name', true );
	$show_title   	= 	( true === get_theme_mod( 'display_title_and_tagline', true ) );
	$header_class 	= 	$show_title ? 'site-title' : 'visuallyhidden';
?>

<div class="site-branding">

<?php if ( has_custom_logo() ): ?>
	<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>

<?php if ( $description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>

	<?php	if ( is_front_page() && is_home() ) : ?>

		<div class="site-title-and-description">
			<h1 class="site-title <?php if ( true === $big_site_name ) { ?>big-title<?php } ?> ">
				<a id="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>

	<?php else : ?>

		<div class="site-title-and-description">
			<div class="site-title <?php if ( true === $big_site_name ) { ?>big-title<?php } ?> ">
				<a id="site-name"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
		

	<?php endif; ?>
			
				<p class="site-description">
					<?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</p>

		</div><!-- .site-title-and-description -->

	<?php else : ?>

		<div class="site-title <?php echo esc_attr( $header_class ); ?> <?php if ( true === $big_site_name ) { ?>big-title<?php } ?>">
			<a id="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

		</div>
		
<?php endif; ?>

</div><!-- .site-branding -->