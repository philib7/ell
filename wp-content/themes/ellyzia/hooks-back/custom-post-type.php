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

add_action( 'init', 'clients_init' );
function clients_init() {
    $labels = array (
        'name'               => _x( 'clients', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'client', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'clients', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'client', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un client', 'client', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter nouvel client', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvel client', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editer un client', 'your-plugin-textdomain' ),
        'view_item'          => __( "Voir client", 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tout les clients', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher clients', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent clients :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucun client trouvé.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucun client dans la corbeille.', 'your-plugin-textdomain' )
    );

    $args = array (
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'client' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 70,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
        'supports'           => array( 'title')
    );

    register_post_type( 'client', $args );
}

add_action( 'init', 'commandes_init' );
function commandes_init() {
    $labels = array (
        'name'               => _x( 'commandes', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'commande', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'commandes', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'commande', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un commande', 'commande', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter nouvel commande', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvel commande', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editer un commande', 'your-plugin-textdomain' ),
        'view_item'          => __( "Voir commande", 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tout les commandes', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher commandes', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent commandes :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucun commande trouvé.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucun commande dans la corbeille.', 'your-plugin-textdomain' )
    );

    $args = array (
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'commande' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 70,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
        'supports'           => array( 'title')
    );

    register_post_type( 'commande', $args );
}

add_action( 'init', 'cmdproduits_init' );
function cmdproduits_init() {
    $labels = array (
        'name'               => _x( 'cmdproduits', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'cmdproduit', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'cmdproduits', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'cmdproduit', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un cmdproduit', 'cmdproduit', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter nouvel cmdproduit', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvel cmdproduit', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editer un cmdproduit', 'your-plugin-textdomain' ),
        'view_item'          => __( "Voir cmdproduit", 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tout les cmdproduits', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher cmdproduits', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent cmdproduits :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucun cmdproduit trouvé.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucun cmdproduit dans la corbeille.', 'your-plugin-textdomain' )
    );

    $args = array (
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cmdproduit' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 70,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
        'supports'           => array( 'title')
    );

    register_post_type( 'cmdproduit', $args );
}

add_action( 'init', 'paniers_init' );
function paniers_init() {
    $labels = array (
        'name'               => _x( 'paniers', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'panier', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'paniers', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'panier', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un panier', 'panier', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter nouvel panier', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvel panier', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editer un panier', 'your-plugin-textdomain' ),
        'view_item'          => __( "Voir panier", 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tout les paniers', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher paniers', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent paniers :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucun panier trouvé.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucun panier dans la corbeille.', 'your-plugin-textdomain' )
    );

    $args = array (
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'panier' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 70,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
        'supports'           => array( 'title')
    );

    register_post_type( 'panier', $args );
}

add_action( 'init', 'panierprods_init' );
function panierprods_init() {
    $labels = array (
        'name'               => _x( 'panierprods', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'panierprod', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'panierprods', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'panierprod', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un panierprod', 'panierprod', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter nouvel panierprod', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvel panierprod', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editer un panierprod', 'your-plugin-textdomain' ),
        'view_item'          => __( "Voir panierprod", 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tout les panierprods', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher panierprods', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent panierprods :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucun panierprod trouvé.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucun panierprod dans la corbeille.', 'your-plugin-textdomain' )
    );

    $args = array (
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'panierprod' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 70,
        'menu_icon'          => 'dashicons-admin-users', // https://developer.wordpress.org/resource/dashicons/#thumbs-down
        'supports'           => array( 'title')
    );

    register_post_type( 'panierprod', $args );
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