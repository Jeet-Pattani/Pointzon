<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Currency & Risk Management | Pointzon</title>
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
  <link rel="stylesheet" href="css/CurrencyRiskManagement.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/card.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/main.min.css">
  <link rel=stylesheet href=../css/servicesCard.css>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src=https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js crossorigin=anonymous defer></script>
  <link href=https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css rel=stylesheet crossorigin=anonymous>
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
              <h3> Currency & Risk Management Solutions</h3>
              <p>Protecting You in Any Scenario</p>
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

  <section class=aboutUs>
<div class=aboutContent data-aos=fade-right data-aos-offset=200 data-aos-easing=ease-in-sine>
<div class="row justify-content-center">
      <div class="textContainer">
        <div class="section_title text-center">
          <h3 id="benefitsHeading"><span>Analysis</span></h3>
        </div>
      </div>
      </div>
<p>At Pointzon, we provide comprehensive currency and risk management solutions tailored to meet our clients' unique needs. Our Currency and Risk Management page offers a range of risk management tools, including foreign exchange and currency risk management, and hedging strategies.</p><br>
<p>Our experts provide personalized solutions to help clients make informed decisions. By managing exposure to currency fluctuations, clients protect their investments and achieve their financial goals. Contact us to learn more about our services.</p> <br>
<a href=../resources/contact class=aboutBtn><span>Contact Us</span></a>
</div>
<div class=featuresCarousel id=fCarousel data-aos=fade-left data-aos-offset=200 data-aos-easing=ease-in-sine>
<div class="swiffy-slider slider-nav-outside slider-nav-visible slider-nav-touch">
<ul class=slider-container>
<li>
<div class=features-card>
<div class=features-icon>
<i class="fa-solid fa-magnifying-glass-chart"></i>
<h3>Market Orders</h3>
</div>
<div class=features-card-text>
<p> Whether you're targeting a better exchange rate at a future date, or setting your stop-loss rate, Pointzon will make the trade automatically.</p> <br> <br>
</div>
</div>
</li>
<li>
<div class=features-card>
<div class=features-icon>
<i class="fa-solid fa-arrow-down-up-lock"></i>
<h3>Fixed Forward</h3>
</div>
<div class=features-card-text>
<p>Lock-in an exchange rate for up to a year, protecting against currency fluctuations, and assisting with budgeting and the protection of profit margins.</p> <br>
</div>
</div>
</li>
<li>
<div class=features-card>
<div class=features-icon>
<i class="fa-brands fa-openid"></i>
<h3>Open Forward</h3>
</div>
<div class=features-card-text>
<p> Offering more flexibility and control. Lock in an exchange rate and draw down incrementally against the value of the contract, up until the expiry date of the contract.</p> <br>
</div>
</div>
</li>
<li>
<div class=features-card>
<div class=features-icon>
<i class="fa-solid fa-diagram-predecessor"></i>
<h3>Passive Hedging</h3>
</div>
<div class=features-card-text>
<p>Reduce or eliminate the foreign exchange volatility from holding international assets, by implementing forward contracts based on a regular fixed roll cycle.</p> <br>
</div>
</div>
</li>
<li>
<div class=features-card>
<div class=features-icon>
<i class="fa-solid fa-chess-king"></i>
<h3>Dynamic Hedging</h3>
</div>
<div class=features-card-text>
<p> Our dynamic currency strategies supports the dual investor goals of risk reduction and return enhancement - helping to solve the problem of what, when and how much currency exposure to hedge.</p>
</div>
</div>
</li>
</ul>
<br><br>
<button type=button class=slider-nav></button>
<button type=button class="slider-nav slider-nav-next"></button>
<div class=slider-indicators>
<button class=active></button>
<button></button>
<button></button>
<button></button>
<button></button>
<button></button>
</div>
</div>
</div>
</section>


  <!-- reason_area_start  -->
  <br><br>
  <div class="analysis">
    <div class="imgContainer imgForPC" data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="300">
      <div class="imgWrapper lozad" data-background-image="../images/stock-market-wallpaper.webp"></div>
    </div>

        <div class="textContainer">
        <div class="row justify-content-center">
      <div class="section_title text-center">
        <h3><span id="riskmgmtHeading" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="300">Protection in Every Scenario</span></h3>
      </div>
    </div>
        <div class="imgContainer imgForMob" data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="300">
      <div class="imgWrapper lozad" data-background-image="../images/stock-market-wallpaper.webp"></div>
    </div>

          <p data-aos="zoom-in-left" data-aos-easing="ease-in-out" data-aos-delay="300">Just as every client's objectives and portfolios differ, hedging strategies should also be designed to effectively address any associated currency risk. At Pointzon, no two hedging programs are designed or treated alike; each aspect of our hedging strategies is carefully considered with a client's unique requirements in mind.</p>

          <p data-aos="zoom-in-right" data-aos-easing="ease-in-out" data-aos-delay="300">Whether buying or selling a currency pair, it's important to time the trade to optimise returns - Pointzon keeps pace with market trends, political events and real-time announcements, helping you to make the best decision. From tailoring the strategy to delivery, we provide a range of products and services focused on executing your currency requirements more effectively and efficiently.</p>

          <p data-aos="zoom-in-left" data-aos-easing="ease-in-out" data-aos-delay="300">We provide tailored and proactive market analysis to assist with entry points. Our analysis is designed specifically for you by a dedicated analyst - we don't do generic reporting.</p>



        </div>
      </div>
    </div>
  </div>

  <!-- <div class="servicesDescription lozad" data-background-image="https://img.freepik.com/free-vector/background-gradient-minimalist-design-style_483537-2743.jpg?w=996&t=st=1678297354~exp=1678297954~hmac=d8c073b4226a95e70eda73a22db65df82c1682b4f4f71ef3e9568f79d66f7349">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">International Virtual Accounts</h5>
        <p class="card-text">Mimic the benefits of holding multiple bank accounts across the globe. Avoid the time and costs of opening and maintaining overseas bank accounts, without needing to open a foreign entity.</p>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Avoid Payment Fees</h5>
        <p class="card-text"> Offering more flexibility and control. Lock in an exchange rate and draw down incrementally against the value of the contract, up until the expiry date of the contract.</p>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Expand Your Reach</h5>
        <p class="card-text"> Collect payments in 35 different currencies and in multiple countries, with local bank accounts opened in your name, instantly</p>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Enhance Your Relationship</h5>
        <p class="card-text"> Improve relationships with customers, by invoicing in their local currency. They know exactly how much they owe and avoid fees when sending funds.</p>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Automatic Notifications</h5>
        <p class="card-text"> Be notified immediately when your overseas payments have been received, reducing the monotony of checking when funds have hit your account.</p>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Avoid Conversion Fees</h5>
        <p class="card-text"> Avoid unnecessarily high conversion costs by using local accounts to collect funds in local currencies. Repatriate funds using Pointzon's rates.</p>
      </div>
    </div>
  </div> -->
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
  <script>
    const observer = lozad('.lozad', {
      rootMargin: '10px 0px', // syntax similar to that of CSS Margin
      threshold: 0.1, // ratio of element convergence
      enableAutoReload: true // it will reload the new image when validating attributes changes
    });
    observer.observe();
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