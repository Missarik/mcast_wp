<?php get_header()?>

<h1>Index</h1>

<h1>King Ye</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://i.redd.it/ay6wn03qkp591.jpg" class="d-block w-100" alt="Ye">
    </div>
    <div class="carousel-item">
        <img src="https://helios-i.mashable.com/imagery/articles/00TsMVMZGiOG1tOMrujVFYB/hero-image.fill.size_1248x702.v1611608150.jpg" class="d-block w-100" alt="Saint Pablo">
    </div>
    <div class="carousel-item">
        <img src="https://www.rollingstone.com/wp-content/uploads/2018/06/r1270_fob_tour_a-cb9375a8-738a-41ca-8cac-510dd19e1405.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <div class="row">
        <div class="col-8">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>



                <?php the_content()?>



            <?php 
        endwhile;
        endif; ?>
        </div>
        <div class="col-4"></div>
    </div>
</div>




<?php get_footer()?>