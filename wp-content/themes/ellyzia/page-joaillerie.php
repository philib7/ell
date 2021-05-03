<?php
/*
 * Template Name: Joaillerie
 */

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';

$homeCollection = get_template_directory_uri().'/BuildFrontAsset/dist/images/homecollection.png';
$homeHouse = get_template_directory_uri().'/BuildFrontAsset/dist/images/capture.png';
$collier = get_template_directory_uri().'/BuildFrontAsset/dist/images/collier.png';

/*
* ***** Querry de nos produits *****
*
*/
$products_header = ell_get_products('3');
$products_principal = ell_get_products('4', '3');
$products_all = ell_get_produits_magical('99999999', '7');

/*
* ***** Controller sendSearchFilter *****
*
*/
if (isset($_GET['sendSearchFilter'])) {
    $model = null;
    $collect = null;
    $type = null;
    $queryRelation = null;

    if (isset($_GET['collect'])) {
        $collect = $_GET['collect'];
    }

    if (isset($_GET['type'])) {
        $type = $_GET['type'];
    }

    if (isset($_GET['ensemble'])) {
        $model = $_GET['ensemble'];

        $queryRelation =
            array (
                'relation' => 'AND',
                array (
                    'key' => 'model',
                    'value' => $model,
                    'compare' => 'LIKE',
                ),
                array (
                    'key' => 'collection',
                    'value' => $collect,
                    'compare' => 'LIKE',
                ),
                array (
                    'key' => 'type',
                    'value' => $type,
                    'compare' => 'LIKE',
                ),
            );

        $products_header = ell_get_produits_magical('3', null, $queryRelation);
        $products_principal = ell_get_produits_magical('4', '3', $queryRelation);
        $products_all = ell_get_produits_magical('9999', '7', $queryRelation);
    }
}


/*
* ***** Début field filter *****
*
*/
$fields_type = get_field_object('field_60800db83a168');
$fields_matiere = get_field_object('field_60801062fa484');
$fields_pierre = get_field_object('field_608010d4fa485');

/*
* ***** Gestion de la Taille *****
*
*/
//On récupère la liste de tout les produits
$all_product = ell_get_products('-1');
// On défini deux tableaux temporaires pour récupèrer toutes les tailles de tout les produits
$array_taille = array();
$array_taille_final = array();
// Si on récupère un tableau alors au moins un produit a une taille
if (is_array($all_product)):
    foreach ($all_product as $key => $value) {
        $tailles = null;
        // On stock toutes les tailles dans le tableau
        $tailles = ell_get_taille_byProduct_id($value->ID);
        if (is_array($tailles)) {
            foreach ($tailles as $key => $taille) {
                $array_taille_final[] = $taille['taille'];
            }
        }
    }
    // On tire par croissant
    sort($array_taille_final);
    // Cette même variable est égale à elle même mais sans les doublons
    $array_taille_final = array_unique($array_taille_final);
endif;

/*
* ***** Gestion du model/ensemble ******
*
*/
$models = ell_get_models();
// On défini un tableau qui stockera la finalité
$array_model = array();

if (is_array($models)) {
    foreach ($models as $key => $value) {
        $array_model[$value->ID] = get_the_title($value->ID);
    }
}

/*
* ***** Gestion des collections ******
*
*/
$collections = ell_get_collections();
// On défini un tableau qui stockera la finalité
$array_collection = array();

if (is_array($collections)) {
    foreach ($collections as $key => $value) {
        $array_collection[$value->ID] = get_the_title($value->ID);
    }
}

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
                        <select name="" id="" class="pr-8 w-full">
                            <option value="" checked>Filter par</option>
                            <option value="test">test</option>
                        </select>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <?php
                        $type = null;
                        if (isset($_GET['type'])) {
                            $type = $_GET['type'];
                        }
                        el_select_filter('type', $fields_type["choices"], 'Type', $type);
                        ?>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <?php
                            $collect = null;
                            if (isset($_GET['collect'])) {
                                $collect = $_GET['collect'];
                            }
                            el_select_filter('collect', $array_collection, 'Collection', $collect);
                        ?>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <?php
                        $ensemble = null;
                        if (isset($_GET['ensemble'])) {
                            $ensemble = $_GET['ensemble'];
                        }
                        el_select_filter('ensemble', $array_model, 'Ensemble', $ensemble);
                        ?>
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
                        <?php
                        $pierre = null;
                        if (isset($_GET['pierre'])) {
                            $pierre = $_GET['pierre'];
                        }
                        el_select_filter('pierre', $fields_pierre["choices"], 'Pierre', $pierre);
                        ?>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        Taille :
                        <div class="flex -ml-2">
                            <?php
                            if (isset($array_taille_final) && is_array($array_taille_final)) {
                                ?>
                                <?php
                                foreach ($array_taille_final as $key => $value) {
                                ?>
                                    <label id="taille-<?php echo $value; ?>" value="<?php echo $value; ?>" class="flex items-center ml-2 mb-0 leading-7">
                                        <input class="hidden checkbox-custom" type="checkbox" id="taille-<?php echo $value; ?>">

                                        <div class="text-xs label-custom">
                                            <?php echo $value; ?>
                                        </div>
                                    </label>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="flex mt-4">
                        <div>
                            <button name="sendSearchFilter" value="true">Rechercher</button>
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
                <?php if (!wp_is_mobile() && is_array($products_principal) && !empty($products_principal)): ?>
                    <div class="lg:flex lg:flex-row-reverse w-full">
                        <div class="w-full lg:w-1/3 h-32 md:h-64 lg:h-full">
                            <div class="pl-10 mt-16 relative overflow-hidden h-32 md:h-64 lg:h-full">
                                <div class="sky-card h-82p"></div>
                                <div class="sky2-card h-82p"></div>

                                <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud-card">
                            </div>
                        </div>

                        <div class="w-full lg:w-2/3 flex flex-wrap content-start">
                            <?php
                            if (isset($products_principal) && is_array($products_principal)):
                                card_product($products_principal, 'md:w-1/2 lg:w-1/2');
                            endif;
                            ?>

                        </div>
                    </div>
                <?php endif; ?>

                <!-- LAST FIRST -->
                <?php if (!wp_is_mobile() && is_array($products_all) && !empty($products_all)): ?>
                    <div class="lg:flex lg:flex-row-reverse w-full">
                        <div class="w-full flex flex-wrap content-start">
                            <?php
                            if (isset($products_all) && is_array($products_all)):
                                card_product($products_all, 'md:w-1/2 lg:w-1/3');
                            endif;
                            ?>

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
        <?php card_large(get_home_url().'/la-maison/', 'La maison', $homeHouse, '' ,'Découvrir'); ?>
    </div>
    <!-- Fin Contenu -->

    <!-- Nuage 2 -->
    <img src="<?php echo $cloud2; ?>" alt="" class="absolute cloud2">
</section>

<?php
get_footer();
