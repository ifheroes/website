<!--START-->
<br><br>
<footer>
    <!--Types-->
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                <img src="<?php echo $website_url; ?>/assets/img/footer-logo.png" width="140px">
            </div>

            <div class="col-sm"></div>
            <div class="col-sm-2">
                <br>
                <b><?php echo $data_lang->footer[0]->socials?></b>
                <br>
                <b><a class="link-footer" href="https://mastodontech.de/@ifheroesserver" target="_blank"><?php echo $data_lang->socials[0]->mastodon?></a></b>
                <br>
                <b><a class="link-footer" href="https://twitter.com/ifheroesserver" target="_blank"><?php echo $data_lang->socials[0]->twitter?></a></b>
                <br>
                <b><a class="link-footer" href="https://www.youtube.com/channel/UCavLhm1ZWWMinOcsr6uC_aw" target="_blank"><?php echo $data_lang->socials[0]->youtube?></a></b>
                <br>
                <b><a class="link-footer" href="https://twitch.tv/ifheroesserver" target="_blank"><?php echo $data_lang->socials[0]->twitch?></a></b>
            </div>
            <div class="col-sm">
                <br>
                <b><?php echo $data_lang->footer[0]->quicklinks?></b>
                <br>
                <b><a class="link-footer"  target="_blank" href="https://status.ifheroes.de"><?php echo $data_lang->navbar[0]->status?></a></b>
                <br>
                <b><a class="link-footer"  target="_blank" href="https://open.spotify.com/playlist/1tZH97oP2eWhMtIpbejEnv?si=9c220372192f4a5f">Spotify</a></b>
            </div>
            <div class="col-sm">
                <br>
                <b><?php echo $data_lang->footer[0]->community?></b>
                <br>
                <b><a class="link-footer" href="https://ifheroes.de/discord"><?php echo $data_lang->socials[0]->discord?></a></b>
                <br>
            </div>
        </div>
    </div>

    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <center style="font-size: xx-small; text-align: left;">
                    Copyright © 2017 - <?php echo date("Y"); ?> Infinityheroes. <?php echo $data_lang->footer[0]->brand?>
                </center>
            </div>
            <div class="col-sm">
                <center>
                    <a class="link-footer" href="?page=legal&notice">
                    <?php echo $data_lang->footer[0]->legal;?>
                    </a>
                </center>
            </div>

            <div class="col-sm">
                <center>
                    <a class="link-footer" href="?page=legal&privacy">
                    <?php echo $data_lang->footer[0]->privacy;?>
                    </a>
                </center>
            </div>
        </div>
    </div>
    
    <br>
</footer>


<!--cookie bot-->
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="10ec7fa6-f873-4fae-a8f5-7076f0efece4" data-blockingmode="auto" type="text/javascript"></script>