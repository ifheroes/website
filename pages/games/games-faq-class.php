<br>
<br>

<!-- SURVIVAL AREA-->
<center>
    <h4 id="<?php echo $data_lang->games[0]->survival_title; ?>"><?php echo $data_lang->games[0]->survival_title; ?></h4>
</center>
<?php

//// COUNT FOR SURVIVAL FAQ

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['games_faq'], true);
// JSON decode
$obj = json_decode($data);

$count_survival = count($obj->survival);

$n = 0;

while ($n < $count_survival) {

    $number = $n++;
?>
    <p>
    <details>
        <summary>
            <b><?php echo $obj->survival[$number]->title; ?></b>
        </summary>
        <div class="sum-word-breakUI">
            <p>
                <?php echo  "<br>" . $obj->survival[$number]->text; ?>
            </p>
        </div>
    </details>
    </p>
<?php
}
?>

<!-- SGDUELS AREA-->

<br>
<br>
<center>
    <h4 id="<?php echo $data_lang->games[0]->sgd_title; ?>"><?php echo $data_lang->games[0]->sgd_title; ?></h4>
</center>
<?php

//// COUNT FOR SGDuels FAQ

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['games_faq'], true);
// JSON decode
$obj = json_decode($data);

$count_sgduels = count($obj->sgduels);

$n = 0;

while ($n < $count_sgduels) {

    $number = $n++;
?>
    <p>
    <details>
        <summary>
            <b><?php echo $obj->sgduels[$number]->title; ?></b>
        </summary>
        <div class="sum-word-breakUI">
            <p>
                <?php echo  "<br>" . $obj->sgduels[$number]->text; ?>
            </p>
        </div>
    </details>
    </p>
<?php
}
?>