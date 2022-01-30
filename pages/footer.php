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
                <b>Social Media</b>
                <br>
                <b><a class="link-footer" href="https://twitter.com/ifheroesserver" target="_blank">Twitter</a></b>
                <br>
                <b><a class="link-footer" href="https://www.youtube.com/channel/UCavLhm1ZWWMinOcsr6uC_aw" target="_blank">Youtube</a></b>
                <br>
                <b><a class="link-footer" href="https://twitch.tv/ifheroesserver" target="_blank">Twitch</a></b>
            </div>
            <div class="col-sm">
                <br>
                <b>Qicklinks</b>
                <br>
                <b><a class="link-footer" href="?page=jobs">Bewerben</a></b>
                <br>
                <b><a class="link-footer" href="?page=status">Status</a></b>
                <br>
                <b><a class="link-footer" href="?page=aboutus">Über uns!</a></b>
                <br>
                <b><a class="link-footer" href="https://github.com/ifheroes" target="_blank" >GitHub</a></b>
                <br>
            </div>
            <div class="col-sm">
                <br>
                <b>Community</b>
                <br>
                <b><a class="link-footer" href="https://ifheroes.de/discord">Discord</a></b>
                <br>
            </div>
        </div>
    </div>

    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <center style="font-size: xx-small; text-align: left;">
                    Copyright © 2017 - <?php echo date("Y"); ?> Infinityheroes. <?php echo $lang['copy_footer']; ?>
                </center>
            </div>
            <div class="col-sm">
                <center>
                    <a class="link-footer" href="?page=legal&notice">
                        <?php echo $lang['legal_team_footer']; ?>
                    </a>
                </center>
            </div>
<!--             <div class="col-sm">
                <center>
                    <a class="link-footer" href="?page=legal&terms">
                        <?php echo $lang['terms_team_footer']; ?>
                    </a>
                </center>
            </div> -->
            <div class="col-sm">
                <center>
                    <a class="link-footer" href="?page=legal&privacy">
                        <?php echo $lang['privacy_team_footer']; ?>
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
                "button": "Verstanden"
            }
        })
    });
</script>