<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pointzon_dev');
define('DB_PASSWORD', '111WebApp@Pointzon');
define('DB_NAME', 'pointzon_users');

/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'phplogin');*/

// Try connecting to the Database
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($con == false){
    dir('Error: Cannot connect');
}
?>