<?php


include('system/pages.php');
include('pages/lang/lang.php');
include('./sql.php');

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

