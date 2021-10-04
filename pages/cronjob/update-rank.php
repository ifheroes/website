<?php

/**NEEDS CRONTAB!!!**/
include(dirname(__FILE__)."/../../../sql.php");


///GET USER RANK
$result = mysqli_query($conn_stats, "SELECT uuid, rank FROM Rank;");
        while ($row = mysqli_fetch_array($result)) {
        
                $row_uuid = $row['uuid'];
                $mcUserGroupUpdate = $row['rank']; 
        
        ///UPDATE GAME RANK
        mysqli_query($conn, "UPDATE users SET `group`='$mcUserGroupUpdate' WHERE uuid = '$row_uuid' AND `group` NOT LIKE '$mcUserGroupUpdate'");
} 

        

?>