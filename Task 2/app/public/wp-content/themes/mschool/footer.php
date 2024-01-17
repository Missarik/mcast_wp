

<?php

$footer_text = get_theme_mod("custom_theme_footer_text", "ffffff");
$footer_bg = get_theme_mod('custom_footer_bg');
$footer_class = "bg-" . $footer_bg;

?>



<div class="container-fluid footer <?php echo $footer_class.' '.$footer_text;?>">
  <div class="row footerRow">
    <?php

    $footer_layout = get_theme_mod('custom_footer_widget_count','2');
    $sidebars_active = false;


    for($i=0;$i<$footer_layout;$i++){
      if(is_active_sidebar('footer-sidebar-'.($i+1))){
        $sidebars_active = true;
      }
    }
    
    if($sidebars_active):
      for($i=0;$i<$footer_layout;$i++):

          echo "<div class='col'>";
            if(is_active_sidebar('footer-sidebar-'.($i+1))){
              dynamic_sidebar('footer-sidebar-'.($i+1));
            }
          echo "</div>";

        endfor;
      endif;

  ?>
  </div>
