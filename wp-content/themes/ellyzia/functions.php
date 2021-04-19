<?php
if ( !defined('ABSPATH')) exit;

//Include_once all .php in folder in filters
foreach( glob(dirname(__FILE__) . '/hooks-back/*/*.php') as $function_path_filters ) {
    include_once $function_path_filters;
}

//Include_once all .php in actions
foreach( glob(dirname(__FILE__) . '/hooks-back/*.php') as $function_path_actions ) {
    include_once $function_path_actions;
}

//Include_once all .php in folder in filters
foreach( glob(dirname(__FILE__) . '/hooks-end/*/*.php') as $function_path_filters ) {
    include_once $function_path_filters;
}

//Include_once all .php in actions
foreach( glob(dirname(__FILE__) . '/hooks-end/*.php') as $function_path_actions ) {
    include_once $function_path_actions;
}
