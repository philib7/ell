<?php
if ( !defined('ABSPATH')) exit;

get_header('admin');

edit_product();

$fields = get_fields(get_the_id());
$title = get_the_title(get_the_id());

$cloud1 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud.png';
$cloud2 = get_template_directory_uri().'/BuildFrontAsset/dist/images/bigcloud2.png';
?>

<img src="<?php echo $cloud1; ?>" alt="" class="absolute cloud1">

<article class="background-admin py-16">
    <div class="container">

        <div class="mt-12 py-6 bg-gris">
            <div class="flex justify-end mr-4 underline">Modifier le produit</div>

            <div class="flex items-center">
                <!-- Image debut -->
                <div class="w-1/2 flex justify-center">
                    <img src="<?php echo $fields['gallery']['url']; ?>" width="150px" alt="">
                </div>
                <!-- Image fin -->

                <!-- Description du produit début -->
                <div class="w-1/2">
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <?php
                            // On appel notre fonction pour récupèrer le model (html) du titre
                            title($title); ?>
                        </div>

                        <?php ell_list_elements('Stock :', $fields['stock']); ?>
                        <?php ell_list_elements('Le type de la bague : ', $fields['type']); ?>
                        <?php ell_list_elements('La référence : ', $fields['reference']); ?>
                        <?php ell_list_elements('La matiere :', $fields['matiere'][0]); ?>
                        <?php ell_list_elements('Le type de pierre :', $fields['pierre']); ?>
                        <?php ell_list_elements('La taille :', $fields['taille']); ?>
                        <?php ell_list_elements('Description :', $fields['description']); ?>
                        <?php ell_list_elements('Prix hors taxe :', $fields['prix_ht']); ?>

                        <button name="save_edit_product" value="true" class="mt-2 bg-teal-500 p-4 flex items-center justify-center text-white border">Enregistrer</button>
                    </form>
                </div>
                <!-- Description du produit Fin -->
            </div>
        </div>
    </div>
</article>

<img src="<?php echo $cloud2; ?>" alt="" class="absolute cloud2">
<?php
echo '<pre>';
var_dump($fields);
get_footer();