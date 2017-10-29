<?php

function ajout_scripts() {
  // enregistrement d'un nouveau script
  wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.0', true);

  // appel du script dans la page
  wp_enqueue_script('main');

  // enregistrement d'un nouveau style
  wp_register_style( 'google-font', 'https://fonts.googleapis.com/css?family=PT+Sans+Narrow' );

  // appel du style dans la page
  wp_enqueue_style( 'google-font' );

  // enregistrement d'un nouveau style
  wp_register_style( 'main_style', get_template_directory_uri() . '/css/main.css' );

  // appel du style dans la page
  wp_enqueue_style( 'main_style' );
}
add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

// Removing useless menu elements
add_action( 'admin_menu', 'my_remove_menus', 999 );
function my_remove_menus() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'themes.php' );
}
