<?php
session_start();
include "../dbconfig.php";
if (!isset($_SESSION['adminloggedin']) || $_SESSION['adminloggedin'] !== true) {
	header("location: admin-login.php");
}
if (!$con) {
	echo 'Connection Error: ' . mysqli_connect_error();
}
?>


