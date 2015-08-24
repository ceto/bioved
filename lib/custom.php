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
    'supports' => array( 'title', 'thumbnail', 'page-attributes', 'editor')
  ); 
  register_post_type( 'product', $args );
}
add_action( 'init', 'bv_create_product' );



/************ MetaBoxes **********/

add_filter( 'cmb2_meta_boxes', 'bv_metaboxes' );
function bv_metaboxes( array $meta_boxes ) {
    /**
     * Apartment Metaboxes
    */
  $prefix = '_meta_';
  $meta_boxes['download'] = array(
    'id'         => 'meta',
    'title'      => 'Kiegészítő',
    'object_types'  => array( 'page'), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-download.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array (
            array (
                'id' => 'dls',
                'type' => 'group',
                'description' => 'Letölthető anyagok',
                'options'     => array (
                    'group_title'   => 'File {#}', 
                    'add_button'    => 'Új file',
                    'remove_button' => 'Fájl törlése',
                    'sortable'      => true, // beta
                ),
                'fields'     => array(
                    array (
                        'name' => 'Megnevezés',
                        'id'   => 'name',
                        'type' => 'text_medium',
                    ),
                    array (
                        'name' => 'File',
                        'id'   => 'file',
                        'type' => 'file',
                    ),
            ) // end of fields
        )
    ) 
  );
    $meta_boxes['home'] = array(
        'id'         => 'homemeta',
        'title'      => 'Slide Show',
        'object_types'  => array( 'page'),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields'     => array (
                array (
                    'id' => 'slides',
                    'type' => 'group',
                    'description' => 'Slide show',
                    'options'     => array (
                        'group_title'   => 'Slide {#}', 
                        'add_button'    => 'Új Slide',
                        'remove_button' => 'Slide törlése',
                        'sortable'      => true, // beta
                    ),
                    'fields'     => array(
                        array (
                            'name' => 'Cím',
                            'id'   => 'title',
                            'type' => 'text_medium',
                        ),
                        array (
                            'name' => 'Bekezdés',
                            'id'   => 'paragpraph',
                            'type' => 'text_medium',
                        ),
                        array (
                            'name' => 'Tovább link',
                            'id'   => 'link',
                            'type' => 'text_url',
                        ),

                        array (
                            'name' => 'Kép',
                            'id'   => 'photo',
                            'type' => 'file',
                        ),
                ) // end of fields
            )
        ) 
    );

    $meta_boxes['page'] = array(
    'id'         => 'meta',
    'title'      => 'Kiegészítő',
    'object_types'  => array('product'), // Post type
    //'show_on'      => array( 'key' => 'page-template', 'value' => 'template-download.php' ),
    'context'    => 'side',
    'priority'   => 'low',
    'show_names' => true, // Show field names on the left
    'fields'     => array (
        array (
            'name' => 'Alcím',
            'id'   => 'subtitle',
            'type' => 'text_medium',
        ),

      )
    );


    $meta_boxes['pproduct'] = array(
    'id'         => 'pmeta',
    'title'      => 'Termék részletek',
    'object_types'  => array('product'), // Post type
    //'show_on'      => array( 'key' => 'page-template', 'value' => 'template-download.php' ),
    'context'    => 'side',
    'priority'   => 'low',
    'show_names' => true, // Show field names on the left
    'fields'     => array (
        array (
            'name' => 'Oldalsáv illusztráció',
            'id'   => 'sideill',
            'type' => 'file',
        ),

      )
    );

  return $meta_boxes;
}



function bv_getSize($file){
    $bytes = filesize($file);
    $s = array('b', 'Kb', 'Mb', 'Gb');
    $e = floor(log($bytes)/log(1024));
    return sprintf('%.1f '.$s[$e], ($bytes/pow(1024, floor($e))));
}