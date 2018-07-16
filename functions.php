<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */



add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_styles() { // добавление стилей
	    if(is_admin()) return false; // если мы в админке - ничего не делаем
			wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.css' ); // основные стили шаблона
			wp_enqueue_style( 'daughter', get_stylesheet_directory_uri().'/daughter.min.css' ); // основные стили шаблона
			$font_args = array(
				'family' => 'Roboto:700,500italic,500,400,400italic,300,300italic|Roboto+Condensed:400,300,300italic,400italic,700,700italic',
				'subset' => 'latin,cyrillic'
			);
			wp_enqueue_style( 'google_fonts', add_query_arg( $font_args, "//fonts.googleapis.com/css" ), array(), null );
	}
}


?>
