<?php
$id = $_GET['thread'];

include('./backend/apiHandler.php');
include('./backend/markdownHandler.php');

$apiHandler = new apiHandler();
$apiHandler->apiGetNewsLatest($id);

?>


<div class=" white_container">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="support_background_box">
                    <div class="primary_newsBox">

                        <img src="<?php echo ($apiHandler->news_image); ?>">
                    </div>
                    <center>
                        <br>
                        <b><h1 class="title" style="color: black;">
                            <?php print_r((new markdown())->markdownPrinterAPI($apiHandler->news_title)); ?></h1></b>
                    </center>
                    <br><?php print_r((new markdown())->markdownPrinterAPI($apiHandler->news_text)); ?>
                    <a href="https://ifheroes.de/discord">
                        <div class="button_thread">Mehr auf unserem Discord</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>