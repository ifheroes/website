<?php
$result = mysqli_query($conn, "SELECT  blog.uuid, blog.text, blog.title, blog.image, blog.date, blog.ID, 
                                              users.username, users.uuid, users.group, users.verified, 
                                              users.avatar
                                              FROM users
                                              LEFT JOIN blog ON blog.uuid = users.uuid 
                                              WHERE blog.ID IS NOT NULL
                                              ORDER BY blog.ID DESC LIMIT 1");

if (mysqli_num_rows($result) == 0) {
} else {

    while ($row = mysqli_fetch_array($result)) {
?>
        <div class="col-sm">
            <a href="?page=blog&id=<?php echo $row['ID']; ?>">
                <div class="shadow-box-2">
                    <kbd style="font-family: 'Montserrat', sans-serif;background-color: #0070ff6e;">NEUSTER BEITRAG</kbd>
                    <div style="height: 10px;"></div>
                        <div class="shadow-box-blog" style="background:  linear-gradient( rgba(0, 0, 0, 0.610), rgba(0, 0, 0, 0.610)), url('<?php echo $row['image']; ?>') no-repeat center center ; opacity: 0.70; ">
                            <h4 style="font-weight: 300; color:whitesmoke"><?php echo $row['title']; ?></h4>
                        </div>
                    <div class="col-sm ">
                        <div>
                            <p>
                                <br><text class="font-color"><?php echo substr($row['text'], 0, 200); ?>...</text>
                            </p>
                        </div>

                        <h5 style="color: black;">
                            <img class="avatar" style="width: 20px; height:20px; margin-top: -2px; border-radius: 33%;" src="<?php echo $row['avatar']; ?>">
                            <text class="font-color" style="padding-left: 8px;font-size:medium"> <?php echo $row['username']; ?> - <?php echo $row['date']; ?> </text>
                            <br>
                        </h5>
                    </div>
                </div>
            </a>        <br><br>

        </div>

<?php
    }
}

?>
