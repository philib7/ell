<?php
/*
 * Template Name: Home
 */

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';

$homeCollection = get_template_directory_uri().'/BuildFrontAsset/dist/images/homecollection.png';
$homeHouse = get_template_directory_uri().'/BuildFrontAsset/dist/images/capture.png';
//gradient-RoseBlue
get_header(); ?>

<div class="sky"></div>
<div class="sky2"></div>

<section class="relative py-12 overflow-hidden">
    <!-- Nuage 1 -->
    <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud1">

    <!-- Contenu -->
    <div class="container max-width-1668 relative z-10">
        <!-- Second Bloc -->
        <div class="md:flex justify-between flex-wrap">
            <!-- La Maison Bloc -->
            <a class="flex flex-col lg:flex-row items-center justify-between bg-EllGrayVeryLight card w-full" href="#">
                <div class="text-center text-EllGrayLight lg:w-1/2 w-full flex flex-col items-center justify-center mt-8 px-4 lg:pt-0">
                    <div class="uppercase font-montserrat">Collection</div>
                    <div class="lg:text-7xl text-4xl">Délinéation</div>

                    <div class="mt-6 uppercase lg:overflow-hidden text-center">
                        <div class="text-sm lg:text-base card-discover font-montserrat tracking-widest">
                            Découvrir la collection
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <img src="<?php echo $homeCollection; ?>" class="w-full" alt="">
                </div>
            </a>

            <!-- Left -->
            <a class="bg-EllGrayVeryLight md:w-47 w-full flex justify-center card card-min mt-6 md:mt-16" href="#">
                <div style="" class="w-full bg-center pb-6 relative">
                    <div class="">
                        <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/BuildFrontAsset/dist/images/photo-1454117096348-e4abbeba002c.png" alt="">
                    </div>

                    <div class="text-EllGrayLight mt-8 lg:mt-16 absolute top-0 w-full">
                        <div class="flex flex-col items-center">
                            <div class="uppercase font-montserrat">Collection</div>
                            <div class="lg:text-7xl text-4xl">Ondes</div>
                        </div>

                        <div class="mt-6 uppercase lg:overflow-hidden text-center">
                            <div class="text-sm lg:text-base mt-4 lg:mt-0 card-discover font-montserrat tracking-widest">
                                Découvrir la collection
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a class="bg-EllGrayVeryLight md:w-47 w-full flex justify-center card card-min mt-6 md:mt-16" href="#">
                <div style="" class="w-full bg-center pb-6 relative">
                    <div class="">
                        <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/BuildFrontAsset/dist/images/summer.png" alt="">
                    </div>

                    <div class="text-EllGrayLight mt-8 lg:mt-16 absolute top-0 w-full">
                        <div class="flex flex-col items-center">
                            <div class="uppercase font-montserrat">Collection</div>
                            <div class="lg:text-7xl text-4xl">Cap</div>
                        </div>

                        <div class="mt-6 uppercase lg:overflow-hidden text-center">
                            <div class="text-sm lg:text-base mt-4 lg:mt-0 card-discover font-montserrat tracking-widest">
                                Découvrir la collection
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- La Maison Bloc -->
            <a class="flex flex-col lg:flex-row items-center justify-between bg-EllGrayVeryLight card w-full mt-6 md:mt-16" href="#">
                <div class="text-center text-EllGrayLight lg:w-1/2 w-full flex flex-col items-center justify-center mt-8 px-4 lg:pt-0">
                    <div class="uppercase font-montserrat">Collection</div>
                    <div class="lg:text-7xl text-4xl">Délinéation</div>

                    <div class="mt-6 uppercase lg:overflow-hidden text-center">
                        <div class="text-sm lg:text-base card-discover font-montserrat tracking-widest">
                            Découvrir la collection
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <img src="<?php echo $homeCollection; ?>" class="w-full" alt="">
                </div>
            </a>

            <!-- Left -->
            <a class="bg-EllGrayVeryLight md:w-47 w-full flex justify-center card card-min mt-6 md:mt-16" href="#">
                <div style="" class="w-full bg-center pb-6 relative">
                    <div class="">
                        <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/BuildFrontAsset/dist/images/photo-1454117096348-e4abbeba002c.png" alt="">
                    </div>

                    <div class="text-EllGrayLight mt-8 lg:mt-16 absolute top-0 w-full">
                        <div class="flex flex-col items-center">
                            <div class="uppercase font-montserrat">Collection</div>
                            <div class="lg:text-7xl text-4xl">Ondes</div>
                        </div>

                        <div class="mt-6 uppercase lg:overflow-hidden text-center">
                            <div class="text-sm lg:text-base mt-4 lg:mt-0 card-discover font-montserrat tracking-widest">
                                Découvrir la collection
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a class="bg-EllGrayVeryLight md:w-47 w-full flex justify-center card card-min mt-6 md:mt-16" href="#">
                <div style="" class="w-full bg-center pb-6 relative">
                    <div class="">
                        <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/BuildFrontAsset/dist/images/summer.png" alt="">
                    </div>

                    <div class="text-EllGrayLight mt-8 lg:mt-16 absolute top-0 w-full">
                        <div class="flex flex-col items-center">
                            <div class="uppercase font-montserrat">Collection</div>
                            <div class="lg:text-7xl text-4xl">Cap</div>
                        </div>

                        <div class="mt-6 uppercase lg:overflow-hidden text-center">
                            <div class="text-sm lg:text-base mt-4 lg:mt-0 card-discover font-montserrat tracking-widest">
                                Découvrir la collection
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- La Maison Bloc -->
        <a class="flex flex-col lg:flex-row items-center justify-between bg-EllGrayVeryLight card mt-8 md:mt-16" href="#">
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
