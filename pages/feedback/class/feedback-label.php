<br> 
             <div class="shadow-box" onclick="location.href='index.php?page=feedback-created&id=<?php echo $row_select_feedback['ID']; ?>';">
             <div class="row">
                 <div class="col-sm">
                     <p>
                     <a href="index.php?page=profile&user=<?php echo $row_select_feedback['username']; ?>"><img class="avatar" src="<?php echo $row_select_feedback['avatar']; ?>"></a>
                                             <!--VERIFIED-->
                                             <?php
                                             if (isset($row_select_feedback['verified']) && $row_select_feedback['verified'] !== '0') { ?>
                                                 <img src="<?php echo $website_url;?>/assets/img/verified.svg" class="verified">
                                             <?php } ?>
                                             <!--VERIFIED-->
                     </p>
                 </div>
                 <div class="col-sm">
                     <p>
                         <b><?php echo $row_select_feedback['title'];?></b>
                         <br>
                         <small><?php echo $lang['created_by_feed'];?> <a href="index.php?page=profile&user=<?php echo $row_select_feedback['username']; ?>"><?php echo $row_select_feedback['username'];?></a>
                                 <br>
                                 <?php echo $lang['category_feed'];?> <?php echo $row_select_feedback['category'];?>
                             </small>
                     </p>
                 </div>
                 <div class="col-sm">
                      <br>Status:
                      <?php
                      $result_get_reply = mysqli_query($conn, "SELECT feedback_reply.uuid_creator, feedback_reply.ID, feedback_reply.team, feedback_reply.feedbackid, feedback_reply.date, users.username FROM users LEFT JOIN feedback_reply ON users.uuid=feedback_reply.uuid_creator WHERE feedback_reply.feedbackid = '$temp_ID_tickets'  ORDER BY feedback_reply.ID DESC LIMIT 1");
                      if (mysqli_num_rows($result_get_reply) == "0") {
                        echo "Bisher keine Antwort";

                      } else {
                        while ($row_get_reply = mysqli_fetch_array($result_get_reply)) {
                            if($row_get_reply['team'] == '1'){
                                    echo " Angenommen";
                                } elseif($row_get_reply['team'] == '2'){
                                    echo "Abgelehnt ";
                                }
                            }
                      }
                   ?>
                 </div>
                 <div class="col-sm">
                     <p>
                         <h6><?php echo $lang['votes_feed'];?> <?php echo $row_select_feedback['votes'];?></h6>
                         <small style="color: rgb(133, 133, 133); "><?php echo $lang['created_date_feed'];?> <?php echo $row_select_feedback['date'];?></small>
                     </p>
                 </div>
             </div>
         </div>
