<?php
/* implements hook_preprocess_html() */
function lavender_preprocess_html() {
  libraries_load('vue');       /* load vue lib use library api */
  drupal_add_js(drupal_get_path('theme', 'lavender'). '/js/test.js'); /* use drupal_add_js load js file*/
}
?>
