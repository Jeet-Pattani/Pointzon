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
	<title>Contact Us | Pointzon</title>
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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/main.min.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}


		*:focus {
			outline: 0;
		}
		.dropdownMenu .label:after {
			top:4px;
		}
		.wrapper {
			margin: 3rem auto;
			margin: 6rem 0rem 3rem 25rem;
			margin: 7% 0rem 3rem 33%;
			width: 70%;
			max-width: 1000px;
			display: flex;
			justify-content: center;
			color: #fff;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana,
				"sans-serif";
		}

		form {
			width: 70%;
			margin: 0;
		}

		form * {
			font-size: 20px;
			letter-spacing: 0.075em;
			font-weight: 300;
			cursor: pointer;
			text-decoration: none;
			border-radius: 3px;
		}

		form .field {
			width: 100%;
			position: relative;
			margin-bottom: 15px;

		}


		form .field label {
			position: absolute;
			top: 0;
			left: 0;
			background: linear-gradient(90deg, #b13e8b, #372056);
			width: 100%;
			height: 64px;
			transition: width 333ms ease-in-out;
			text-align: center;
			padding: 18px 0;
		}

		form .field input[type="text"],
		form .field input[type="email"],
		form .field textarea {
			border: none;
			width: 100%;
			height: 64px;
			margin: 0;
			padding-left: 19.5%;
			color: #313a3d;
		}

		form #msg {
			height: 64px;
			resize: none;
			transition: all 333ms ease-in-out;
			padding-top: 18px;
		}

		form textarea:focus#msg,
		form textarea:not(:placeholder-shown)#msg {
			height: 166px;
		}

		form input[type="text"]:focus+label,
		form input[type="text"]:not(:placeholder-shown)+label,
		form input[type="email"]:focus+label,
		form input[type="email"]:not(:placeholder-shown)+label,
		form textarea:focus+label,
		form textarea:not(:placeholder-shown)+label,
		form .field:hover label {
			width: 18%;
		}

		form input[type="submit"] {
			background: linear-gradient(90deg, #b13e8b, #812d65);
			-webkit-appearance: none;
			border: none;
			position: relative;
			padding: 13px 50px;
			transition: all 0.3s ease-in-out;
		}

		form input[type="submit"]:hover,
		form input[type="submit"]:focus {
			background: #372056;
		}
				/* Style the submit button with a specific background color etc */
				button {
			background-color: #6400b5;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		/* When moving the mouse over the submit button, add a darker green color */
		button:hover {
			background-color: #33015c;
		}
		@media (max-width:426px){
			.wrapper{
				margin: 40% auto 0;
				width: 100%;
			}

			.field:hover label{
				font-size: 0;
			}
		}
	</style>
</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<header>
				<?php
				include "resources-nav.php";
				?>
			</header>
			<div class="news-hero"></div>
			<!-- end:header-top -->


			<section class=mapSection>
				<section class=animatedWrapper>

					<div id=stars></div>
					<div id=stars2></div>
					<div id=stars3></div>
					<div class="animate-box">
						<div class="wrapper">
							<form method="POST" action="https://api.web3forms.com/submit">


								<input type="hidden" name="access_key" value="5509e1ca-7a04-4061-bcf5-77e03d9264df">
								<div class="field">
									<input type="text" id="name" name="name" placeholder="Who are you?" autofocus required/>
									<label for="name">Name</label>
								</div>

								<div class="field">
									<input type="email" id="email" name="email" placeholder="name@domain.tld" required/>
									<label for="email">E-Mail</label>
								</div>

								<div class="field">
									<input type="text" id="phone" name="phone" placeholder="Phone Number" data-rule="maxlen:10" required/>
									<label for="phone">Contact</label>

								</div>


								<div class="field">
									<textarea id="msg" rows="5" name="msg" placeholder="You message..."></textarea>
									<label for="msg">Details</label>
								</div>
								<button type="submit">Send Message</button>
							</form>

						</div>
					</div>
				</section>
			</section>

			<br><br>

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
	<!-- Google Map -->
	<script>
		$(window).stellar({
			horizontalOffset: 0,
			verticalOffset: 0
		});
	</script>

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