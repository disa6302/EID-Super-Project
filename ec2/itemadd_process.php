<?php

include 'database_login.php';

$name=$_POST['form-name'];
$location=$_POST['form-location'];
$benefits=$_POST['form-benefits'];
$cost=$_POST['form-cost'];
$category=$_POST['form-category'];

echo $name;
echo $location;
echo $benefits;
echo $cost;
echo $category;

$sqlit = "INSERT INTO itemprofile (name, location, benefits, cost, category) 
VALUES ('$name', '$location', '$benifits', '$cost', '$category')";

$result = $connect->query($sqlit);

header("Location: manager.php");



?>