<?php get_header(); 
acf_form_head();
?>

<h1 class="post-title text-center text-[90px] font-black uppercase">
    Créations étudiantes
</h1>

<!-- wp:paragraph {"align":"center","className":"dotted-border-rounded margin-element"} -->
<p class="has-text-align-center dotted-border-rounded margin-element">A l’occasion de SAÉ, de projets collectifs ou bien même personnels, nos étudiants ont mis leur créativité au défi ! Retrouvez ici les projets les plus ambitieux créés par quelques étudiants de MMI. </p>
<!-- /wp:paragraph -->

<div>
<?php if (is_user_logged_in()) : ?>
    <div class="add-creation-message text-center">
        <p class="add-creation-message text-center">Si vous souhaitez partager une de vos créations</p>
        <button onclick="toggleQuestionnaire()" class="btn add-button">Ajouter</a>
    </div>
    <div id="formulaire" style="display: none;">
            <?php
            // Votre formulaire ACF peut être inclus ici
                acf_form(array(
                    'post_id'      => 'new_post',
                    'new_post'     => array(
                        'post_type'   => 'creations',
                        'post_status' => 'draft'
                    ),
                    'post_title'   => true,
                    'field_groups' => array('group_656a6f6007daa'), // Remplacez par l'ID de votre groupe de champs ACF
                    'fields'       => array('nom_etudiant', 'image', 'lien', 'description'), // Ajoutez les champs du formulaire ACF ici
                    'submit_value' => 'Soumettre la création'
                ));
            ?>
        </div>
<?php endif; ?>
</div>

<div class="creation-cards">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="container">
                <div class="wrapper">
                    <a href="<?php the_permalink(); ?>">
                        <?php if( get_field('image') ): ?>
                            <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" class="banner-image" />
                        <?php endif; ?>
                    </a>
                    <h3><?php the_title(); ?></h3>
                    <p>
                        par <?php the_field("nom_etudiant"); ?>   
                    </p>
                    <div class="button-wrapper"> 
                        <a href="<?php the_permalink(); ?>">
                            <button class="btn fill">Voir</button>
                        </a>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

<script>
    function toggleQuestionnaire() {
        var questionnaire = document.getElementById('formulaire');
        questionnaire.style.display = (questionnaire.style.display === 'none') ? 'block' : 'none';
    }
</script>

<style>
/* Ajustements pour la taille des cartes */
.creation-cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); /* Ajustez la largeur minimale et maximale ici */
    gap: 20px;
    justify-content: center;
    padding: 20px;
}

.container {
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(17, 25, 40, 0.25);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 38px;
    filter: drop-shadow(0 30px 10px rgba(0,0,0,0.125));
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.wrapper {
    width: 100%;
    height: 100%;
}

.banner-image {
    width: 100%;
    height: 350px; /* Ajustez la hauteur de l'image selon vos préférences */
    object-fit: cover;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255, 0.255);
}

h3, p {
    overflow: hidden;
    white-space: normal; /* Permet au texte de s'étendre sur plusieurs lignes */
    margin-bottom: 5px; /* Ajustez la marge inférieure selon vos besoins */
    text-align: left; /* Alignement du texte à gauche */
}

.button-wrapper {
    margin-top: 18px;
}

.btn {
    border: none;
    padding: 12px 24px;
    border-radius: 24px;
    font-size: 12px;
    font-size: 0.8rem;  
    letter-spacing: 2px;  
    cursor: pointer;
}

.btn + .btn {
    margin-left: 10px;
}

.fill {
    background: #ec4899;
    color: rgba(255,255,255,0.95);
    filter: drop-shadow(0);
    font-weight: bold;
    transition: all .3s ease; 
}

.fill:hover{
    transform: scale(1.125);  
    border-color: rgba(255, 255, 255, 0.9);
    filter: drop-shadow(0 10px 5px rgba(0,0,0,0.125));
    transition: all .3s ease;    
}

/* Le reste de vos styles reste inchangé */

@media screen and (max-width: 1200px) {
    .creation-cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (max-width: 900px) {
    .creation-cards {
        grid-template-columns: 1fr;
    }
}

.add-creation-message {
    margin-top: 50px;
    text-align: center !important;
}

.add-creation-message p {
    margin-bottom: 20px;
}

.add-button {
    background: none; /* Retirez le fond actuel */
    color: #ec4899; /* Couleur de texte correspondant au fond */
    border: 2px solid #ec4899; /* Ajoutez une bordure pour styliser */
    font-weight: bold;
    transition: all .3s ease; 
}

.add-button:hover {
    border-color: #ffffff;
    color: #ffffff;
    transition: all .3s ease;
}
#formulaire {
    margin-left: 30%; /* Ajoutez la marge de chaque côté du formulaire selon vos préférences */
    margin-right: 30%;
    margin-bottom: 50px;
}

.acf-form {
    display: flex;
    flex-direction: column;
}

.acf-field {
    margin-bottom: 20px; /* Ajoutez la marge entre chaque champ selon vos préférences */
}

.acf-label {
    text-align: left; /* Aligner le nom du champ à gauche */
    margin-bottom: 5px; /* Ajouter une marge sous le nom du champ */
}

.acf-input {
    width: 100%; /* Assurez-vous que les champs de saisie occupent toute la largeur disponible */
}

.acf-field textarea,
.acf-field select,
.acf-field input[type="text"],
.acf-field input[type="email"],
.acf-field input[type="url"] {
    width: calc(100% - 10px); /* Ajoutez une légère marge à gauche pour le champ de saisie */
}

#formulaire .acf-input input[type="text"],
#formulaire .acf-input input[type="email"],
#formulaire .acf-input input[type="url"],
#formulaire .acf-input textarea,
#formulaire .acf-input select {
    color: black; /* Définissez la couleur du texte selon vos préférences */
}

input[type="submit"] {
    background-color:#ec4899; 
    color: black; 
    padding: 12px 20px;
    border: none; 
    border-radius: 4px; 
    cursor: pointer; 
    display: flex;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    font-weight: bold;
}

a.acf-button.button {
    color: #ec4899;
}

input[type="submit"]:hover {
    background-color: #EF1783; 
}




</style>
