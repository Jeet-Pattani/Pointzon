<?php
session_start();
include "../resources/dbconfig.php";
if (!isset($_SESSION['adminloggedin']) || $_SESSION['adminloggedin'] !== true) {
    header("location: admin-login.php");
}
if (!$con) {
    echo 'Connection Error: ' . mysqli_connect_error();
}


if (isset($_POST['unapprove_project'])) {

    $project_id = $_POST['unapprove_project'];
    $unappQuery = "UPDATE projects SET approval=0 WHERE id = '$project_id' LIMIT 1";
    $unapp_query_run = mysqli_query($con, $unappQuery);

    if ($unapp_query_run) {
        $status="Post Uanpproved";
        header("location: admin-dashboard");
    } else {
        echo "Error Approving Post. DB Error!";
    }
}else{
	echo "Invariable Approval Request !";
}
?>