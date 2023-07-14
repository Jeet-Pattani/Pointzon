<?php
session_start();
include "dbconfig.php";
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
	header("location: login.php");
}
?>

<?php
if (!$con) {
	echo 'Connection Error: ' . mysqli_connect_error();
}
$email = $_SESSION["email"];
$query = "SELECT first_last_name FROM `accounts` WHERE email = '$email'";

$execute_query = mysqli_query($con, $query);
$fetched_query = mysqli_fetch_assoc($execute_query);
$name =  $fetched_query['first_last_name'];
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Campaign | Pointzon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by code-projects.org" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="code-projects.org" />
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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">

	<script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../css/glide.theme.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/card.css">
	<link rel="stylesheet" href="../css/card2.css">
	<link rel="stylesheet" href="../css/main.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.dropdownMenu .label::after {
			top: 3px;
			right: -10px;
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
			<nav class="navbarMain">
				<div class="logo">
					<a href="../index">Pointzon</a>
				</div>
				<div class="hamburger">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
				<ul class="nav-links">
					<li id="nav-item-1"><a href="../index">Home</a></li>
					<li class="dropdownMenu" id="nav-item-2">

						<div class="menuOptionsContainer" id="dropdownId">
							<h4 class="label">Services</h4>
							<div class="content">
								<div class="sideHeading"><h5>Pointzon's Services</h5></div>
								<div class="categories">
									<div class="categories-wrapper">
									<h5 class="cheading">Financial Services</h5>
									<p><a href="../services/Offshore">Offshore Investments</a></p>
									<p><a href="../services/Investments">Investments</a></p>
									<p><a href="../services/InvestmentBanking">Investment Banking</a></p>
									<p><a href="../services/CurrencyRiskManagement">Currency & Risk Management</a></p>
									<p><a href="../services/Banking">Private & Corporate Banking Solutions</a></p>
									</div>
								</div>
								<div class="categories">
									<div class="categories-wrapper">
									<h5 class="cheading">Payment Services</h5>
									<p><a href="../services/PaymentTransfer">Payment Transfer</a></p>
									<p><a href="../services/MerchantServices">Merchant Services</a></p>
									</div>
								</div>
								<div class="categories">
									<div class="categories-wrapper">
									<h5 class="cheading">Technology Services</h5>
									<p><a href="../services/Fintech">Fintech</a></p>
									<p><a href="../services/Blockchain">Blockchain Wallet</a></p>
									</div>
								</div>
								<div class="categories">
									<div class="categories-wrapper">
									<h5 class="cheading">Funding Services</h5>
									<p><a href="../services/Charity">Charity</a></p>
									<p><a href="../services/Crowdfunding">Crowdfunding</a></p>
									</div>
								</div> 
							
							</div>
						</div>

					</li>
					<li id="nav-item-3"><a href="index">News</a></li>
					<li id="nav-item-4"><a href="about">About Us</a></li>
					<li id="nav-item-5"><a href="contact">Contact Us</a></li>


					<?php
					if (isset($_SESSION['loggedin'])) {

						echo '<a  id="nav-item-6" class="btn login-button" href="logout" role="button">Logout</a>';
					} else {

						echo '<a  id="nav-item-6" class="btn login-button" href="login" role="button">Login</a>';
						echo '<a  id="nav-item-7" class="btn join-button" href="signup" role="button">Join</a>';
					}
					?>
				</ul>
			</nav>
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
						<h2 style="color: var(--stark);">Welcome <?php echo $name; ?> ! <br><br> Please Enter Details about Your Business !</h2>

					</div>
					<br>
					<form action="#" method="post">
						<div class="row">

							<div class="col">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Business Name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Business Email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Business Pitch"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" value="Send Details !" class="btn btn-primary">
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>


			<br><br>

			<footer class="footer-10">
				<div class="footerContainer">
					<div class="row mb-5 pb-3">
						<div class="col-md-4 mb-md-0 mb-4 d-flex">
							<div class="con con-1 w-100 py-5">
								<div class="con-info w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<a href="tel:02081549549"> <span><i class="fa-solid fa-phone-volume"></i></span></a>
									</div>
									<div class="text">
										<a href="tel:02081549549"> <span>020 8154 9549</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-md-0 mb-4 d-flex">
							<div class="con con-2 w-100 py-5">
								<div class="con-info w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<a href="mailto:info@pointzon.com"> <span><i class="fa-regular fa-envelope"></i></span></a>
									</div>
									<div class="text">
										<a href="mailto:info@pointzon.com"> <span>info@pointzon.com</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-md-0 mb-4 d-flex">
							<div class="con con-3 w-100 py-5">
								<div class="con-info w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<a href="https://goo.gl/maps/LS33z5bv9g7ditnM8"> <span><i class="fa-solid fa-location-dot"></i></span></a>
									</div>
									<div class="text">
										<a href="https://goo.gl/maps/LS33z5bv9g7ditnM8"> <span>the mille, 1000 Great West Rd, London TW8 9DW, United Kingdom</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-4 mb-md-0 mb-4">
									<h2 class="footer-heading">Resources</h2>
									<ul class="list-unstyled">
										<li><a href="index" class="d-block">News</a></li>
										<li><a href="policy" class="d-block">Privacy Policy</a></li>
										<li><a href="contact" class="d-block">Contact Form</a></li>
										<li><!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->

											<!-- <a href="#" class="d-block" id="open_preferences_center">Cookies Preferences</a></li> -->
									</ul>
								</div>
								<div class="col-md-4 mb-md-0 mb-4">
									<h2 class="footer-heading">About</h2>
									<ul class="list-unstyled">
										<li><a href="about" class="d-block">Our story</a></li>
										<li><a href="vision" class="d-block">Mission & Vision</a></li>

									</ul>
								</div>


							</div>
						</div>
						<div class="col-md-5 mb-md-0 mb-4">
							<h2 class="footer-heading">Subscribe</h2>
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex">
									<input type="text" class="form-control rounded-left" placeholder="Enter email address">
									<button type="submit" class="form-control submit rounded-right">Subscribe</button>
								</div>
								<span class="subheading">Get digital marketing updates in your mailbox</span>
							</form>
						</div>
					</div>
					<div class="row mt-5 pt-4 border-top">
						<div class="col-md-6 col-lg-8 mb-md-0 mb-4">
							<p class="copyright mb-0">
								Copyright &copy; 2023 All rights reserved by Pointzon</a>
							</p>
						</div>
						<div class="col-md-6 col-lg-4 text-md-right">
							<ul class="ftco-footer-social p-0">
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span><i class="fa-brands fa-facebook"></i></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span><i class="fa-brands fa-instagram"></i></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span><i class="fa-brands fa-youtube"></i></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Google Map -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	<script src="../js/nav.js"></script>
	<!-- js for intersection observer navbar -->
	<script>
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