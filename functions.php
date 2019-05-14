<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'geotop_styles' );
add_action( 'wp_enqueue_scripts', 'geotop_footer_scripts' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );
add_action( 'wp_enqueue_scripts', 'init_cart_script');

function geotop_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
}

function jquery_lib() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script('jquery');
}

function geotop_footer_scripts() {
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), null, true);
	wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
	wp_enqueue_script('nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-zoom', get_template_directory_uri() . '/assets/js/jquery.zoom.min.js', array('jquery'), null, true);
	wp_enqueue_script('notify', get_template_directory_uri() . '/assets/js/notify.min.js', array('jquery'), null, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

function init_cart_script() {
	if (is_page( $page = 'cart' )) {
		wp_enqueue_script('cart', get_template_directory_uri() . '/assets/js/cart.js' , array('jquery'), null, false);
	}
}

add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails', array( 'post', 'page' ));

add_image_size( 'product-preview', $width = 264, $height = 336, $crop = false );
add_image_size('news-preview', $width = 322, $height = 161, $crop = true);
add_image_size( 'stock-preview', $width = 558, $height = 232, $crop = true );
add_image_size( 'service-preview', $width = 322, $height = 322, $crop = true );
add_image_size( 'slider-preview', $width = 1250, $height = 470, $crop = true );

function subcats_page_template( $template ) {
	if( ! is_category() ) return $template;
	$current_cat = get_queried_object();
	if( $current_cat->parent ){
		if ( $new_template = locate_template( array( 'sub-cat-tmpl.php' )))
			$template =  $new_template ;
	}
	return $template;
}

function custom_excerpt_length( $length ) {
	return 10;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter( 'template_include', 'subcats_page_template', 99 );

remove_filter( ‘the_content’, ‘wpautop’ ); // Отключаем автоформатирование в полном посте
remove_filter( ‘the_excerpt’, ‘wpautop’ ); // Отключаем автоформатирование в кратком(анонсе) посте
remove_filter(‘comment_text’, ‘wpautop’); // Отключаем автоформатирование в комментариях