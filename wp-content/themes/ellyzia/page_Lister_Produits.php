<?php
if ( !defined('ABSPATH')) exit;
/*
 * Template Name: page_Lister_Produits.php
 */

$user_info = is_user_logged_in();


if (!$user_info)
{
    wp_redirect( get_home_url());
    exit;
}


ell_get_products();

$products = ell_get_products();

// on récupère l'ID de chaque produit
foreach ($products as $key => $product)
{
    $product_id = $product->ID;
    $product_Type = ell_get_type_byProduct_id($product_id);
    $fields = get_fields($product_id);
    var_dump($fields);
}

get_header(); ?>

<section>
    <div>
        <?php echo "test"; ?>
    </div>
</section>

<?php
get_footer();
