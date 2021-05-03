<?php
if ( !defined('ABSPATH')) exit;

get_header();

edit_product();

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';

$homeCollection = get_template_directory_uri().'/BuildFrontAsset/dist/images/homecollection.png';
$homeHouse = get_template_directory_uri().'/BuildFrontAsset/dist/images/capture.png';

$id = get_the_id();
$titre = ell_get_name_byProduct_id($id);
$image_header = ell_get_image_ban_byProduct_id($id);
$gallery = ell_get_gallerie_byProduct_id($id);

// Pour récupèrer la collection
$model = ell_get_models_by_product($id);
$collection = null;
$collection_title = null;

if(is_array($model)) {
    $model = $model[0]->ID;
    $collection = ell_get_collection_model_id($model);
    if (is_array($collection)) {
        $collection_title = get_the_title($collection[0]->ID);
    }
}

// Pour la gallerie
// on défini un tableau
$gallery_urls = array();
if (is_array($gallery)) {
    foreach ($gallery as $key => $value) {
        // On stock dans notre tableau chaque url des images
        $gallery_urls[] = wp_get_attachment_image_src($value['image'], 'full')[0];
    }
}

?>

<section class="bg-EllGrayVeryLight">
    <div class="container">
        <div class="flex flex-col md:flex-row items-center justify-center">
            <div class="w-full md:w-1/2 flex items-center justify-center lg:justify-start">
                <?php title($collection_title); ?>
            </div>

            <div class="w-full md:w-1/2">
                <?php if (isset($image_header) && is_array($image_header)) : ?>
                    <img src="<?php echo $image_header['url']; ?>" alt="">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-white">
        <div class="container pb-8 pt-24">
            <div class="flex">
                <div class="w-1/2">
                    <?php if(isset($gallery_urls) && is_array($gallery_urls)): ?>
                        <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "adaptiveHeight": true }'>
                            <?php foreach ($gallery_urls as $key => $value): ?>
                                <div class="carousel-cell">
                                    <div class="flex justify-center items-center">
                                        <img src="<?php echo $value; ?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="ml-32 w-1/2">
                    <!-- Titre du produit -->
                    <div>
                        <?php title($titre, 'lg:text-4xl text-2xl tracking-wider'); ?>
                    </div>

                    <!-- Attributs du produit -->
                    <div class="mt-10">
                        <div class="flex text-sm">
                            <div class="text-EllGrayLight uppercase tracking-widest">Metal</div>
                            <div class="ml-14 uppercase tracking-widest font-semibold">Or Jaune</div>
                        </div>

                        <div class="flex text-sm">
                            <div class="text-EllGrayLight uppercase tracking-widest">Metal</div>
                            <div class="ml-14 uppercase tracking-widest font-semibold">Or Jaune</div>
                        </div>

                        <div class="flex text-sm">
                            <div class="text-EllGrayLight uppercase tracking-widest">Metal</div>
                            <div class="ml-14 uppercase tracking-widest font-semibold">Or Jaune</div>
                        </div>
                    </div>

                    <!-- Button Call -->
                    <div class="mt-10">
                        <a class="border-2 border-EllGraDark text-black flex items-center justify-center py-2 uppercase tracking-wider font-semibold">
                            Contactez-nous
                        </a>
                    </div>

                    <!-- Description -->
                    <div class="mt-10">
                        <div class="tracking-widest uppercase text-sm font-semibold pb-4 flex flex-col items-center justify-center w-32">
                            Description
                            <div class="h-1 mt-2 w-full bg-black"></div>
                        </div>

                        <div class="text-EllGrayLight font-light text-sm">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam sed reiciendis esse autem vel repellat suscipit voluptates dolore, neque fugit earum qui quia explicabo. Possimus porro repellendus officia fugiat quas.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

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