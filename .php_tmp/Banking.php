<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Banking Solutions | Pointzon</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/Banking.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/card.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/main.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
	<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/glide.theme.css">

  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <style>
    .nav-links li a {
      color: white;
    }

    .causesContainer {
      margin: 1em 2em;
    }

    @media (max-width: 426px) {
      .causesContainer {
        margin: auto 0;
      }
    }
  </style>
</head>

<body>


  <!-- header-start -->
  <header>
<?php
include "services-nav.php";
?>
    </header>
  <!-- header-end -->

  <!-- slider_area_start -->
  <div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="slider_text ">
              <span>Become Our Newest Client</span>
              <h3> Private & Corporate Banking Solutions</h3>
              <p>Start Your Journey Today !</p>
              <a href="../resources/signup" class="boxed-btn3">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider_area_end -->
  <div class="mainContainer">
    <p>Our Private and Corporate accounts, instantly provide you with a facility to exchange currencies and make international payments</p>

    <p>To streamline our account opening process, before completing our online application, please speak with a member of the Pointzon team for a brief eligibility assessment and to determine the most suitable solutions for your requirements</p>

    <p>Please Submit your Contact information below and a member of our team will be in touch. We look forward to hear from you !</p>
    <div class="formContainer">

      <form method="post">
        <div class="form-wrap">
          <label for="fname">Name</label>
          <input type="text" id="fname" name="flname" placeholder="Enter Your Name">
          <span class="focus-input"></span>
          <label for="fname">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter Your Email">
          <span class="focus-input"></span>
        </div>

        <div class="form-wrap">
          <label for="fname">Phone</label>
          <input type="text" id="phoneno" name="phone" placeholder="Enter Your Phone Number" required />
          <span class="focus-input"></span>
          <label for="fname">Area Of Interest</label>
          <input type="text" id="aoi" name="aoi" placeholder="Enter Your Area of Interest" required>
          <span class="focus-input"></span>
        </div>
        <div class="radio-buttons">
          <div class="rb-wrapper">
          <input type="radio" id="corporate" name="enquiry_type" required>
          <label for="cae" id="corporatelabel">Corporate Account Enquiry</label>
          </div>
          <div class="rb-wrapper">
          <input type="radio" id="private" name="enquiry_type" required>
          <label for="pae" id="privatelabel">Private Account Enquiry</label>
          </div>
        </div>
        <div class="checkbox-input">
        <input type="checkbox" id="consent" name="consent" required />
        <label for="consent"> I consent to my data being collected and stored </label><br>
        </div>
        <div class="submit-input">
        <input type="submit" name="submit" />
        </div>
      </form>

    </div>
  </div>

  <!-- footer_start  -->

<?php
include "services-footer.php";
?>

  <!-- footer_end  -->

  <!-- link that opens popup -->

  <!-- JS here -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="../js/nav.js"></script>

  <script>
    const observer = lozad('.lozad', {
      rootMargin: '10px 0px', // syntax similar to that of CSS Margin
      threshold: 0.1, // ratio of element convergence
      enableAutoReload: true // it will reload the new image when validating attributes changes
    });
    observer.observe();
  </script>
  <script>
    const navbar = document.querySelector(".navbarMain");
    const heroSection = document.querySelector(".slider_area");

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
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/63d7d060c2f1ac1e20305e5a/1go1gbv0o';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> -->
  <!--End of Tawk.to Script
</body>

</html>