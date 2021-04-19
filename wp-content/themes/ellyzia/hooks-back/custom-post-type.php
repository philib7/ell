<?php
if ( !defined('ABSPATH')) exit;

/**
 * Register a Service post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
// add_action( 'init', 'Service_init' );
// function Service_init() {
//     $labels = array (
//         'name'               => _x( 'Services', 'post type general name', 'your-plugin-textdomain' ),
//         'singular_name'      => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ),
//         'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
//         'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'your-plugin-textdomain' ),
//         'add_new'            => _x( 'Ajouter un Service', 'Service', 'your-plugin-textdomain' ),
//         'add_new_item'       => __( 'Ajouter nouvel Service', 'your-plugin-textdomain' ),
//         'new_item'           => __( 'Nouvel Service', 'your-plugin-textdomain' ),
//         'edit_item'          => __( 'Editer un Service', 'your-plugin-textdomain' ),
//         'view_item'          => __( "Voir l'Service", 'your-plugin-textdomain' ),
//         'all_items'          => __( 'Tout les Services', 'your-plugin-textdomain' ),
//         'search_items'       => __( 'Rechercher Services', 'your-plugin-textdomain' ),
//         'parent_item_colon'  => __( 'Parent Services :', 'your-plugin-textdomain' ),
//         'not_found'          => __( 'Aucun Service trouvé.', 'your-plugin-textdomain' ),
//         'not_found_in_trash' => __( 'Aucun Service dans la corbeille.', 'your-plugin-textdomain' )
//     );

//     $args = array (
//         'labels'             => $labels,
//         'description'        => __( 'Description.', 'your-plugin-textdomain' ),
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'service' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'hierarchical'       => false,
//         'menu_position'      => 70,
//         'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
//         'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
//     );

//     register_post_type( 'Service', $args );
// }
