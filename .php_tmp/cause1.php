<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Charity Campaign | Pointzon</title>
	<link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/startup.css">

	<link rel="stylesheet" href="../css/main.min.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/nav.css">


<style>
			.tagline{
			margin: 4rem 0 1rem;
		}
</style>
</head>

<body>

	<header>
		<?php
		include 'resources-nav.php';
		?>
	</header>

	<div class="news-hero"></div>


	<!-- end of navbar -->


	<div class="main-news-container">
		<div class="news-image">
			<div class="news-img-wrapper"><img src="https://media.istockphoto.com/id/619643870/photo/hungry-african-children-asking-for-food-africa.jpg?b=1&s=170667a&w=0&k=20&c=W7qbZrMjvfeihGYt2gF0NzKAzvYTgD4vBve8ngk-lNM=" alt="" /></div>
		</div>

	<div class="news-body">
		<div class="news-heading">

			<h2 style="color:white;">Food For Everyone
			</h2>
</div>
			
			<p>We believe that every person deserves access to nutritious food. That's why we have launched a fundraising campaign to support feeding programs for the less fortunate in our community.</p>
			<p>By donating to our campaign, you can help provide meals to those who are struggling to put food on the table. Your contribution, no matter how small, can make a big difference in the lives of those in need.
			</p>
			
		</div>
	</div>
	<div class="fullText">
	<p class="tagline">Feeding the hungry, fueling hope: Support our fundraising campaign</p>

			<p>Join us in the fight against hunger by donating to our feeding the poor campaign today. Together, we can make a real impact in our community and help ensure that no one goes hungry."

			</p>
	</div>


	<div id="smart-button-container">
		<div style="text-align: center;">
			<div id="paypal-button-container"></div>
		</div>
	</div>
	<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
	<script>
		function initPayPalButton() {
			paypal.Buttons({
				style: {
					shape: 'pill',
					color: 'gold',
					layout: 'vertical',
					label: 'pay',

				},

				createOrder: function(data, actions) {
					return actions.order.create({
						purchase_units: [{
							"amount": {
								"currency_code": "USD",
								"value": 1
							}
						}]
					});
				},

				onApprove: function(data, actions) {
					return actions.order.capture().then(function(orderData) {

						// Full available details
						console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

						// Show a success message within this page, e.g.
						const element = document.getElementById('paypal-button-container');
						element.innerHTML = '';
						element.innerHTML = '<h3>Thank you for your payment!</h3>';

						// Or go to another URL:  actions.redirect('thank_you');

					});
				},

				onError: function(err) {
					console.log(err);
				}
			}).render('#paypal-button-container');
		}
		initPayPalButton();
	</script>
	</div>
	</div>

	<br><br>
	<br><br>


	<?php
	include 'resources-footer.php';
	?>

	<script src="../js/jquery-3.6.3.slim.min.js"></script>
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