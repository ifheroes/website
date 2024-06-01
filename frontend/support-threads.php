<?php

include('../backend/apiHandler.php');
include('../backend/markdownHandler.php');
include('../backend/bookstack.php');

# get the support threads from bookstack support portal
$apiHandler = new apiHandler();
$bookstack = new bookstack();
?>

<link rel="stylesheet" href="../assets/style.css">
<link rel="stylesheet" href="../assets/mobile-style.css">
<link rel="stylesheet" href="../assets/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
    <div class="background">
        <br>
        <center>
            <input type="checkbox" id="toggle" style="display:none;">

            <hide class="mobile">
                <nav>
                    <label for="toggle">
                        <span class="material-icons-round" style="font-size: 50px;">
                            menu
                        </span>
                        <br>
                        <b>Menü</b>
                    </label>
                </nav>
            </hide>

            <div class="burger-menu">
                <nav>
                    <br>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">STATS</a></li>
                        <li><a href="#">SUPPORT</a></li>
                        <li><a href="#">DISCORD</a></li>
                    </ul>
                    <br>
                </nav>
            </div>
            <br>
            <hide class="desktop">
                <h1 class="title">INFNITY <img src="../assets/img/logo_mediakit_normal.png" width="120" height="80">
                    HEROES
                </h1>
                <h2 class="subtitle">Undiscoverd lands and new worlds!</h2>
            </hide>
            <hide class="mobile">
                <img src="../assets/img/logo_mediakit_normal.png" width="120" height="80">
                <h1 class="title">INFNITYHEROES
            </hide>
        </center>
    </div>



    <div class=" white_container">
        <center>
            <h1 class="title" style="color: black;">Support</h1>
        </center>
        <br><br>

        <div class="container">

            <div class="row">
                <div class="col-sm">
                    <div class="support_background_box" id="focus">
                        <br>
                        <h1 class="title_support"><span class="icon material-symbols-rounded">
                                help
                            </span><b>Mehr Beiträge</b></h1>
                        <?php
                        $apiHandler->apiGetBookstackBook($_POST['id']);
                        $bookstack->getSupportThreads($apiHandler->bookstack_book_content, 100);
                        ?>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm">
                    <div class="support_background_box">
                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <h1 class="title_support" style="color: rgb(92, 92, 92);"><b>Nichts dabei?</b></h1>
                                <text>Du konntest nicht finden wonach du gesucht hast? Dann tritt gerne unserem Discord
                                    bei, hier kann dir unser Team schnell und unkompliziert helfen.</text>
                            </div>
                            <div class="col-sm">
                                <center>
                                    <div class="button">Discord</div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<footer>
    <div class="footer">
        <center>
            <br>
            <h4><b>infinityheroes</b></h4>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <b>Synhost</b>
                    </div>
                    <div class="col-sm">
                        <b>Impressum</b>
                    </div>
                    <div class="col-sm">
                        <b>Datenschutz</b>
                    </div>
                </div>
            </div>
        </center>
        <br>
</footer>