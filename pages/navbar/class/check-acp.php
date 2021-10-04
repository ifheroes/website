<?php
            $result = mysqli_query($conn, "SELECT * from users WHERE uuid ='$uuid';");
                if (mysqli_num_rows($result) == 0) {
                } else {
                    while ($row = mysqli_fetch_array($result)) {
        if ($row['group'] == 'RANK_ADMIN') {
            ?><hr class="font-color"><a class="link-footer " href="index.php?page=acp-index"><b>ACP</b></a><?php

        } elseif ($row['group'] == 'RANK_HEAD') {
            ?><hr class="font-color"><a class="link-footer" style="color:whitesmoke;" href="index.php?page=acp-index"><b>ACP</b></a><?php

        } elseif ($row['group'] == 'RANK_MODERATOR') {
            ?><hr class="font-color"><a class="link-footer" style="color:whitesmoke;" href="index.php?page=acp-index"><b>ACP</b></a><?php

        } elseif ($row['group'] == 'RANK_STAFF') {
            ?><hr class="font-color"><a class="link-footer" style="color: whitesmoke;" href="index.php?page=acp-index"><b>ACP</b></a><?php
        }else { 

    }
  }
}

?>