<?php
$location_scandir = "./content/news/";
$files = scandir($location_scandir, SCANDIR_SORT_DESCENDING); ///bekomme alle dateien im Ordner Exports und sortiere alphabetisch

$num_availe = count(scandir($location_scandir))-2; /// prüfung wie viele files sind vorhanden


if($num_availe == 1){
    /* echo file_get_contents($location_scandir.$files[0]); */
    $json_scandir = json_decode(file_get_contents($location_scandir.$files[0]), true);

    ?>

    <!--Ausgabe der Informationen in HTML Layout-->

    <div class="col-sm">
        <a href="<?php echo "?page=news-th&file=" . $files[0]; ?>">
            <div class="shadow-box-blog" style="cursor:pointer ;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $json_scandir['image']; ?>') center scroll ; ">
                <h4><?php echo $json_scandir['title']; ?></h4>
            </div>
        </a>
        <br>
    </div>
<?php


} elseif($num_availe == 0){
//// anmerkung zum Discord für news und mehr und weiter zur Status seite #todo
} elseif ($num_availe >1){
    $json_scandir = json_decode(file_get_contents($location_scandir.$files[0]), true);
    $json_scandir2 = json_decode(file_get_contents($location_scandir.$files[1]), true);

    ?>

    <!--Ausgabe der Informationen in HTML Layout-->

    <div class="col-sm">
        <a href="<?php echo "?page=news-th&file=" . $files[0]; ?>">
            <div class="shadow-box-blog" style="cursor:pointer ;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $json_scandir['image']; ?>') center scroll ; ">
                <h4><?php echo $json_scandir['title']; ?></h4>
            </div>
        </a>
        <br>
    </div>

    <div class="col-sm">
        <a href="<?php echo "?page=news-th&file=" . $files[1]; ?>">
            <div class="shadow-box-blog" style="cursor:pointer ;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $json_scandir2['image']; ?>') center scroll ; ">
                <h4><?php echo $json_scandir2['title']; ?></h4>
            </div>
        </a>
        <br>
    </div>
<?php

}
