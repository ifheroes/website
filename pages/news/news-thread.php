<?php

if (isset($_GET['file'])) { /// wenn der schlüssel in der URL angegeben ist dann durchlaufe die verzweigung

    $location_thread = "./pages/news/exports/" . $_GET['file']; /// definiere den Ort für den Webseiten Inhalt und hole auch die angabe aus der verzweigung 

    $content = file_get_contents($location_thread); ///hole die dateien 
    $json_thread = json_decode($content, true); /// mache den JSON Inhalt für PHP lesbar
}else{
    ?><meta http-equiv="refresh" content="0; URL=./?page=404"><?php
}

?>

