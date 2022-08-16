<?php get_header(); ?>

<main id="primary" class="site-main" >
  
    <?php 
    
      if ( have_posts() ) :

        ?>
        <div class="container">
          <?php 
            if ( is_home() && ! is_front_page() ) :
              echo esc_html( kiyono_frontpage_title());

            elseif ( is_archive() )  : 
              echo esc_html( kiyono_archive_title());

            elseif ( is_search() )  : 
              echo esc_html( kiyono_search_title());
            
            endif;
          ?>
        </div>
        <?php

        if ( is_home() && is_front_page() || is_archive() || is_search() ) : 
      
          kiyono_grid_wrapper_start();
    
        endif;

          /* Start the Loop */
          while ( have_posts() ) :
            the_post();
              
            if ( is_home() || is_archive() || is_search() ) :

                get_template_part( 'template-parts/content', 'excerpt');

            elseif ( is_page()  || is_front_page()) :

              get_template_part( 'template-parts/content', 'page');

            endif;

          endwhile;

        if ( is_home() && is_front_page() || is_archive() || is_search() ) : 

          kiyono_grid_wrapper_end();
          
        endif; 
      
    ?>
          <div class="w-full">
            <?php kiyono_the_posts_navigation(); ?>
          </div>

    <?php
    
    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;

    ?>
    

</main>

<?php get_footer(); ?>