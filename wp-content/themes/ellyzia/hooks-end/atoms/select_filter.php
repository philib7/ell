<?php
if ( !defined('ABSPATH')) exit;

function el_select_filter($name, $array, $default_option, $default_id) {
    ?>
    <select name="<?php echo $name; ?>" class="pr-8 w-full">
        <?php
        if (isset($array) && is_array($array)) {
            ?>
            <option value=""><?php echo $default_option; ?></option>
            <?php
            foreach ($array as $key => $value) {
                $selected = null;

                if ($default_id == $key) {
                    $selected = "selected";
                }
            ?>
                <option value="<?php echo $key; ?>" <?php echo $selected; ?>>
                    <?php echo $value; ?>
                </option>
            <?php
            }
        }
        ?>
    </select>
    <?php
}