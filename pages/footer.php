<!--START-->
<br><br> 
<footer>
    <!--Types-->
    <div class="container">
        <br>

        <div class="row">
            <div class="col-sm-3">
                <img src="<?php echo $website_url; ?>/assets/img/footer-logo.png" width="140px">
            </div>
        </div>


        <hr>
        <div class="row">
            <div class="col-sm">
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
            <div class="col-sm">
                <center>
                    <a class="link-footer" href="?page=legal&terms">
                        <?php echo $lang['terms_team_footer']; ?>
                    </a>
                </center>
            </div>
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
