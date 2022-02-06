<?php



if (isset($_GET['pin'])) { //get pin via url
    if (empty($_POST["pin"])) { //if empty
        echo "<meta http-equiv='refresh' content='0; URL=index.php?page=contact&error=empty'>"; //redirect to error 
    } else {
        $pin = $_GET['pin']; //get pin via url
        if (md5($_POST["pin"]) == $pin) { //if pin has md5 hash 
            include('con-submit.php'); //include the submit file
        } else { //anyway
            echo "<meta http-equiv='refresh' content='0; URL=index.php?page=contact&error=notval'>"; //redirect to error page
        }
    }
} else {
    $pin = rand(3235, 4223); ///pin randomizer

    ?>
        <center>
        <?php 
        if(empty($_GET['error'])){ //if error = empty show text
            } elseif($_GET['error'] == 'empty'){
                echo "PIN stimmte nicht mit Zahlenkombination überein.";
            } elseif($_GET['error'] == 'notval'){ //if error = notval show text
                echo "PIN stimmte nicht mit Zahlenkombination überein.";
            } elseif($_GET['error'] == 'sent'){ //if error = sent show text that success
                echo "Ihre Anfrage wurde an den Betreiber übermittelt! <i class='fas fa-check'></i>";
        }  
        ?>
    </center>
    <form method='post' action="index.php?page=contact&pin=<?php echo md5($pin); ?>"> 
        <?php 
            include('con-form.php'); //import contact file
        ?>
    </form>

    <?php
        
    
}
?>