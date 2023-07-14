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
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Founder's Dashboard | Pointzon</title>
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
	<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin=anonymous referrerpolicy=no-referrer />
	<link rel="stylesheet" href="../../css/glide.theme.css">
	<script type=text/javascript src=https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js></script>
	<link rel="stylesheet" href="../../css/nav.css">
	<link rel="stylesheet" href="../../css/card.css">
	<link rel="stylesheet" href="../../css/card2.css">
	<link rel="stylesheet" href="../../css/main.css">
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
				<?php
				include 'dashboard-nav.php';
				?>
			</header>


			<div class="fh5co-hero fh5co-hero-2">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url('https://images.unsplash.com/photo-1491555103944-7c647fd857e6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
					<div class="desc animate-box">
						<h2>Founder's Dashboard !</h2>
					</div>
				</div>
			</div>
			<div class="news-hero"></div>
			<!-- end:header-top -->
			<br><br><br>
			<div id="fh5co-contact" class="animate-box">
				<div class="container">
					<div class="desc animate-box">
						<h2 style="color: var(--stark);">Your Approved Campaigns</h2>
						<br><br>
						<!-- <h4 style="color: var(--stark);">You have no Campaigns Running as of now&nbsp;<a href="addCampaign" style="text-decoration:underline;">Create a Campaign Now ! </a></h4> -->
						<section class=campaignCards>
							<div class=glide>
								<div class=glide__track data-glide-el=track>
									<div class=glide__slides>
										<?php
										$cardQuery = "SELECT * FROM campaign WHERE u_email = '$u_email' AND approval=1";
										$execQuery = mysqli_query($con, $cardQuery);
										while ($card = mysqli_fetch_assoc($execQuery)) {
										?>
											<div class=cardDemo>
												<a href=../business.php?id=<?= $card['id'] ?>>
													<img data-src=<?= $card['b_logo'] ?> alt=... class=lozad loading=lazy>
													<div class=cardDemoBody>
														<span class=tag><?= $card['b_type'] ?></span>
														<p class=name><?= $card['b_name'] ?></p>
														<p>
														<p class=truncatePara><?= $card['b_intro'] ?></p><a href=../business.php?id=<?= $card['id'] ?>>Know More</a></p>
													</div>
													<div class=cardDemoFooter>
														<p>TARGET: <?= $card['b_funding'] ?></p>
														<div class=progress role=progressbar aria-label="Example with label" aria-valuenow=25 aria-valuemin=0 aria-valuemax=100>
															<div class=progress-bar style=width:0%>0%</div>
														</div>
														<p><?= $card['b_time'] ?> days Left</p>
													</div>
												</a>
											</div>

										<?php

										}
										?>

									</div>
								</div>
							</div>
							<br><br>
						</section>
					</div>
					<br>
				</div>
				<div class="container">
					<div class="desc animate-box">
						<h2 style="color: var(--stark);">Your Unapproved Campaigns</h2>
						<br><br>
						<!-- <h4 style="color: var(--stark);">You have no Campaigns Running as of now&nbsp;<a href="addCampaign" style="text-decoration:underline;">Create a Campaign Now ! </a></h4> -->
						<section class=campaignCards>
							<div class=glide>
								<div class=glide__track data-glide-el=track>
									<div class=glide__slides>
										<?php
										$cardQuery = "SELECT * FROM campaign WHERE u_email = '$u_email' AND approval=0";
										$execQuery = mysqli_query($con, $cardQuery);
										while ($card = mysqli_fetch_assoc($execQuery)) {
										?>
											<div class=cardDemo>
												<a href=../business.php?id=<?= $card['id'] ?>>
													<img data-src=<?= $card['b_logo'] ?> alt=... class=lozad loading=lazy>
													<div class=cardDemoBody>
														<span class=tag><?= $card['b_type'] ?></span>
														<p class=name><?= $card['b_name'] ?></p>
														<p>
														<p class=truncatePara><?= $card['b_intro'] ?></p><a href=../business.php?id=<?= $card['id'] ?>>Know More</a></p>
													</div>
													<div class=cardDemoFooter>
														<p>TARGET: <?= $card['b_funding'] ?></p>
														<div class=progress role=progressbar aria-label="Example with label" aria-valuenow=25 aria-valuemin=0 aria-valuemax=100>
															<div class=progress-bar style=width:0%>0%</div>
														</div>
														<p><?= $card['b_time'] ?> days Left</p>
													</div>
												</a>
											</div>

										<?php

										}
										?>

									</div>
								</div>
							</div>
							<br><br>
						</section>
					</div>
					<br>
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
	<script src=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin=anonymous referrerpolicy=no-referrer></script>
	<script src=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.esm.min.js integrity="sha512-UWMhYs4S2yYDXHEXysQmn0naWye4oCeslOUbeHsVaBtWVlrSZUNTx4Q4Kk259frPZXJiC0uw9r113rAj47zkfQ==" type=module crossorigin=anonymous referrerpolicy=no-referrer></script>

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
	<script>
		var glide = new Glide('.glide', {
			type: 'slider',
			keyboard: true,
			swipeThreshold: 20,
			dragThreshold: 50,
			gap: 20,
			perView: 4,
			breakpoints: {
				768: {
					perView: 4,
				},
				426: {
					perView: 2,
				},
				376: {
					peek: {
						before: 40,
						after: 60
					},
					perView: 1,
				}
			}
		});

		glide.mount();
	</script>
	<script>
		const observer = lozad('.lozad', {
			rootMargin: '10px 0px',
			threshold: 0.1,
			enableAutoReload: true
		});
		observer.observe();
	</script>
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