<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);

if ($lang == 'de') {
include_once('german.php');
}elseif ($lang == 'en') {
include_once('german.php');
}else{
    include_once('german.php');
}
?>