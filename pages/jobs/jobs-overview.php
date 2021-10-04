<!--START-->

<body>
    <center>
        <h1 class="font-color">Bewerben</h1>
        <text class="font-color">Werde jetzt ein teil von uns! </text>
    </center>
    <br>



<div class="container" style="font-size: 14px;">
                    <br>
                    <br>
<div class="row">
<?php $result = mysqli_query($conn, "SELECT * FROM job_desc" );
if (mysqli_num_rows($result) == 0) {
} else {

    while ($row = mysqli_fetch_array($result)) {
?>          
            <div class="col-sm">
                <br>
                <div class="shadow-box-stats font-color">
                    <center>
                        <div>
                            <br>
                            <h5><?php echo $row['title'];?></h5>
                            <br>
                        </div>
                    </center>
                    <div class="shadow-box-jobs">
                    <?php echo $row['text'];?>
                    <br>
                        <center>
                            <a class="btn-grad-top" style="color: gray; " href="index.php?page=job-create">
                                <text style="color: white;">Jetzt Bewerben</text>
                            </a>
                        </center>
                    </div>
                </div>    
            </div>
<?php 
    }
}
?>
         </div>
    </div>
</div>
</body>