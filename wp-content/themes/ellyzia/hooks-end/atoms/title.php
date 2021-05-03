<?php
if ( !defined('ABSPATH')) exit;

function title($title, $class = null) {

    if (empty($class)) {
        $class = 'lg:text-7xl text-4xl tracking-widest';
    }
?>
    <!-- Début Titre -->
    <div class=" <?php echo $class; ?> text-EllGrayLight font-sortsmillgoudy">
        <?php echo $title; ?>
    </div>
    <!-- Fin titre -->
<?php
}
