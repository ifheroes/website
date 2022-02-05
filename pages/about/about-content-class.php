

<?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['aboutus'], true);
// JSON decode
$obj = json_decode($data);


///count entries of file
$count = count($obj);

?>
<div class="container">
    <div class="row">
        <div class="col-sm">
        <?php
        foreach ($obj as $mydata) ///Get data foreach entry in lines etc.
        {
        ?>
        <p>

        <div class="shadow-box-blog" style="cursor:auto ;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $mydata->image_link;?>') center scroll ; ">
                            <h3><?php echo $mydata->title . "<br>";?></h3>
                        </div>
                        <br>


                    <p>
                    <?php echo "<br>" . $mydata->text; ?>
                    </p>


        </p>
            <?php
        }
        ?>
        </div>
    </div>
</div>
