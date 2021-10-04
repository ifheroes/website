<?php
   $result_select_feedback = mysqli_query($conn, "SELECT feedback.uuid, feedback.ID, feedback.title, feedback.votes, feedback.category, feedback.date, 
                                                   feedback.closed, users.username, users.group, users.verified, users.avatar 
                                                   FROM users LEFT JOIN feedback ON users.uuid=feedback.uuid WHERE feedback.closed >= '0' ORDER BY feedback.ID DESC LIMIT 10");
   if (mysqli_num_rows($result_select_feedback) == 0) {
   } else {

  
   while ($row_select_feedback = mysqli_fetch_array($result_select_feedback)) {

                                   ///VARS
                                   $temp_ID_tickets = $row_select_feedback['ID'];
                                   $temp_CAT_tickets = $row_select_feedback['category'];
                                   $temp_DATE_tickets = $row_select_feedback['date'];
        
                           include ('feedback-label.php');

    }
}
?>