<?php

include('news-thread.php');

$string = $_GET['file'];
$pattern = '/(\d{2}-\d{2}-\d{4})/';

if (preg_match($pattern, $string, $matches)) {
    $datum = $matches[1];
        list($monat, $tag, $jahr) = explode('-', $datum);
        $europaeischesDatum = $tag . '.' . $monat . '.' . $jahr;
} else {
    echo "Kein Datum im angegebenen Format gefunden.";
}

?>

<div class="container"><a href="./#updates" class="link-no-deco"><b>‹ <?php echo $data_lang->news[0]->back_home; ?></b></a>
    <div class="row">
        <div class="col-sm">
            <p>

            <div class="shadow-box-blog" style="cursor:auto ;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $json_thread['image']; ?>') center scroll ; ">
                <h3><?php echo $json_thread['title'] . "<br>"; ?></h3>
            </div>
            <br>

            <p>
            <div class="shadow-box-2">
                <?php echo $json_thread['text'] . "<br>"; ?>
                <br>
                Published: <b><?php echo $europaeischesDatum; ?></b>
            </div>
            </p>


            </p>
        </div>
    </div>
</div>