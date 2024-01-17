<?php get_header();?>



<!--  used for specific pages -->
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


<div class="container-fluid" style="<?php echo $background; ?><?php echo $text_color; ?>">
    <div class="row">
        <div class="col-12">
<div>
        <?php if (have_posts()):
            while (have_posts()):
              the_post(); // The : are used instead of the curly brackets 
            
            the_content();
            
                endwhile;
            endif;
            ?>

        </div>
        </div>
        <!-- <div class="col-4">
            <h4>Featured Articles</h4>
        </div> -->
    </div>
</div>




<?php get_footer();?>