
<?php

    if (isset($_GET['id'])) {
        $ID = $_GET['id'];
        include('class/blog-created.php');
    } else {
        $ID = "0";
        include('class/see-all-blogs.php');
     }

?>
