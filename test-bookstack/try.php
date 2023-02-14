<?php

$api_url = "https://team.wiki.ifheroes.de/api/pages/12";
$token = "";
$api_key = "";


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

echo $books['name']. "<br><br>";
echo $books['html']. "<br><br>";
echo $books['html']. "<br><br>";
#$count = count($books['data']);


/* $i = '0'; # Count 

while ($i < $count) {

    $real_count = $i++;

    echo $books['data'][$real_count]['name'] . "<br><br>";
} */
?>
