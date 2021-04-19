<?php
if ( !defined('ABSPATH')) exit;

function wpfrom_liste_iconsText ($liste) {
?>
    <div class="w-1/2">
        <?php
        foreach ($liste['items'] as $key => $value) {
        ?>
            <div class='bg-gray-800'>
                <?php wpfrom_iconText($value['icon'], $value['content']); ?>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}