<body>
    <center>
        <h1 class="font-color">Bewerben</h1>
        <text class="font-color">Werde jetzt ein teil von uns! </text>
    </center>
    <br>

    <?php
    // put the content of the file in a variable
    $data = file_get_contents($json['jobs'], true);
    // JSON decode
    $obj = json_decode($data);
    // display the name of the first person
    echo $obj[1]->title;
    ?>

</body>