<?php ///select cat
if (isset($_GET['cat'])) {
?>
<!--START-->

<body>
    <center>
        <h1 class="font-color">Community Feedback</h1>
        <text class="font-color" style="font-weight: 100; font-size: larger;">Schicke uns deine Ideen, für ein besseres infinityheroes</text>
    </center>
    <br>


    <!--Types-->
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <form action="index.php?page=feedback-overview&search" method="post">
                     <input type="text" name="search" placeholder=" Suchen..." required="">
               </form>  
            </div>
            <div class="col-sm hide-mobile">
            </div>

        </div>
        <p>
        <br>
            <a href="index.php?page=feedback-overview" class="font-color">
                <i class="fas fa-angle-left"></i> Zurück zur Übersicht
            </a>
        <br>
            <br>
        </p>
        <!--SELCET CATEGORY-->
        <p>
            <h3 style="color: rgb(133, 133, 133);">Kategorie <br><text style="font-size: large;"><?php echo $_GET['cat']; ?></text></h3>
        </p>
        <br>
        <!--Feedback1-->

        <?php include('class/f-o-submit.php');?>

<?php



   $result_select_feedback = mysqli_query($conn, "SELECT feedback.uuid, feedback.ID, feedback.title, feedback.votes, feedback.category, feedback.date, 
      feedback.closed, users.username, users.group, users.verified, users.avatar 
      FROM users LEFT JOIN feedback ON users.uuid=feedback.uuid WHERE feedback.category='".$_GET['cat']."' ORDER BY feedback.date DESC LIMIT 10");
   if (mysqli_num_rows($result_select_feedback) == 0) {
      ?>
        <center><h5>Keine Vorschläge hier drin. Erstelle jetzt ein neues <a href="index.php?page=feedback-create">Feedback!</a> ✨</h5></center>
      <?php
   } else {


      while ($row_select_feedback = mysqli_fetch_array($result_select_feedback)) {

         ///VARS
         $temp_ID_tickets = $row_select_feedback['ID'];
         $temp_CAT_tickets = $row_select_feedback['category'];
         $temp_DATE_tickets = $row_select_feedback['date'];


         include('class/feedback-label.php');

      }
   }
}
else
{
?>
<meta http-equiv="refresh" content="0; URL=index.php?page=feedback-overview">
<?php
}
?>
</div>
<br>
<br>