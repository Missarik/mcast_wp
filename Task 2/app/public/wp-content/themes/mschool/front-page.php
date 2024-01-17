<?php get_header();

$carousel1 = get_theme_mod('custom_image_1'); 
$carousel2 = get_theme_mod('custom_image_2');
$carousel3 = get_theme_mod('custom_image_3');

?>
<div id="carousel-mv">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active carouselHome">
      <img src="<?php echo $carousel1; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carouselHome">
      <img src="<?php echo $carousel2; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carouselHome">
      <img src="<?php echo $carousel3; ?>" class="d-block w-100" alt="...">
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
</div>
<!-- 

<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-50" src="<?php echo $carousel1; ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="<?php echo $carousel2;?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="<?php echo $carousel2;?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> -->

<!--  used for 'show single page as home page' -->
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