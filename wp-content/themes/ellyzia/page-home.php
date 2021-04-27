<?php
/*
 * Template Name: Home
 */

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';

$homeCollection = get_template_directory_uri().'/BuildFrontAsset/dist/images/homecollection.png';

get_header(); ?>

<section class="gradient-RoseBlue relative pt-32 pb-32 overflow-hidden">
    <!-- Nuage 1 -->
    <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud1">

    <!-- Contenu -->
    <div class="container max-width-1668 relative z-10">
        <!-- First Bloc -->
        <div class="flex items-center justify-between bg-EllGrayVeryLight py-14 pl-56 pr-32 card">
            <h2 class="text-center h-48 text-EllGrayLight">
                <div class="uppercase">Collection</div>
                <div class="text-7xl">Délinéation</div>
            </h2>

            <div>
                <img src="<?php echo $homeCollection; ?>" alt="">
            </div>
        </div>

        <!-- Second Bloc -->
        <div class="flex justify-between mt-24">
            <!-- Left -->
            <div class="bg-EllGrayVeryLight w-1/2 mr-10 flex justify-center card">
                <div style="background: url('<?php echo get_template_directory_uri(); ?>/BuildFrontAsset/dist/images/sumner-mahaffey-7Y0NshQLohk-unsplash.png'); background-position: center;" class="w-full bg-center">
                    <div class="flex flex-col items-center text-EllGrayLight pt-24 pb-6 ">
                        <div class="text-7xl">Ondes</div>

                        <div class="mt-8 uppercase">
                            Découvrir la collection
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right -->
            <div class="bg-EllGrayVeryLight w-1/2 ml-10 flex justify-center pt-24 pb-6 card">
                <div>
                    <div class="text-7xl text-EllGrayLight">Cap</div>

                    <div class="mt-8 uppercase">
                        Découvrir la collection
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Fin Contenu -->

    <!-- Nuage 2 -->
    <img src="<?php echo $cloud2; ?>" alt="" class="absolute cloud2">
</section>

<?php
get_footer();
