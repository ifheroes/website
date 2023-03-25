<?php include('class/bookstack-api-auth.php') ?>
<?php include('class/get-rules.php') ?>

<div class="container "><a href="?page=games#<?php echo $_GET['game']?>-rules" class="link-no-deco"><b>‹ <?php echo $data_lang->news[0]->back_home;?></b></a><br><br>
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