<?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents('http://localhost/export/07-13-2022_13-29-42.json', true); ///??? wie einbinden as row???
// JSON decode
$obj = json_decode($data);

$news_title = $obj->title; ///constant for title in news overview
$news_text = $obj->text; ///constant for text in news overview
$news_image = $obj->image; ///constant for image in news overview


 ?>