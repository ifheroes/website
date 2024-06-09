<?php

include('../backend/apiHandler.php');
include('../backend/markdownHandler.php');

$apiHandler = new apiHandler();
$apiHandler->apiGetNewsLatest('2');

print_r((new markdown())->markdownPrinterAPI($apiHandler->news_title));
$image = $apiHandler->news_image;
print_r((new markdown())->markdownPrinterAPI($apiHandler->news_date));
print_r((new markdown())->markdownPrinterAPI($apiHandler->news_text));

echo "<img src='".$image."' alt='news image' style='width: 100%;'>";