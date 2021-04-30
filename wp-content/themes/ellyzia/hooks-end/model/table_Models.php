<?php
if ( !defined('ABSPATH')) exit;

// Récupère la liste des models
function ell_get_models_by_collection($id) {
    $model_query = new WP_Query(
        array (
            'post_type' => array (
                'model'
            ),
            'meta_query' => array (
                array (
                    'key' => 'collection',
                    'value' => $id,
                    'compare' => 'LIKE',
                )
            ),
            'posts_per_page' => -1
        )
    );

    /* Restore original Post Data */
    wp_reset_postdata();

    if (isset($model_query->posts)) {
        return $model_query->posts;
    } else {
        return;
    }
}

function ell_get_titre_model_id ($id) {
    if ($id) {
        return get_field('field_608c52c9e0770', $id);
    } else {
        return false;
    }
}

function ell_set_titre_model_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608c52c9e0770', $value, $id);
    } else {
        return;
    }
}

function ell_get_image_model_id ($id) {
    if ($id) {
        return get_field('field_608c52d1e0771', $id);
    } else {
        return false;
    }
}

function ell_set_image_model_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608c52d1e0771', $value, $id);
    } else {
        return;
    }
}
