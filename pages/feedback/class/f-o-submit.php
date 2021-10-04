<!--CATEGORY-->
<div class="container">
            <div class="row">
                <div class="col-sm"> </div>
                <div class="col-sm-8"> </div>

                <div class="col-sm">
                    <!--CHECK SESSION-->
                <?php if(!isset($_SESSION['username'])){?>
                    <center>
                        <a href="index.php?page=login">
                            <input type="submit" class="btn-grad-top" style="color: white; border: none; border-radius: 10px; padding: 10px;" value="Beitrag Erstellen"></input>
                        </center>
                        </a>
                <?php }else{?>
                        <center>
                        <a href="index.php?page=feedback-create">
                            <input type="submit" class="btn-grad-top" style="color: white; border: none; border-radius: 10px; padding: 10px;" value="Beitrag Erstellen"></input>
                        </center>
                        </a>
                        <?php }?>
                </div>
            </div>
        </div>

        <?php 

