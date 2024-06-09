<link rel="stylesheet" href="./assets/style.css">
<link rel="stylesheet" href="./assets/mobile-style.css">
<link rel="stylesheet" href="./assets/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>

<?php 

include('./frontend/header.php');


if (isset($_GET['thread'])) {
    include('./frontend/news-thread.php');
} else {
    include('./frontend/news-overview.php');
}
include('./frontend/footer.php');
?>


