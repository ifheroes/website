<!--START-->
<br>
<br>
<br> <br>
<br>
<div class="container ">
    <br>
    <br>


    <br>
    <br>

    <?php include('pages/home/online_players.php'); //import online players 
    ?>


    <center>
        </h5>

        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="#start" class="link-no-deco">
        <h6><?php echo $data_lang->home[0]->Arrow_animation; ///get data from lang.json in index
            ?></h6>
        <br> <br>



            <div class="bounce">
                <img src="<?php echo $website_url; ?>/assets/img/arrow-down.svg" width="30px">
            </div>
        </a>
    </center>
    <br>
    <br> <br>
    <br>
    <br>

</div>
</div>
</div>


<!--#####-->
<div id="start"></div>
<br>

<!-- NEWS Tab -->
<div id="updates"></div>
<?php include $page['news']; ?>


<!-- FAQ Übersicht allgemein -->
<?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['main_faq'], true);
// JSON decode
$obj = json_decode($data);


///count entries of file
$count = count($obj);

?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <center>
                <br>
                <br>
                <h3><?php echo $data_lang->home[0]->FAQ_main; ///get data from lang.json in index
                    ?></h3>
            </center>
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


</div>