<?php
session_start();
include "../dbconfig.php";
if (!isset($_SESSION['investorloggedin']) || $_SESSION['investorloggedin'] !== true) {
	header("location: ../login.php");
}
?>

<?php
if (!$con) {
	echo 'Connection Error: ' . mysqli_connect_error();
}
$email = $_SESSION["email"];
$query = "SELECT first_last_name FROM investor_accounts WHERE email = '$email'";

$execute_query = mysqli_query($con, $query);
$fetched_query = mysqli_fetch_assoc($execute_query);
$name =  $fetched_query['first_last_name'];
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Investor Dashboard | Pointzon</title>
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin=anonymous referrerpolicy=no-referrer />
	<script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../css/footer.css">
	<link rel="stylesheet" href="../../css/glide.theme.css">
	<link rel="stylesheet" href="../../css/nav.css">
	<link rel="stylesheet" href="../../css/card.css">
	<link rel="stylesheet" href="../../css/card2.css">
	<link rel="stylesheet" href="../../css/main.css">
	<link rel="stylesheet" href="css/investor-dashboard.css">
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script type=text/javascript src=https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js></script>
	<style>
		/* .dropdownMenu .label::after {
			top: 3px;
			right: -10px;
		} */
		#chartdiv {
			width: 100%;
			height: 300px;
		}

		#chartdiv1 {
			width: 80%;
			height: 250px;
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
				include "dashboard-nav.php";
				?>
			</header>

			<!-- end:header-top -->
			<br><br><br>
			<div class="CardWrapper">
			<div class="statWrapper">
				 <div class="statCards">
					<div class="card1">
						<div class="icon"><i class="fa-solid fa-wallet"></i></div>
						<div class="dbDetails">
							<div class="text">Total Balance</div>
							<div class="balance">£ 12345.52</div>
						</div>

					</div>
					<div class="card1">
						<div class="icon"><i class="fa-solid fa-money-bill-transfer"></i></div>
						<div class="dbDetails">
							<div class="text">Total Spending</div>
							<div class="balance">£ 3545.52</div>
						</div>

					</div>
					<div class="card1">
						<div class="icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
						<div class="dbDetails">
							<div class="text">Total Profit</div>
							<div class="balance">£ 1254.87</div>
						</div>

					</div>
					<div class="card1">
						<div class="icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
						<div class="dbDetails">
							<div class="text">Total Profit</div>
							<div class="balance">£ 1254.87</div>
						</div>

					</div>
				</div>

			
			<div class="card2">
				<div>
					<h2>Welcome <?php echo $name; ?> !</h2>
				</div>
				<h6>You can control your profile from here !</h6>

				<div class="btnContainer">
						<button type="button" class="btn btn-primary card-details" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Manage Your Card Details
						</button>
						<div class="btnWrapper" style="display:flex;align-items:center;justify-content:center;gap:1rem;">
						<button type="button" class="btn btn-success deposit" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Deposit&nbsp;&nbsp;<i class="fa-solid fa-arrow-up"></i>
						</button><button type="button" class="btn btn-warning withdrawal" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Withdrawal&nbsp;&nbsp;<i class="fa-solid fa-arrow-down"></i>
						</button>
						</div>


					</div>
					
			</div>
			</div>	
		</div>

			<div class="chartContainer">
				<h3 class="heading">Overall Portfolio</h3>
				<div class="chartWrapper">
					<div class="lineChart">
						<div id="investorGrowthLine"></div>
					</div>
					<div class="pieChart">
						<h6 id="pieHeading">Investment Distribution&nbsp;<i class="fa-solid fa-circle-info"></i><span class="tooltiptext">This Chart Shows the total distribution of your funds</span></h6>
						<div id="investorGrowthPie"></div>
						<h6 id="pieHeading1">Profit Ratio&nbsp;
						<i class="fa-solid fa-circle-info"></i>
						<span class="tooltiptext">This Chart Shows your Profit to Loss Ratio</span>
					</h6>
						<div id="radialBar1"></div>
					</div>
				</div>
			</div>
			<!-- Button trigger modal -->



			<table class="table table-borderless">
				<thead>
					<tr>
						<th scope="col">Sr No</th>
						<th scope="col">Company</th>
						<th scope="col">Date of Investment</th>
						<th scope="col">Profit Till Date</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody class="table-group-divider" style="color:darkgray">
					<tr>
						<th scope="row">1</th>
						<td>GreenLeaf</td>
						<td>25-05-2022</td>
						<td>34.20%</td>
						<td><span style="display:inline-block;width: 50px;height:3px;background-color:var(--bs-success);"></span></td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>SmartHome</td>
						<td>25-06-2022</td>
						<td>-3.20%</td>
						<td><span style="display:inline-block;width: 50px;height:3px;background-color:var(--bs-danger);"></span></td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Shelter</td>
						<td>25-07-2022</td>
						<td>0%</td>
						<td><span style="display:inline-block;width: 50px;height:3px;background-color:var(--bs-warning);"></span></td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>CleanWave</td>
						<td>25-07-2022</td>
						<td>10%</td>
						<td><span style="display:inline-block;width: 50px;height:3px;background-color:var(--bs-success);"></span></td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Eco-Ride</td>
						<td>25-07-2022</td>
						<td>0%</td>
						<td><span style="display:inline-block;width: 50px;height:3px;background-color:var(--bs-warning);"></span></td>
					</tr>
				</tbody>
			</table>
			<br><br>



			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Manage Card Details</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form>
								<div class="mb-3">
									<label for="recipient-name" class="col-form-label">Recipient:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
								<div class="mb-3">
									<label for="message-text" class="col-form-label">Amount:</label>
									<input type="number" class="form-control" id="recipient-name">
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="modal fade" id="detailsModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Details</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form>
								<div class="mb-3">
									<label for="recipient-name" class="col-form-label">Your Name:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
								<div class="mb-3">
									<label for="recipient-name" class="col-form-label">Email:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
									<div class="mb-3">
									<label for="message-text" class="col-form-label">Phone Number:</label>
									<input type="number" class="form-control" id="recipient-name">
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="detailsModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Details</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form>
								<div class="mb-3">
									<label for="recipient-name" class="col-form-label">Your Name:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
								<div class="mb-3">
									<label for="recipient-name" class="col-form-label">Email:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
									<div class="mb-3">
									<label for="message-text" class="col-form-label">Phone Number:</label>
									<input type="number" class="form-control" id="recipient-name">
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			

			<section class=campaignCards>
							<span>
								<p>Current Campaigns</p>
							</span>
							<div class=glide>
								<div class=glide__track data-glide-el=track>
									<div class=glide__slides>
										<?php
											$cardQuery = "SELECT * FROM projects WHERE approval=1";
											$execQuery = mysqli_query($con,$cardQuery);
											while($card = mysqli_fetch_assoc($execQuery)){
												?>
																						<div class=cardDemo>
											<a href=../business.php?id=<?=$card['id']?>>
												<img data-src=../business/<?=$card['b_logo']?> alt=... class=lozad loading=lazy>
												<div class=cardDemoBody>
													<span class=tag><?=$card['b_type']?></span>
													<p class=name><?=$card['b_name']?></p>
													<p>
													<p class=truncatePara><?=$card['b_intro']?></p><a href=../business.php?id=<?=$card['id']?>>Know More</a></p>
												</div>
												<div class=cardDemoFooter>
													<p>TARGET: <?=$card['b_funding']?></p>
													<div class=progress role=progressbar aria-label="Example with label" aria-valuenow=25 aria-valuemin=0 aria-valuemax=100>
														<div class=progress-bar style=width:0%>0%</div>
													</div>
													<p><?=$card['b_time']?> days Left</p>
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
				
			
			<?php
			include "dashboard-footer.php";
			?>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->
	<script src=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin=anonymous referrerpolicy=no-referrer></script>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.esm.min.js integrity="sha512-UWMhYs4S2yYDXHEXysQmn0naWye4oCeslOUbeHsVaBtWVlrSZUNTx4Q4Kk259frPZXJiC0uw9r113rAj47zkfQ==" type=module crossorigin=anonymous referrerpolicy=no-referrer></script>

	<script src="../js/jquery.min.js"></script>

	<!-- Stellar -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Google Map -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

	<script src="../../js/nav.js"></script>
	<script src="js/investorGrowthLine.js"></script>
	<script src="js/investorGrowthPie.js"></script>
	<script src="js/investorGrowthRadial.js"></script>
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

</body>

</html>