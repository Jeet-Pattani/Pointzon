<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | Pointzon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/userSelect.css">
</head>

<body>
<?php
			include 'resources-nav.php';
			?>
    <div class="Main-container">
        <div class="container-login">
            <h1 style="text-align: center;">Which of the following describes you the best?</h1>
            <div class="cardContainer">
                <div class="card">
                    <h2><strong>Business Owner</strong></h2>
                    <p>Looking for fundraising for my business</p>
                    <a href="business/businessRegis" class="card-footer-link">Business Signup <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="card">
                    <h2><strong>Investor</strong></h2>
                    <p>Looking to invest into businesses with potential</p>
                    <a href="investor/investorRegis" class="card-footer-link">Investor Signup <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

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
    
	<script src="../js/nav.js"></script>
    <!--End of Tawk.to Script-->
</body>

</html>