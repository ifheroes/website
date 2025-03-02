<link rel="stylesheet" href="./assets/style.css">
<link rel="stylesheet" href="./assets/mobile-style.css">
<link rel="stylesheet" href="./assets/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />


<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Infinityheroes.de | Minecraft Server</title>

<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicons/site.webmanifest">

<body>

<?php 

include('./frontend/header.php');


if (isset($_GET['thread'])) {
    include('./frontend/news-thread.php');

} elseif (isset($_GET['pages'])) {
    include('./frontend/pages.php');

} elseif (isset($_GET['support'])) {
    include('./frontend/support/support.php');

} elseif (isset($_GET['support-thread'])) {
    include('./frontend/support/support-thread.php');

}elseif (isset($_GET['support-threads'])) {
    include('./frontend/support/support-threads.php');

} else {
    include('./frontend/news-overview.php');
}
include('./frontend/footer.php');
?>


<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="10ec7fa6-f873-4fae-a8f5-7076f0efece4"  type="text/javascript"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6E3EWNQC2B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6E3EWNQC2B');
</script> 