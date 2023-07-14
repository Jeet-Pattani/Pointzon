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
		.dropdownMenu .label::after {
			top: 3px;
			right: -10px;
		}

		.animatedWrapper{
			height: auto;
		}
		.contactContainer{
			display: flex;
			align-items: center;
			justify-content: space-evenly;
		}

		/* Style inputs with type="text", select elements and textareas */
input[type=text], input[type=email], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #000; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #6400b5;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #33015c;
}

/* Add a background color and some padding around the form */
.formContainer {
  border-radius: 5px;
  color: #f2f2f2;
  background-color: transparent;;
  padding: 20px;
  width: auto;
  display: inline-block;
}

		
		#map{
		display: inline-block;
		margin-top: 5rem;
		margin-bottom: 2rem;
		}

		#map iframe{
		border-radius: 15px;
		box-shadow: 0 0 160px 3px #9494946b;
		}

		@media (max-width:769px){
			#fh5co-contact{
				padding: 8rem 0 25rem;
			}
		}

		@media (max-width: 426px){
			.contactContainer{
				flex-wrap: wrap;
			}
		#map{
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0 1em;
			margin-top: 15rem;
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



			<div class="fh5co-hero fh5co-hero-2">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
					style="background-image: url('https://images.pexels.com/photos/8867482/pexels-photo-8867482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); background-repeat: no-repeat;">
					<div class="desc animate-box">
						<h2>Contact Us</h2>
					</div>
				</div>
			</div>
			<div class="news-hero"></div>
			<!-- end:header-top -->


<section class=mapSection>
<section class=animatedWrapper>
<div id=stars></div>
<div id=stars2></div>
<div id=stars3></div>
<div id="fh5co-contact" class="animate-box">
		<div class="contactContainer">
				<div class="formContainer">
				<form action="action_page.php">

					<!-- <label for="name">Name</label> -->
					<input type="text" id="name" name="name" placeholder="Enter Your Name">

					<!-- <label for="lname">Email</label> -->
					<input type="email" id="email" name="email" placeholder="Enter Your Email">

					<!-- <label for="message">Message</label> -->
					<textarea id="message" name="message" placeholder="Write Your Message" style="height:200px"></textarea>
					<input type="submit" value="Submit">

				</form>
				</div>

				<div id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.3294133260683!2d-0.31564798502116853!3d51.48882221988346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760dbc719ef29b%3A0xa8270280b611b28c!2sthe%20mille%2C%201000%20Great%20West%20Rd%2C%20Brentford%20TW8%209DW%2C%20UK!5e0!3m2!1sen!2sin!4v1678362944487!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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