<?php get_header() ?>

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

<div class="container" style="<?php echo $background; ?><?php echo $text_color; ?>">

<div class="row">
    <?php

    $args = array('section_title' => 'Archive');
    get_template_part("template-parts/loop", null, $args);

    ?>
    <div class="col-4">
    <h4>More from this author</h4>

    <?php

    $args = array('section_title' => 'Archive');
    get_template_part("template-parts/archiveLoop", null, $args);

    get_sidebar('second');
    ?>
    </div>
</div>
</div>

<?php get_footer(); ?>