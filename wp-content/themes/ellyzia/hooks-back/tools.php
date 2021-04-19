<?php
if ( !defined('ABSPATH')) exit;

function init_curl($url, $decode) {

    $optionsCurl = array (
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS => "",
    );

    $curl = curl_init();
    curl_setopt_array($curl, $optionsCurl);
    $responseCurl = curl_exec($curl);

    if ($responseCurl == false) {
        $errCurl = curl_error($curl);
        var_dump($errCurl);
    }

    if ($decode == true) {
        $responseCurl = json_decode($responseCurl, true);
    }

    curl_close($curl);

    return $responseCurl;
}
