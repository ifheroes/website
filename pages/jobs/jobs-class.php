<?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['jobs'], true);
// JSON decode
$obj = json_decode($data);


    ///count entries of file
    $count = count($obj);

?>
<div class="container">
        <div class="row">
            <?php
                foreach($obj as $mydata) ///Get data foreach entry in lines etc.
                {
            ?>
                <!--HTML elements-->
                    <div class="col-sm">
                        <div class="shadow-box-blog" style="cursor: auto;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $mydata->image_link;?>') no-repeat center/125% ;">
                            <h3><?php echo $mydata->title . "<br>";?></h3>
                        </div>
                        <br>
                        <div class="shadow-box-2">
                            <h5>Deine Aufgabe:</h5>
                            <?php echo $mydata->text . "<br>";?> <!--Print out text form specific line-->
                        
                        </div><br>
                    </div>
            <?php
                } 
?>
        </div>
</div>   
