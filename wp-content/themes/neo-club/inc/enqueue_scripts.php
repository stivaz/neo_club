<?php

/* правильный способ подключить стили и скрипты */
function scf_theme_scripts() {

	// Подключаем стили
	wp_enqueue_style( 'fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' );
	wp_enqueue_style( 'font-style', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap' );
	wp_enqueue_style( 'swiper-style', THEME_CSS . 'swiper.min.css' );
	wp_enqueue_style( 'magnific-style', THEME_CSS . 'magnific-popup.min.css' );
	wp_enqueue_style( 'main-style', THEME_CSS . 'main.css' );
	wp_enqueue_style( 'wp-style', get_stylesheet_uri() );

	// Подключаем скрипты
	wp_enqueue_script( 'swiper-scr', THEME_JS . 'swiper.min.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'magnific-scr', THEME_JS . 'magnific-popup.min.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'readmore-scr', THEME_JS . 'readmore.min.js', array( 'jquery' ), '1.0.0' );
	//wp_enqueue_script( 'favorites-scr', THEME_JS . 'favorites.js', array( 'jquery' ), '1.0.0' );
	//wp_localize_script( 'favorites-scr', 'scf_ajaxurl', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	wp_enqueue_script( 'main-scr', THEME_JS . 'main.js', array( 'jquery' ), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'scf_theme_scripts' );

