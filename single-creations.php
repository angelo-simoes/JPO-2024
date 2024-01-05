<?php
get_header();
?>

<style>
    /* Styles pour la page single-creation.php */
    .post-title {
        text-align: left;
        font-size: 32px;
        font-weight: 900;
        text-transform: uppercase;
        margin-top: 0;
    }

    .container {
        max-width: 90%;
        margin: 0 auto;
        padding: 8px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    .div-img {
        width: 100%;
        max-width: 50%;
    }

    .info-crea {
        margin-left: 24px;
        width: 100%;
        max-width: 50%;
    }

    
    img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 16px;
        object-fit: contain;
    }

    .content {
        text-align: left;
    }

    .text-lg {
        font-size: 1.125rem;
        margin-bottom: 1rem;
    }

    .lien {
        color: #7188FF;
    }

    .nom {
        color: #FF71B8;
        font-weight: 700;
    }


</style>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>

        <div class="container">
            <div class="div-img">
                <?php if (get_field('image')) : ?>
                    <a href="<?php echo esc_url(get_field('image')); ?>" data-lightbox="image-set" class="lightbox-trigger">
                        <img src="<?php echo esc_url(get_field('image')); ?>" alt="<?php the_title(); ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="info-crea">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <p class="text-lg nom">par <?php echo esc_html(get_field('nom_etudiant')); ?></p>
                Pour en voir plus <a href="<?php echo esc_url(get_field('lien')); ?>">
                    <p class="text-lg lien"><?php echo esc_html(get_field('lien')); ?>
                </a>
                <p class="text-lg"><strong>Description : </strong> <?php echo esc_html(get_field('description')); ?></p>
            </div>
        </div>

    <?php
    endwhile;
endif;
?>

<?php
get_footer();
?>
