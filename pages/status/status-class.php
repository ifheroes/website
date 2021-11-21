<?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['status'], true);
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
                        <div class="shadow-box-blog" style="cursor:auto ;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $mydata->image_link;?>') center ; ">
                            <h3><?php echo $mydata->title . "<br>";?></h3>
                        </div>
                        <br>

<!---Check if service is avalib-->

                    <?php if ("$mydata->ip" and "$mydata->port" and "1") {
                        $mcServer =  @fsockopen("$mydata->ip", "$mydata->port", $errno, $errstr, "1");
                    }
                        if ($mcServer) {
                            
                            ?>

                            <div class="shadow-box-2">
                            <h5> <img src="https://c.tenor.com/2yE8KjGupmEAAAAC/terter-button.gif" width="16">
                                Online</h5>
                                <?php echo $mydata->ip . "<br>";?> <!--Print out text form specific line-->
                            </div>
                            <br>
                            </div>
                            <?php


                        } else {
                        
                            ?>

                            <div class="shadow-box-2">
                                <h5>Offline</h5>
                                <?php echo $mydata->ip . "<br>";?> <!--Print out text form specific line-->
                            </div>
                            <br>
                            </div>
                            <?php

                        }?>

                    <?php
                } 
?>
        </div>
</div>   

            <?php
         
          ?>