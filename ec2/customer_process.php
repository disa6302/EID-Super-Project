<?php

include 'database_login.php';

$first=$_POST['form-firstname'];
$last=$_POST['form-lastname'];
$rfid=$_POST['form-rfid'];
$credits=$_POST['form-credits'];


$sqlc = "INSERT INTO custprofile (firstname, lastname, RFID, credit_points) 
VALUES ('$first', '$last', '$rfid', '$credits')";

$result = $connect->query($sqlc);

header("Location: manager.php");



?>