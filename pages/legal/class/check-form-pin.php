<?php



if (isset($_GET['pin'])) {
    if (empty($_POST["pin"])) {
        echo "<meta http-equiv='refresh' content='0; URL=index.php?page=contact&error=empty'>";
    } else {
        $pin = $_GET['pin'];
        if (md5($_POST["pin"]) == $pin) {
            include('con-submit.php');
        } else {
            echo "<meta http-equiv='refresh' content='0; URL=index.php?page=contact&error=notval'>";
        }
    }
} else {
    $pin = rand(3235, 4223); ///PIN ersteller

    ?>
        <center>
        <?php 
        if(empty($_GET['error'])){
            } elseif($_GET['error'] == 'empty'){
                echo "PIN stimmte nicht mit Zahlenkombination überein.";
            } elseif($_GET['error'] == 'notval'){
                echo "PIN stimmte nicht mit Zahlenkombination überein.";
            } elseif($_GET['error'] == 'sent'){
                echo "Ihre Anfrage wurde an den Betreiber übermittelt! <i class='fas fa-check'></i>";
        }  
        ?>
    </center>
    <form method='post' action="index.php?page=contact&pin=<?php echo md5($pin); ?>">
        <?php 
            include('con-form.php');
        ?>
    </form>

    <?php
        
    
}
?>