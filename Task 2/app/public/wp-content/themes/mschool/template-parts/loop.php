


    <div class="col-8">
    <h1><?php echo $args['section_title']; ?></h1>
        <?php if (have_posts()):
        while (have_posts()):
          the_post() // The : are used instead of the curly brackets ?>
        
          <div class="card" style="width: 40rem;">
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php the_date() ?> by <?php the_author_posts_link() ?></h6>
              <p class="card-text"><?php the_excerpt();?></p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <br>

        <!-- <h2>
            <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a>

        </h2>

        <small>
            <?php the_date() ?> by <?php the_author_posts_link() ?>
        </small>

        <p>
          <?php //the_content();// 
          the_excerpt();?>
        </p> -->

        <?php endwhile;
                the_posts_pagination(array(
                'mid_size' => 1,
                'prev_text' => "Older",
                'next_text' => "Newer"
              )); //shows the pagination | mid_size controls how many other paginations are shown on both sides
        ?>

    <? else:
        echo "<p>Sorry, no posts found.</p>";
        endif;
    ?>
    </div>
