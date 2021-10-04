<?php

/**NEEDS CRONTAB!!!**/
include(dirname(__FILE__)."/../../../sql.php");

///Select all UUIDS
$result2 = mysqli_query($conn, "SELECT uuid, username from users;");
        while ($row = mysqli_fetch_array($result2)) {

                $row_uuid = $row['uuid'];
                $row_username = $row['username'];
                        ///GET USER NAME FROM API
                        $json_response = file_get_contents("https://sessionserver.mojang.com/session/minecraft/profile/$row_uuid");
                        $data = json_decode($json_response);
                        $mcUserNAMEUpdated = $data->name; 
        }

        ///UPDATE USERNAME
        mysqli_query($conn, "UPDATE users SET username='$mcUserNAMEUpdated' WHERE uuid='$row_uuid' AND username NOT LIKE '$mcUserNAMEUpdated';");
        mysqli_query($conn, "UPDATE users SET avatar='https://minotar.net/helm/$mcUserNAMEUpdated/100.png' WHERE uuid='$row_uuid' AND avatar IS NULL;");

        
?>


