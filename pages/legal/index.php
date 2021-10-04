<div class="container">
    <div class="row">

        <?php
        if (isset($_GET['notice'])) {
            $result = mysqli_query($conn, "SELECT * FROM legal WHERE ID= '1'");
            while ($row = mysqli_fetch_array($result)) { ?>
                <div style="word-wrap: break-word;">
                <br>
                <?php echo $row['text']; ?>
                </div>
        <?php }
        } ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        if (isset($_GET['terms'])) {
            $result = mysqli_query($conn, "SELECT * FROM legal WHERE ID= '2'");
            while ($row = mysqli_fetch_array($result)) { ?>
                <div style="word-wrap: break-word;">
                <br>
                <?php echo $row['text']; ?>
                </div>
        <?php }
        } ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        if (isset($_GET['privacy'])) {
            $result = mysqli_query($conn, "SELECT * FROM legal WHERE ID= '3'");
            while ($row = mysqli_fetch_array($result)) { ?>
                <div style="word-wrap: break-word;">
                <br>
                <?php echo $row['text']; ?>
                </div>
        <?php }
        } ?>
    </div>
</div>
