<?php
$location_scandir = "./pages/news/exports/";
$files = scandir($location_scandir, SCANDIR_SORT_DESCENDING); ///bekomme alle dateien im Ordner Exports und sortiere alphabetisch

$n = '0'; ///definiere einen counter und setzte diesen auf 0 

while ($n < 2) { /// währen die Variable "n" kleiner als 2 ist gebe die Json Infos aus
    $content = file_get_contents($location_scandir . $files[$n]); /// bekomme alle inhalte von files, oben und setzte diese in einen Counter

    $files_url = $files[$n]; /// Definiert eine Variable für eine URL  die nachher auf files verweist


    $n++; /// füge dem counter +1 hinzu bei jedem durchlauf der while schleife
    $json_scandir = json_decode($content, true); /// decode json datei

?>

    <!--Ausgabe der Informationen in HTML Layout-->

    <div class="col-sm">
        <a href="<?php echo "?page=news-th&file=" . $files_url; ?>">
            <div class="shadow-box-blog" style="cursor:pointer ;background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('<?php echo $json_scandir['image']; ?>') center scroll ; ">
                <h4><?php echo $json_scandir['title']; ?></h4>
            </div>
        </a>
        <br>
    </div>

<?php


} ///ende der schleife

?>