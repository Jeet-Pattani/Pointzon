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
	<title>FAQs | POINTZON</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <script src="../js/gianni-accordion.js"></script>
    <link rel=stylesheet href=../css/faq.css>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/glide.theme.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/card.css">
	<link rel="stylesheet" href="../css/card2.css">
	<link rel="stylesheet" href="../css/main.css">
    <style>
        .cardFaq{
            margin: 10rem auto 2rem;
        }
        h2{
            font-size: 2.5rem;
            color: white;
            text-align: center;
            margin-top: 3rem;
        }
        form{
            margin: 1rem auto;
            display: grid;
            place-items: center;
        }
        input{
            border-radius: 2rem;
            margin: 2rem auto;
            padding: 1rem;
            width: 50vw;
        }
        @media (max-width:426px){
            h2{
                font-size: 2rem;
            }
            input{
                width: 90vw;
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
        <div class=cardFaq>
<article>
<h4 data-accordion-element-trigger>What is Pointzon?</h4>
<div data-accordion-element-content class=content>
<p> Pointzon is a fundraising platform for businesses and venture capitalists. It connects innovative businesses with potential investors to help them secure the funding they need to grow their business.</p>
</div>
</article>
<article>
<h4 data-accordion-element-trigger>How does Pointzon work?</h4>
<div data-accordion-element-content class=content>
<p>Pointzon is a user-friendly platform that streamlines the fundraising process. Businesses can create a profile, upload their business plan, and connect with potential investors in just a few easy steps. Investors can also create a profile and find business that align with their investment goals. </p>
</div>
</article>
<article>
<h4 data-accordion-element-trigger>Who can use Pointzon?</h4>
<div data-accordion-element-content class=content>
<p> Pointzon is available for use by businesses and venture capitalists looking for funding or investment opportunities.</p>
</div>
</article>
<article>
<h4 data-accordion-element-trigger> Is there a fee to use Pointzon?</h4>
<div data-accordion-element-content class=content>
<p>Pointzon charges a small commission on funds raised through the platform.</p>
</div>
</article>
<article>
<h4 data-accordion-element-trigger> Is my information on Pointzon secure?</h4>
<div data-accordion-element-content class=content>
<p>Pointzon takes the security of its users' information very seriously and uses the latest technology to keep data safe and secure.</p>
</div>
</article>
</div>


<h2>Ask Your Question</h2>

<form method="POST">
    <input type="text" placeholder="Enter Your Question">
</form>



			<!-- END fh5co-about -->

			<br><br><br>

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

    <script>var myAccordion=new gianniAccordion({elements:".cardFaq article",trigger:"[data-accordion-element-trigger]",content:"[data-accordion-element-content]"});myAccordion.on("elementSelected",data=>{console.log("elementOpened",data);});</script>
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