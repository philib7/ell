<?php
if ( !defined('ABSPATH')) exit;

function ell_list_elements($label, $value) {
?>
    <div class="element-list">
        <div class="font-semibold">
            <?php echo $label; ?>
        </div>

        <div>
            <?php
            if ($label === "Stock :" && $value == 0) {
            ?>
                <label for="">
                    <input type="checkbox" name="" id="">

                    <div class="flex items-center">
                        <div>Hors stock</div>
                        <div class="w-3 h-3 bg-red-700 ml-2"></div>
                    </div>
                </label>
            <?php
            } else if($label === "Stock :" && $value == 1) {
                ?>
                <label for="stock" id="trigger-stock">
                    <input type="checkbox" name="" id="stock">

                    <div class="flex items-center">
                        <div>En stock</div>
                        <div class="w-3 h-3 bg-green-700 ml-2" id="status-stock"></div>
                    </div>
                </label>
                <?php
            } else if($label == "Prix hors taxe :")
                echo $value.' €';
            else {
                echo $value;
            }
            ?>
        </div>
    </div>
<?php
}