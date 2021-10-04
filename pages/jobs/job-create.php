
<!--START-->

<body>
<center>
        <h1>Bewirb dich jetzt!</h1>
        <text style="font-weight: 100; font-size: larger;">Das beste kommt noch! </text>
    </center>
    <br>
   
      <!--CHECK SESSION-->
<?php
      if(!isset($_SESSION['username'])){
         echo "<center>Du brauchst einen Account. <a href='?page=register'>Hier klicken</a></center>";
                     
      }else{
            $result = mysqli_query($conn, "SELECT * from jobs WHERE uuid = '$uuid' ORDER BY ID DESC LIMIT 1");
            if (mysqli_num_rows($result) == 0) {
               include('class/forms.php');
            } else {
               while ($row = mysqli_fetch_array($result)) {
                  if($row['closed'] == 0){
                  ?><center>
                     <br><br>
                     <h5>Deine Bewerbung wurde gespeichert.<br>Wir werden dich Privat auf Discord benachrichtigen,<br> sobald wir deine Bewerbung bearbeiten.</h5>
                  </center><?php
                  }elseif($row['closed'] == 1){
                     include('class/forms.php');
                  }elseif($row['closed'] == 2){
                     include('class/forms.php');
                  }
               }
            }
         }
            ?>

         </div>
         <div class="col-sm"></div>
      </div>
   </div>
   </div>
   </div>
</body>