<!--START-->

<body>
   <center>
      <h1>Community Feedback</h1>
      <text style="font-weight: 100; font-size: larger;">Schicke uns deine Ideen, für ein besseres infinityheroes</text>
   </center>
   <br>
   <!--Types-->
   <div class="container">
      <div class="row">
         <br>
         <div class="col-12">
            <br>
            <a href="index.php?page=feedback-overview" class="font-color">
                <i class="fas fa-angle-left"></i> Zurück zur Übersicht
            </a>
            <br>
         </div>
         <div class="col-sm hide-mobile">
         </div>
         <div class="col-sm hide-mobile">
         </div>
         <!---->


         <?php
         ///////////////////////////////////////////////////////////////////////////////
         //////////////////////CHECK IF TICKET EXIST/////////////////////////////////////////////
         ///////////////////////////////////////////////////////////////////////////////

         if (isset($_GET['id'])) {
            $ID = $_GET['id'];
         } else {
            $ID = "0";
         }


         ///////////////////////////////////////////////////////////////////////////////
         //////////////////////REQUEST PART/////////////////////////////////////////////
         ///////////////////////////////////////////////////////////////////////////////

         $result = mysqli_query($conn, "SELECT feedback.ID, feedback.uuid, feedback.text, feedback.title, feedback.date, feedback.closed, feedback.category, feedback.votes, users.username, users.avatar, users.group, users.verified FROM users LEFT JOIN feedback ON users.uuid=feedback.uuid WHERE  feedback.ID ='$ID';");
         if (mysqli_num_rows($result) == 0) {
         ?>
            Nichts gefunden.
            <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-overview">

            <?php
         } else {
            while ($row = mysqli_fetch_array($result)) {

               include('pages/main/rank_manager/user_rank_profile.php');
            ?>
               <div class="col-12">
                  <br><br>
                  <div class="shadow-box" style="cursor: unset;">
                     <div class="container ">
                        <div class="row ">
                           <div class="col-sm-7 left">
                              <span class="badge badge-pill badge-light" style="font-size: 20px;">Stimmen: <?php echo $row['votes']; ?></span>
                              <br>
                              <br>
                              <h4>
                                 <div style="word-wrap: break-word;">
                                    <?php echo strip_tags($row['title']); ?>
                                 </div>
                                 <?php if (isset($row['closed']) && $row['closed'] !== '0') { ?>
                                    <i class="fas fa-lock font-color"></i>
                              </h4>
                           <?php } else { ?></h4><?php } ?>
                           <small>Feedback für <?php echo $row['category']; ?></small>
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
                                    <span class="badge badge-pill badge-light"><?php echo $global_var_rank; ?></span>
                                    <br>
                                    <a href="index.php?page=profile&user=<?php echo $row['username']; ?>">
                                       <text class="font-color"><?php echo $row['username']; ?></text>
                                    </a>
                                    <br>
                                    <small class="font-color">Datum: <?php echo $row['date']; ?></small>
                                    <br>
                                 </p>
                              </center>
                              <!--CHECK SESSION-->
                              <?php if (!isset($_SESSION['username'])) {
                                 ?>
                                 <center>
                                    <a href="index.php?page=login">
                                       <input type="submit" class="btn-grad-top" style="color: white; border: none; border-radius: 10px; padding: 9px;" value=" Vote "></input>
                                    </a>
                                 </center>
                              <?php
                              } else { ?>
                                 <center>
                                    <a href="index.php?page=feedback-created&id=<?php echo $ID ?>&vote">
                                       <input type="submit" class="btn-grad-top" style="color: white; border: none; border-radius: 10px; padding: 9px;" value=" Vote "></input>
                                    </a>
                                 </center>
                              <?php } ?>
                              <br>
                           </div>
                        </div>
                     </div>
                     <!--CHECK SESSION-->
                     <?php if (!isset($_SESSION['username'])) {
                     } else { ?>
                        <hr>
                        <?php
                        ///check if reported
                        $result_check_group_feedback = mysqli_query($conn, "SELECT * from reports WHERE feedback_ID ='$ID' AND closed ='0';");
                        if (mysqli_num_rows($result_check_group_feedback) == 0) { ?>
                           <a href="index.php?page=feedback-created&id=<?php echo $ID ?>&report=<?php echo $row['uuid']; ?>" style="color: grey;margin-right: 9px;">Melden</a>
                        <?php } else { ?>
                           <img width="26px" src="<?php echo $website_url; ?>/assets/img/die-info.svg"> Dieser Beitrag oder eine Antwort in diesem Beitrag wurden gemeldet.
                     <?php }
                     } ?>
                     <!--ADMIN COMMANDS-->
                     <?php
                     ///check user group
                     $result_check_group_feedback = mysqli_query($conn, "SELECT * from users WHERE uuid ='$uuid';");
                     if (mysqli_num_rows($result_check_group_feedback) == 0) {
                     } else {

                        while ($row_check_group_feedback = mysqli_fetch_array($result_check_group_feedback)) {
                           if (isset($_SESSION['group'])) {
                              if ($_SESSION['group'] == 'RANK_ADMIN' xor $_SESSION['group'] == 'RANK_MODERATOR' xor $_SESSION['group'] == 'RANK_HEAD') { ?>
                                 <a href="index.php?page=feedback-created&id=<?php echo $ID ?>&close" style="color: grey;margin-right: 9px;"> - Schließen</a>
                                 <a href="index.php?page=feedback-created&id=<?php echo $ID ?>&delete" style="color: grey;margin-right: 9px;">Löschen</a>
               <?php } else {
                              }
                           }
                        }
                     }
                  }
               }
               ?>
                  </div>
               </div>
      </div>
   </div>
   </div>
   <p>

      <br>

      <?php
      $result = mysqli_query($conn, "SELECT * FROM feedback_reply WHERE feedbackid = '$ID';");
      while ($row = mysqli_fetch_array($result)) {
         if ($row['team'] == '0') {
         } elseif ($row['team'] == '1') {
            include('class/f-see-team.php');
         } elseif ($row['team'] == '2') {
            include('class/f-see-team.php');
         }
      }
      ?>


      <?php

      ///////////////////////////////////////////////////////////////////////////////
      //////////////////////Close feedback/////////////////////////////////////////////
      ///////////////////////////////////////////////////////////////////////////////
      if (isset($_GET['close'])) {
         if (!isset($_SESSION['username'])) {
         } else {
            $result_close_feedback = mysqli_query($conn, "SELECT * from users WHERE uuid ='$uuid';");
            if (mysqli_num_rows($result_close_feedback) == 0) {
            } else {
               while ($row_close_feedback = mysqli_fetch_array($result_close_feedback)) {
                  if (isset($_SESSION['group'])) {
                     if ($_SESSION['group'] == 'RANK_ADMIN' xor $_SESSION['group'] == 'RANK_MODERATOR' xor $_SESSION['group'] == 'RANK_HEAD') {
                        $sql_close_feedback = mysqli_query($conn, "UPDATE feedback SET closed = '1' WHERE ID = '$ID';");
      ?>
                        <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo $ID ?>">
                     <?php
                     } else {
                     ?>
                        <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo $ID ?>">
                     <?php
                     }
                  }
               }
            }
         }
      }
      ///////////////////////////////////////////////////////////////////////////////
      //////////////////////delete feedback/////////////////////////////////////////////
      ///////////////////////////////////////////////////////////////////////////////
      if (isset($_GET['delete'])) {
         if (!isset($_SESSION['username'])) {
         } else {
            $result_delete_feedback = mysqli_query($conn, "SELECT * from users WHERE uuid ='$uuid';");
            if (mysqli_num_rows($result_delete_feedback) == 0) {
            } else {

               while ($row_delete_feedback = mysqli_fetch_array($result_delete_feedback)) {
                  if (isset($_SESSION['group'])) {
                     if ($_SESSION['group'] == 'RANK_ADMIN' xor $_SESSION['group'] == 'RANK_MODERATOR' xor $_SESSION['group'] == 'RANK_HEAD') {
                        $sql_delete_feedback = mysqli_query($conn, "DELETE FROM feedback WHERE ID = '$ID';");
                        $sql_delete_feedback2 = mysqli_query($conn, "DELETE FROM feedback_reply WHERE feedbackid = '$ID';");
                     ?>
                        <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo $ID ?>">
                     <?php
                     } else {
                     ?>
                        <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo $ID ?>">
            <?php
                     }
                  }
               }
            }
         }
      }
      ///////////////////////////////////////////////////////////////////////////////
      //////////////////////REPORT feedback/////////////////////////////////////////////
      ///////////////////////////////////////////////////////////////////////////////
      if (isset($_GET['report'])) {
         if (!isset($_SESSION['username'])) {
         } else {
            $reportedID = $_GET['id'];

            $result_report_feedback = mysqli_query($conn, "INSERT INTO reports (uuid_creator, feedback_ID, closed) VALUES ('$uuid', '$reportedID', '0');");
            ?>
            <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo $ID ?>">
            <?php
         }
      }

      ///////////////////////////////////////////////////////////////////////////////
      //////////////////////VOTE FEEDBACK/////////////////////////////////////////////
      ///////////////////////////////////////////////////////////////////////////////
      if (isset($_GET['vote'])) {
         if (!isset($_SESSION['username'])) {
         } else {
            ///////////////////////////////////////////////////////////////////////////////
            //////////////////////CHECK IF THE VOTE EXISTS FEEDBACK/////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////
            $result = mysqli_query($conn, "SELECT * FROM feedback_votes WHERE feedback_ID = '$ID' AND uuid_creator ='$uuid';");
            if (mysqli_num_rows($result) == "0") {

               $sql_add_vote = mysqli_query($conn, "INSERT INTO feedback_votes (uuid_creator, feedback_ID) VALUES ('$uuid', '$ID');");
               $sql_add_vote2 = mysqli_query($conn, "UPDATE feedback SET votes = votes+1 WHERE ID = '$ID';");

            ?>
               <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo  $ID; ?>">
            <?php
            } else {
            ?>
               <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo  $ID; ?>">
      <?php
            }
         }
      }
      ?>

      <?php
      ///////////////////////////////////////////////////////////////////////////////
      ///REPLY
      ///////////////////////////////////////////////////////////////////////////////



      $result = mysqli_query($conn, "SELECT feedback_reply.uuid_creator, feedback_reply.text, feedback_reply.team, feedback_reply.ID AS feedbackreID, feedback_reply.feedbackid, feedback_reply.date, 
                              users.username, users.group, users.verified, users.avatar 
                              FROM users LEFT JOIN feedback_reply ON users.uuid=feedback_reply.uuid_creator WHERE feedback_reply.feedbackid = '$ID' AND feedback_reply.team = '' ORDER BY feedback_reply.date");
      while ($row = mysqli_fetch_array($result)) {
      ?>
         <!--REPLY TEAM-->

         <div class="container ">
            <div class="row ">
               <div class="col-sm-7">
                  <br>
                  <div style="word-wrap: break-word;">
                     <?php echo nl2br(strip_tags($row['text'])); ?>
                  </div>
               </div>
               <div class="col-sm ">
               </div>
               <div class="col-sm ">
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
                           <text ><?php echo $row['username']; ?></text>
                        </a>
                        <br>
                        <small class="font-color">Date: <?php echo $row['date']; ?></small>
                        <br>
                     </p>
                  </center>

                  <br>
               </div>
            </div>
            <br>
            <?php
            if (isset($_SESSION['group'])) {
               if ($_SESSION['group'] == 'RANK_ADMIN' xor $_SESSION['group'] == 'RANK_MODERATOR' xor $_SESSION['group'] == 'RANK_HEAD') {
            ?>
                  <a href="index.php?page=feedback-created&id=<?php echo $ID; ?>&delete-reply=<?php echo $row['feedbackreID']; ?>" style="color: grey;margin-right: 9px;">Antwort Löschen</a>

                  <hr>
                  <br>
                  <br>
         </div>
         </div>

   </p>
   <?php
               }
            }
         }
         ///////////////////////////////////////////////////////////////////////////////
         //////////////////////delete reply/////////////////////////////////////////////
         ///////////////////////////////////////////////////////////////////////////////
         if (isset($_GET['delete-reply'])) {
            if (!isset($_SESSION['username'])) {
            } else {
               $result_delete_feedback_reply = mysqli_query($conn, "SELECT * from users WHERE uuid ='$uuid';");
               if (mysqli_num_rows($result_delete_feedback_reply) == 0) {
               } else {
                  $ID_DELETE = $_GET['delete-reply'];
                  while ($row_delete_feedback_reply = mysqli_fetch_array($result_delete_feedback_reply)) {
                     if (isset($_SESSION['group'])) {
                        if ($_SESSION['group'] == 'RANK_ADMIN' xor $_SESSION['group'] == 'RANK_MODERATOR' xor $_SESSION['group'] == 'RANK_HEAD') {
                           $sql_delete_feedback_reply = mysqli_query($conn, "DELETE FROM feedback_reply WHERE ID = '$ID_DELETE';");
   ?>
            <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo $ID ?>">
         <?php
                        } else {
         ?>
            <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo $ID ?>">
<?php
                        }
                     }
                  }
               }
            }
         }

         ///////////////////////////////////////////////////////////////////////////////
         ///CHECK IF TICKET CLOSED
         ///////////////////////////////////////////////////////////////////////////////

         $result = mysqli_query($conn, "SELECT * from feedback WHERE ID ='$ID';");
         while ($row = mysqli_fetch_array($result)) {
            if (isset($row['closed']) && $row['closed'] !== '0') {
            } else {
               echo "<center><h4>Unser Team, hat auf diesen Beitrag noch nicht reagiert!</h4></center> ";

               if (!isset($_SESSION['username'])) {
               } else {
                  $result_get_feedback_reply = mysqli_query($conn, "SELECT count('team') as total from feedback_reply WHERE feedbackid ='$ID';");
                  while ($row = mysqli_fetch_array($result_get_feedback_reply)) {
                     if ($row['total'] == '0') {
                        if (isset($_SESSION['group'])) {
                           if ($_SESSION['group'] == 'RANK_ADMIN' xor $_SESSION['group'] == 'RANK_MODERATOR' xor $_SESSION['group'] == 'RANK_HEAD') {
                              include('class/f-c-reply-team.php');
                           }
                        }
                     }
                  }
               }
            }
         } ?>


<?php
///////////////////////////////////////////////////////////////////////////////
///INSERT INTO DB REPLY
///////////////////////////////////////////////////////////////////////////////

if (isset($_GET['reply'])) {
   if (!isset($_SESSION['username'])) {
   } else {

      if (empty($_POST['textarea'])) {
         echo "<center>Bitte verfasse eine Antwort</center>";
      } else {
         $reply = mysqli_real_escape_string($conn, $_POST['textarea']);
         $team_state = mysqli_real_escape_string($conn, $_POST['team']);
         $sql = "INSERT INTO feedback_reply (uuid_creator, text, feedbackid, team) VALUES ('$uuid', '$reply', '$ID', '$team_state')";
         if ($conn->query($sql) === TRUE) {
            mysqli_query($conn, "UPDATE feedback SET closed ='1' WHERE ID='$ID';");
?>
            <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo "$ID"; ?>#down">
<?php
         } else {
         }
      }
   }
}

?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>