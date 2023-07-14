<?php
session_start();
include "../resources/dbconfig.php";
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $unamequery = "SELECT * FROM admin_accounts WHERE username ='$username'";
    $query = mysqli_query($con, $unamequery);
    $uname_count = mysqli_num_rows($query);
    if ($uname_count){
        $uname_pass = mysqli_fetch_assoc($query);
        $db_pass =  $uname_pass['password'];
        $pass_matching = password_verify( $password, $db_pass);
        if($pass_matching){
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["adminloggedin"] = true;
            $_SESSION["investorloggedin"] = false;
            $_SESSION["businessloggedin"] = false;
            $_SESSION["email"] = $username;
            header("location: admin-dashboard");
        }else{
            $passwordError = "Incorrect Password";
        }
    }else{
        $emailError = "Incorrect Email. Admin Does Not Exist !";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/login.css">
    <title>Business Login | Pointzon</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.jpg">
    <style>
        .alert-success {
    --bs-alert-color: #4c0086;
    --bs-alert-bg: #e8caff;
    --bs-alert-border-color: #4c0086;
    --bs-alert-link-color: var(--bs-success-text);
}
    </style>
</head>

<body>
    <div class="Main-container">
        <div class="container-login">
            <div class="wrap-login">

                <div class="login-pic">
                    <img src="../resources/images/login.svg" alt="IMG">
                </div>

                <form class="login-form" method="post">
                    <span class="login-form-title">Admin Login</span>
                    <?php
                        if(isset($_SESSION['msg1']))
                        {
                            $email = $_SESSION["email"];
                             $query = "SELECT first_last_name FROM `business_accounts` WHERE email = '$email'";
                             $execute_query = mysqli_query($con, $query);
                             $fetched_query = mysqli_fetch_assoc($execute_query);
                             $name =  $fetched_query['first_last_name'];
                            ?>
                            <div class="alert alert-success" role="alert">
                            <?php
                            echo $_SESSION['msg1'] . $name . $_SESSION['msg2'];
                            ?>
                            </div>
                            <?php
                            // unset($_SESSION['msg1']);
                            // unset($_SESSION['msg2']);
                            // unset($name);
                        }
                        else{
                            echo "";
                        }
                        ?>
                    <div class="wrap-input">
                        <input type="text" class="input" name="username" placeholder="Enter Username" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>                    <?php
                    if(isset($emailError)){
                        ?>
                                            <div class="alert alert-danger" role="alert"><?php echo $emailError;?></div>
                        <?php
                        unset($emailError);
                    } else{
                        echo "";
                    }
                    ?>
                    <div class="wrap-input">
                        <input type="password" class="input" id="mainpass" name="pass" placeholder="Password" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php
                    if(isset($passwordError)){
                        ?>
                                            <div class="alert alert-danger" role="alert"><?php echo $passwordError;?></div>
                        <?php
                        unset($passwordError);
                    } else{
                        echo "";
                    }
                    ?>
                    <div class="form-check" style="margin-left:20px">
                        <input class="form-check-input" type="checkbox" onclick="showFunction()">
                        <label class="form-check-label" style="font-size: 0.9em;">
                           show password
                        </label>
                    </div>
                    <div class="login-form-btn-container">
                        <button type="submit" name="submit" class="login-form-btn">Login</button>
                    </div>

                  <div class="text-center p-t-1">
                      <span class="txt1">Forgot</span>
                      <a href="../forgotPassword" class="txt2"> Password ?</a>
                  </div>
                  <div class="text-center p-t-2">
                      <a href="../signup" class="txt2"> Create Your Account <i class="fa fa-long-arrow-right " aria-hidden="true"></i></a>
                      <br>
                      <a href="../../" class="txt2">Back to Home <i class="fa fa-long-arrow-right " aria-hidden="true"></i></a>
                  </div>

                </form>

            </div>
        </div>
    </div>

    <script>
            function showFunction() {
            var x1 = document.getElementById("mainpass");
            if (x1.type === "password") {
                x1.type = "text";

            } else {
                x1.type = "password";

            }
        }
</script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63d7d060c2f1ac1e20305e5a/1go1gbv0o';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
</body>

</html>