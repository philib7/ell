<?php
if ( !defined('ABSPATH')) exit;

function wpfrom_iconText (
    $icon,
    $text
) {
    ?>
        <div class="flex items-center p-4">
            <div class="text-green-600 mr-2">
                <?php wpfrom_icon($icon); ?>
            </div>

            <div class="text-white">
                <?php wpfrom_text($text); ?>
            </div>
        </div>
    <?php
}
