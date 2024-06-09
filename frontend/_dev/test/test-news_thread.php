<?php

include('../backend/apiHandler.php');
include('../backend/markdownHandler.php');

$apiHandler = new apiHandler();
$apiHandler->apiGetNewsLatest('1');

print_r((new markdown())->markdownPrinterAPI($apiHandler->news_title));
print_r((new markdown())->markdownPrinterAPI($apiHandler->news_image));
print_r((new markdown())->markdownPrinterAPI($apiHandler->news_date));
print_r((new markdown())->markdownPrinterAPI($apiHandler->news_text));