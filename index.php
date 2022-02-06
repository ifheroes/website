<?php

$website_url = 'http://192.168.178.40/website/';
     
  

?>  
  <title>infinityheroes.de | Minecraft Server</title>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     
      <link rel="stylesheet" href="<?php echo $website_url;?>assets/style.css">
      <link rel="stylesheet" href="<?php echo $website_url;?>assets/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo $website_url;?>assets/status-indicator.css">
      
      <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
      <script src="<?php echo $website_url;?>assets/jquery-3.4.1.slim.min.js"></script>
      <script src="<?php echo $website_url;?>assets/bootstrap.min.js"></script>
      <script src="<?php echo $website_url;?>assets/all.js"></script>
      <script src="<?php echo $website_url;?>assets/jquery.min.js"></script>
      <script src="<?php echo $website_url;?>assets/clipboard.min.js"></script>

      <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png"/>
      <link rel="shortcut icon" type="image/png" href="assets/img/server-icon.png"  sizes="96x96">
  </head>
</html>

<!--OG-Types for Website social Media integration-->

<meta name="title" content="infinityheroes.de">
<meta name="description" content="infinityheroes.space - Minecraft Server">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://ifheroes.de">
<meta property="og:title" content="ifheroes.de">
<meta property="og:description" content="infinityheroes | Minecraft Server">
<meta property="og:image" content="<?php echo $website_url;?>/assets/img/OG-Type-image.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@ifheroesserver">
<meta name="twitter:creator" content="@ifheroesserver">
<meta property="twitter:url" content="https://ifheroes.de">
<meta property="twitter:title" content="infinityheroes | Minecraft Server">
<meta property="twitter:description" content="infinityheroes | Minecraft Server">
<meta property="twitter:image" content="<?php echo $website_url;?>/assets/img/OG-Type-image.jpg">


<?php


include('system/pages.php'); /* Alle registrierten PHP dateien */
include('system/json_files.php'); /* Alle Json Dateien mit Informationen zu webinhalten */
include('pages/lang/lang.php'); 

?>



<!doctype html>

<html>

    <body>

    <?php


    if(isset($_GET['page'])) {
        if(isset($page[$_GET['page']])) {
            include($page['navbar']);
            include($page['wave']);
            include($page[$_GET['page']]);
        }else{
            include($page['navbar']);
            include($page['wave']);
            include($page['error404']);
        }
    }else{
        include($page['navbar']);
        include($page['home']);

    }

    include($page['footer']);
    ?>

    </body>

</html>

