<?php
/*
Template Name: Page de Contact Personnalisée
*/

get_header();
?>
    <div class="post content">
        <h3 class="text-white post-title text-center text-[90px] font-black  uppercase">
            <?php the_title(); ?>
        </h3>
        <div>
            <p class="text-center">
                Vous souhaitez nous contacter ?
            </p>
            <p class="text-center">
                Veuillez remplir le formulaire ci-dessous :
            </p>
        </div>
        <div class="flex items-center justify-center h-screen mt-10">
            <div class="w-full max-w-md text-white">
                <?php echo do_shortcode('[contact-form-7 id="ae25338" title="Contact"]'); ?>
            </div>
        </div>
    </div>

<?php
get_footer();
?>

<style>
    /* Styliser le conteneur du formulaire */
.wpcf7 {
    background: #000; /* Fond noir */
    padding: 20px;
    border-radius: 8px;
    border: 3px dashed #db2777; /* Bordure pointillée violette */
}

/* Styliser les champs de texte */
.wpcf7-form-control.wpcf7-text,
.wpcf7-form-control.wpcf7-email,
.wpcf7-form-control.wpcf7-textarea {
    margin-bottom: 10px;
    background: transparent;
    border: none;
    border-bottom: 2px solid #fff; /* Bordure inférieure blanche */
    color: #fff; /* Texte blanc */
    padding: 10px;
}

/* Styliser la zone de texte */
.wpcf7-form-control.wpcf7-textarea {
    min-height: 150px; /* Hauteur minimale pour la zone de texte */
}

/* Styliser le bouton d'envoi */
.wpcf7-form-control.wpcf7-submit {
    background-color: #db2777; /* Fond violet */
    color: #fff; /* Texte blanc */
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
}

/* Styliser le bouton d'envoi au survol */
.wpcf7-form-control.wpcf7-submit:hover {
    background-color: #bb1b5e; /* Une teinte plus foncée pour le survol */
}

.wpcf7-submit {
    display: block; /* Rend le bouton en tant que block pour permettre le centrage */
    margin: 0 auto; /* Centrage horizontal automatique */
}



</style>