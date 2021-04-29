<?php
if ( !defined('ABSPATH')) exit;

// Add menu header primary
add_action( 'init', '_menu_primary' );
function _menu_primary() {
    register_nav_menus(
        array(
            'primary-menu' => 'Header',
            'second-footer-menu' => 'Footer',
        )
    );
}
