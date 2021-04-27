<?php
if ( !defined('ABSPATH')) exit;

function ell_header_desktop($logo) {
?>
    <div class="container py-6">
        <div class="flex items-center">
            <div>
                <img src="<?php echo $logo; ?>" alt="" width="150px" class="logo">
            </div>

            <div class="ml-12 flex">
                <div>Lien 1</div>
                <div class="ml-4">Lien 2</div>
                <div class="ml-4">Lien 3</div>
            </div>
        </div>
    </div>
<?php
}
