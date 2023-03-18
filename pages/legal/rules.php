<?php include('class/bookstack-api-auth.php') ?>
<?php include('class/get-rules.php') ?>

<div class="container ">
    <div class="center">
        <div class="row">
            <div class="col-sm">
                <h2><strong><?php echo $books['name'] . "<br><br>"; ?></strong></h2>
                <br>
                <?php 
                    echo $books['html'] . "<br><br>";
                ?>
            </div>
        </div>
    </div>
</div>