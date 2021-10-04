<p>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="shadow-box" onclick="location.href='index.php?page=feedback-overview-cat&cat=Minecraft';">
                <center>
                    <p><br>
                        <img class="avatar" style="width: 100px; height:100px;" src="<?php echo $website_url;?>/assets/img/Screenshot_1.png">
                    </p>
                    <h6 style="color: rgb(133, 133, 133);"><?php echo $lang['games_server_feed'];?>
                        <span class="badge-1">
                        <?php
                           $result = mysqli_query($conn, "SELECT * FROM feedback WHERE category='Minecraft'");
                           $num_rows = mysqli_num_rows($result);
                           echo "$num_rows";
                        ?>   
                        </span>
                    </h6>
                </center>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="shadow-box" onclick="location.href='index.php?page=feedback-overview-cat&cat=Discord';">
                <center>
                    <p><br>
                        <img class="avatar" style="width: 100px; height:100px;"  src="<?php echo $website_url;?>/assets/img/voice-feedback2.png">
                    </p>
                    <h6 style="color: rgb(133, 133, 133);">Discord
                        <span class="badge-1">
                        <?php
                           $result = mysqli_query($conn, "SELECT * FROM feedback WHERE category='Discord'");
                           $num_rows = mysqli_num_rows($result);
                           echo "$num_rows";
                        ?>   
                        </span>
                    </h6>
                </center>
            </div>
            <br>
        </div>
        <div class="col-sm">
            <div class="shadow-box" onclick="location.href='index.php?page=feedback-overview-cat&cat=Webseite';">
                <center>
                    <p><br>
                        <img class="avatar" style="width: 100px; height:100px;"  src="<?php echo $website_url;?>/assets/img/Screenshot_5.png">
                    </p>
                    <h6 style="color: rgb(133, 133, 133);"><?php echo $lang['web_server_feed'];?>
                        <span class="badge-1">
                        <?php
                           $result = mysqli_query($conn, "SELECT * FROM feedback WHERE category='Webseite'");
                           $num_rows = mysqli_num_rows($result);
                           echo "$num_rows";
                        ?>   
                        </span>
                    </h6>
                </center>
            </div>
        </div>
        <div class="col-sm">
            <br class="hide-pc">
            <div class="shadow-box" onclick="location.href='index.php?page=feedback-overview-cat&cat=Anderes';">
                <center>
                    <p><br>
                        <img class="avatar" style="width: 100px; height:100px;"  src="<?php echo $website_url;?>/assets/img/Screenshot_3.png">
                    </p>
                    <h6 style="color: rgb(133, 133, 133);"><?php echo $lang['other_server_feed'];?>
                        <span class="badge-1">
                        <?php
                           $result = mysqli_query($conn, "SELECT * FROM feedback WHERE category='Anderes'");
                           $num_rows = mysqli_num_rows($result);
                           echo "$num_rows";
                        ?>   
                        </span>
                    </h6>
                </center>
            </div>
        </div>
    </div>
</p>
</div>
<hr>
<br>

