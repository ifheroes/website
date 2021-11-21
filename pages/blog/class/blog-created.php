<!--Types-->

<br>
<?php
$result = mysqli_query($conn, "SELECT blog.uuid, blog.text, blog.title, blog.image, blog.date, blog.ID, 
                                      users.username, users.uuid, users.group, users.verified, users.avatar
                                FROM users
                                LEFT JOIN blog ON users.uuid = blog.uuid 
                                WHERE blog.ID = '$ID'");

if (mysqli_num_rows($result) == 0) {
} else {

    while ($row = mysqli_fetch_array($result)) {
?>
                    <div class="container">
                        <div class="row">
                            <br>
                            <div class="col-sm">
                            </div>
                            <div class="col-11">
                                <br>
                                <a href="javascript:history.back()" style="color: rgb(133, 133, 133); font-weight: 400;">
                                    <img src="<?php echo $website_url; ?>/assets/img/arrow-left.svg" width="10px"> Zurück zur Übersicht
                                </a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm">
                <div class="shadow-box-blog" style="background: linear-gradient( rgba(0, 0, 0, 0.74), rgba(0, 0, 0, 0.73)), url('<?php echo $row['image']; ?>') no-repeat center center; opacity: 0.70; ">
                        <center>
                            <br>
                            <br>
                            <h3 style="color: white;letter-spacing: 0.001em; text-transform: uppercase;">
                                <?php echo $row['title']; ?>
                                <br>
                                <br>
                            </h3>
                        </center>
                    </div>
                    <br>
                    <?php echo nl2br($row['text']); ?>
                    <hr>
                    <?php echo $lang['blog_random_title']?>: <?php echo $row['username']; ?> - <?php echo $lang['blog_random_date']?>: <?php echo $row['date']; ?>
                </div>
                <div class="col-sm-1"></div>

                <br>

            </div>
        </div>
        <br>


        <?php include('./pages/main/blog/class/random-blog.php');?>
        <!-- IMPORT OG FOR SOCIAL MEDIA -->
<?php
    }
}

?>