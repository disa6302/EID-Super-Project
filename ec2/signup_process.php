<?php

include 'database_login.php';

$first=$_POST['form-firstname'];
$last=$_POST['form-lastname'];
$username=$_POST['form-username'];
$password=$_POST['form-password'];


$sql = "INSERT INTO signup (firstname, lastname, username, password) 
VALUES ('$first', '$last', '$username', '$password')";


$result = $connect->query($sql);

header("Location: login_shopeasy.php");



?>