<?php


$survival = '26';
$sgduels = '22';


if($_GET['game'] == 'Survival'){

    $api_url = "https://team.wiki.ifheroes.de/api/pages/$survival";

    include('bookstack-api-get-site.php');

} elseif($_GET['game'] == 'SGDuels'){

    $api_url = "https://team.wiki.ifheroes.de/api/pages/$sgduels";

    include('bookstack-api-get-site.php');

}
?>
