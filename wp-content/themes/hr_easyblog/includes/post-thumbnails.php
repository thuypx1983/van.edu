<?php

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
	add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
	add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
	
	//featured slider image size
	//add_image_size( 'slide-thumb', 477, 315, true );
	
	//tabbed news image size
	//add_image_size( 'tabbed-thumb', 139, 80, true );
		
	//one column news image size		
	//add_image_size( 'onecol-thumb', 140, 80, true );

	//two column news image size		
	//add_image_size( 'twocol-thumb', 80, 80, true );	
	
	//archive page image size		
	//add_image_size( 'archive-thumb', 100, 100, true );	
	
};

?>