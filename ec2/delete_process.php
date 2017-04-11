<?php

include 'database_login.php';

$name=$_POST['form-name'];
$location=$_POST['form-location'];
$category=$_POST['form-category'];

$sqld = "DELETE FROM itemprofile WHERE name='$name' AND location='$location'";

if ($connect->query($sqld) == TRUE) {
	header("Location: manager.php");
}

?>