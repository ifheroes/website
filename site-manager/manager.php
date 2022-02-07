<?php

$file = file_get_contents("deutsch.json"); //import file
    $decode = json_decode($file, true);

    var_dump($decode);
    echo $decode->german->;
?>
