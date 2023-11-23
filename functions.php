<?php
function load_tailwindcss() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/style.css', false);
}
add_action('wp_enqueue_scripts', 'load_tailwindcss');

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

    // Ajout du support pour les menus
    register_nav_menus( 
      array(
        'main' => 'Menu Principal',
        'footer' => 'Menu Footer'
      )
    );
  }
  add_action( 'after_setup_theme', 'thememonsite_setup' );

  function thememonsite_script() {
    // Ajout du fichier style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Ajout du fichier main.js
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'thememonsite_script' );

?>

