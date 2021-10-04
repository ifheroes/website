<?php

$result = mysqli_query($conn, "SELECT feedback_reply.uuid_creator, feedback_reply.text, feedback_reply.ID AS feedbackreID, feedback_reply.team AS feedbackrteam, feedback_reply.feedbackid, feedback_reply.date, 
                              users.username, users.group, users.verified, users.avatar 
                              FROM users LEFT JOIN feedback_reply ON users.uuid=feedback_reply.uuid_creator WHERE feedback_reply.feedbackid = '$ID' ORDER BY feedback_reply.date");
while ($row = mysqli_fetch_array($result)) {
    include('pages/main/rank_manager/user_rank_profile.php');
?>

    <div class="container">
        <?php
        if ($row['feedbackrteam'] == '1') { ?>
            <div class="shadow-box-stats" style="background-color: #28b548ed;">
                <div class="col-sm ">
                    <div style="color: rgb(255, 255, 255); ">
                        <br>
                        <h5>Angenommen von <?php echo $row['username']; ?></h5>
                    </div>
                </div>
            <?php
        } elseif ($row['feedbackrteam'] == '2') { ?>
                <div class="shadow-box-stats" style="background-color: #dc3545;">
                    <div class="col-sm ">
                        <div style="color: rgb(255, 255, 255); ">
                            <br>
                            <h5>Abgelehnt von <?php echo $row['username']; ?></h5>
                        </div>
                    </div>
                <?php
            }
                ?>
                <div class="shadow-box-2" style="cursor: unset;">
                    <div class="row ">
                        <div class="col-sm-7 left">
                            <br>
                            <br>
                            <div style="word-wrap: break-word;"><?php echo strip_tags(nl2br($row['text'])); ?><br>
                            </div>
                        </div>
                        <div class="col-sm ">
                        </div>
                        <div class="col-sm ">
                            <br>
                            <center>
                                <a href="index.php?page=profile&user=<?php echo $row['username']; ?>"><img class="avatar " src="<?php echo $row['avatar']; ?>"></a>
                                <?php if (isset($row['verified']) && $row['verified'] !== '0') { ?>
                                    <img src="<?php echo $website_url; ?>/assets/img/verified.svg" class="verified">
                                <?php } ?>
                                <!--VERIFIED-->
                                <p>
                                    <br>
                                    <span class="badge badge-pill badge-light "><?php echo $global_var_rank; ?></span>
                                    <br>
                                    
                                    <a href="index.php?page=profile&user=<?php echo $row['username']; ?>">
                                        <text style="color: rgb(133, 133, 133); "><?php echo $row['username']; ?></text>
                                    </a>
                                    <br>
                                    <small style="color: rgb(133, 133, 133); ">Datum: <?php echo $row['date']; ?></small>
                                    <br>
                                </p>
                            </center>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>   
</div>
<br>   
            <?php
        }
            ?>
