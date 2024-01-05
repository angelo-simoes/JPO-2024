<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body class="bg-black font-montserrat text-white">
    <div class="wrap">
      <header class="flex items-center justify-center p-4 mx-10"> <!-- mx-10 pour la marge horizontale de l'en-tête -->
        <div class="logo-container">
          <a href="<?php echo home_url(); ?>">
            <img class="img-fluid mt-2" src="<?php bloginfo('template_url'); ?>/img/logo_blanc.png" alt="Logo" style="max-width: 80px;">
          </a>
        </div>
        <nav class="grow montserrat">
          <?php 
            wp_nav_menu( array(
              'theme_location' => 'header-menu',
              'container' => false,
              'menu_class' => 'flex justify-center space-x-6', // Modifié pour centrer les éléments du menu
              'add_li_class' => 'menu-item',
            ) );
          ?>
        </nav>
        <nav class="montserrat">
          <?php 
            wp_nav_menu( array(
              'theme_location' => 'connexion', // Utilisez l'emplacement 'connexion'
              'container' => false,
              'menu_class' => 'flex space-x-6',
              'add_li_class' => 'menu-item-connexion', // Nouvelle classe pour les items
            ) );
          ?>
        </nav>
      </header>
