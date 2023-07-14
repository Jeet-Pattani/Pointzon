<?php
session_start();
?>
<!DOCTYPE html>
<html>

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
		::selection {
			color: #f9f7fa;
			background: #57046b;
		}

		.dropdownMenu .label::after {
			top: 3px;
			right: -10px;
		}

		.animatedWrapper {
			height: auto;
		}

		.contactWrapper {
			display: grid;
			place-items: center;
		}

		.contactContainer {
			display: grid;
			grid-template-columns: 30vw 0.8fr;
			grid-template-rows: 1fr;
			place-items: center;
			width: 80vw;
			margin-left: 10rem;
		}

		/* Style inputs with type="text", select elements and textareas */
		input[type=text],
		input[type=email],
		select,
		textarea {
			width: 100%;
			/* Full width */
			padding: 12px;
			/* Some padding */
			border: 1px solid #000;
			/* Gray border */
			border-radius: 4px;
			/* Rounded borders */
			box-sizing: border-box;
			/* Make sure that padding and width stays in place */
			margin-top: 6px;
			/* Add a top margin */
			margin-bottom: 16px;
			/* Bottom margin */
			resize: vertical;
			/* Allow the user to vertically resize the textarea (not horizontally) */
			color: black;
			background-color: #e7e7e78e;
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

		/* Add a background color and some padding around the form */
		.formContainer {
			border-radius: 5px;
			color: #f2f2f2;
			background-color: transparent;
			;
			padding: 20px;
			background-color: white;
			color: black;
		}

		.sideSection {
			height: 100%;
			width: 100%;
			background-color: #070707ac;
			display: grid;
			place-items: center;
			color: white;
			background-image: url('../images/contact.png');
			background-image:
				linear-gradient(to bottom, rgba(0, 0, 0, 0.469), rgba(0, 0, 0, 0.272)),
				url('../images/contact.png');
			opacity: 0.6;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.sideSection img {
			max-width: 100%;
			object-fit: cover;
		}


		#map {
			display: inline-block;
			margin-top: 5rem;
			margin-bottom: 2rem;
		}

		#fh5co-contact {
			padding: 3rem 0;
		}

		#map iframe {
			border-radius: 15px;
			box-shadow: 0 0 160px 3px #9494946b;
		}

		@media (max-width:769px) {
			#fh5co-contact {
				padding: 8rem 0 25rem;
			}
		}

		@media (max-width: 426px) {
			.sideSection {
				display: none;
			}

			.contactContainer {
				grid-template-columns: 1fr;
				grid-template-rows: 1fr;
				margin-left: 0;
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
					<div id="fh5co-contact" class="animate-box">
						<div class="contactWrapper">
							<div class="contactContainer">
								<div class="sideSection"></div>
								<div class="formContainer">
									<h1 style="display:grid;place-items:center;margin: 1rem auto 2rem;color:#000;font-weight:900;text-transform: capitalize;">Contact Us</h1>
									<form method="POST" action="contact-email">



										<!-- <label for="name">Name</label> -->
										<input type="text" id="name" name="name" placeholder="Enter Your Name" required>

										<!-- <label for="lname">Email</label> -->
										<input type="email" id="email" name="email" placeholder="Enter Your Email" required>

										<!-- <label for="message">Message</label> -->
										<textarea id="message" name="message" placeholder="Write Your Message" style="height:200px" required></textarea>
										<br>
										<button type="submit" name="contact_us">Send Message</button>

									</form>
								</div>


							</div>
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