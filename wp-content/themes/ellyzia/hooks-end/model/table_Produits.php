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
            'posts_per_page' => -1
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

// récupération de la ref d'un produit
function ell_get_reference_byProduct_id ($id) {
    if ($id) {
        return get_field('field_60800fb5fa483', $id);
    } else {
        return false;
    }
}

function ell_set_reference_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_60800fb5fa483', $value, $id);
    } else {
        return;
    }
}

// récupération de la ref d'un produit
function ell_get_matiere_byProduct_id ($id) {
    if ($id) {
        return get_field('field_60801062fa484', $id);
    } else {
        return false;
    }
}

function ell_set_matiere_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_60801062fa484', $value, $id);
    } else {
        return;
    }
}
// récupération de la pierre d'un produit
function ell_get_pierre_byProduct_id ($id) {
    if ($id) {
        return get_field('field_608010d4fa485', $id);
    } else {
        return false;
    }
}

function ell_set_pierre_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608010d4fa485', $value, $id);
    } else {
        return;
    }
}
// récupération de la taille d'un produit
function ell_get_taille_byProduct_id ($id) {
    if ($id) {
        return get_field('field_6080120076fbd', $id);
    } else {
        return false;
    }
}

function ell_set_taille_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_6080120076fbd', $value, $id);
    } else {
        return;
    }
}