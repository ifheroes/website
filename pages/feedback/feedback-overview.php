
<body>
    <center>
        <h1 class="font-color">Community Feedback</h1>
        <text class="font-color" style="font-weight: 100; font-size: larger;">Schicke uns deine Ideen, für ein besseres infinityheroes</text>
    </center>
    <br>

<?php
    include('class/f-o-find.php');
        if(isset($_GET['search'])) {
        } else {
            include('class/f-o-cat.php');
            include('class/f-o-submit.php');

        }


if (isset($_POST['search'])) {
    include('class/f-o-search.php');
    include('class/f-o-cat.php');

    } else {
    include('class/f-o-over.php');


}
    ?>
</div>
<br>
<br>