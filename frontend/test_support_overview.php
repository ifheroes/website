<?php

include('../backend/apiHandler.php');
include('../backend/markdownHandler.php');
include('../backend/bookstack.php');


# get the support threads from bookstack support portal
$apiHandler = new apiHandler();
$bookstack = new bookstack();

$apiHandler->apiGetBookstackBook('12');
$bookstack->getSupportThreads($apiHandler->bookstack_book_content, 5);

$apiHandler->apiGetBookstackBook('13');
$bookstack->getSupportThreads($apiHandler->bookstack_book_content, 5);


echo "<hr>";

#### get the support thread page from bookstack
print_r((new markdown())->markdownPrinterAPI($apiHandler->apiGetBookstackPage('26')));
