<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Investment Banking Solutions | Pointzon</title>
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
  <link rel="stylesheet" href="css/InvestmentBanking.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/card.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/main.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <div class="slider_text">
              <!-- <span>Become Our Newest Client</span> -->
              <h3> Investment Banking Solutions</h3>
              <p>Global Collections, Locally</p>
              <?php

              if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                echo '<a href="../resources/signup" class="boxed-btn3">Register</a>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider_area_end -->
  <div class="navHeroDiv" style="visibility: hidden;"></div>
  <section class="processCrowdfunding">
    <div class="row justify-content-center">
      <div class="section_title text-center">
        <h3><span>Global Collections, Locally</span></h3>
      </div>
    </div>
    <div class="contentWrapper">
      <div class="textContainer">
        <p>Pointzon makes it easier for you to get paid overseas, reducing the burden and risks associated with of opening new entities or new bank accounts around the world. We can issue you with local accounts, held in your name, to speed up payments across the world.</p>
        <p>Online marketplace sellers are particularly prone to difficulties and unforeseen costs when accepting payments from international buyers. Online marketplaces will often require that the customer has a bank account based within the country they are receiving funds from, which can prove to be an impossible task. Failing this, the online marketplace will insist on facilitating the currency exchange themselves when repatriating sales, at a substantial cost of up to five percent of the sale price as a result.</p>
        <p>To combat this issue and provide a better solution, Pointzon provides clients with multi-currency, multi-jurisdictional, collection accounts, enabling them to utilise our market leading exchange rates, as and when they choose.</p>
      </div>
    </div>
  </section>

  <!-- reason_area_start  -->
  <br><br>
  <div class="row justify-content-center">
    <div class="section_title text-center">
      <h3 id="headingBenefits"><span>What We Offer</span></h3>
    </div>
  </div>
  <div class="bankingFeatures">
    <div class="servicesDescription lozad" data-background-image="https://images.pexels.com/photos/7233354/pexels-photo-7233354.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
      <div class="card" data-aos="fade-up-right" data-aos-delay="500" data-aos-duration="800">
        <div class="card-body">
          <h5 class="card-title">International Virtual Accounts</h5>
          <p>Mimic the benefits of holding multiple bank accounts across the globe. Avoid the time and costs of opening and maintaining overseas bank accounts, without needing to open a foreign entity.</p>
        </div>
      </div>
      <div class="card" data-aos="fade-up-left" data-aos-delay="500" data-aos-duration="800">
        <div class="card-body">
          <h5 class="card-title">Avoid Payment Fees</h5>
          <p>Offering more flexibility and control. Lock in an exchange rate and draw down incrementally against the value of the contract, up until the expiry date of the contract.</p>
        </div>
      </div>
      <div class="card" data-aos="fade-down-right" data-aos-delay="500" data-aos-duration="800">
        <div class="card-body">
          <h5 class="card-title">Expand Your Reach</h5>
          <p>Collect payments in 35 different currencies and in multiple countries, with local bank accounts opened in your name, instantly</p>
        </div>
      </div>
    </div>
    <div class="servicesDescription lozad" data-background-image="https://images.pexels.com/photos/7233354/pexels-photo-7233354.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
      <div class="card" data-aos="fade-down-right" data-aos-delay="500" data-aos-duration="800">
        <div class="card-body">
          <h5 class="card-title">Enhance Relationships</h5>
          <p>Improve relationships with customers, by invoicing in their local currency. They know exactly how much they owe and avoid fees when sending funds.</p>
        </div>
      </div>
      <div class="card" data-aos="fade-down-left" data-aos-delay="500" data-aos-duration="800">
        <div class="card-body">
          <h5 class="card-title">Automatic Notifications</h5>
          <p>Be notified immediately when your overseas payments have been received, reducing the monotony of checking when funds have hit your account.</p>
        </div>
      </div>
      <div class="card" data-aos="fade-down-right" data-aos-delay="500" data-aos-duration="800">
        <div class="card-body">
          <h5 class="card-title">Avoid Conversion Fees</h5>
          <p>Avoid unecessarily high conversion costs by using local accounts to collect funds in local currencies. Repatriate funds using Pointzon's rates.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- reason_area_end  -->






  <!-- footer_start  -->
  <?php
  include "services-footer.php";
  ?>

  <!-- footer_end  -->

  <!-- link that opens popup -->

  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    AOS.init();
  </script>

  <script src="js/main.js"></script>
  <script src="../js/nav.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.esm.min.js" integrity="sha512-UWMhYs4S2yYDXHEXysQmn0naWye4oCeslOUbeHsVaBtWVlrSZUNTx4Q4Kk259frPZXJiC0uw9r113rAj47zkfQ==" type="module" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

  <script>
    var glide = new Glide('.glide', {
      type: 'carousel',
      keyboard: true,
      swipeThreshold: 20,
      dragThreshold: 50,
      gap: 20,
      autoplay: 2000,
      perView: 3,
      breakpoints: {
        768: {
          perView: 3,
        },

        426: {
          peek: {
            before: 40,
            after: 60
          },
          perView: 1,

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