<body>
    <!--Jobs übersicht-->


    <?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['jobs'], true);
// JSON decode
$obj = json_decode($data);

?>
<center>
    <h1 class="font-color">Bewerben</h1>
    <text class="font-color">Komm in unsere Team-Cave 🦇 </text>
</center>
<br>

<div class="container">
    <div class="row">
        <?php

        foreach ($obj as $mydata) ///Get data foreach entry in lines etc.
        {

            if ($mydata->active == "true") { //Check if desc is online if not show nothing

        ?>
                <!--HTML elements-->
                <div class="col-sm">
                    <div class="shadow-box-blog" style="cursor: auto;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $mydata->image_link; ?>') no-repeat center/125% ;">
                        <h3><?php echo $mydata->title . "<br>"; ?></h3>
                    </div>
                    
                    <br>
                    <div class="shadow-box-2">
                        <h5>Deine Aufgabe:</h5>
                        <?php echo $mydata->text . "<br>"; ?> <!--Print out text form specific line-->
                        <!--                             <p>
                                <a href="<?php echo $mydata->link; ?>">Jetzt Bewerben</a>
                            </p> -->
                        <br>
                        <center>
                            <a href="<?php echo $mydata->link; ?>">
                                <input type="submit" class="btn-grad-top" value="JETZT MITMACHEN" style="color: white; border: none;">
                            </a>
                        </center>
                    </div>
                    <br>
                </div>
        <?php

            }
        }
        ?>
     </div>
</div>


</body>