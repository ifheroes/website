<?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['jobs_faq'], true);
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
            <details>
                <summary>
                <b><?php echo   $mydata->title; ?></b>
                </summary>
                <div class="sum-word-breakUI">
                    <p>
                    <?php echo "<br>" . $mydata->text; ?>
                    </p>
                </div>
            </details>
        </p>
            <?php
        }
        ?>
        </div>
    </div>
</div>