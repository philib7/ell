<?php
if ( !defined('ABSPATH')) exit;
//inventaire des produits en base
//récuperation de la liste des produits
function ell_get_products() {
    $agent_query = new WP_Query(
        array (
            'post_type' => array (
                'produit'
            ),
        )
    );

    /* Restore original Post Data */
    wp_reset_postdata();

    if (isset($agent_query->posts)) {
        return $agent_query->posts;
    } else {
        return;
    }
}

// récupération du type d'un produit
function ell_get_type_byProduct_id ($id) {
    if ($id) {
        return get_field('field_60800db83a168', $id);
    } else {
        return false;
    }
}

function ell_set_type_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_60800db83a168', $value, $id);
    } else {
        return;
    }
}