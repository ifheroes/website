<?php
///GET CURRENT FEEDBACKS OPEN

$result = mysqli_query($conn, "SELECT * FROM tickets WHERE closed='0' AND uuid = '$uuid'");
$num_rows = mysqli_num_rows($result);

if ($num_rows == 0){

} else { ?>
    <div class="badge">
    <?php echo "$num_rows"; ?>
</div>
<?php
}
?>

