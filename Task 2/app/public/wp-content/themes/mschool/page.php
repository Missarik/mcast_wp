<?php get_header();?>

<!--  used for specific pages -->

<div class="container">
    <div class="row">
        <div class="col-12">

        <?php if (have_posts()):
            while (have_posts()):
              the_post(); // The : are used instead of the curly brackets 
              
              the_content();
              
                endwhile;
            endif;
              ?>
   
        </div>
        <!-- <div class="col-4">
            <h4>Featured Articles</h4>
        </div> -->
    </div>
</div>




<?php get_footer();?>