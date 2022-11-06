<!--Gamemodes section /// Survival-->
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h4><?php echo $data_lang->games[0]->survival_title; ?></h4>
            <br>
            <?php echo $data_lang->games[0]->survival_text; ?>
            <br><br>
            <p>
                <button class="games_button" onClick="window.location.href='https://map.ifheroes.de';">Dynmap</button>
                <button class="games_button">Nutzungsbedingungen / Regeln</button>
                <button class="games_button" onClick="window.location.href='#Survival';">FAQ</button>
            </p>
        </div>
        <div class="col-sm">
            <img src="<?php echo $data_lang->games[0]->survival_image; ?>">
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<!--Gamemodes section /// SGduels-->
<div class="container">
    <div class="row">
        <div class="col-sm">
            <img src="<?php echo $data_lang->games[0]->sgd_image; ?>">
        </div>
        <div class="col-sm">
            <h4><?php echo $data_lang->games[0]->sgd_title; ?></h4>
            <br>
            <?php echo $data_lang->games[0]->sgd_text; ?>
            <br><br>


            <p>
                <button class="games_button">Nutzungsbedingungen / Regeln</button>
                <button class="games_button" onClick="window.location.href='#SGDuels';">FAQ</button>
            </p>
        </div>
    </div>
</div>