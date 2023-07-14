<?php
session_start();
include "../resources/dbconfig.php";
if (!isset($_SESSION['adminloggedin']) || $_SESSION['adminloggedin'] !== true) {
	header("location: admin-login.php");
	exit;
}
?>

<?php
if (!$con) {
	echo 'Connection Error: ' . mysqli_connect_error();
}
$u_email = $_SESSION["email"];
$query = "SELECT name FROM `admin_accounts` WHERE username = '$u_email'";

$execute_query = mysqli_query($con, $query);
$fetched_query = mysqli_fetch_assoc($execute_query);
$name =  $fetched_query['name'];
?>


<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin's Dashboard | Pointzon</title>
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


	<script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="../resources/css/style.css">
	<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin=anonymous referrerpolicy=no-referrer />
	<link rel="stylesheet" href="../css/glide.theme.css">
	<script type=text/javascript src=https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js></script>
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/card.css">
	<link rel="stylesheet" href="../css/card2.css">
	<link rel="stylesheet" href="../css/main.css">
	<style>
		.dropdownMenu .label::after {
			top: 5px;
			right: -10px;
		}
	</style>

</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<header>
				<style>
					/* Style The Dropdown Button */
					.dropbtn {
						background-color: #4CAF50;
						background-color: transparent;
						color: white;
						padding: 16px;
						font-size: 16px;
						border: none;
						cursor: pointer;
					}

					.dropbtn img {

						color: white;
						width: 40px;
						height: 40px;
						border-radius: 50%;
					}

					.dropbtn i {
						position: relative;
						left: 0.7rem;
						top: 4px;
						transition: 0.3s ease-in-out;
					}

					/* The container <div> - needed to position the dropdown content */
					.dropdown {
						position: relative;
						display: inline-block;
					}

					/* Dropdown Content (Hidden by Default) */
					.dropdown-content {
						display: none;
						position: absolute;
						right: -1rem;
						background-color: #f9f9f9;
						min-width: 160px;
						width: max-content;
						box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
						z-index: 1;
					}

					/* Links inside the dropdown */
					.dropdown-content a {
						color: black;
						padding: 12px 16px;
						text-decoration: none;
						display: block;
					}

					/* Change color of dropdown links on hover */
					.dropdown-content a:hover {
						background-color: rebeccapurple;
						color: white;
					}

					/* Show the dropdown menu on hover */
					.dropdown:hover .dropdown-content {
						display: block;
					}

					/* Change the background color of the dropdown button when the dropdown content is shown */
					.dropdown:hover .dropbtn {
						background-color: transparent;
					}

					.dropdown:hover .dropbtn i {
						transform: rotate(180deg);
					}

					.dropdownMenu .label::after {
						top: 0px;
						right: -16px;
					}
				</style>

				<nav class="navbarMain">
					<div class="logo">
						<a href="../">Pointzon</a>
					</div>
					<div class="hamburger">
						<div class="line1"></div>
						<div class="line2"></div>
						<div class="line3"></div>
					</div>
					<ul class="nav-links">
						<li id="nav-item-1"><a href="../">Home</a></li>
						<li id="nav-item-2"><a href="../resources/about">About Us</a></li>
						<li class="dropdownMenu" id="nav-item-3">

							<div class="menuOptionsContainer" id="dropdownId">
								<a href="../resources/services">
									<h4 class="label">Services</h4>
								</a>
								<div class="content">
									<div class="sideHeading">
										<h5>Pointzon's Services</h5>
									</div>
									<div class="categories">
										<div class="categories-wrapper">
											<h5 class="cheading">Funding Services</h5>
											<p><a href="../services/Charity">Charity</a></p>
											<p><a href="../services/Crowdfunding">Crowdfunding</a></p>
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
											<h5 class="cheading">Technology Services</h5>
											<p><a href="../services/Fintech">Fintech</a></p>
											<p><a href="../services/Blockchain">Blockchain Wallet</a></p>
										</div>
									</div>
								</div>
							</div>

						</li>
						<li id="nav-item-4"><a href="../resources/news">News</a></li>
						<li id="nav-item-5"><a href="../resources/faq">FAQ</a></li>
						<li id="nav-item-6"><a href="../resources/contact">Contact Us</a></li>


						<?php
						if (isset($_SESSION['adminloggedin'])) {

							echo '<div class="dropdown">
                    <button class="dropbtn"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"><i class="fa-solid fa-angle-down"></i></button>
                    <div class="dropdown-content">
                      <a href="../resources/logout">Logout</a>
                    </div>
                  </div>';
						} else {

							echo '<a  id="nav-item-8" class="btn login-button" href="../login" role="button">Login</a>';
							echo '<a  id="nav-item-9" class="btn join-button" href="../signup" role="button">Join</a>';
						}
						?>
					</ul>
				</nav>
			</header>
			<div class="news-hero"></div>
			<!-- end:header-top -->
			<br><br><br>
			<div id="fh5co-contact">
				<div class="container">
					<div class="desc">
						<h2 style="color: var(--stark);">Unapproved Projects</h2>
						<br><br>
						<!-- <h4 style="color: var(--stark);">You have no Campaigns Running as of now&nbsp;<a href="addCampaign" style="text-decoration:underline;">Create a Campaign Now ! </a></h4> -->

						<section class=campaignCards>
							<div class=glide>
								<div class=glide__track data-glide-el=track>
									<div class=glide__slides>
										<?php
										$query1 = "SELECT * FROM projects WHERE approval=0";
										$execQuery1 = mysqli_query($con, $query1);
										while ($card = mysqli_fetch_assoc($execQuery1)) {
										?>
											<div class=cardDemo>
												<a href=business_review.php?id=<?= $card['id'] ?>>
													<img data-src=../resources/business/<?= $card['b_logo'] ?> alt=... class=lozad loading=lazy>
													<div class=cardDemoBody>
														<span class=tag><?= $card['b_type'] ?></span>
														<p class=name><?= $card['b_name'] ?></p>
														<p>
														<p class=truncatePara><?= $card['b_intro'] ?></p><a href=business_review.php?id=<?= $card['id'] ?>>Know More</a></p>
													</div>
													<div class=cardDemoFooter>
														<p>TARGET: <?= $card['b_funding'] ?> £</p>
														<div class=progress role=progressbar aria-label="Example with label" aria-valuenow=25 aria-valuemin=0 aria-valuemax=100>
															<div class=progress-bar style=width:0%>0%</div>
														</div>
														<p><?= $card['b_time'] ?> days Left</p>
														<form method="POST" action="approve.php">
															<button type="submit" name="approve_project" value="<?= $card['id'] ?>" class="btn btn-success">Approve</button>
														</form>
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
				<br><br>
				<div class="container">
					<div class="desc">
						<h2 style="color: var(--stark);">Approved Projects</h2>
						<br><br>
						<!-- <h4 style="color: var(--stark);">You have no Campaigns Running as of now&nbsp;<a href="addCampaign" style="text-decoration:underline;">Create a Campaign Now ! </a></h4> -->
						<section class=campaignCards>
							<div class=glide1>
								<div class=glide__track data-glide-el=track>
									<div class=glide__slides>
										<?php
										$query2 = "SELECT * FROM projects WHERE approval=1";
										$execQuery2 = mysqli_query($con, $query2);
										while ($card2 = mysqli_fetch_assoc($execQuery2)) {
										?>
											<div class=cardDemo>
												<a href=business_review.php?id=<?= $card2['id'] ?>>
													<img data-src=../resources/business/<?= $card2['b_logo'] ?> alt=... class=lozad loading=lazy>
													<div class=cardDemoBody>
														<span class=tag><?= $card2['b_type'] ?></span>
														<p class=name><?= $card2['b_name'] ?></p>
														<p>
														<p class=truncatePara><?= $card2['b_intro'] ?></p><a href=business_review.php?id=<?= $card2['id'] ?>>Know More</a></p>
													</div>
													<div class=cardDemoFooter>
														<p>TARGET: <?= $card2['b_funding'] ?> £</p>
														<div class=progress role=progressbar aria-label="Example with label" aria-valuenow=25 aria-valuemin=0 aria-valuemax=100>
															<div class=progress-bar style=width:0%>0%</div>
														</div>
														<p><?= $card2['b_time'] ?> days Left</p>
														<form method="POST" action="unapprove.php">
															<button type="submit" name="unapprove_project" value="<?= $card2['id'] ?>" class="btn btn-warning">Unapprove</button>
														</form>
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
				<br><br>
			</div>


			<br><br>



			<?php
			include 'admin-footer.php';
			?>


		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
	<script>
		var app = document.querySelector(".approveBtn");
		var unapp = document.querySelector(".unapproveBtn");
		app.addEventListener("click", function() {
			console.log("Post Approved Btn");
		});
		unapp.addEventListener("click", function() {
			console.log("Post UnApproved Btn");
		});
	</script>
	<script src="../js/nav.js"></script>
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

		var glide1 = new Glide('.glide1', {
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
		glide1.mount();
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