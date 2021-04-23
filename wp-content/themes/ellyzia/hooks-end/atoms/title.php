<?php
if ( !defined('ABSPATH')) exit;

function title($title) {
?>
    <!-- Début Titre -->
    <div>
        <!-- Pour la class voir le fichier style-theme.styl -->
        <div class="title">
            <?php echo $title; ?>
        </div>

        <div class="barre-title"></div>
    </div>
    <!-- Fin titre -->
<?php
}
