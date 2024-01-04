<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
<div class="container">
    <div class="row">
      
        <div class="col-9">
        
        <a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo" src="<?php echo get_theme_mod('diwp_logo'); ?>" /></a>



        </div>
        <div class="col-3">
          
          <form class="d-flex" role="search">
            <?php get_search_form(true); ?>
        </form></div>
    </div>
</div>  
</header>


<div id="theme_header">
<nav class="navbar navbar-expand-lg container-fluid">
<div class="container">
    <div class="row w-100">
      <div class="col-10">
      
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
      <div class="col-2">
        
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



