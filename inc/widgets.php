<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function cafinitywp_widgets_init() {

  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );

  register_sidebar( array(
		'name'          => esc_html__( 'Footer-1', 'cafinitywp' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'cafinitywp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-2', 'cafinitywp' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'cafinitywp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-3', 'cafinitywp' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'cafinitywp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Footer-4', 'cafinitywp' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'cafinitywp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


}
add_action( 'widgets_init', 'cafinitywp_widgets_init' );
            