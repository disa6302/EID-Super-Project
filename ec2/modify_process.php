<?php

include 'database_login.php';

$name=$_POST['form-name'];
$location=$_POST['form-location'];
$benefits=$_POST['form-benefits'];
$cost=$_POST['form-cost'];
$category=$_POST['form-category'];
$replace=$_POST['form-replace'];



$sqlm = "UPDATE itemprofile SET name='$name', benifits='$benefits', cost='$cost', category='$category' WHERE name='$replace' ";

if($connect->query($sqlm)==TRUE) {
	header("Location: manager.php");

}





?>