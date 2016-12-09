<?php
/**
 * Funciones de MaterializeWP
 *
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 *
 * @package WordPress
 * @subpackage MaterializeWP
 */

/**
 * MaterializeWP únicamente funciona en WordPress >4.7
 */

if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Función inicial de MaterializeWP
 */

if(!function_exists('materializewp_setup') ):
	function materializewp_setup(){

		// WordPress maneja el título del documento
		add_theme_support('title-tag');

		// Habilitar imágenes destacadas
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1200,9999);

		// Registrar Menu
		register_nav_menus( array(
			'primary' => __('Primary Menu', 'materializewp'),
			'social' => __('Social Menu', 'materializewp'),
		) );
	}
endif;

// Enlazamos al hook 'materializewp-setup'
add_action('after_setup_theme', 'materializewp_setup');

/**
 * Función de carga de recursos
 */

function materializewp_resources(){
	wp_enqueue_style('style-css',get_template_directory_uri().'/style.css',[],'1.0');
	wp_enqueue_style('materialize-css',get_template_directory_uri().'/materialize/css/materialize.min.css',[],'1.0');
	wp_enqueue_style('materialdesignicons',get_template_directory_uri().'/materialize/css/materialdesignicons.min.css',[],'1.0');
	wp_enqueue_style('materialicons2','https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css',[],'1.0');
	wp_enqueue_style('materialize-icons','https://fonts.googleapis.com/icon?family=Material+Icons',[],'1.0');
	wp_deregister_script(‘jquery’);
	wp_enqueue_script(‘jquery’,get_template_directory_uri().'/materialize/js/jquery-3.1.0.min.js',[],'3.1.0',0);
	wp_enqueue_script('materialize-js',get_template_directory_uri().'/materialize/js/materialize.min.js',[],'1.0',1);
	wp_enqueue_script('init-js',get_template_directory_uri().'/materialize/js/init.js',[],'1.0',1);#El último determina si va al header (0) o al footer (1)	
}

add_action('wp_enqueue_scripts', 'materializewp_resources');