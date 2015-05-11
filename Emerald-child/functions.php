<?php
// ==================================================================
// Remove parent theme stylesheet
// ==================================================================
function remove_parent_stylesheet() { 
  wp_deregister_style( 'stylesheet' );
}
add_action('wp_print_styles', 'remove_parent_stylesheet');
?>