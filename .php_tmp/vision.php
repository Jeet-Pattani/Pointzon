<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vision & Mission | POINTZON</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
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
	<link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
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
				<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url('https://images.pexels.com/photos/325135/pexels-photo-325135.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
					<div class="desc animate-box">
						<h2>Mission & Vision</h2>
						<!-- <span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">code-projects.org</a></span> -->
					</div>
				</div>
			</div>
			<div class="news-hero"></div>
			<br><br>
			<!-- end:header-top -->
			<div id="fh5co-about">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">

							<h3 style="color: whitesmoke; font-size: 1.5em;">MISSION</h3>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row row-bottom-padded-md">
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 animate-box" style="color: whitesmoke; font-size: 1.3em;">
							<p>Our mission is to provide a comprehensive and user-friendly platform for startups and venture capitalists to connect, collaborate, and grow. We strive to make fundraising simple and efficient, while also fostering a community that is dedicated to both business growth and social progress through our charity efforts. We aim to make a positive impact on society by supporting underprivileged communities and causes with every transaction made on our website.</p>
							<br><br>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">

							<h3 style="color: whitesmoke; font-size: 1.5em;">VISION</h3>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 animate-box" style="color: whitesmoke; font-size: 1.3em;">
							<p>Our vision at Pointzon is to be the leading platform for startups and venture capitalists to connect, collaborate, and grow. We want to empower entrepreneurs and investors to achieve their goals and make an impact on the world.</p><br><br>
						</div>
					</div>
				</div>
			</div>
			<!-- END fh5co-about -->


			<?php
include "resources-footer.php";
?>


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

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	<script src="../js/nav.js"></script>

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