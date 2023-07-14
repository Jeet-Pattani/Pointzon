<?php
session_start();
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Us | POINTZON</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by code-projects.org" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="code-projects.org" />
	<link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">


	<script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/faq.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="../js/gianni-accordion.js"></script>
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/card.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel=preload href=css/investment.min.css as=style onload="this.onload=null;this.rel='stylesheet'">
	<link rel=preload href=../css/main.min.css as=style onload="this.onload=null;this.rel='stylesheet'">

	<script src="js/modernizr-2.6.2.min.js"></script>
	<style>
		.dropdownMenu .label::after {
			top: 5px;
			right: -10px;
		}

		.cardFaq {
			margin: 10rem auto 6rem;
		}

		h4 {
			margin-bottom: 0rem;
		}
	</style>
</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<header>
				<?php
				include 'resources-nav.php';
				?>
			</header>

			<div class="news-hero"></div>
			<!-- end:header-top -->
						<div class="cardFaq">
							<article>
								<h4 data-accordion-element-trigger>What is the minimum investment required to get started with Pointzon?</h4>
								<div data-accordion-element-content class="content">
									<p>The minimum investment required to get started with Pointzon may vary depending on the investment option you choose. Our team can guide you through the minimum investment requirements for each option.</p>
								</div>
							</article>
							<article>
								<h4 data-accordion-element-trigger>How does Pointzon select investment opportunities?</h4>
								<div data-accordion-element-content class="content">
									<p>At Pointzon, we have a team of experienced professionals who conduct thorough research and analysis to identify potential investment opportunities. We also take into account your investment goals and preferences to ensure that we recommend investment options that are aligned with your objectives.</p>
								</div>
							</article>
							<article>
								<h4 data-accordion-element-trigger>How often can I access my investments?</h4>
								<div data-accordion-element-content class="content">
									<p> The frequency with which you can access your investments may vary depending on the investment option you choose. Some investment options may have restrictions on the frequency of withdrawals, while others may allow you to access your funds more frequently. Our team can provide you with more information on the specific terms and conditions of each investment option.</p>
								</div>
							</article>
							<article>
								<h4 data-accordion-element-trigger>What kind of returns can I expect from my investment?</h4>
								<div data-accordion-element-content class="content">
									<p>The returns on your investment may vary depending on the investment option you choose and market conditions. Our team can provide you with historical performance data and other information to help you make informed investment decisions.</p>
								</div>
							</article>
							<article>
								<h4 data-accordion-element-trigger>How does Pointzon manage risk?</h4>
								<div data-accordion-element-content class="content">
									<p>At Pointzon, we prioritize risk management in all our investment decisions. We use a range of risk management techniques, including diversification, asset allocation, and hedging strategies, to help mitigate risks and protect your investment. Our team can provide you with more information on the specific risk management strategies used for each investment option.</p>
								</div>
							</article>
			</div>
			<!-- END fh5co-about -->
			<?php
			include 'resources-footer.php';
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
	<script src="../js/gianni-accordion.js"></script>
	<!-- js for faq section -->

	<script>
		var myAccordion = new gianniAccordion({
			elements: ".cardFaq article",
			trigger: "[data-accordion-element-trigger]",
			content: "[data-accordion-element-content]"
		});


		myAccordion.on("elementSelected", data => {
			console.log("elementOpened", data);
		});
	</script>
	<script src="../js/nav.js"></script>

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