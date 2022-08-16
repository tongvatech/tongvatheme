<?php 
  $remove_featured_img  = ( false === get_theme_mod( 'remove_featured_img_on_single', false )) ;
  $remove_animation     = ( false === get_theme_mod( 'remove_animation', false ) );
  
?>

<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php

      if( have_posts() ){
        while( have_posts()) {
          the_post();

          global $post;
          $author_ID    =   $post->post_author;
          $author_URL   =   get_author_posts_url($author_ID);
        ?>
    
      <!-- Show feature image if available -->
      <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

        <?php	if ( $remove_featured_img ) : ?>
          <div class="container featured-image-wrapper">
            <div class="image entry-featured-image 

              <?php	
                if ( $remove_animation ) : 
                  echo "fadeUp";
                elseif ( ! $remove_animation )  : 
                  echo "no-animation";
                endif;  
              ?>
                    
            ">
              <?php the_post_thumbnail(); ?>
            </div>

            <!-- Show feature image caption only if available -->
            <?php $thumb_caption = get_the_post_thumbnail_caption();

              if ($thumb_caption) {
                ?>
                <figcaption class="is-size-7"><?php echo esc_html($thumb_caption); ?></figcaption>
                <?php
              }
            ?>

          </div>
        <?php endif; ?>
      <?php endif; ?>
      
      <header class="entry-header">
        <div class="container post-header text-center">

          <h1><?php echo wp_kses_post( the_title()) ;?></h1>
          
          <div class="entry-meta small">
            <p class="single-post-date">
              <?php echo get_the_date(); ?>
              <?php kiyono_comment_numbers(); ?>
            </p>
          </div>

        </div>
      </header>

      <div class="block-container-inner has-text-centered">
        <div class="entry-content">
          <?php 
            
            the_content(); 

            // Page break
            wp_link_pages(
              array(
                'before'   => '<nav class="pagination" aria-label="' . esc_attr__( 'Page', 'kiyono' ) . '">',
                'after'    => '</nav>',
                /* translators: %: Page number. */
                'pagelink' => esc_html__( 'Page %', 'kiyono' ),
              )
            );
            
          ?>

          <div class="post-meta small">
            
            <?php 

             kiyono_posted_by();
             kiyono_category_list(); 
             kiyono_tag_list();

            ?>  
            
          </div>
        </div>
      </div>

      <div class="container">
        <div class="w-full big">
          <?php kiyono_the_post_navigation(); ?>
          </div>
      </div>

      
      <?php if( comments_open() || get_comments_number()) { ?>
          <div class="container comments-wrapper">
            <?php comments_template(); ?>
          </div>
      <?php } ?>

      <?php
      }
    }
  ?>

</main>

<?php get_footer(); ?>