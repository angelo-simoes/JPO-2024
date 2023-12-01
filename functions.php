<?php
function load_tailwindcss() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/style.css', false);
}
add_action('wp_enqueue_scripts', 'load_tailwindcss');

add_theme_support( 'post-thumbnails' );

function add_google_fonts() {
  wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false ); 
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );



function register_my_menu(){
  register_nav_menus( array(
      'header-menu' => __( 'Menu Principal'),
  ) );
}
add_action( 'init', 'register_my_menu', 0 );

function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_class_to_menu_links($atts, $item, $args) {
  // Ajouter les classes 'underline', 'text-white' et la classe pour Montserrat
  $atts['class'] = 'underline text-white font-montserrat font-black text-[15px]';
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_to_menu_links', 10, 3);



?>



