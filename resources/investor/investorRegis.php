<?php

include "../dbconfig.php";
session_start();

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

    $emailquery = "select * from investor_accounts where email ='$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if ($emailcount > 0) {
        $userExistError = "User Already Exists";
    } else {
        if ($password === $confPassword) {
            $insertquery = "INSERT INTO `investor_accounts`(`first_last_name`, `email`, `country`, `phone`, `password`) VALUES ('$flname','$email','$country','$phoneno','$hashPass')";

            $iquery = mysqli_query($con, $insertquery);
            if ($iquery) {
                $_SESSION['msg1'] = "Welcome ";
                $_SESSION['msg2'] = ", please log in to access your account !";
                $_SESSION["email"] = $email;
                header("location: investorLogin.php");
            } else {
                echo "database connection or query Error !";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/login.css">
    <title>Investor Sign Up | POINTZON</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
    <style>
        .wrap-login {
            padding: 177px 110px 15px 90px;
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

        /* The message box is shown when the user clicks on the password field */
        #message {
            display: none;
            background: transparent;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            padding: 3px;
            font-size: 12px 12px 12px 16px;
        }

        #message h6 {
            font-size: 15px;
        }

        @media (min-width:1023px) {
            #message p {
                font-size: 15px;
            }

            #message h6 {
                font-size: 18px;
            }
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -5px;
            font-family: "Font Awesome 5 Free";
            content: "\f00c";
            font-weight: 900;
        }

        /* Add a red text color and an "x" icon when the requirements are wrong */
        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -5px;
            font-family: "Font Awesome 5 Free";
            content: "\f00d";
            font-weight: 900;
        }
    </style>
</head>

<body>
    <div class="Main-container">
        <div class="container-login">
            <div class="wrap-login">

                <div class="login-pic">
                    <img src="../images/signup.svg" alt="signup_illustration">
                </div>

                <form class="login-form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <span class="login-form-title">Investor Sign Up</span>


                    <div class="wrap-input">
                        <input type="text" class="input" name="flname" placeholder="Enter Your Name" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <input type="email" class="input" name="email" placeholder="Email" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>


                    <?php
                    if(isset($userExistError)){
                        ?>
                                            <div class="alert alert-danger" role="alert"><?php echo $userExistError;?></div>
                        <?php
                        unset($userExistError);
                    } else{
                        echo "";
                    }
                    ?>

                    <div class="wrap-input">
                        <div class="select-caret">
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <select class="input" id="country" name="country" aria-placeholder="Country">

                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Aland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire, Sint Eustatius and Saba">Caribbean Netherlands</option>
                            <option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo - Brazzaville</option>
                            <option value="Congo, Democratic Republic of the Congo">Congo - Kinshasa</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'Ivoire">Côte d’Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curacao">Curaçao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czechia</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option>
                            <option value="Holy See (Vatican City State)">Vatican City</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">North Korea</option>
                            <option value="Korea, Republic of">South Korea</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, the Former Yugoslav Republic of">North Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia</option>
                            <option value="Moldova, Republic of">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar (Burma)</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Curaçao</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn Islands</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Réunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Barthelemy">St. Barthélemy</option>
                            <option value="Saint Helena">St. Helena</option>
                            <option value="Saint Kitts and Nevis">St. Kitts & Nevis</option>
                            <option value="Saint Lucia">St. Lucia</option>
                            <option value="Saint Martin">St. Martin</option>
                            <option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option>
                            <option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">São Tomé & Príncipe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Serbia and Montenegro">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sint Maarten">Sint Maarten</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and the South Sandwich Islands">South Georgia & South Sandwich
                                Islands</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option>
                            <option value="Swaziland">Eswatini</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syria</option>
                            <option value="Taiwan, Province of China">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">Timor-Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks & Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom" selected>United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Vietnam</option>
                            <option value="Virgin Islands, British">British Virgin Islands</option>
                            <option value="Virgin Islands, U.s.">U.S. Virgin Islands</option>
                            <option value="Wallis and Futuna">Wallis & Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa-solid fa-earth-americas"></i>
                        </span>
                    </div>

                    <div class="wrap-input">
                        <input type="tel" maxlength="20" class="input" name="phoneno" placeholder="Mobile Number"
                            required />
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <!-- <input type="password" class="input pswd" id="mainpass" name="pass" placeholder="Password" required /> -->
                        <input type="password" class="input pswd" id="mainpass" name="pass"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            placeholder="Password" required />

                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                    </div>
                    <div id="message">
                        <h6>Password must contain the following:</h6>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    <div class="wrap-input">
                        <input type="password" class="input pswd" id="confpass" name="conf-pass"
                            placeholder="Confirm Password" required>

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
                            Show Password
                        </label>
                    </div>
                    <div class="form-check" style="margin-left:20px">
                        <input class="form-check-input" type="checkbox" value="accepted" required />
                        <label class="form-check-label" style="font-size: 0.9rem;">
                            By Signing Up you agree to <a href="../terms.php" style="font-size: 0.9rem;">Terms &
                                Conditions</a>
                        </label>
                    </div>

                    <div class="login-form-btn-container">
                        <button type="submit" name="submit" class="login-form-btn">Sign Up !</button>
                    </div>


                    <div class="text-center p-t-2">
                        <a href="../login" class="txt2">Already have an Account? <i class="fa fa-long-arrow-right "
                                aria-hidden="true"></i></a>
                        <br>
                        <a href="../index" class="txt2">Back to Home <i class="fa fa-long-arrow-right "
                                aria-hidden="true"></i></a>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <!-- js for password validation -->

    <script>
        var myInput = document.getElementById("mainpass");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function () {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function () {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function () {
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
        (function () {
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