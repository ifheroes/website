<center>
    <h1><?php echo $lang['blog_title'];?></h1>
    <text class="font-color"><?php echo $lang['blog_subtitle'];?></text>
</center>
<br>
<div class="container">
            <div class="row">
<?php
$result = mysqli_query($conn, "SELECT blog.uuid, blog.text, blog.title, blog.image, blog.date, blog.ID, 
                                              users.username, users.uuid, users.group, users.verified, 
                                              users.avatar
                                              FROM users
                                              LEFT JOIN blog ON blog.uuid = users.uuid 
                                              WHERE blog.ID IS NOT NULL
                                              ORDER BY blog.ID DESC LIMIT 10");

if (mysqli_num_rows($result) == 0) {
} else {

    while ($row = mysqli_fetch_array($result)) {
?>
                <div class="col-sm-4"><br><br>
                    <a href="?page=blog&id=<?php echo $row['ID']; ?>">

                        <div class="shadow-box-blog" style="background: linear-gradient( rgba(0, 0, 0, 0.610), rgba(0, 0, 0, 0.610)), url('<?php echo $row['image']; ?>') no-repeat center center; opacity: 0.70; ">
                            <left style="opacity: normal;">
                                <h3 style="color: white;letter-spacing: 0.001em; text-transform: uppercase;">
                                    <?php echo $row['title']; ?>
                                    <br>
                                    <br>
                                </h3>
                                <h6 style="color: white;">
                                    <img class="avatar" style="width: 20px; height:20px; margin-top: -2px;" src="<?php echo $row['avatar']; ?>">
                                    <text style="padding-left: 8px;"><?php echo $row['username']; ?></text> - <code style="color: #fff;"><?php echo $row['date']; ?></code>
                                    <br>
                                    <br>
                                </h6>
                            </left>
                        </div>
                    </a>
                </div>




<?php
    }
}

?>           
 </div>
 <br>
</div>

