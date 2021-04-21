<?php
if ( !defined('ABSPATH')) exit;


add_filter("login_redirect", "ell_redirct_admin", 10, 3);
function ell_redirct_admin($redirect_to, $request, $user)
{

    if(is_array($user->roles) && in_array('editor', $user->roles))
    {
        return site_url('/ajouter-des-produits/');
    }

    return home_url();
}

add_filter('show_admin_bar' , 'wpc_show_admin_bar');
function wpc_show_admin_bar()
{
   $user_info = wp_get_current_user();

   if ($user_info->roles[0] != 'administrator') {
       return false;

   }
   else
    {
        return true;

    }
}
