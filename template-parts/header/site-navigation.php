<div class="menu-button-container">
  <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
  <span class='visuallyhidden'><?php echo esc_html__( 'Navigation button', 'kiyono');  ?></span>
    <div class="navbar-toggle" title="Menu">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
  </button>
</div>

<?php
  wp_nav_menu(  array(
      'theme_location'  => 'primary',
      'container_class' => 'primary-menu-container',
      'menu_id'         => 'primary-menu',
      'menu_class'      => 'menu-wrapper',
      'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
      'fallback_cb'     => false,
  ) );
?>

</nav><!-- #site-navigation -->
