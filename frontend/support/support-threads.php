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
        <a onclick="history.back()" style="cursor: pointer;">

            <h4>
                <span class="material-symbols-outlined">arrow_back</span><b>Zurück</b>
            </h4>
        </a>
            <div class="row">
                <div class="col-sm">
                    <div class="support_background_box" id="focus">
                        <h1 class="title_support"><b>Mehr Beiträge</b></h1>
                        <?php
                            $apiHandler->apiGetBookstackBook($_GET['id']);
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
                                <a href="https://ifheroes.de/discord">
                                    <div class="button">Discord</div>
                                </a>
                            </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>