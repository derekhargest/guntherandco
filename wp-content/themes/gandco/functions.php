<?php


	update_option('siteurl','localhost:8888/gandco');
	update_option('home','localhost:8888/gandco');

	function gandco_scripts() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/theme.js', array ( 'jquery' ), 1.12, true);

	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Main Navigation' ));
		register_nav_menu('mobile-menu',__( 'Mobile Navigation' ));
	}

	add_action( 'init', 'register_my_menu' );

	 function tcf_widgets_init() {

		 register_sidebar( array(
		 	'name'          => 'Private Dining Gallery',
		 	'id'            => 'gallery_private_dining',
		 	'before_widget' => '<div class="page-gallery">',
		 	'after_widget'  => '</div>',
		 	'before_title'  => '<h2>',
		 	'after_title'   => '</h2>',
	 	) );

		register_sidebar( array(
		 'name'          => 'Photos Gallery',
		 'id'            => 'gallery_photos',
		 'before_widget' => '<div class="page-gallery">',
		 'after_widget'  => '</div>',
		 'before_title'  => '<h2>',
		 'after_title'   => '</h2>',
	 ) );



 	}
	add_action( 'widgets_init', 'tcf_widgets_init' );

	add_theme_support( 'post-thumbnails' );

	wp_deregister_script('jquery');

	wp_register_script('jquery', '', '', '', true);
?>
