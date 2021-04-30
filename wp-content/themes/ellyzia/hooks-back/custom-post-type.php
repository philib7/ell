<?php
if ( !defined('ABSPATH')) exit;

/**
 * Register a produit post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'produit_init' );
function produit_init() {
    $labels = array (
        'name'               => _x( 'produits', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'produit', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'produits', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'produit', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un produit', 'produit', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter nouvel produit', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvel produit', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editer un produit', 'your-plugin-textdomain' ),
        'view_item'          => __( "Voir l'produit", 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tout les produits', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher produits', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent produits :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucun produit trouvé.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucun produit dans la corbeille.', 'your-plugin-textdomain' )
    );

    $args = array (
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'produit' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 70,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
        'supports'           => array( 'title')
    );

    register_post_type( 'produit', $args );
}

add_action( 'init', 'collection_init' );
function collection_init() {
    $labels = array (
        'name'               => _x( 'collections', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'collection', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'collections', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'collection', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un collection', 'collection', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter nouvel collection', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvel collection', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editer un collection', 'your-plugin-textdomain' ),
        'view_item'          => __( "Voir l'collection", 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tout les collections', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher collections', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent collections :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucun collection trouvé.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucun collection dans la corbeille.', 'your-plugin-textdomain' )
    );

    $args = array (
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'collection' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 70,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
        'supports'           => array( 'title')
    );

    register_post_type( 'collection', $args );
}

add_action( 'init', 'model_init' );
function model_init() {
    $labels = array (
        'name'               => _x( 'models', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'model', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'models', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'model', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un model', 'model', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter nouvel model', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvel model', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editer un model', 'your-plugin-textdomain' ),
        'view_item'          => __( "Voir l'model", 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tout les models', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher models', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent models :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucun model trouvé.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucun model dans la corbeille.', 'your-plugin-textdomain' )
    );

    $args = array (
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'model' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => 70,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
        'supports'           => array( 'title')
    );

    register_post_type( 'model', $args );
}