<!--START-->
<br><br><br> <br> <br> <br> <br>
<footer>
    <!--Types-->
    <div class="container">
        <br>

        <div class="row">
            <div class="col-sm-3">
                <img src="<?php echo $website_url; ?>/assets/img/footer-logo.png" width="140px">
                <br>
                <p>
                    <div class="link-footer" style="text-decoration: none; color: rgb(167, 167, 167); font-size: small;">
                        Folge uns auf <a class="link-footer-blue" href="https://ifheroes.de/twitter">Twitter</a>, oder komm auf unseren offiziellen <a class="link-footer-blue" href="https://ifheroes.de/discord">Discord</a> server.
                    </div>
                </p>
            </div>
            <div class="col-sm"></div>
            <div class="col-sm-2">
                <br>
                <b>Social Media</b>
                <br>
                <br>
                <a class="link-footer" href="https://ifheroes.de/twitter">Twitter</a>
                <br>
                <a class="link-footer" href="https://ifheroes.de/youtube">Youtube</a>
                <br>
                <a class="link-footer" href="https://ifheroes.de/twitch">Twitch</a>

            </div>

            <div class="col-sm">
                <br>
                <b>Support</b>
                <br>
                <br>
                <a class="link-footer" href="?page=articles">FAQ</a>
                <br>
                <a class="link-footer" href="https://ifheroes.de/status">Status</a>
                <br>
                <a class="link-footer" href="?page=ticket-create"><?php echo $lang['submit_ticket_footer']; ?></a>
                <br>
                <a class="link-footer" href="?page=articles&cat=Regeln"><?php echo $lang['rules_footer']; ?></a>
                <br>
                <a class="link-footer" href="?page=team">Team</a>
                <br>
            </div>
            <div class="col-sm">
                <br>
                <b>Community</b>
                <br>
                <br>
                <a class="link-footer" href="?page=feedback-overview">Feedback</a>
                <br>
                <a class="link-footer" href="?page=blog">Announcment</a>
                <br>
                <a class="link-footer" href="ts3server://infinityheroes.space">Teamspeak</a>
                <br>
                <a class="link-footer" href="?page=broadcaster">Broadcaster</a>
                <br>
                <a class="link-footer" href="?page=jobs">Jetzt Bewerben</a>
                <br>
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
