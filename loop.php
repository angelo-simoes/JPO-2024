<div class="loop content">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post content">
        <h3 class="post-title text-center text-[90px] font-black uppercase">
            <a href="<?php the_permalink(); ?>" class="text-white"><?php the_title(); ?></a>
        </h3>
        <div class="mx-[200px]">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <p class="nothing">
        Il n'y a pas de Post à afficher !
    </p>
    <?php endif; ?>
    </div>
