<?php
/*
 * Template Name: Joaillerie
 */

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';

$homeCollection = get_template_directory_uri().'/BuildFrontAsset/dist/images/homecollection.png';
$homeHouse = get_template_directory_uri().'/BuildFrontAsset/dist/images/capture.png';
$collier = get_template_directory_uri().'/BuildFrontAsset/dist/images/collier.png';

$products_header = ell_get_products('3');
$products_principal = ell_get_products('4', '3');

// Début field filter
$fields_type = get_field_object('field_60800db83a168');
$fields_matiere = get_field_object('field_60801062fa484');
$fields_pierre = get_field_object('field_608010d4fa485');

// TODO
// Gestion de la Taille
//On récupère la liste de tout les produits
// $all_product = ell_get_products('-1');
// // On défini deux tableaux temporaires pour récupèrer toutes les tailles de tout les produits
// $array_taille = array();
// $array_taille_final = array();
// // Si on récupère un tableau alors au moins un produit a une taille
// if (is_array($all_product)):
//     foreach ($all_product as $key => $value) {
//         // On stock toutes les tailles dans le tableau
//         $array_taille[] = ell_get_taille_byProduct_id($value->ID);
//     }

//     foreach ($array_taille as $key => $value) {
//         if (is_array($value)) {
//             $array_taille_final = array_merge($array_taille_final, $value);
//         }
//     }
// endif;


//gradient-RoseBlue
get_header(); ?>

<section class="bg-EllGrayVeryLight">
    <div class="container">
        <div class="flex flex-col md:flex-row items-center justify-center">
            <div class="w-full md:w-1/2 flex items-center justify-center lg:justify-start">
                <?php title('Joaillerie'); ?>
            </div>

            <div class="w-full md:w-1/2">
                <img src="<?php echo $homeCollection; ?>" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Début Cards et filtrage -->
<section class="bg-white relative lg:flex flex-row">
    <div class="lg:sticky top-1/4 left-0 pb-8 h-full">
        <div class="ml-8 pr-4 pt-16">
            <div class="uppercase text-EllGrayLight tracking-widest font-semibold">Filtrage</div>

            <div class="">
                <form action="#" method="GET">
                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <select name="type" id="" class="pr-8 w-full">
                            <option value="" checked>Filter par</option>
                            <option value="test">test</option>
                        </select>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <select name="type" id="" class="pr-8 w-full">
                            <?php
                            if (isset($fields_type) && is_array($fields_type)) {
                                ?>
                                <option value="" checked>Type</option>
                                <?php
                                foreach ($fields_type["choices"] as $key => $value) {
                                ?>
                                    <option value="<?php echo $key; ?>">
                                        <?php echo $value; ?>
                                    </option>
                                <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="text-EllGrayLight uppercase mt-4 flex flex-wrap items-center w-48 -ml-2">
                        <?php
                        if (isset($fields_matiere) && is_array($fields_matiere)) {
                            ?>
                            <?php
                            foreach ($fields_matiere["choices"] as $key => $value) {
                            ?>
                                <label id="<?php echo $key; ?>" value="<?php echo $key; ?>" class="flex items-center ml-2 mb-0 leading-7">
                                    <input class="hidden checkbox-custom" type="checkbox" id="<?php echo $key; ?>">

                                    <div class="text-xs label-custom">
                                        <?php echo $value; ?>
                                    </div>
                                </label>
                            <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <select name="" id="" class="pr-8 w-full">
                            <?php
                            if (isset($fields_pierre) && is_array($fields_pierre)) {
                                ?>
                                 <option value="" checked>Pierre</option>
                                <?php
                                foreach ($fields_pierre["choices"] as $key => $value) {
                                ?>
                                    <option value="<?php echo $key; ?>">
                                        <?php echo $value; ?>
                                    </option>
                                <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <select name="" id="" class="pr-8">
                            <option value="" checked>Collection</option>
                            <option value="">test</option>
                        </select>
                    </div>

                    <!-- <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        Taille :
                        <?php
                        if (isset($array_taille_final) && is_array($array_taille_final)) {
                            ?>
                            <?php
                            foreach ($array_taille_final as $key => $value) {
                            ?>
                                <label id="taille-<?php echo $value['taille']; ?>" value="<?php echo $value['taille']; ?>" class="flex items-center ml-2 mb-0 leading-7">
                                    <input class="hidden checkbox-custom" type="checkbox" id="taille-<?php echo $value['taille']; ?>">

                                    <div class="text-xs label-custom">
                                        <?php echo $value['taille']; ?>
                                    </div>
                                </label>
                            <?php
                            }
                        }
                        ?>
                    </div> -->

                    <!-- <div class="text-EllGrayLight mt-4">
                        <label for="stock" class="flex items-center">
                            <div>En stock</div>
                            <input type="checkbox" id="stock" class="ml-4">
                        </label>
                    </div> -->

                    <div class="flex mt-4">
                        <div>
                            <button>Rechercher</button>
                        </div>

                        <div class="ml-2">
                            <button type="reset">Réinitialiser</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container top-0 relative">
        <div class="pb-56">
            <div class="flex flex-wrap -ml-10">

                <?php if (isset($products_header) && is_array($products_header)):
                    card_product($products_header, 'md:w-1/2 lg:w-1/3');
                endif; ?>

                <?php if (wp_is_mobile()):
                    if (isset($products_principal) && is_array($products_principal)):
                        card_product($products_principal, 'md:w-1/2 lg:w-1/3');
                    endif;
                endif; ?>

                <!-- LAST FIRST -->
                <?php if (!wp_is_mobile()): ?>
                    <div class="lg:flex lg:flex-row-reverse w-full">
                        <div class="w-full lg:w-1/3 h-32 md:h-64 lg:h-full">
                            <div class="pl-10 mt-16 relative overflow-hidden h-32 md:h-64 lg:h-full">
                                <div class="sky-card h-80p"></div>
                                <div class="sky2-card h-80p"></div>

                                <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud-card">
                            </div>
                        </div>

                        <div class="w-full lg:w-2/3 flex flex-wrap content-start">
                            <?php
                            if (isset($products_principal) && is_array($products_principal)):
                                card_product($products_principal, 'md:w-1/2 lg:w-1/2');
                            endif; ?>

                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- Fin Cards et filtrage -->

<section class="relative py-12 overflow-hidden">
    <div class="sky"></div>
    <div class="sky2"></div>

    <!-- Nuage 1 -->
    <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud1">

    <!-- Contenu -->
    <div class="container max-width-1668 relative z-10">

        <!-- La Maison Bloc -->
        <a class="flex flex-col lg:flex-row items-center justify-between bg-EllGrayVeryLight card mt-8 md:mt-16" href="<?php echo get_home_url().'/la-maison'; ?>">
            <div class="text-center text-EllGrayLight lg:w-1/2 w-full flex flex-col items-center justify-center px-4 pt-4 lg:pt-0">
                <div class="lg:text-7xl text-4xl">La Maison</div>

                <div class="mt-6 uppercase lg:overflow-hidden">
                    <div class="card-discover font-montserrat tracking-widest">
                        Découvrir
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <img src="<?php echo $homeHouse; ?>" class="w-full" alt="">
            </div>
        </a>
    </div>
    <!-- Fin Contenu -->

    <!-- Nuage 2 -->
    <img src="<?php echo $cloud2; ?>" alt="" class="absolute cloud2">
</section>

<?php
get_footer();
