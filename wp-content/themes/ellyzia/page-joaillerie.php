<?php
/*
 * Template Name: Joaillerie
 */

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';

$homeCollection = get_template_directory_uri().'/BuildFrontAsset/dist/images/homecollection.png';
$homeHouse = get_template_directory_uri().'/BuildFrontAsset/dist/images/capture.png';
$collier = get_template_directory_uri().'/BuildFrontAsset/dist/images/collier.png';
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
                            <option value="" checked>Type</option>
                            <option value="test">test</option>
                        </select>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <select name="" id="" class="pr-8 w-full">
                            <option value="" checked>Matière</option>
                            <option value="">test</option>
                        </select>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <select name="" id="" class="pr-8 w-full">
                            <option value="" checked>Pierre</option>
                            <option value="">test</option>
                        </select>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        <select name="" id="" class="pr-8">
                            <option value="" checked>Collection</option>
                            <option value="">test</option>
                        </select>
                    </div>

                    <div class="text-EllGrayLight tracking-widest uppercase mt-4">
                        Taille :
                    </div>

                    <div class="text-EllGrayLight mt-4">
                        <label for="stock" class="flex items-center">
                            <div>En stock</div>
                            <input type="checkbox" id="stock" class="ml-4">
                        </label>
                    </div>

                    <div>
                        <button>Rechercher</button>
                    </div>
                    <div>
                        <button type="reset">Réinitialiser</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container top-0 relative">
        <div class="pb-56">
            <div class="flex flex-wrap -ml-10">
                <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                    <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                        <img src="<?php echo $collier; ?>" alt="">
                    </div>

                    <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                        <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                        <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                        <div class="leading-5 tracking-wider">Moyen modèle</div>
                    </a>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                    <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                        <img src="<?php echo $collier; ?>" alt="">
                    </div>

                    <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                        <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                        <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                        <div class="leading-5 tracking-wider">Moyen modèle</div>
                    </a>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                    <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                        <img src="<?php echo $collier; ?>" alt="">
                    </div>

                    <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                        <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                        <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                        <div class="leading-5 tracking-wider">Moyen modèle</div>
                    </a>
                </div>

                <?php if (wp_is_mobile()): ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                        <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                            <img src="<?php echo $collier; ?>" alt="">
                        </div>

                        <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                            <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                            <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                            <div class="leading-5 tracking-wider">Moyen modèle</div>

                        </a>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                        <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                            <img src="<?php echo $collier; ?>" alt="">
                        </div>

                        <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                            <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                            <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                            <div class="leading-5 tracking-wider">Moyen modèle</div>

                        </a>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                        <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                            <img src="<?php echo $collier; ?>" alt="">
                        </div>

                        <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                            <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                            <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                            <div class="leading-5 tracking-wider">Moyen modèle</div>

                        </a>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                        <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                            <img src="<?php echo $collier; ?>" alt="">
                        </div>

                        <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                            <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                            <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                            <div class="leading-5 tracking-wider">Moyen modèle</div>

                        </a>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                        <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                            <img src="<?php echo $collier; ?>" alt="">
                        </div>

                        <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                            <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                            <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                            <div class="leading-5 tracking-wider">Moyen modèle</div>

                        </a>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 mt-16 pl-10">
                        <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                            <img src="<?php echo $collier; ?>" alt="">
                        </div>

                        <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                            <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                            <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                            <div class="leading-5 tracking-wider">Moyen modèle</div>

                        </a>
                    </div>

                <?php endif; ?>

                <!-- LAST FIRST -->
                <?php if (!wp_is_mobile()): ?>
                    <div class="lg:flex lg:flex-row-reverse w-full">
                        <div class="w-full lg:w-1/3 h-32 md:h-64 lg:h-full">
                            <div class="pl-10 mt-16 relative overflow-hidden h-32 md:h-64 lg:h-full">
                                <div class="sky-card h-80p"></div>
                                <div class="sky2-card h-80p"></div>
                                <!-- Nuage 1 -->
                                <img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud-card">
                            </div>
                        </div>

                        <div class="w-full lg:w-2/3 flex flex-wrap content-start">
                            <div class="w-full md:w-full lg:w-1/2 mt-16 pl-10">
                                <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                                    <img src="<?php echo $collier; ?>" alt="">
                                </div>

                                <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                                    <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                                    <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                                    <div class="leading-5 tracking-wider">Moyen modèle</div>

                                </a>
                            </div>

                            <div class="w-full md:w-full lg:w-1/2 mt-16 pl-10">
                                <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                                    <img src="<?php echo $collier; ?>" alt="">
                                </div>

                                <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                                    <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                                    <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                                    <div class="leading-5 tracking-wider">Moyen modèle</div>

                                </a>
                            </div>

                            <div class="w-full md:w-full lg:w-1/2 mt-16 pl-10">
                                <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                                    <img src="<?php echo $collier; ?>" alt="">
                                </div>

                                <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                                    <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                                    <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                                    <div class="leading-5 tracking-wider">Moyen modèle</div>

                                </a>
                            </div>

                            <div class="w-full md:w-full lg:w-1/2 mt-16 pl-10">
                                <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                                    <img src="<?php echo $collier; ?>" alt="">
                                </div>

                                <a href="#" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                                    <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                                    <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                                    <div class="leading-5 tracking-wider">Moyen modèle</div>

                                </a>
                            </div>
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
