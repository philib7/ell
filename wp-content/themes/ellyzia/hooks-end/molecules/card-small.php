<?php
if ( !defined('ABSPATH')) exit;

function card_small ($link, $titre, $image, $label1, $label2) {
?>
    <a class="bg-EllGrayVeryLight w-full flex justify-center card mt-6 md:mt-16 md:w-47" href="<?php echo $link; ?>">
        <div style="" class="w-full bg-center pb-6 relative">
            <div class="">
                <img class="w-full" src="<?php echo $image; ?>" alt="">
            </div>

            <div class="text-EllGrayLight mt-8 lg:mt-16 absolute top-0 w-full">
                <div class="flex flex-col items-center">
                    <div class="uppercase font-montserrat"><?php echo $label1 ?></div>
                    <?php title($titre); ?>
                </div>

                <div class="mt-6 uppercase lg:overflow-hidden text-center">
                    <div class="text-sm lg:text-base mt-4 lg:mt-0 card-discover font-montserrat tracking-widest">
                        <?php echo $label2 ?>
                    </div>
                </div>
            </div>
        </div>
    </a>
<?php
}