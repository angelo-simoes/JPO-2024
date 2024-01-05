<?php get_header(); ?>

<h1 class="post-title text-center text-[90px] font-black uppercase">
    Créations étudiantes
</h1>

<!-- wp:paragraph {"align":"center","className":"dotted-border-rounded margin-element"} -->
<p class="has-text-align-center dotted-border-rounded margin-element">A l’occasion de SAÉ, de projets collectifs ou bien même personnels, nos étudiants ont mis leur créativité au défi ! Retrouvez ici les projets les plus ambitieux créés par quelques étudiants de MMI. </p>
<!-- /wp:paragraph -->

<div class="player-cards">
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

<style>
/* Ajustements pour la taille des cartes */
.player-cards {
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
    background: rgba(0, 212, 255, 0.9);
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
    .player-cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (max-width: 900px) {
    .player-cards {
        grid-template-columns: 1fr;
    }
}

</style>
