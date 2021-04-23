<?php
if ( !defined('ABSPATH')) exit;

get_header();

$fields = get_fields(get_the_id());
$title = get_the_title(get_the_id());

?>
<article>
    <div class="container">

        <?php
        // On appel notre fonction pour récupèrer le model (html) du titre
        title($title); ?>

        <div class="flex">
            <!-- Description du produit début -->
            <div class="w-1/2">
                <div class="type-produit">
                    <div>Type</div>
                    <div><?php echo $fields['type']; ?></div>
                </div>

                <div class="type-produit">
                    <div>Type</div>
                    <div><?php echo $fields['reference']; ?></div>
                </div>
            </div>
            <!-- Description du produit Fin -->

            <!-- Image debut -->
            <div class="w-1/2">
                <img src="<?php echo $fields['gallery']['url']; ?>" width="150px" alt="">
            </div>
            <!-- Image fin -->
        </div>
    </div>
</article>

<pre>
<?php
var_dump($fields);
get_footer();