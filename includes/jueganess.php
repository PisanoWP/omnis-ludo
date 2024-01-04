<?php

add_action('oml_show_separator', 'oml_show_separator');
function oml_show_separator( $clases = null) {  ?>
  <?php 
  $class = '';
  if ( !empty( $clases ) ) {
    foreach ($clases as $key => $clase) {
      $class  .= esc_attr($clase) .' ';
    }
  } ?>

  <!-- Icon Divider -->
  <div class="divider-custom <?php echo $class; ?>">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon">
      <i class="fas fa-dice"></i>
    </div>
    <div class="divider-custom-line"></div>
  </div>

<?php 
}
