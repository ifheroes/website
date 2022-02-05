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

    <!-- Zeigt alle User auf Discord  -->
    <div class="row">
        <div class="col-sm">
            <div class="shadow-box">
                <div class="col-sm">
                    <text class="font-color">
                        <a target="_blank" href="https://ifheroes.de/discord" class="link-no-deco">
                            <h3><i class="fab fa-discord"></i> Discord-Server</h3>
                            <br>
                            <?php
                            $DiscordjsonData = file_get_contents("https://discordapp.com/api/guilds/355790224527327232/widget.json");
                            $data = json_decode($DiscordjsonData, true);
                            echo $data['presence_count'];
                            ?> Benutzer Online
                        </a>
                    </text>
                </div>
            </div>
        </div>

        <!-- Zeigt Spieler auf MC -->
        <div class="col-sm">
            <div class="shadow-box">
                <div class="col-sm">
                    <text class="font-color">
                        <h3><i class="fas fa-cube"></i> Minecraft-Server</h3>
                        <br>
                        <?php
                        $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/ifheroes.de'));
                        echo $status->players->online;
                        ?> Benutzer Online
                    </text>
                </div>
            </div>
        </div>
    </div>

</div>
<br>


<center>
    </h5>

    <br>
    <br>
    <br>
    <br>
    <br>
    <h6 style="animation: fadein 3s;">Klicke auf den Pfeil um mehr zu erfahren</h6>
    <br> <br>


    <a href="#start" class="link-no-deco">
        <div class="bounce">
            <img style="animation: fadein 3s;" src="<?php echo $website_url; ?>/assets/img/arrow-down.svg" width="30px">
        </div>
    </a>
</center>
<br>
<br> <br>
<br>
<br>
<div class="bow"></div>
</div>


<!--#####-->
<div id="start"></div>
<br>
<center>

    <div class="container">
        <br>
        <div class="row ">
            <div class="col-sm">
                <div class="shadow-box-blog" style="cursor:auto ;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('https://cdn.discordapp.com/attachments/876387207458455585/939576593616105572/2019-04-19_14.05.36.png') center scroll ; ">
                    <h4>Wir arbeiten aktuell an einer Fortsetzung unseres Servers. Mehr Infos folgen bald.</h4>
                </div>
            </div>
        </div>
        <p></p>

</center>


<!--###-->
<!-- <br>
<br>
<center>
    <p>
    </p>
    <h3>Hier findet ihr uns auch!</h3>
    <text class="font-color">Unser Discord-Server ist immer da, wenn du jemanden zum Reden oder Spielen suchst! </text>
    <p></p>
</center>
<p>
<div class="container">
    <br>
    <div class="row ">
        <div class="col-sm">
            <center>
                <iframe src="https://discord.com/widget?id=355790224527327232&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts" style="box-shadow: 4px 7px 65px -21px #16181b;"></iframe>
            </center>
            <br>
        </div>
    </div>
</div> -->

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
                <h3>Allgemneines FAQ</h3>
            </center>
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


</div>