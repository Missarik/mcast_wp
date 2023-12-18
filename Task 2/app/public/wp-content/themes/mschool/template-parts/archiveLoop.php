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