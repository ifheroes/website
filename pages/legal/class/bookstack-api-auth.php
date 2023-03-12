

<?php
// get content form json file content/sec/api-key.json via system/json_files.php 
$data = file_get_contents($json['api_key'], true);
// JSON decode
$obj = json_decode($data);

$token = $obj->bookstack[0]->token; /// get token form api key file
$api_key = $obj->bookstack[0]->key; /// get key from api file

?>