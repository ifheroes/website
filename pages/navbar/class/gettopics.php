<?php
///GET CURRENT FEEDBACKS OPEN

$result = mysqli_query($conn, "SELECT * FROM feedback WHERE closed='0'");
$num_rows = mysqli_num_rows($result);

if ($num_rows == 0){

} else { ?>
    <span class="badge">
    <?php echo "$num_rows"; ?>
</span>
<?php
}
?>