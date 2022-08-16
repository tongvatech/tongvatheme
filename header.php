<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

  <?php //Check whether the header search is activated in the customizer.
  $enable_header_search = get_theme_mod( 'enable_header_search', true );
  ?>

</head>

<body <?php body_class(); ?>>

	<?php
    // Fire the wp_body_open action
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
	?>

<div id="page" class="site">

  <a class="skip-link screen-reader-text" href="#primary">
    <?php esc_html_e( 'Skip to content', 'kiyono' ); ?>
  </a>

  <?php if ( ! is_page_template( 'page-templates/blank-page.php' ) ) { ?>

      <header id="masthead" class="site-header">
          <div class="container">


          <?php get_template_part( 'template-parts/header/site-branding' ); ?>

            <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary menu', 'kiyono'); ?>">
      
              

              <?php 
                if ( has_nav_menu( 'primary' ) ) :
                    get_template_part( 'template-parts/header/site-navigation' ); 
                endif; 
              ?>

                <?php if ( true === $enable_header_search ) { ?>

                  <button id="btn" class="searchDialogBtn" type="button" value="<?php echo esc_attr_x( 'Open search', 'submit button', 'kiyono' ); ?>" aria-expanded="false" >
                      <span class="visuallyhidden"><?php esc_html_e( 'Open search', 'kiyono' ); ?></span>
                      <?php echo kiyono_get_icon_svg( 'ui', 'navsearch' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
                  </button> 

                  <div class="dialog" role="dialog">
                      <div class="dialog__window">
                        <?php get_template_part( 'searchform' ); ?>
                    </div>
                    <div class="dialog__mask"></div>
                  </div>

                <?php } ?>

            </nav>
          </div>
        </header>  

      <?php
    } else {
      ?>

      <div class="block-container-inner has-text-centered">
        <div id="primary" class="entry-content blank ">
          <?php the_content(); ?>
        </div>
      </div>

      <?php wp_footer(); ?>
      
    <?php 
    }
  ?>

  



