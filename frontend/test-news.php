<?php

include('../backend/apiHandler.php');
include('../backend/markdownHandler.php');

$apiHandler = new apiHandler();
$apiHandler->apiGetNewsLatest('3');

print_r((new markdown())->markdownPrinterAPI($apiHandler->news_title));
print_r((new markdown())->markdownPrinterAPI($apiHandler->news_image));
print_r((new markdown())->markdownPrinterAPI($apiHandler->news_date));
print_r((new markdown())->markdownPrinterAPI($apiHandler->news_text));

echo "<img src='https://data.ifheroes.de/apps/files_sharing/publicpreview/eMXpL6mMPomoNp2?file=/&fileId=2464&x=2560&y=1440&a=true&etag=d39a2309f80c7be38b2017d271c9af79' alt='news image' style='width: 100%;'>";