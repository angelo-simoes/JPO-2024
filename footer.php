<!DOCTYPE html>
<html>
<body>
  <head <?php language_attributes(); ?>>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  </head>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h2>Contact</h2>
            <p>03 98 45 87 90</p>
            <p>but-mmi-montbeliard@univ-fcomte.fr</p>
        </div>
        <div class="footer-section">
            <h2><?php afficher_element_menu_specifique('footer', 70); ?></h2>
            
            
        </div>
        <div class="footer-section">
            <h2><?php afficher_element_menu_specifique('footer', 71); ?></h2>
            

        </div>
        <div class="footer-section">
            <h2>Adresse</h2>
            <p>Département MMI Montbéliard</p>
            <p>4 Place Tharradin, 25200 Montbéliard</p>
        </div>
    </div>
    <div class="footer-container">

      <a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('template_url'); ?>/image/Logo-SL-png.svg" alt="Logo">
      </a>

      <a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('template_url'); ?>/image/univ_logo_blanc.png" alt="Logo">
      </a>

      <a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('template_url'); ?>/image/MMI_logo_blanc.png" alt="Logo">
      </a>


    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

<style>
footer {
    background-color: #000; /* Changez cette couleur en fonction de votre design */
    padding: 20px;
}

h2 a { 
    color: #C2A850; 
    text-decoration: none;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    background-color: #000; /* Changez cette couleur en fonction de votre design */
    color: #fff; /* Changez cette couleur en fonction de votre design */
    padding: 20px;
}

.footer-section h2 {
    border-bottom: 2px solid #FFF; /* Changez cette couleur en fonction de votre design */
    margin-bottom: 10px;
    color: #C2A850;
    font-family: 'Raleway', sans-serif;
}

.footer-section p {
    margin: 5px 0;
}

.footer-logo {
    text-align: center;
    margin-top: 20px;
}



</style>