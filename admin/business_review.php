<?php
session_start();
include "../resources/dbconfig.php";
if (!$con) {
	echo 'Connection Error: ' . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pointzon</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/startup.css">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <link rel="stylesheet" href="../css/main.min.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/nav.css">
  <style>
    .fullText p:nth-child(2){
      white-space: pre-wrap;
    }
  </style>


</head>

<body>

  <header>
    <?php
    include "admin-nav.php";
    ?>
  </header>

  <div class="news-hero"></div>


  <!-- end of navbar -->


  <?php

  $project_id = $_GET['id'];
  $cardQuery = "SELECT * FROM projects WHERE id = $project_id";
  $execQuery = mysqli_query($con,$cardQuery);
  $card = mysqli_fetch_assoc($execQuery);
  
  ?>

  <div class="main-news-container">

    <div class="news-image">
      <div class="news-img-wrapper"><img
          src="../resources/business/<?=$card['b_logo']?>" alt="" />
      </div>
    </div>
    <div class="news-body">
      <div class="news-heading">
        <h2><?=$card['b_name']?></h2>
      </div>
      <p><?=$card['b_intro']?></p>
      <p>
      <ul>
        <p><i class="fa-solid fa-globe"></i> <a href="<?=$card['b_website']?>"><?=$card['b_website']?></a></p>
        <p> <i class="fa-solid fa-phone-volume"></i> <a href="tel:<?=$card['b_phoneno']?>"><?=$card['b_phoneno']?></a></p>
        <p> <i class="fa-solid fa-envelope"></i> <a href="<?=$card['b_email']?>"><?=$card['b_email']?></a></p>
        <p> <i class="fa-solid fa-percent"></i> <a href="<?=$card['b_percent']?>"><?=$card['b_percent']?></a></p>
      </ul>
      </p>
    </div>
  </div>
  <div class="fullText">
    <p class="tagline"><?=$card['b_tagline']?></p>
    <p>
    <?=$card['b_pitch']?>
    </p>
  </div>
  <div class="chartWrapper">
    <div class="chartContainer" id="chartCont1">
      <div id="growthChartLine"></div>
    </div>
    <div class="textContainer" id="chartCont1">
      <ul>
        <li class="s-active chosen">Short Term</li>
        <li>Mid Term</li>
        <li>Long Term</li>
      </ul>
      <p>Pointzon's recommendation of <?=$card['b_name']?> as a short-term investment option is based on the company's strong
        financial performance, growth potential, and positive industry trends. Short-term investment refers to buying
        and holding assets for a brief period, usually less than a year, with the goal of generating quick profits.
        GreenLeaf's current financials and market trends indicate that the company has the potential to deliver good
        returns in the near future, making it an attractive option for investors looking for short-term gains.</p>
      <p>Analysis by POINTZON</p>
    </div>
  </div>

  <br><br>


  <?php
  include "admin-footer.php";
  ?>

  <script src="../js/jquery-3.6.3.slim.min.js"></script>
  <script src="../js/nav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="../resources/js/growthChartLine.js"></script>
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
      new IntersectionObserver(function (entries, navbar) {
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
</body>

</html>