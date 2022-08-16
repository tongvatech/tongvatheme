<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

  <div class="container small gotoTop">
      <a href="#page">
        <span class="visuallyhidden"><?php esc_html_e( 'Go to top', 'kiyono' ); ?></span>
        <?php echo kiyono_get_icon_svg( 'ui', 'arrow_up' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
      </a>
  </div>

  <footer id="footer" class="container small">

    <div class="site-footer">
      <div>
          <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kiyono' ) ); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Proudly powered by %s', 'kiyono' ), 'WordPress' );
            ?>
          </a>
        </div>

        <div>
          <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( '%1$s theme made by %2$s', 'kiyono' ), 'Kiyono', 
            '<a href=" ' . esc_url( 'https://www.benachi.com/kiyono-wordpress-theme/' ) . ' ">' . esc_html( 'Benachi', 'kiyono')  . '</a>' );
          ?>

        </div>
    </div>
  </footer>

</div><!-- #page .site -->
<?php wp_footer(); ?>

</body>
</html>