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
                    <div class="support_background_box">
                        <br>
                        <h1 class="title_support"><b>Allgemein</b></h3>
                            <?php
                            $requested_book = '12';
                            $apiHandler->apiGetBookstackBook($requested_book);
                            $bookstack->getSupportThreads($apiHandler->bookstack_book_content, 4);
                            ?>
                            <br>
                            <form action="support/support-threads.php" method="post">
                                <button class="button_thread"><b>Mehr Artikel...</b></button>
                                <?php $_POST['id'] = $requested_book; ?>
                            </form>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="support_background_box">
                        <br>

                        <h1 class="title_support"><b>Survival</b></h3>
                            <?php
                            $requested_book = '7';
                            $apiHandler->apiGetBookstackBook($requested_book);
                            $bookstack->getSupportThreads($apiHandler->bookstack_book_content, 4);
                            ?>
                            <br>
                            <form action="support/support-threads.php" method="post">
                                <button class="button_thread"><b>Mehr Artikel...</b></button>
                                <?php $_POST['id'] = $requested_book; ?>
                            </form>
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

    </div>