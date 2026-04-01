/*
Theme Name: Morin Metro Theme
Author: Omorinsola Olumoh
Version: 1.0
Description: A custom function file WordPress theme.
*/

<?php
function morin_wp_enqueue_style(){
  //Parent theme style
  wp_enqueue_style('parent_style', get_directory_uri(), 'morin_wp_enqueue_style' /styles.css);

  //Child theme style
  wp_enqueue_style( 'child_style', get_stylesheet_uri(), array('parent_style')
                   }
add_filter ('wp_enqueue_scripts', 'morin_wp_enqueue_style')

function child_excerpt_length($length){
  return 20 // returns 20 words
    }
add_filter('excerpt_length', 'child_excerpt_lenght')
                   
