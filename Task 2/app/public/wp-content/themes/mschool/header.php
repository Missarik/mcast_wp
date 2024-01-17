<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

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

<body <?php body_class(); ?> style="<?php echo $background; ?><?php echo $text_color; ?>">

<header>



<div class="container-fluid">
    <div class="row">
      
        <div class="col-9">
        
        <a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo" src="<?php echo get_theme_mod('diwp_logo'); ?>" /></a>



        </div>
        <div class="col-3 searchBar">
          
          <form class="d-flex" role="search">
            <?php get_search_form(true); ?>
        </form></div>
    </div>
</div>  
</header>


<div id="theme_header">
<nav class="navbar navbar-expand-lg container-fluid">
<div class="container">
<button class="navbar-toggler navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="row w-100">
      <div class="col-lg-9 col-sm-12">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar navbar-nav me-auto mb-2 mb-lg-0 main-menu-div w-100">
          <?php
    wp_nav_menu(
      array(
        'theme_location' => 'main-menu',
      )
    );
    ?>
    </div>
    
  </div>
      </div>
      <div class="col-lg-3">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar navbar-nav me-auto mb-2 mb-lg-0 main-menu-div w-100">
      <?php
    wp_nav_menu(
      array(
        'theme_location' => 'right-menu',
      )
    );
    ?>
      </div>
    </div>
  </div>
  </div>
  </div>  
</nav>
  </div>



