
<?php
   $searchquery = mysqli_real_escape_string($conn, $_POST['search']);

   $result_search_feedback = mysqli_query($conn, "SELECT feedback.uuid, feedback.ID, feedback.title, feedback.category, feedback.votes,  feedback.date, feedback.closed, feedback.text, users.username,  users.verified, users.avatar 
                                                FROM users LEFT JOIN feedback ON users.uuid=feedback.uuid WHERE feedback.title like '%$searchquery%' OR feedback.text LIKE '%$searchquery%' ORDER BY feedback.date  DESC LIMIT 100");
   $row_cnt = mysqli_num_rows($result_search_feedback);
   while ($row_search_feedback = mysqli_fetch_array($result_search_feedback)) {
                                  ///VARS
                                  $temp_ID_tickets = $row_search_feedback['ID'];
                                  $temp_CAT_tickets = $row_search_feedback['category'];
                                  $temp_DATE_tickets = $row_search_feedback['date'];
?><br>

        <!--Feedback1-->
        <div class="shadow-box" onclick="location.href='index.php?page=feedback-created&id=<?php echo $row_search_feedback['ID']; ?>';">
            <div class="row">
                <div class="col-sm">
                    <p>
                    <a href="index.php?page=profile&user=<?php echo $row_search_feedback['username']; ?>"><img class="avatar" src="<?php echo $row_search_feedback['avatar']; ?>"></a>
                                            <!--VERIFIED-->
                                            <?php
                                            if (isset($row_search_feedback['verified']) && $row_search_feedback['verified'] !== '0') { ?>
                                                <img src="<?php echo $website_url;?>/assets/img/verified.svg" class="verified">
                                            <?php } ?>
                                            <!--VERIFIED-->
                    </p>
                </div>
                <div class="col-sm">
                    <p>
                        <b><?php echo $row_search_feedback['title'];?></b>
                        <br>
                        <small>Created by <a href="index.php?page=profile&user=<?php echo $row_search_feedback['username']; ?>"><?php echo $row_search_feedback['username'];?></a>
                                <br>
                                Category: <?php echo $row_search_feedback['category'];?>
                            </small>
                    </p>
                </div>
                <div class="col-sm">
                <?php
                  if (isset($row_search_feedback['closed']) && $row_search_feedback['closed'] !== '0') { ?>
                     <br>Last reply:
                     <?php
                     $result_get_reply = mysqli_query($conn, "SELECT feedback_reply.uuid_creator, feedback_reply.ID, feedback_reply.feedbackid, feedback_reply.date, users.username FROM users LEFT JOIN feedback_reply ON users.uuid=feedback_reply.uuid_creator WHERE feedback_reply.feedbackid = '$temp_ID_tickets'  ORDER BY feedback_reply.ID DESC LIMIT 1");
                     if (mysqli_num_rows($result_get_reply) == 0) {
                        echo "None";
                     } else {
                        while ($row_get_reply = mysqli_fetch_array($result_get_reply)) {
                     ?>
                     <?php
                     echo $row_get_reply['username'];
                        }
                     }
                  }?>
                </div>
                <div class="col-sm">
                    <p>
                        <h6>Votes: <?php echo $row_search_feedback['votes'];?></h6>
                        <small style="color: rgb(133, 133, 133); ">Erstellt: <?php echo $row_search_feedback['date'];?></small>
                    </p>
                </div>
            </div>
        </div>

   <?php
   }

