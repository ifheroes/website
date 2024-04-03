<div style="margin-bottom: 160px;"></div>
<div class="container ">
    <?php include('pages/home/online_players.php');?>


    <center>
        </h5>

    <div style="margin-bottom: 40px;"></div>
        <a href="#start" class="link-no-deco">
            <h6><?php echo $data_lang->home[0]->Arrow_animation;?></h6>
            <br> <br>
            <div class="bounce">
                <img src="<?php echo $website_url; ?>/assets/img/arrow-down.svg" width="30px">
            </div>
        </a>
    </center>
    <br>
    <br>

</div>

</div>


<!--#####-->
<div id="start"></div>
<br>

<!-- NEWS Tab -->
<div id="updates"></div>
<?php include $page['news']; ?>





<!--Gamemodes section /// Survival-->

<center>
    <br>
    <h3 id="survivalMode"><?php echo $data_lang->games[0]->survival_title; ?></h3>
</center>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <br>
            <?php echo $data_lang->games[0]->survival_text; ?>
            <br><br>
            <p>
                <button class="games_button" onClick="window.location.href='https://map.ifheroes.de';">Dynmap</button>
                <button class="games_button" onClick="window.location.href='#Survival';">FAQ</button>
                <button class="games_button" onClick="window.location.href='?page=rules&game=<?php echo $data_lang->games[0]->survival_title; ?>';" id="<?php echo $data_lang->games[0]->survival_title; ?>-rules">Tutorial</button>
            </p>
        </div>
        <div class="hide-mobile">
            <div class="col-sm">
                <img src="<?php echo $data_lang->games[0]->survival_image; ?>">
            </div>
        </div>
    </div>
</div>


<div style="margin-bottom: 40px;"></div>

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
            <div style="margin-bottom: 40px;"></div>

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
    <div style="margin-bottom: 40px;"></div>


    <!-- SURVIVAL AREA-->
    <center>
        <h3 id="<?php echo $data_lang->games[0]->survival_title; ?>"><?php echo $data_lang->games[0]->survival_title; ?></h3>
    </center>
    <?php

    //// COUNT FOR SURVIVAL FAQ

    // get content form json file content/job_info.json via system/json_files.php 
    $data = file_get_contents($json['games_faq'], true);
    // JSON decode
    $obj = json_decode($data);

    $count_survival = count($obj->survival);

    $n = 0;

    while ($n < $count_survival) {

        $number = $n++;
    ?>
        <p>
        <details>
            <summary>
                <b><?php echo $obj->survival[$number]->title; ?></b>
            </summary>
            <div class="sum-word-breakUI">
                <p>
                    <?php echo  "<br>" . $obj->survival[$number]->text; ?>
                </p>
            </div>
        </details>
        </p>
    <?php
    }
    ?>
</div>


</div>