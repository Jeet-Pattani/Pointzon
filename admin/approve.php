<?php
session_start();
include "../resources/dbconfig.php";
if (!isset($_SESSION['adminloggedin']) || $_SESSION['adminloggedin'] !== true) {
	header("location: admin-login.php");
}
if (!$con) {
	echo 'Connection Error: ' . mysqli_connect_error();
}


if (isset($_POST['approve_project'])) {

	$project_id = $_POST['approve_project'];
	$appquery = "UPDATE projects SET approval=1 WHERE id = '$project_id' LIMIT 1";
	$app_query_run = mysqli_query($con, $appquery);

	if ($app_query_run) {
		$status="Post Approved Successfully";
		header("location: admin-dashboard");
	} else {
		echo "Error Approving Post. DB Error!";
	}
}else{
	echo "Invariable Approval Request !";
}
?>


