<?php
if ( !defined('ABSPATH')) exit;
/*
 * Template Name: page_Lister_Produits.php
 */

$user_info = is_user_logged_in();
$fields = get_fields(get_the_id());
$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';
if (!$user_info)
{
    wp_redirect( get_home_url());
    exit;
}


ell_get_products();

$products = ell_get_products();
?>

<?php
get_header('admin'); ?>
    <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud1">
    <article class="background-admin py-16">
    <section>
        <div class="flex justify-center">
            <button name="edit_new_product" value="true" class="mt-2 bg-teal-500 p-4 flex items-center justify-center text-white border">Nouveau Produit</button>
            <button name="save_edit_product" value="true" class="mt-2 bg-teal-500 p-4 flex items-center justify-center text-white border">Enregistrer</button>
            <button type=reset" name="annule_edit_product" value="true" class="mt-2 bg-teal-500 p-4 flex items-center justify-center text-white border">Annuler</button>
        </div>
        <div class="container">
            <div class="flex items-center ">
                <!-- Image debut -->
                <div class="w-1/2 flex justify-center">
                    <img src="<?php echo $fields['gallery']['url']; ?>" width="150px" alt="">
                </div
            </div>
                <!-- Image fin -->
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
    </article>
    <img src="<?php echo $cloud2; ?>" alt="" class="absolute cloud2">

<?php
get_footer();
