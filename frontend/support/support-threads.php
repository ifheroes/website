<?php

include('./backend/apiHandler.php');
include('./backend/markdownHandler.php');
include('./backend/bookstack.php');

# get the support threads from bookstack support portal
$apiHandler = new apiHandler();
$bookstack = new bookstack();
?>

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