<?php
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
 }
 add_action('wp_enqueue_scripts', 'add_normalize_CSS');

 // Incluir Hoja de Estilos de Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
  					array(), 
  					'4.3.1'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Incluir el archivo JS de Bootstrap 
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
  					array('jquery'), 
  					'4.3.1', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');

// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );
?>