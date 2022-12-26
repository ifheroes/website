<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://team.wiki.ifheroes.de/api/pages/10',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Token name:token',
    'name: token'
  ),
));



echo curl_exec($curl);

curl_close($curl);