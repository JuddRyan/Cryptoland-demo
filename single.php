<?php get_header(); ?>

<div>
    <?php get_template_part('components/hero', 'hero', [
        'description' => get_the_excerpt()
    ]) ?>

    <?
        get_template_part( 'components/thumbnail', 'hero-image', [
            'size' => 'hero-image'
        ] )
        
    ?>

    <?
        the_post_thumbnail();
    ?>

    <? the_title() ?>
    <? the_content() ?>
    <? the_excerpt() ?>
    <? the_permalink() ?>
    <? the_category() ?>
    <? the_tags() ?>
    <? the_ID() ?>
    <? get_permalink( get_the_ID() ) ?>

</div>

<?php get_footer(); ?>