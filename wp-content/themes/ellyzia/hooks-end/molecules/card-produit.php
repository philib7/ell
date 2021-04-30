<?php
if ( !defined('ABSPATH')) exit;

function card_product($products, $class = null) {
    foreach ($products as $key => $value) :
        $image = ell_get_gallerie_byProduct_id($value->ID);
        $link = get_the_permalink($value->ID);
        $url_image = null;

        if (isset($image) && is_array($image)) {
            $url_image = wp_get_attachment_url($image[0]['image']);
        }
    ?>
        <div class="w-full <?php echo $class; ?> mt-16 pl-10">
            <div class="bg-EllGrayVeryLight flex justify-center items-center py-4">
                <img src="<?php echo $url_image; ?>" alt="">
            </div>

            <a href="<?php echo $link; ?>" class="flex flex-col justify-center items-center mt-4 text-EllGrayLight">
                <div class="text-lg font-semibold text-EllGraDark tracking-widest">Ondes</div>
                <div class="leading-5 tracking-wider">Or jaune et Or blanc</div>
                <div class="leading-5 tracking-wider">Moyen modèle</div>
            </a>
        </div>
    <?php endforeach;
}
