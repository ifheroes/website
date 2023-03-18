<?php

//// only function not working stand alone!
    $headers = array(
        "Authorization: Token " . $api_key . ":" . $token,
        "Content-Type: application/json"
    );

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $api_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    
    $books = json_decode($result, true);
?>