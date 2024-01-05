<div class="loop content">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="mx-56">
        <h1 class="post-title text-center text-[90px] font-black uppercase ">
            <?php the_title(); ?>
        </h1>
        <div>
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
