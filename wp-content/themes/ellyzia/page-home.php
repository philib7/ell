<?php
/*
 * Template Name: Home
 */

$liste = array(
    'items' => [
        'item1' => [
            'icon' =>'icon-star',
            'content'=> 'Content Lorem 1'
        ],
        'item2' => [
            'icon'=> 'icon-star',
            'content'=> 'Content Lorem 2 '
        ],
        'item3' => [
            'icon'=> 'icon-star',
            'content'=> 'Content Lorem 3'
        ]
    ]
);

get_header(); ?>

<section>
    <div class="bg-red-900 absolute top-1/2 transform -translate-y-1/2 w-full flex justify-center">
        <?php echo wpfrom_liste_iconsText($liste); ?>
    </div>
</section>

<?php
get_footer();
