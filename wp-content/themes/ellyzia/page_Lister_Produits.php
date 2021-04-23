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
?>

<?php
get_header(); ?>

    <section>

        <div class="container">

            <ul>
                <?php
                // on récupère l'ID de chaque produit
                foreach ($products as $key => $product)
                {
                    // on récupère les champs pour chaque produit
                    $product_id = $product->ID;
                    $fields = get_fields($product_id);
                    //création de l'affichage d'une liste contenant tous les produits.
                    //<a href: création d'un lien hyper texte pour une redirection vers la fiche produit ($product_id)
                    ?>
                    <li>
                        <a href="<?php echo get_permalink($product_id); ?> ">
                            <?php echo get_the_title($product_id); ?>
                        </a>
                    </li>
                    <?php

                }
                ?>
            </ul>
        </div>
    </section>

<?php
get_footer();
