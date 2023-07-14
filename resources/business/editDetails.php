<?php

include "../dbconfig.php";
session_start();


//code to fetch current details from database

?>




<?php //code to reset details on database
if (isset($_POST['submit'])) {
    $flname = mysqli_real_escape_string($con, $_POST['flname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    $confPassword = mysqli_real_escape_string($con, $_POST['conf-pass']);

    $hashPass = password_hash($password, PASSWORD_BCRYPT);
    $hashConfPass = password_hash($confPassword, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $session_email = $_SESSION["email"];

    $emailquery = "select * from business_accounts where email ='$email'";
    $get_all_query = "select * from business_accounts where email ='$session_email'";
    $query = mysqli_query($con, $emailquery);
    $res = mysqli_query($con, $get_all_query);
    print_r($res);
    $emailcount = mysqli_num_rows($query);

    if ($emailcount > 0) {
        $userExistError = "User Already Exists";
    } else {
        if ($password === $confPassword) {
            $insertquery = "INSERT INTO `business_accounts`(`first_last_name`, `email`, `country`, `phone`, `password`) VALUES ('$flname','$email','$country','$phoneno','$hashPass')";

            $iquery = mysqli_query($con, $insertquery);
            if ($iquery) {
                $_SESSION['msg1'] = "Welcome ";
                $_SESSION['msg2'] = ", please log in to access your account !";
                $_SESSION["email"] = $email;
                header("location: businessLogin.php");
            } else {
                echo "incorrect query !";
            }
        } else {
            $passwordError = "Passwords Do Not Match";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/login.css">
    <title>Business Details | POINTZON</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
    <style>
        .wrap-login {
            padding: 177px 110px 0px 90px;
            width: auto;
        }

        .login-form {
            bottom: 8em;
        }

        @media(max-width:426px) {
            .wrap-login {
                padding: 2rem 1.3rem;
            }

            .login-form {
                bottom: 0em;
            }
        }

        select {
            appearance: none;
        }

        .select-caret {
            position: relative;
        }

        .select-caret .fa-caret-down {
            position: absolute;
            z-index: 2;
            color: #666;
            left: 16em;
            top: 1em;
        }
    </style>
</head>

<body>
    <div class="Main-container">
        <div class="container-login">
            <div class="wrap-login">
                <?php
                $session_email = $_SESSION["email"];
                $get_all_query = "select * from business_accounts where email ='$session_email'";
                $getDataQuery = mysqli_query($con, $get_all_query);
                $data = mysqli_fetch_assoc($getDataQuery);
                // print_r($data);

                ?>
                <form class="login-form" method="post" action="update.php">
                    <span class="login-form-title">Edit Your Details</span>


                    <div class="wrap-input">
                        <input type="text" class="input" name="flname" value="<?=$data['first_last_name']?>" placeholder="Enter Your Name">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <input type="email" class="input" value="<?=$data['email']?>" name="email" placeholder="Email">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php
                    if (isset($userExistError)) {
                    ?>
                        <div class="alert alert-danger" role="alert"><?php echo $userExistError; ?></div>
                    <?php
                        unset($userExistError);
                    } else {
                        echo "";
                    }
                    ?>

                    <div class="wrap-input">
                        <input type="text" class="input" value="<?=$data['country']?>" name="country" placeholder="Your Country" />
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa-solid fa-earth-americas"></i>
                        </span>
                    </div>

                    <div class="wrap-input">
                        <input type="tel" maxlength="20" class="input" value="<?=$data['phone']?>" name="phoneno" placeholder="Mobile Number" />
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="login-form-btn-container">
                        <button type="submit" name="update" class="login-form-btn">Update</button>
                    </div>


                    <div class="text-center p-t-2">
                        <a href="business-dashboard" class="txt2">Back to Dashboard <i class="fa fa-long-arrow-right " aria-hidden="true"></i></a>
                        <br>
                        <a href="../../index" class="txt2">Back to Home <i class="fa fa-long-arrow-right " aria-hidden="true"></i></a>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- js for password validation -->

    <script>
        var myInput = document.getElementById("mainpass");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>

    <script>
        function showFunction() {
            var x1 = document.getElementById("mainpass");
            var x2 = document.getElementById("confpass");
            if (x2.type === "password" && x1.type === "password") {
                x1.type = "text";
                x2.type = "text";
            } else {
                x1.type = "password";
                x2.type = "password";
            }
        }
    </script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/63d7d060c2f1ac1e20305e5a/1go1gbv0o';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>