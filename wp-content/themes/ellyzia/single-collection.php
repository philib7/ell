<?php
if ( !defined('ABSPATH')) exit;

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';
$homeCollection = get_template_directory_uri().'/BuildFrontAsset/dist/images/homecollection.png';
$homeHouse = get_template_directory_uri().'/BuildFrontAsset/dist/images/capture.png';

$id = get_the_id();

$name = get_the_title();
$image = ell_get_image_page_bycollection_id($id);
$image_url = null;

$models = ell_get_models_by_collection($id);

if (isset($image['url'])) {
    $image_url = $image['url'];
}

get_header(); ?>

<section class="relative py-12 overflow-hidden">
    <div class="sky"></div>
    <div class="sky2"></div>

    <!-- Nuage 1 -->
    <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud1">

    <!-- Contenu -->
    <div class="container max-width-1668 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between card w-full">
            <div class="text-center text-EllGrayLight lg:w-1/2 w-full flex flex-col items-center justify-center mt-8 px-4 lg:pt-0">
                <div class="uppercase font-montserrat">Collection</div>
                <?php title($name); ?>
            </div>

            <div class="w-full lg:w-1/2">
                <img src="<?php echo $image_url; ?>" class="" alt="">
            </div>
        </div>

        <div class="md:flex justify-between flex-wrap">
            <?php
            $counter = 0;
            foreach ($models as $key => $value) :
                $link = get_home_url().'/joaillerie?collect='.$id.'&ensemble='.$value->ID;
                $titre = ell_get_titre_model_id($value->ID);
                $image = ell_get_image_model_id($value->ID);

                // reset the variable
                $class = '';

                // on every third result, set the variable value
                if(++$counter % 3 === 0) {
                    card_large($link, $titre, $image['url'], "L'ensemble" ,"Découvrir l'ensemble");

                } else {
                    card_small($link, $titre, $image['url'], "L'ensemble" ,"Découvrir l'ensemble");
                }
                ?>
                <!-- Left -->

            <?php endforeach; ?>
        </div>

        <!-- La Maison Bloc -->
        <a class="flex flex-col lg:flex-row-reverse items-center justify-between bg-EllGrayVeryLight card mt-8 md:mt-16" href="<?php echo get_home_url().'/la-maison'; ?>">
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
