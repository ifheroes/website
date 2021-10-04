<?php
$a=array("Wir suchen die Wahrheit, finden wollen wir sie aber nur dort, wo es uns beliebt. <br><b> Marie von Ebner-Eschenbach</b>"
,"Sich im Klaren darüber zu sein, dass man in Dingen richtig liegt, ist oft schwerer als zu erkennen das man etwas falsch gemacht hat.<br><b> Christopher Paul Oneisz</b>"
,"Suche nicht nach Fehlern, suche nach Lösungen. <br><b>Henry Ford</b>"
,"Suche nicht die großen Worte, eine kleine Geste genügt. <br><b>Phil Bosmans</b>"
,"Wir suchen immer nach einer Lösung, aber manchmal steht die Lösung direkt vor uns! <br><b>Lukas Jantscher</b>"
,"Wir leben in einer Zeit vollkommener Mittel und verworrener Ziele.<br><b>Albert Einstein</b>");
$random_keys=array_rand($a,2);
?>  





<center style="text-align: center;">
<h3>Die gesuchte Seite wurde nicht gefunden.</h3>
<h5>Wir leiten dich in wenigen Sekunden zur Startseite zurück...</h5>
<div class="container">
    <div class="row">
        <div class="col">
            <div style="font-size: xx-large;">“<text style="font-size: medium;"> <?php echo $a[$random_keys[0]];?></text></div>
            </div>
        </div>
    </div>
</div>
</center>

<meta http-equiv="refresh" content="20; URL=index.php">