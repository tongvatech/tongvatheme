<?php

if ( 
  ! is_active_sidebar( 'sidebar-1' ) || ! is_active_sidebar( 'sidebar-2' ) || ! is_active_sidebar( 'sidebar-3' )  ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->


<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</aside><!-- #secondary -->
