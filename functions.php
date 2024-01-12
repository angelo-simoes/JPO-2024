<?php
  function thememonsite_setup() {
    // Ajout du support pour les images mises en avant
    add_theme_support( 'post-thumbnails' );
    // Ajout du support pour le titre du site
    add_theme_support( 'title-tag' );
    // Ajout du support pour rendre le code valide en HTML 5
    add_theme_support( 
      'html5', 
      array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption',
        'style',
        'script'
      )
    );
  }
    add_action( 'after_setup_theme', 'thememonsite_setup' );

function add_google_fonts() {
  wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false ); 
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );



function register_my_menu(){
  register_nav_menus( array(
      'header-menu' => __( 'Menu Principal'),
      'connexion' => __( 'connexion'),
  ) );
}
add_action( 'init', 'register_my_menu', 0 );

function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  // Ajouter une classe 'current-menu-item' aux éléments actifs
  if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
      $classes[] = 'underline ';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);

function add_class_to_menu_links($atts, $item, $args) {
  // Ajouter les classes 'text-white' et la classe pour Montserrat
  $atts['class'] = 'text-white font-montserrat font-black text-[15px]  hover:underline hover:text-pink-500';
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_to_menu_links', 10, 3);

function add_class_to_connexion_links($atts, $item, $args) {
  if ($args->theme_location == 'connexion') {
      // Ajouter des classes pour un contour plus épais et des coins arrondis
      $atts['class'] = 'text-white rounded-full border-4 font-black text-[12px] border-white px-6 py-2';
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_to_connexion_links', 10, 3);

function my_custom_styles() {
  wp_enqueue_style('my-base-styles', get_template_directory_uri() . '/base.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'my_custom_styles');

function load_jquery() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery');

function enqueue_lightbox_script() {
  wp_enqueue_script('lightbox-script', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js', array('jquery'), '2.11.3', true);
  wp_enqueue_style('lightbox-style', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css', array(), '2.11.3');
}
add_action('wp_enqueue_scripts', 'enqueue_lightbox_script');

function custom_acf_prepare_field($field) {
  // Remplace le label du champ "Title" par "Titre"
  if ($field['label'] == 'Title') {
      $field['label'] = 'Nom de la création';
  }

  return $field;
}
add_filter('acf/prepare_field', 'custom_acf_prepare_field');
?>

