<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pointzon | NEWS</title>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/n1.css">

  <link rel="stylesheet" href="../css/main.min.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/nav.css">



</head>

<body>

<header>
<?php
include "resources-nav.php";
?>
		</header>


  <div class="news-hero"></div>


  <!-- end of navbar -->


  <div class="main-news-container">
    <div class="news-heading">

      <h2>Flybe: Regional carrier ceases trading and cancels all flights
      </h2>

    </div>
    <div id="news-info">
      <p class="card-text">POINTZON | London, United Kingdom
        <br>
        Last updated : January 28, 2023
      </p>
    </div>
    <div class="news-image" style="margin: 2rem;"><img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/B4A4/production/_128444264_4572d6a905efb6fe16ed2bfb752a6c2d8063a1d0.jpg.webp" class="img-fluid card-img rounded-start" alt="" /></div>


    <div class="news-body">
      <p>A statement on the airline's website said it had "ceased trading" and told any passengers expecting to travel with it not to go to the airport.

        About 2,500 passengers were due to fly with Flybe on Saturday, with about 75,000 passengers in total having flights cancelled.

        Flybe's administrator confirmed 277 of its 321 staff are being made redundant.

        Financial advisory firm Interpath said the rest of the company's staff would be retained.</p>
      <p>Flybe said it would not be able to help passengers arrange alternative flights.

        The UK Civil Aviation Authority (CAA) said it would provide advice and information to those affected.

        Administrators have taken over the company, which only relaunched in April last year.
      <ul>
        <li> Passenger frustration as airline cancels all flights</li>
        <li>Cornwall flights cancellations 'a shock'</li>
      </ul>

      </p>
      <p>In March 2020, it announced it would cease trading, citing the coronavirus pandemic as a contributory factor.

        The company was rescued after being bought by Thyme Opco, a firm linked to US hedge fund Cyrus Capital and subsequently renamed Flybe Limited.

      </p>
      <p>The airline resumed operations with a plan to operate up to 530 flights per week across 23 routes.

        Until the most recent collapse, Flybe operated flights on 21 routes from Belfast City, Birmingham, and Heathrow to airports across the UK as well as to Amsterdam and Geneva.</p>
      <p>A statement published on the Flybe website early on Saturday said the High Court had appointed joint administrators for Flybe Limited.

        "Flybe has now ceased trading and all flights from and to the UK operated by Flybe have been cancelled and will not be rescheduled," it read.

        "If you are due to fly with Flybe today [Saturday] or in the future, please do not travel to the airport unless you have arranged an alternative flight with another airline."

        It added that anyone who had booked a flight with the airline via an intermediary should contact that intermediary directly.</p>

    </div>
  </div>


  <?php
include "resources-footer.php";
?>

  <script src="../js/jquery-3.6.3.slim.min.js"></script>
  <script src="../js/nav.js"></script>
  <script>
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
  </script>
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