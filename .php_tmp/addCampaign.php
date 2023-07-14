<?php
session_start();
include "../dbconfig.php";
if (!isset($_SESSION['businessloggedin']) || $_SESSION['businessloggedin'] !== true) {
    header("location: ../login.php");
}
?>

<?php
if (!$con) {
    echo 'Connection Error: ' . mysqli_connect_error();
}

$u_email = $_SESSION["email"];
$query = "SELECT first_last_name FROM `business_accounts` WHERE email = '$u_email'";
$execute_query = mysqli_query($con, $query);
$fetched_query = mysqli_fetch_assoc($execute_query);
$name =  $fetched_query['first_last_name'];
//echo $u_email;
if(isset($_POST['submit'])){
    //echo '<br><br><br><br>';
    $bname = mysqli_real_escape_string($con, $_POST['bname']);
    $bfund = mysqli_real_escape_string($con, $_POST['bfund']);
    $bdays = mysqli_real_escape_string($con, $_POST['bdays']);
    $phoneno = mysqli_real_escape_string($con, $_POST['bphoneno']);
    $btype = mysqli_real_escape_string($con, $_POST['btype']);
    $blogo = $_FILES['blogo'];
    $bintro = mysqli_real_escape_string($con, $_POST['bintro']);
    $bemail = mysqli_real_escape_string($con, $_POST['bemail']);
    $bphoneno = mysqli_real_escape_string($con, $_POST['bphoneno']);
    $bwebsite = mysqli_real_escape_string($con, $_POST['bwebsite']);
    $btagline = mysqli_real_escape_string($con, $_POST['btagline']);
    $bpitch = mysqli_real_escape_string($con, $_POST['bpitch']);
    
    $filename = $blogo['name'];
    $filename = microtime().str_replace(" ", "_", $filename);
    $filename = str_replace(" ","_",$filename);
    $filepath = $blogo['tmp_name'];
    $fileerror = $blogo['error'];

    if($fileerror == 0){
        $destfile = 'images/' . $filename;
        move_uploaded_file($filepath,$destfile);
    }


     $insertquery = "INSERT INTO `campaign`(`b_name`, `b_funding`, `b_time`, `b_type`, `b_logo`, `b_intro`,`b_email`, `b_phoneno`, `b_website`, `b_tagline`, `b_pitch`, `u_email`) VALUES ('$bname','$bfund','$bdays','$btype','$destfile ', '$bintro', '$bemail', ' $bphoneno', '$bwebsite', '$btagline', '$bpitch', '$u_email')";

     $iquery = mysqli_query($con,$insertquery);
     if($iquery){
        $status = "Campaign Details Added to Database";
     }else{
        $status = "Pointzon is facing downtime right now please try after some time !";
     }
}





?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Campaign | Pointzon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="../css/superfish.css">

    <link rel="stylesheet" href="../css/style.css">

    <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/glide.theme.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/card.css">
    <link rel="stylesheet" href="../../css/card2.css">
    <link rel="stylesheet" href="../../css/main.css">
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        ::selection {
  color: #f9f7fa;
  background: #57046b;
}
        .dropdownMenu .label::after {
            top: 3px;
            right: -10px;
        }

        .col-12 {
            padding-left: 0;
            padding-right: 0;
        }

        @media (max-width: 426px) {
            .col-md-6 .row iframe {
                margin-top: 2em;
            }

            #fh5co-contact .container form {
                margin-top: 6em;
            }
        }
    </style>
</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <header>
                <?php
                include 'dashboard-nav.php';
                ?>
            </header>


            <div class="fh5co-hero fh5co-hero-2">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url('https://images.unsplash.com/photo-1491555103944-7c647fd857e6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
                    <div class="desc animate-box">
                        <h2>Create Your Campaign !</h2>
                    </div>
                </div>
            </div>
            <div class="news-hero"></div>
            <!-- end:header-top -->
            <br><br><br>

            <div id="fh5co-contact" class="animate-box">
                <div class="container" style="width: 80%;">
                    <div class="desc animate-box">
                        <h2 style="color: var(--stark);">Welcome <?php echo $name; ?> ! <br><br> You can Create your campaign by filling below details!</h2>

                    </div>
                    <br>
                    <?php
                    if(isset($status)){
                        ?>
                                            <div class="alert alert-success" role="alert"><?php echo $status;?></div>
                        <?php
                       unset($status); 
                    } 
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="bname" class="form-control" placeholder="Business Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="bfund" class="form-control" placeholder="Funding Required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="bdays" class="form-control" placeholder="Days to Run Campaigns">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="btype" style="width:100%;padding: 1rem;">
                                                    <option value="Debt">Debt</option>
                                                    <option value="Donation">Donation</option>
                                                    <option value="Rewards">Rewards</option>
                                                    <option value="Equity">Equity</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="file" name="blogo" class="form-control" placeholder="Business Logo" accept= ".png,.jpg,.gif,.jpeg,.webp">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="bintro" class="form-control" id="" cols="30" rows="7" placeholder="Brief Intro"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="bemail" class="form-control" placeholder="Business Email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="bphoneno" class="form-control" placeholder="Business Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="bwebsite" class="form-control" placeholder="Business Website">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="btagline" class="form-control" placeholder="Business Tagline">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="bpitch" class="form-control" id="" cols="30" rows="7" placeholder="Business Pitch"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="padding: 1rem;">
                                        <div class="form-group">
                                            <input type="submit" value="Create Campaign" name="submit" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <br><br>



            <?php
            include 'dashboard-footer.php';
            ?>


        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="../js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="../js/hoverIntent.js"></script>
    <script src="../js/superfish.js"></script>
    <!-- Google Map -->

    <!-- Main JS (Do not remove) -->
    <script src="../js/main.js"></script>
    <script src="../../js/nav.js"></script>
    <!-- js for intersection observer navbar -->
    <!-- <script>
		const navbar = document.querySelector(".navbarMain");
		const heroSection = document.querySelector(".news-hero");

		if (screen.width > 767) {
			var heroSectionOptions = {
				rootMargin: "-100px 0px 0px 0px",
			};
		} else {
			var heroSectionOptions = {
				rootMargin: "-50px 0px 0px 0px",
			};
		}
		const heroSectionObserver =
			new IntersectionObserver(function(entries, navbar) {
				entries.forEach(entry => {
					if (!entry.isIntersecting) {
						console.log("The navbar is styled and scrolled");
						console.log(entry.target);
						$(".navbarMain").css("background-color", "#0E0816");
						$(".navbarMain").css("box-shadow", "0 0 25px 3px rgba(99,109,255,0.6");
						$('.navbarMain').css("transition", "0.3s ease-in-out");


					} else {
						console.log("The navbar is back on heroSection");
						$(".navbarMain").css("background-color", "transparent");
						$(".navbarMain").css("box-shadow", "none");
						$('.navbarMain').css("transition", "0.3s ease-in-out");

					}

				})
			}, heroSectionOptions);

		heroSectionObserver.observe(heroSection);
	</script> -->
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