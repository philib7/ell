<?php
/*
 * Template Name: Home
 */

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';

$homeCollection = get_template_directory_uri().'/BuildFrontAsset/dist/images/homecollection.png';
$homeHouse = get_template_directory_uri().'/BuildFrontAsset/dist/images/capture.png';

$list_collection = ell_get_collections_isnot_header();

$collection_header = ell_get_collection_is_header();


//gradient-RoseBlue
get_header(); ?>

<section class="relative py-12 overflow-hidden">
    <div class="sky"></div>
    <div class="sky2"></div>

    <!-- Nuage 1 -->
    <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud1">

    <!-- Contenu -->
    <div class="container max-width-1668 relative z-10">
        <!-- Second Bloc -->
        <div class="md:flex justify-between flex-wrap">

        <?php if (isset($collection_header) && is_array($collection_header)): ?>
            <?php
            foreach ($collection_header as $key => $value) :
                $link = get_the_permalink($value->ID);
                $titre = get_the_title($value->ID);
                $image = ell_get_image_bycollection_id($value->ID);
            ?>
                <!-- La Maison Bloc -->
                <a class="flex flex-col lg:flex-row items-center justify-between bg-EllGrayVeryLight card w-full" href="<?php echo $link; ?>">
                    <div class="text-center text-EllGrayLight lg:w-1/2 w-full flex flex-col items-center justify-center mt-8 px-4 lg:pt-0">
                        <div class="uppercase font-montserrat text-sm tracking-widest">Collection</div>
                        <?php title($titre); ?>

                        <div class="mt-6 uppercase lg:overflow-hidden text-center">
                            <div class="text-sm lg:text-base card-discover font-montserrat tracking-widest">
                                Découvrir la collection
                            </div>
                        </div>
                    </div>

                    <?php if (isset($image['url'])): ?>
                        <div class="w-full lg:w-1/2">
                            <img src="<?php echo $image['url']; ?>" class="w-full" alt="">
                        </div>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>

            <?php
            $counter = 0;
            foreach ($list_collection as $key => $value) :
                $link = get_the_permalink($value->ID);
                $titre = get_the_title($value->ID);
                $image = ell_get_image_bycollection_id($value->ID);

                // reset the variable
                $class = '';

                // on every third result, set the variable value
                if(++$counter % 3 === 0) {
                    card_large($link, $titre, $image['url'], 'Collection' ,'Découvrir la collection');

                } else {
                    card_small($link, $titre, $image['url'], 'Collection', 'Découvrir la collection');
                }
                ?>
                <!-- Left -->

            <?php endforeach; ?>

             <!-- La Maison Bloc -->
             <?php card_large(get_home_url().'/la-maison/', 'La maison', $homeHouse, '' ,'Découvrir'); ?>
        </div>
    <!-- Fin Contenu -->

    <!-- Nuage 2 -->
    <img src="<?php echo $cloud2; ?>" alt="" class="absolute cloud2">
</section>

<?php
get_footer();
