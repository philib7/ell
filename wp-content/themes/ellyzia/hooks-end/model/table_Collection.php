<?php
if ( !defined('ABSPATH')) exit;
//inventaire des collection en base
//récuperation de la liste des collection
function ell_get_collections() {
    $agent_query = new WP_Query(
        array (
            'post_type' => array (
                'collection'
            ),
            'meta_query' => array (
                array (
                    'key' => 'is_header',
                    'value' => 'true',
                    'compare' => '!=',
                )
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

function ell_get_collection_is_header() {
    $agent_query = new WP_Query(
        array (
            'post_type' => array (
                'collection'
            ),
            'meta_query' => array (
                array (
                    'key' => 'is_header',
                    'value' => 'true',
                    'compare' => '==',
                )
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

// récupération du image d'un collection
function ell_get_image_bycollection_id ($id) {
    if ($id) {
        return get_field('field_608ab9d647118', $id);
    } else {
        return false;
    }
}

function ell_set_image_bycollection_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608ab9d647118', $value, $id);
    } else {
        return;
    }
}

// récupération du image d'un collection
function ell_get_image_page_bycollection_id ($id) {
    if ($id) {
        return get_field('field_608ad44bb7ceb', $id);
    } else {
        return false;
    }
}

function ell_set_image_page_bycollection_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608ad44bb7ceb', $value, $id);
    } else {
        return;
    }
}