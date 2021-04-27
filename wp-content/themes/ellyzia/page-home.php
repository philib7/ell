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
        <a class="flex items-center justify-between bg-EllGrayVeryLight py-14 pl-56 pr-32 card" href="#">
            <div class="text-center h-48 text-EllGrayLight">
                <div class="uppercase">Collection</div>
                <div class="text-7xl">Délinéation</div>

                <div class="mt-8 uppercase overflow-hidden">
                    <div class="card-discover">
                        Découvrir la collection
                    </div>
                </div>
            </div>

            <div>
                <img src="<?php echo $homeCollection; ?>" alt="">
            </div>
        </a>

        <!-- Second Bloc -->
        <div class="flex justify-between mt-24">
            <!-- Left -->
            <a class="bg-EllGrayVeryLight w-1/2 mr-10 flex justify-center card" href="#">
                <div style="background: url('<?php echo get_template_directory_uri(); ?>/BuildFrontAsset/dist/images/photo-1454117096348-e4abbeba002c.png'); background-position: center;
                background-repeat: no-repeat;" class="w-full bg-center">
                    <div class="flex flex-col items-center text-EllGrayLight pt-24 pb-6 ">
                        <div class="flex flex-col items-center">
                            <div class="uppercase">Collection</div>
                            <div class="text-7xl">Ondes</div>
                        </div>

                        <div class="mt-8 uppercase overflow-hidden">
                            <div class="card-discover">
                                Découvrir la collection
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Right -->
            <a class="bg-EllGrayVeryLight w-1/2 ml-10 flex justify-center card" href="#">
                <div style="background: url('<?php echo get_template_directory_uri(); ?>/BuildFrontAsset/dist/images/summer.png'); background-position: center;
                background-repeat: no-repeat;" class="w-full bg-center">
                    <div class="flex flex-col items-center text-EllGrayLight pt-24 pb-6 ">
                        <div class="flex flex-col items-center">
                            <div class="uppercase">Collection</div>
                            <div class="text-7xl">Cap</div>
                        </div>

                        <div class="mt-8 uppercase overflow-hidden">
                            <div class="card-discover">
                                Découvrir la collection
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <!-- Fin Contenu -->

    <!-- Nuage 2 -->
    <img src="<?php echo $cloud2; ?>" alt="" class="absolute cloud2">
</section>

<?php
get_footer();
