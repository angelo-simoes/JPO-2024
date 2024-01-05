<footer>
<div class="pg-footer">
    <footer class="footer">
      <div class="footer-content">
        <div class="footer-content-column">
          <div class="footer-logo">
            <a href="<?php echo home_url(); ?>">
              <img class="img-fluid mt-2" src="<?php bloginfo('template_url'); ?>/img/logo_blanc.png" alt="Logo" style="max-width: 80px;">
            </a>
          </div>
          <div class="footer-menu">
            <h2 class="footer-menu-name">CONTACT</h2>
            <ul id="menu-get-started" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="<?php echo home_url('/formulaire'); ?>">Formulaire</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="tel:0381994734">03 81 99 47 34</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="mailto:but-mmi-montbeliard@univ-fcomte.fr">but-mmi-montbeliard@univ-fcomte.fr</a>
              </li>
            </ul>
          </div>

          <div class="footer-menu">
            <h2 class="footer-menu-name">ADRESSE</h2>
            <div id="menu-get-started" class="footer-menu-list">
              <address class="menu-item menu-item-type-post_type menu-item-object-product">
                Département MMI Montbéliard
                <br>
                4 Place Tharradin, 25200 Montbéliard
              </address>
            </div>
          </div>
        </div>

        <div class="footer-content-column">
          <div class="footer-menu">
            <a href="<?php echo home_url('/mentions-legales'); ?>">
              <h2 class="footer-menu-name">Mentions légales</h2>
            </a>
          </div>
          
          <div class="footer-menu">
            <h2 style="margin-bottom: 8px;" class="footer-menu-name">Nous suivre</h2>
            <ul style="display: flex; gap: 16px;">
                <li>
                    <a href="https://www.tiktok.com/@mmi_montbeliard" aria-label="tiktok">
                        <img src="<?php bloginfo('template_url'); ?>/img/svg/tiktok.svg" alt="TikTok Logo">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/mmimontbeliard/?locale=fr_FR" aria-label="facebook">
                        <img src="<?php bloginfo('template_url'); ?>/img/svg/facebook.svg" alt="Facebook Logo">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/mmi_montbeliard/" aria-label="instagram">
                        <img src="<?php bloginfo('template_url'); ?>/img/svg/instagram.svg" alt="Instagram Logo">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCgW7jR8McJwjxPh0fDQaXGg/videos" aria-label="youtube">
                        <img src="<?php bloginfo('template_url'); ?>/img/svg/youtube.svg" alt="YouTube Logo">
                    </a>
                </li>
            </ul>
        </div>

        </div>

        <div class="footer-content-column">
          <div class="">
              <img class="img-fluid mt-2" src="<?php bloginfo('template_url'); ?>/img/logo_iut.png" alt="Logo IUT" style="max-width:80%;">
          </div>
        </div>

      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-wrapper">
          <p class="footer-copyright-text">
            <a class="footer-copyright-link" href="#" target="_self"> ©2024. | Créer dans le cadre d'un projet pédagogique au BUT MMi Montbéliard. </a>
          </p>
        </div>
      </div>
    </footer>
  </div>
   <?php wp_footer(); ?>
 </body>
</html>


  <style>
    * {
  margin: 0;
  padding: 0;
}
a {
  color: #fff;
  text-decoration: none;
}

.footer {
    background-color: #2C2C2C;
    color: #fff;
}
.footer-wave-svg {
    background-color: transparent;
    display: block;
    height: 30px;
    position: relative;
    top: -1px;
    width: 100%;
}
.footer-wave-path {
    fill: #fffff2;
}

.footer-content {
    margin-left: auto;
    margin-right: auto;
    max-width: 1230px;
    padding: 40px 15px 450px;
    position: relative;
}

.footer-content-column {
    box-sizing: border-box;
    float: left;
    padding-left: 15px;
    padding-right: 15px;
    width: 100%;
    color: #fff;
  }

.footer-content-column ul li a {
  color: #fff;
  text-decoration: none;
}

.footer-logo-link {
    display: inline-block;
}
.footer-menu {
    margin-top: 30px;
}

.footer-menu-name {
    color: #FF71B8;
    font-size: 15px;
    font-weight: 900;
    letter-spacing: .1em;
    line-height: 18px;
    margin-bottom: 0;
    margin-top: 0;
    text-transform: uppercase;
}
.footer-menu-list {
    list-style: none;
    margin-bottom: 0;
    margin-top: 10px;
    padding-left: 0;
}
.footer-menu-list li {
    margin-top: 5px;
}

.footer-call-to-action-description {
    color: #fffff2;
    margin-top: 10px;
    margin-bottom: 20px;
}
.footer-call-to-action-button:hover {
    background-color: #fffff2;
    color: #00bef0;
}
.button:last-of-type {
    margin-right: 0;
}

.footer-copyright {
    background-color: #000000;
    color: #fff;
    padding: 15px 30px;
  text-align: center;
}

.footer-copyright-wrapper {
    margin-left: auto;
    margin-right: auto;
    max-width: 1200px;
}

.footer-copyright-text {
  color: #fff;
    font-size: 13px;
    font-weight: 400;
    line-height: 18px;
    margin-bottom: 0;
    margin-top: 0;
}

.footer-copyright-link {
    color: #fff;
    text-decoration: none;
}







/* Media Query For different screens */
@media (min-width:320px) and (max-width:479px)  { /* smartphones, portrait iPhone, portrait 480x320 phones (Android) */
  .footer-content {
    margin-left: auto;
    margin-right: auto;
    max-width: 1230px;
    padding: 40px 15px 1050px;
    position: relative;
  }
}
@media (min-width:480px) and (max-width:599px)  { /* smartphones, Android phones, landscape iPhone */
  .footer-content {
    margin-left: auto;
    margin-right: auto;
    max-width: 1230px;
    padding: 40px 15px 1050px;
    position: relative;
  }
}
@media (min-width:600px) and (max-width: 800px)  { /* portrait tablets, portrait iPad, e-readers (Nook/Kindle), landscape 800x480 phones (Android) */
  .footer-content {
    margin-left: auto;
    margin-right: auto;
    max-width: 1230px;
    padding: 40px 15px 1050px;
    position: relative;
  }
}
@media (min-width:801px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */

}
@media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */

}
@media (min-width:1281px) { /* hi-res laptops and desktops */

}




@media (min-width: 760px) {
  .footer-content {
      margin-left: auto;
      margin-right: auto;
      max-width: 1230px;
      padding: 40px 15px 450px;
      position: relative;
  }

  .footer-wave-svg {
      height: 50px;
  }

  .footer-content-column {
      width: 24.99%;
  }
}
@media (min-width: 568px) {
  /* .footer-content-column {
      width: 49.99%;
  } */
}

  </style>