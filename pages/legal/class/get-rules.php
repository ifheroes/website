<?php

if(isset($_GET['game'])){
    echo "Das Game ist " . $_GET['game'];
}elseif($_GET['game'] == NULL){

    echo "game ist leer";
} else {
    echo "Keine Regeln für dich!";
}
?>
