<?php
if ( !defined('ABSPATH')) exit;

function card_large ($link, $titre, $image) {
?>
    <a class="flex flex-col lg:flex-row items-center justify-between bg-EllGrayVeryLight card w-full mt-6 md:mt-16" href="<?php echo $link; ?>">
        <div class="text-center text-EllGrayLight lg:w-1/2 w-full flex flex-col items-center justify-center mt-8 px-4 lg:pt-0">
            <div class="uppercase font-montserrat">Collection</div>
            <?php title($titre); ?>

            <div class="mt-6 uppercase lg:overflow-hidden text-center">
                <div class="text-sm lg:text-base card-discover font-montserrat tracking-widest">
                    Découvrir la collection
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2">
            <img src="<?php echo $image; ?>" class="w-full" alt="">
        </div>
    </a>
<?php
}