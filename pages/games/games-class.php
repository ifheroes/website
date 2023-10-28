<!--Gamemodes section /// SGduels-->
<div class="container">
    <div class="row">
        <div class="hide-mobile">
            <div class="col-sm">
                <img src="<?php echo $data_lang->games[0]->sgd_image; ?>">
            </div>
        </div>
        <div class="col-sm">
            <h4><?php echo $data_lang->games[0]->sgd_title; ?></h4>
            <br>
            <?php echo $data_lang->games[0]->sgd_text; ?>
            <br><br>


            <p>
                <button class="games_button" onClick="window.location.href='#SGDuels';">FAQ</button>
                <button class="games_button" onClick="window.location.href='?page=rules&game=<?php echo $data_lang->games[0]->sgd_title; ?>';" id="<?php echo $data_lang->games[0]->sgd_title; ?>-rules">Regeln</button>
            </p>
        </div>
    </div>
</div>