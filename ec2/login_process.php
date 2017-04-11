<?php

include 'database_login.php';

$username=$_POST['form-username'];
$password=$_POST['form-password'];

$sql = "SELECT * FROM signup WHERE username='$username' AND password='$password'";
$result = $connect->query($sql);

if (!$row = $result->fetch_assoc()) {
	header("Location: login_shopeasy.php");
}

else {
	header("Location: manager.php");

}

?>