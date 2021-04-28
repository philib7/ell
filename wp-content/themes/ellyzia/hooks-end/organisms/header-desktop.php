<?php
if ( !defined('ABSPATH')) exit;

function ell_header_desktop($logo) {
?>
    <div class="container pt-4 pb-6">
        <div class="flex items-end">
            <div class="logo">
                <?php
                $svg = file_get_contents($logo);
                echo $svg;
                ?>
            </div>

            <div class="ml-24 flex text-xl text-EllGrayLight mb-3">
                <div>Joaillerie</div>
                <div class="ml-14">La Maison</div>
                <div class="ml-14">Service client</div>
            </div>
        </div>
    </div>
<?php
}
