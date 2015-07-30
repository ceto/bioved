<?php
define('ICL_DONT_LOAD_NAVIGATION_CSS', TRUE);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', TRUE);
define('ICL_DONT_LOAD_LANGUAGES_JS', TRUE);


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

if ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
  require_once dirname( __FILE__ ) . '/CMB2/init.php';
}


/**
 * Product Definition
*/
function bv_create_product() {
  $labels = array(
    'name' => 'Termékek',
    'singular_name' => 'Termék',
    'add_new' => 'Új hozzáadása ',
    'add_new_item' => 'Új termék felvétele',
    'edit_item' => 'Termék szerkesztése',
    'new_item' => 'Új termék',
    'all_items' => 'Összes termék',
    'view_item' => 'Termék megtekintése',
    'search_items' => 'Keresés a termékekben',
    'not_found' =>  'Nincs illen termék',
    'not_found_in_trash' => 'No Terméks found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Termékek'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'termek' ),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => null,
    //'supports' => array( 'title', 'thumbnail', 'page-attributes', 'editor')
  ); 
  register_post_type( 'product', $args );
}
add_action( 'init', 'bv_create_product' );

