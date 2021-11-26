<?php get_header(); ?>

<div>
    <?php get_template_part('components/hero', 'hero', [
        'description' => get_the_excerpt()
    ]) ?>
</div>

<?php get_footer(); ?>