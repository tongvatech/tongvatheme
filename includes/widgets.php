<?php 

function kiyono_widgets() {
  register_sidebar([
    'name'          => esc_html__( 'Footer', 'kiyono' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kiyono' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ]);
}
add_action( 'widgets_init', 'kiyono_widgets');





