<?php

$website_url = 'http://localhost/website/';
     
  

?>  
  <title>infinityheroes.de | Minecraft Server</title>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     
      <link rel="stylesheet" href="<?php echo $website_url;?>/assets/style.css">
      <link rel="stylesheet" href="<?php echo $website_url;?>/assets/bootstrap.min.css">
      
      
      <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
      <script src="<?php echo $website_url;?>/assets/jquery-3.4.1.slim.min.js"></script>
      <script src="<?php echo $website_url;?>/assets/bootstrap.min.js"></script>
      <script src="<?php echo $website_url;?>/assets/all.js"></script>
      <script src="<?php echo $website_url;?>/assets/jquery.min.js"></script>
      <script src="<?php echo $website_url;?>/assets/clipboard.min.js"></script>

      <link rel="apple-touch-icon" href="<?php echo $website_url; ?>/assets/img/apple-touch-icon.png"/>
      <link rel="shortcut icon" type="image/png" href="<?php echo $website_url; ?>/assets/img/server-icon.png"  sizes="96x96">
  </head>
</html>

<?php include('pages/og-types/og-normal.php');?>

<?php


include('system/pages.php'); /* Alle registrierten PHP dateien */
include('system/json_files.php'); /* Alle Json Dateien mit Informationen zu webinhalten */
include('pages/lang/lang.php'); 

?>

<?php include('pages/og-types/og-normal.php');?>

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

