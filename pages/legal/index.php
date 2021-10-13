
<!-- <div class="container">
    <div class="row">
        <?php
        if (isset($_GET['privacy'])) {
        ?>

        <?php echo $row['text']; ?>
                </div>
        <?php }
        ?>
    </div>
</div> -->



<?php

// path to your JSON file

// put the content of the file in a variable
$data = file_get_contents('legal_info.json', true); 
// JSON decode
$obj = json_decode($data); 
// display the name of the first person
echo $obj[0]->name;
?>