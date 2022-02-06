<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);/*  get lang from browser settings */

if ($lang == 'de') { /// if the lang is set to german
    include_once('german.php'); //import german
} elseif ($lang == 'en') { /// if lang is set english 
    include_once('german.php'); // import english
} else { //if not german or english
    include_once('german.php'); //import english
}
