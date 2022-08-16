<?php

  if ( post_password_required() ) {
    return;
  }

  $kiyono_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area
  <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>
">

	<?php if ( have_comments() ) : ; ?>

    <p class="big bold single-post-date"><?php kiyono_comment_numbers(); ?></p>

      <ol class="comment-list">
        <?php
        wp_list_comments(
          array(
            'avatar_size' => 60,
            'style'       => 'ol',
            'short_ping'  => true,
            'per_page'    => 3,
          )
        );
        ?>
      </ol>

      <?php
      the_comments_pagination(
        array(
          'before_page_number' => esc_html__( 'Page', 'kiyono' ) . ' ',
          'mid_size'           => 0,
          'prev_text'          => sprintf(
            '%s <span class="nav-prev-text">%s</span>',
            is_rtl() ? kiyono_get_icon_svg( 'ui', 'arrow_right' ) : kiyono_get_icon_svg( 'ui', 'arrow_left' ),
            esc_html__( 'Older comments', 'kiyono' )
          ),
          'next_text'          => sprintf(
            '<span class="nav-next-text">%s</span> %s',
            esc_html__( 'Newer comments', 'kiyono' ),
            is_rtl() ? kiyono_get_icon_svg( 'ui', 'arrow_left' ) : kiyono_get_icon_svg( 'ui', 'arrow_right' )
          ),
        )
      );
      ?>

      <?php if ( ! comments_open() ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kiyono' ); ?></p>
      <?php endif; ?>

	<?php endif; ?>

    <?php
    comment_form(
      array(
        'logged_in_as'       => null,
        'title_reply'        => esc_html__( 'Leave a comment', 'kiyono' ),
        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h2>',
      )
    );
    ?>

</div>
