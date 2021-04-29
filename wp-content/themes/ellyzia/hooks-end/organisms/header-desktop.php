<?php
if ( !defined('ABSPATH')) exit;

function ell_header_desktop($logo) {

    $menu = wp_get_nav_menu_items('header');

    $menu_name = 'primary-menu';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    if (!$menu) {
        return;
    }
    $menuitems = wp_get_nav_menu_items( $menu->term_id, array() );
    if (!$menuitems) {
        return;
    }
?>
    <div class="container pt-4 pb-6">
        <div class="lg:flex items-end">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>">
                    <?php
                    $svg = file_get_contents($logo);
                    echo $svg;
                    ?>
                </a>
            </div>

            <div class="lg:ml-16 text-xl text-EllGrayLight mb-3">
                <div>
                    <ul class="main-nav sm:flex">
                        <?php
                        $count = 0;
                        $submenu = false;

                        foreach( $menuitems as $item ):

                            $link = $item->url;
                            $title = $item->title;
                            // item does not have a parent so menu_item_parent equals 0 (false)
                            if ( !$item->menu_item_parent ):

                            // save this id for later comparison with sub-menu items
                            $parent_id = $item->ID;
                        ?>

                            <li class="item">
                                <div class="uppercase mt-8 mx-3">
                                    <div class="flex items-center justify-between mb-3">
                                        <a href="<?php echo $link; ?>" class="block h-full">
                                            <div class="">
                                                <div class="mr-4 justify-between leading-4">
                                                    <div>
                                                        <?php echo $title; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            <?php
                            endif;

                            if ( $parent_id == $item->menu_item_parent ):

                                if ( !$submenu ):
                                    $submenu = true;
                                    echo '<ul class="sub-menu mt-3 overflow-hidden">';
                                endif;
                            ?>

                                <li class="item">
                                    <a href="<?php echo $link; ?>" class="title  hover:text-FireRed transition-250"><?php echo $title; ?></a>
                                </li>

                                <?php
                                if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ):
                                    echo '</ul>';
                                    $submenu = false;
                                endif;

                            endif;
                            ?>

                            <?php
                            if ( isset($menuitems[ $count + 1 ]->menu_item_parent) && $menuitems[ $count + 1 ]->menu_item_parent != $parent_id):
                                echo '</li>';
                                $submenu = false;
                            endif;
                            $count++;
                        endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
}
