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
	    // on recuperre les données envoyées par le client depuis la vue :page_liste_produit
		$title = $_POST['title-product'];
		$type = $_POST['type-product'];
		$reference = $_POST['reference-product'];
		$matiere = $_POST['matiere-product'];
        $pierre = $_POST['pierre-product'];
        $taille = $_POST['taille-product'];
        $description = $_POST['description-product'];
        $stock = $_POST['stock-product'];
        $prixht = $_POST['prixht-product'];
        $image = $_FILES['image-product'];
var_dump($image);
die();
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

		//ajout image
        $upload_id = wp_insert_attachment( array(
            'guid'           => $new_file_path,
            'post_mime_type' => $new_file_mime,
            'post_title'     => preg_replace( '/\.[^.]+$/', '', $profilepicture['name'] ),
            'post_content'   => '',
            'post_status'    => 'inherit'
        ), $new_file_path );

		// Avec l'id editer les champs du produit
		ell_set_type_byProduct_id($id_product, $type);
		ell_set_reference_byProduct_id($id_product, $reference);
		ell_set_matiere_byProduct_id($id_product, $matiere);
        ell_set_pierre_byProduct_id($id_product, $pierre);
        ell_set_taille_byProduct_id($id_product, $taille);
        ell_set_description_byProduct_id($id_product, $description);
        ell_set_stock_byProduct_id($id_product, $stock);
        ell_set_prixht_byProduct_id($id_product, $prixht);
	}
}