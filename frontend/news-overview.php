<?php

include('./backend/apiHandler.php');
include('./backend/markdownHandler.php');

$apiHandler = new apiHandler();

$apiHandler->apiGetNewsLatest('0');

$image1 = $apiHandler->news_image;
$date1 = $apiHandler->news_date;
$title1 = $apiHandler->news_title;
$id_1 = $apiHandler->news_file_id;

# zweiter news post

$apiHandler->apiGetNewsLatest('1');

$image2 = $apiHandler->news_image;
$date2 = $apiHandler->news_date;
$title2 = $apiHandler->news_title;

# dritter news post

$apiHandler->apiGetNewsLatest('2');

$image3 = $apiHandler->news_image;
$date3 = $apiHandler->news_date;
$title3 = $apiHandler->news_title;

# virter news post

$apiHandler->apiGetNewsLatest('3');

$image4 = $apiHandler->news_image;
$date4 = $apiHandler->news_date;
$title4 = $apiHandler->news_title;
?>

<div class=" white_container">
    <br>
    <center>
        <a href="?thread=0">
            <div class="news_background_box">

                <div class="primary_newsBox">
                    <img src="<?php echo $image1; ?>">
                </div>
                <br>
                <h3><span class="material-icons-round">
                        bookmark_added
                    </span><b><?php echo $title1; ?></b></h3>
                <text>Die neusten News vom infinityheroes Projekt!</text>
                <br>
                <small>23-3-2024</small>
                <br><br><br>
        </a>
</div>

</center>

<center>
    <h1 class="title" style="color: black;">Mehr News</h1>
</center>
<br><br>

<div class="container">

    <div class="row">
        <div class="col-sm">
        <a href="?thread=1">
            <div class="second_newsBox">
                <img src="<?php echo $image2; ?>">
            </div>
            <p>
            <h3><?php echo $title2; ?></h3>
            <text>Mehr davon!</text>
            <br>
            <small><?php echo $date2; ?></small>
            </p>
        </a>
        </div>

        <div class="col-sm">
        <a href="?thread=2">
            <div class="second_newsBox">
                <img src="<?php echo $image3; ?>">
            </div>
            <p>
            <h3><?php echo $title3; ?></h3>
            <text>Mehr davon!</text>
            <br>
            <small><?php echo $date3; ?></small>
            </p>
            </a>
        </div>

        <div class="col-sm">
        <a href="?thread=3">
            <div class="second_newsBox">
                <img src="<?php echo $image4; ?>">
            </div>
            <p>
            <h3><?php echo $title4; ?></h3>
            <text>Mehr davon!</text>
            <br>
            <small><?php echo $date4; ?></small>
            </p>
        </a>
        </div>
    </div>
</div>
</div>