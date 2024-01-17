<?php $dark_mode = get_theme_mod('custom_dark_mode_setting');

    $background = '';
    $text_color = '';

    if ($dark_mode == 'light') {
        $background = 'background-color: #ffffff;';
        $text_color = 'color: #000000;';

    } else {
        $background = 'background-color: #242526;';
        $text_color = 'color: #ffffff;';
    };
    ?>

<h1>
    <?php the_author_meta('first_name');?> <?php the_author_meta('last_name');?>
</h1>

<h2>
<?php the_author(); ?>
</h2>

<p>
    <?php the_author_meta('description') ?>
</p>

<small>
            <?php the_author_posts() ?> posts by <?php the_author_meta('nickname') ?>
</small>