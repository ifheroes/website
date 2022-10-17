<?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['games_faq'], true);
// JSON decode
$obj = json_decode($data);


///count entries of file
$count = count($obj);

?>

<center>
<h4 id="<?php echo $data_lang->games[0]->survival_title; ?>"><?php echo $data_lang->games[0]->survival_title; ?></h4>
</center>


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
                <b><?php echo $mydata->title; ?></b>
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