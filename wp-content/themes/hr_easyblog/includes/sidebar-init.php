<?php

// Register Widgets
function hr_widgets_init() {

	// Bottom Widget Area
	register_sidebar( array (
		'name' => __( 'Right Sidebar - Homepage', 'hiresponsive' ),
		'id' => 'right-sidebar-homepage',
		'description' => __( 'Right sidebar widgets on homepage', 'hiresponsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		

	// Slider home
	register_sidebar( array (
	'name' => __( 'Sidebar Left - Homepage', 'hiresponsive' ),
	'id' => 'sidebar-left',
	'description' => __( 'Sidebar Left - Homepage', 'hiresponsive' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	

	// Content Widget Area
	register_sidebar( array (
		'name' => __( 'Left Sidebar - Single/Page', 'hiresponsive' ),
		'id' => 'left-sidebar-single-page',
		'description' => __( 'Left sidebar widgets on single posts and pages', 'hiresponsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Middle Right Widget Area
	register_sidebar( array (
		'name' => __( 'Right Sidebar - Single/Page', 'hiresponsive' ),
		'id' => 'right-sidebar-single-page',
		'description' => __( 'Right sidebar widgets on single posts and pages', 'hiresponsive' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'init', 'hr_widgets_init' );

?>