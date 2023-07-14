<?php

include "../dbconfig.php";
session_start();
$session_email = $_SESSION["email"];
echo $session_email;
if (isset($_POST['update'])){
    $flname = mysqli_real_escape_string($con, $_POST['flname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);

    $updateQuery = "UPDATE investor_accounts SET first_last_name='$flname', email='$email', country='$country', phone='$phoneno' WHERE email='$session_email' ";

    $runUpdate = mysqli_query($con,$updateQuery);

    if($runUpdate){
        $status="Data Updated Successfully";
        header("location: editDetails");
    }else{
        echo "Error Query could not run !";
    }

}

?>