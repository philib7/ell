<?php
if ( !defined('ABSPATH')) exit;

function edit_product() {
	if (isset($_POST['save_edit_product'])) {
		// On récupère le champs rentré par l'admin en POST
		$titre = $_POST['title-product'];
		$id = get_the_id();

		// editer le champs en base
		$my_post = array(
			'ID'           => $id,
			'post_title'   => $titre,
		);

	  	// Update the post into the database
		wp_update_post( $my_post );
	}

}

function add_product() {
	if (isset($_POST['save_add_product'])) {
		$title = $_POST['title-product'];
		$type = $_POST['type-product'];

		// Insert du nouveau produit
		// TODO Déplacer le code dans le modal et créer une function
		// Create post object
		$product = array(
			'post_title'    => wp_strip_all_tags( $title ),
			'post_content'  => '',
			'post_status'   => 'publish',
			'post_author'   => 1,
			'post_type'		=> 'produit',
			'post_category' => null
		);

		// Insert the post into the database
		$id_product = wp_insert_post( $product );

		// Avec l'id editer les champs du produit
		ell_set_type_byProduct_id($id_product, $type);
	}
}