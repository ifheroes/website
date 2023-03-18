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
                <b><a class="link-footer" href="?page=jobs"><?php echo $data_lang->navbar[0]->jobs;?></a></b>
                <br>
                <b><a class="link-footer"  target="_blank" href="https://status.ifheroes.de"><?php echo $data_lang->navbar[0]->status?></a></b>
                <br>
                <b><a class="link-footer" href="?page=about"><?php echo $data_lang->navbar[0]->about?></a></b>
                <br>
                <b><a class="link-footer" href="https://github.com/ifheroes" target="_blank" ><?php echo $data_lang->navbar[0]->github?></a></b>
                <br>
                <b><a class="link-footer" href="https://github.com/ifheroes/website"><?php echo $data_lang->footer[0]->contents?></a></b>
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
<!--             <div class="col-sm">
                <center>
                    <a class="link-footer" href="?page=legal&terms">
                        <?php echo $data_lang->footer[0]->terms;?>
                    </a>
                </center>
            </div> -->
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

<link rel="stylesheet" type="text/css" href="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css" />
<script src="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function() {
        window.wpcc.init({
            "colors": {
                "popup": {
                    "background": "#f6f6f6",
                    "text": "#000000",
                    "border": "#555555"
                },
                "button": {
                    "background": "#1E90FF",
                    "text": "#f6f6f6"
                }
            },
            "position": "bottom",
            "corners": "large",
            "padding": "large",
            "margin": "large",
            "fontsize": "large",
            "content": {
                "href": "?page=legal&amp;privacy",
                "message": "Diese Webseite benutzt Cookies um Nutzern das bestmögliche erlebnis zu bieten.",
                "link": "Datenschutz",
                "button": "Ich stimme zu!"
            }
        })
    });
</script>