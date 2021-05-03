<?php
if ( !defined('ABSPATH')) exit;
//inventaire des produits en base
//récuperation de la liste des produits
function ell_get_produits_magical($nbr_per_page = null, $offset = null, $customQuery = null, $pagination = null) {
    // $model
    $array_final = array (
        'post_type' => array (
            'produit'
        ),
        //'paged'         => $paged,
        'offset'         => $offset,
        'posts_per_page' => $nbr_per_page
    );

    if ($customQuery) {
        $array_final['meta_query'][0] = $customQuery;
    }

    $product_query = new WP_Query(
        $array_final
    );

    // if ($pagination) {
    //     $total_pages = $product_query->max_num_pages;

    //     if ($total_pages > 1) {

    //         $current_page = $product_query->query_vars['paged'];
    //         $parse_url = parse_url(get_pagenum_link());

    //         if ($parse_url['query'] || $parse_url['fragment']) {
    //             $parse_url = parse_url(get_pagenum_link());
    //             $parse_url = $parse_url['host'] . $parse_url['path'] . '%_%?' . $parse_url['query'] . $parse_url['fragment'];
    //             $parse_url = str_replace('&#038;', "&", $parse_url);
    //             $parse_url = str_replace('&038;', "&", $parse_url);
    //         } else {
    //             $parse_url = get_pagenum_link() . '%_%';
    //         }

    //         echo '<div class="w-100-p d-flex justify-content-center mt-32 align-items-center">';
    //             echo paginate_links(array(
    //                 'base' => $parse_url,
    //                 'format' => 'page/%#%/',
    //                 'current' => $current_page,
    //                 'total' => $total_pages,
    //                 'prev_text'    => __('<span class="icon icon-interface-arrow-left"></span>'),
    //                 'next_text'    => __('<span class="icon icon-interface-arrow-right"></span>'),
    //             ));
    //         echo '</div>';
    //     }
    // }

    /* Restore original Post Data */
    wp_reset_postdata();

    if (isset($product_query->posts)) {
        return $product_query->posts;
    } else {
        return;
    }
}

function ell_get_products($nbr_per_page = null, $offset = null) {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    if (!isset($nbr_per_page)) {
        $nbr_per_page = '-1';
    }

    $product_query = new WP_Query(
        array (
            'post_type' => array (
                'produit'
            ),
            'paged'         => $paged,
            'offset'         => $offset,
            'posts_per_page' => $nbr_per_page
        )
    );

    /* Restore original Post Data */
    wp_reset_postdata();

    if (isset($product_query->posts)) {
        return $product_query->posts;
    } else {
        return;
    }
}

function ell_get_products_by_collection($id) {
    $product_query = new WP_Query(
        array (
            'post_type' => array (
                'produit'
            ),
            'meta_query' => array (
                array (
                    'key' => 'collection',
                    'value' => $id,
                    'compare' => 'like',
                )
            ),
            'posts_per_page' => -1
        )
    );

    /* Restore original Post Data */
    wp_reset_postdata();

    if (isset($product_query->posts)) {
        return $product_query->posts;
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

function ell_get_name_byProduct_id ($id) {
    if ($id) {
        return get_field('field_608c3e66577e6', $id);
    } else {
        return false;
    }
}

function ell_set_name_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608c3e66577e6', $value, $id);
    } else {
        return;
    }
}

// récupération du type d'un produit
function ell_get_image_ban_byProduct_id ($id) {
    if ($id) {
        return get_field('field_608c7e55e765d', $id);
    } else {
        return false;
    }
}

function ell_set_image_ban_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608c7e55e765d', $value, $id);
    } else {
        return;
    }
}

function ell_get_gallerie_byProduct_id ($id) {
    if ($id) {
        return get_field('field_608c3bab22e28', $id);
    } else {
        return false;
    }
}

function ell_set_gallerie_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608c3bab22e28', $value, $id);
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
// envoie de la taille
function ell_set_taille_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_6080120076fbd', $value, $id);
    } else {
        return;
    }
}

// envoie de description
function ell_set_description_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_6080127676fbe', $value, $id);
    } else {
        return;
    }
}
// envoie de stock
function ell_set_stock_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_608013dce52aa', $value, $id);
    } else {
        return;
    }
}
// envoie de prixht
function ell_set_prixht_byProduct_id ($id, $value) {
    if ($id && $value) {
        return update_field('field_60801375e52a7', $value, $id);
    } else {
        return;
    }
}