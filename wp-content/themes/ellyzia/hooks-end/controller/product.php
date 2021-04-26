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