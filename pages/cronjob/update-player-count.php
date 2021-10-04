<?php

/**NEEDS CRONTAB!!!**/
include(dirname(__FILE__)."/../../../sql.php");

/*minecraft*/
$jsonData = file_get_contents("https://api.minetools.eu/ping/ifheroes.de/25565");
$data = json_decode($jsonData, true);

$count = $data['players']['online'];
$maxcount = $data['players']['max'];

mysqli_query($conn, "UPDATE user_online SET count='$count', maxcount='$maxcount' WHERE service = 'minecraft';");

?>
