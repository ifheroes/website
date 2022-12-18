<?php

  $Empfaenger = "service@infinityheroes.de";
  $absendername = $_REQUEST['mail'];
  $absendermail = $_REQUEST['mail'];
  $Mailnachricht = nl2br("<html>" . $_REQUEST['textarea'] . "</html>");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html; charset=UTF-8';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "". $_REQUEST['name'] ."" . $_REQUEST['title'] . "";
  mail($Empfaenger, $Mailbetreff, $Mailnachricht, implode("\r\n", $header));;
  ?>
<meta http-equiv='refresh' content='0; URL=index.php?page=contact&error=sent'>
