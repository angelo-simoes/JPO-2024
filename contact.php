<?php
/*
Template Name: Page de Contact Personnalisée
*/

get_header();
?>

<div class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md text-white">
        <?php echo do_shortcode('[contact-form-7 id="ae25338" title="Contact"]'); ?>
    </div>
</div>

<?php
get_footer();
?>
