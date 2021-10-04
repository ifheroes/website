
<!--START-->
<div class="col-sm">
                    <!--CHECK SESSION-->
                <?php if(!isset($_SESSION['username'])){?><meta http-equiv="refresh" content="0; URL=index.php?page=login"><?php }else{?>
<body>
    <center>
        <h1>Community Feedback</h1>
        <text style="font-weight: 100; font-size: larger;">Schicke uns deine Ideen, für ein besseres infinityheroes</text>
    </center>
    <br>
    <!--Types-->
    <div class="container">
        <div class="row">



         <div class="col-sm">
               <br>
                  <a href="javascript:history.back()" class="font-color">
                     <i class="fas fa-angle-left"></i> Zurück zur Übersicht
                  </a>
               <br> 
            </div>
         <div class="col-7 hide-mobile">
<form action="index.php?page=feedback-create&reply" method="post">
   <input type="text" name="title" placeholder=" Gib deiner Idee einen Titel " required maxlength="100">
   <br><br>

   <select name="select" required>
                        <optgroup label="Wähle einen Bereich:">
                            <option value="Minecraft">Minecraft</option>
                            <option value="Discord">Discord</option>
                            <option value="Webseite">Webseite</option>
                            <option value="Anderes">Anderes</option>
                        </optgroup>

                    </select>
               <br>
            <br>
         <textarea type="text" rows="8" name="textarea" placeholder="Beschreibe deinen Vorschlag..." required minlength=100 maxlength="4000"></textarea>
            <div id="the-count">
                           <span id="current">0</span>
                           <span id="maximum">/ 4000</span> - (min. 100 Buchstaben)
                        </div>
                        <script>
                           $('textarea').keyup(function() {
 
                              var characterCount = $(this).val().length,
                                 current = $('#current'),
                                 maximum = $('#maximum'),
                                 theCount = $('#the-count');
 
                              current.text(characterCount);
 
 
                              /*This isn't entirely necessary, just playin around*/
                              if (characterCount < 70) {
                                 current.css('color', '#666');
                              }
                              if (characterCount > 4000 && characterCount < 1000) {
                                 current.css('color', '#6d5555');
                              }
                              if (characterCount > 4500 && characterCount < 2000) {
                                 current.css('color', '#793535');
                              }
                              if (characterCount > 4700 && characterCount < 3000) {
                                 current.css('color', '#841c1c');
                              }
                              if (characterCount > 5000 && characterCount < 4000) {
                                 current.css('color', '#8f0001');
                              }
 
                              if (characterCount >= 5000) {
                                 maximum.css('color', '#8f0001');
                                 current.css('color', '#8f0001');
                                 theCount.css('font-weight', 'bold');
                              } else {
                                 maximum.css('color', '#666');
                                 theCount.css('font-weight', 'normal');
                              }
 
 
                           });
                        </script>
            <br>
         <br>
   <center>
   <input type="submit"  class="btn-grad-top"  value="Erstellen" style="color: white; border: none;">
   
   </center>
</form>

<?php
///////////////////////////////////////////////////////////////////////////////
///INSERT INTO DB REPLY
///////////////////////////////////////////////////////////////////////////////
 
if (isset($_GET['reply'])) {
 
 
   if (empty($_POST['textarea'])) {
      echo "Please insert a reply";
   } else {
 
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $text = mysqli_real_escape_string($conn, $_POST['textarea']);
      $category = mysqli_real_escape_string($conn, $_POST['select']);
 
      $sql = "INSERT INTO feedback (uuid, title, text, category) VALUES ('$uuid', '$title', '$text', '$category')";
      if ($conn->query($sql) === TRUE) {

         $result = mysqli_query($conn, "SELECT * from feedback WHERE uuid ='$uuid' ORDER by id desc limit 1 ;");
         while ($row = mysqli_fetch_array($result)) {

            //DISCORD WEBHOOK
            $hook_title = $row['title'];
            $hook_text = substr($row['text'], 0, 100);
            $hook_ID = $row['ID'];
/*             include('class/hook-feedback-create.php');
 */           ?> 
           <meta http-equiv="refresh" content="0; URL=index.php?page=feedback-created&id=<?php echo $row['ID']; ?>">
           <?php
               
 
            }
      } else {
 
 
         }
      }
   }
 
?>
            </div>
            </form>


            <div class="col-sm">

            </div>
        </div>
    </div>
    </div>
    </div>




    </div>
    </div>
</body>
<?php }?>
