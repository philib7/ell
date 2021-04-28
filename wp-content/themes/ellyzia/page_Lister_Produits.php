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
add_product();

$products = ell_get_products();

$field = get_field_object('field_60800db83a168', 'option', false);
$field_matiere = get_field_object('field_60801062fa484', 'option', false);
$field_pierre = get_field_object('field_608010d4fa485', 'option', false);

$choices = $field['choices'];
$choices_matiere = $field_matiere['choices'];
$choices_pierre = $field_pierre['choices'];

get_header('admin'); ?>

    <div class="overflow-hidden relative">
        <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud1">

        <article class="background-admin py-16">
            <section class="z-10 relative">
                <div class="container mt-6">
                    <div class="bg-gris flex justify-between p-12">
                        <ul class="">
                            <div class="text-xl font-semibold">Liste des produits</div>
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

                        <form action="#" method="POST" class="mb-0 pb-6">
                            <div class="mb-4 font-semibold text-xl">
                                Nouveau produit
                            </div>
                            <!--  debut choix nom -->
                            <div class="mb-4 w-48">
                                <input type="text" name="title-product" placeholder="Le nom" class="bg-gris w-full placeholder-black">
                                <div class="w-full border-b border-gray-800 h-1"></div>
                            </div>

                            <!--  debut choix ref interne-->
                            <div class="mb-4 w-48">
                                <input type="text" name="reference-product" placeholder="La reference interne" class="bg-gris w-full placeholder-black">
                                <div class="w-full border-b border-gray-800 h-1"></div>
                            </div>

                            <?php
                            // debut choix type
                            if (isset($choices) && !empty($choices) && is_array($choices)) {
                            ?>
                            <label for="" class="flex">
                                <div>Type : </div>
                                <select name="type-product" id="" class="ml-4">
                                    <?php
                                    foreach ($choices as $key => $choice) {
                                    ?>
                                        <option value="<?php echo $key; ?>">
                                            <?php echo $choice; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </label>
                            <?php
                            }
                            ?>

                            <?php
                            // Début choix matiere
                            if (isset($choices_matiere) && !empty($choices_matiere) && is_array($choices_matiere)) {
                            ?>
                            <label for="" class="flex">
                                <div>Matiere : </div>
                                <select name="matiere-product" id="" class="ml-4">
                                    <?php
                                    foreach ($choices_matiere as $key => $choice) {
                                    ?>
                                        <option value="<?php echo $key; ?>">
                                            <?php echo $choice; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </label>
                            <?php
                            }
                            ?>


                            <?php
                            // Début choix pierre
                            if (isset($choices_pierre) && !empty($choices_pierre) && is_array($choices_pierre)) {
                                ?>
                                <label for="" class="flex">
                                    <div>Pierre : </div>
                                    <select name="pierre-product" id="" class="ml-4">
                                        <?php
                                        foreach ($choices_pierre as $key => $choice) {
                                            ?>
                                            <option value="<?php echo $key; ?>">
                                                <?php echo $choice; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </label>
                                <?php
                            }
                            ?>

                            <!--  debut choix taille -->
                            <div class="mb-4 w-48">
                                <input type="number" name="taille-product" placeholder="taille" class="bg-gris w-full placeholder-black" min="46" max="55" value="46">
                                <div class="w-full border-b border-gray-800 h-1"></div>
                            </div>

                            <div class="flex">
                                <button name="save_add_product" value="true" class="mt-2 bg-teal-500 p-4 flex items-center justify-center text-white border">Enregistrer</button>
                                <button type="reset" name="annule_add_product" value="true" class="ml-4 mt-2 bg-teal-500 p-4 flex items-center justify-center text-white border">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </article>

        <img src="<?php echo $cloud2; ?>" alt="" class="absolute cloud2">
    </div>

<?php
get_footer();
