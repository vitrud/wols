<?php
function easy_preprocess_page(&$vars) {
  if (isset($vars['main_menu'])) {
    $vars['primary_nav'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('main-menu')
                )
        ));
  }
  else {
    $vars['primary_nav'] = FALSE;
  }
}
?>