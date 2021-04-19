<?php
if ( !defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', '_enqueu_style');
function _enqueu_style() {
	wp_enqueue_style('_enqueu_style', get_template_directory_uri().'/BuildFrontAsset/dist/css/main.min.css');
	wp_enqueue_script('_enqueu_script', get_template_directory_uri().'/BuildFrontAsset/dist/js/main.min.js');
}