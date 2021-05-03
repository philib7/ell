
<?php
if ( !defined('ABSPATH')) exit;
$logo = get_template_directory_uri().'/BuildFrontAsset/dist/images/logo.svg';
?>
            <footer class="bg-white">
                <div class="container py-24">
                    <div class="lg:flex text-center lg:text-left justify-between items-start">
                        <!-- col1 -->
                        <div>
                            <div class="w-full flex justify-center lg:block">
                                <a href="<?php echo get_home_url(); ?>">
                                    <div class="logo">
                                        <?php
                                        $svg = file_get_contents($logo);
                                        echo $svg;
                                        ?>
                                    </div>
                                </a>
                            </div>

                            <div class="mt-2 text-EllGrayLight">
                                Adresse Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </div>

                            <div class="mt-2 text-EllGrayLight">
                            <a href="tel:0000000000">01.02.36.05.44</a>
                            </div>
                        </div>

                        <!-- col2 -->
                        <div class="mt-6">
                            <div class="text-lg font-semibold text-EllGrayLight">Nos Collection</div>

                            <ul class="mt-8 font-montserrat">
                                <li class="text-EllGrayLight">Coll</li>
                                <li class="mt-2 text-EllGrayLight">Coll</li>
                                <li class="mt-2 text-EllGrayLight">Coll</li>
                                <li class="mt-2 text-EllGrayLight">Coll</li>
                            </ul>
                        </div>

                        <!-- col3 -->
                        <div class="mt-6">
                            <div class="text-lg font-semibold text-EllGrayLight">Liens utiles</div>

                            <ul class="mt-8 font-montserrat">
                                <li class="text-EllGrayLight">Coll</li>
                                <li class="mt-2 text-EllGrayLight">Coll</li>
                                <li class="mt-2 text-EllGrayLight">Coll</li>
                                <li class="mt-2 text-EllGrayLight">Coll</li>
                            </ul>
                        </div>

                        <!-- col4 -->
                        <div class="mt-6">
                            <div class="text-lg font-semibold text-EllGrayLight">
                                Réseaux sociaux
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
            </footer>
        </main>

        <?php wp_footer(); ?>
    </body>
</html>
