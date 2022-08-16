<?php 
  $show_thumbnail     = ( true === get_theme_mod( 'enable_placeholder_thumb', true ) );
  $remove_animation   = ( false === get_theme_mod( 'remove_animation', false ) );
  $hide_readmore   = ( false === get_theme_mod( 'hide_readmore', false ) );
?>

<div class="card  
  <?php	
    if ( $remove_animation ) : 
      echo "fadeUp";
    elseif ( ! $remove_animation )  : 
      echo "no-animation";
    endif;  
  ?>
">    

  <?php if( has_post_thumbnail() ) : ?> 
    <div class="entry-image">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
    </div>
    <?php endif; ?>

  <?php	if ( ! has_post_thumbnail()  && $show_thumbnail ) : ?>
    <div class="entry-image">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.jpg" alt="<?php echo esc_html( get_the_title() ); ?>">
      </a>
    </div>
  <?php endif; ?>

  <h2 class="title-excerpt">
    <a href="<?php the_permalink(); ?>">
      <?php echo wp_kses_post( get_the_title() ); ?>
    </a>
  </h2>

  <div class="card-date small">
    <a href="<?php the_permalink(); ?>">
      <?php echo get_the_date(); ?>
    </a>
  </div>



  <?php
    $kiyono_content     =   get_the_excerpt();
    $kiyono_dots        =   esc_html__( ' ... ', 'kiyono' ); 
    $kiyono_moreread    =   esc_html__( 'Read more', 'kiyono' ); 
    $kiyono_hiddentitle =   get_the_title(); 

    $kiyono_excerpt     =   mb_substr( $kiyono_content, 0, 50 ) . "$kiyono_dots<a href=". get_permalink() ." class=\"readmore small \"  > $kiyono_moreread <span class=\"visuallyhidden\"> $kiyono_hiddentitle </span></a>";

    $kiyono_excerpt_noreadmore    =   mb_substr( $kiyono_content, 0, 50 );

    if ( $hide_readmore ) : 
      echo wp_kses_post($kiyono_excerpt);
    elseif ( ! $hide_readmore )  : 
      echo wp_kses_post($kiyono_excerpt_noreadmore);
    endif;     
  
  ?>
</div>