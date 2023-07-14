<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Payment Transfer Solutions| Pointzon</title>
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
  <link rel="stylesheet" href="css/PaymentTransfer.css">
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
            <div class="slider_text ">
              <!-- <span>Become Our Newest Client</span> -->
              <h3> Payment Transfer Solution</h3>
              <p>Safety, Speed, & Reliability for effortless payments.</p>
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
  <div class="introduction">
    <div class="imgContainer" data-aos="zoom-in-up" data-aos-easing="ease-in-out" data-aos-delay="300"><img class="lozad" data-src="../images/payment-transfer2.png" alt=""></div>
    <div class="textContainer" >
      <h1 data-aos="zoom-in-left" data-aos-easing="ease-in-out" data-aos-delay="500">Payments Made Simple, No Matter The Destination</h1>
      <div class="textWrapper">
        <p data-aos="fade-in-right" data-aos-easing="ease-in-out" data-aos-delay="500">At Pointzon you're connected to a truly global payment network. We combine tighter pricing, increased transactional efficiency and astute market knowledge to give our clients a definitive advantage, whether they're a large institution or a private individual.</p>
        <p data-aos="fade-in-left" data-aos-easing="ease-in-out" data-aos-delay="500">Whether you're paying staff or suppliers around the world, or buying or selling a property overseas, you can trust Pointzon to identifying the right global solution for all your currency exchange needs.</p>
      </div>
    </div>
  </div>

  <section class="processCrowdfunding">
    <div class="step-1 steps" id="pstep1" data-aos="fade-up-right" data-aos-delay="500" data-aos-easing="ease-in-sine">
    <i class="fa-solid fa-sterling-sign"></i>
      <h4>
      Pricing
      </h4>
      <p>Through access to a £2bn liquidity pool, we're able to provide the most competitive exchange rates at wholesale prices.</p>
    </div>

    <div class="step-2 steps" id="pstep2" data-aos="fade-up-left" data-aos-delay="500" data-aos-easing="ease-in-sine">

    <i class="fa-solid fa-arrow-trend-down"></i>
      <h4>
        Low Cost
      </h4>
      <p>With local settlement in over 35 countries, we avoid intermediary banks fees and delays, offering faster and lower-cost international payments.</p>
    </div>
    <div class="step-3 steps" id="pstep3" data-aos="fade-up-left" data-aos-delay="500" data-aos-easing="ease-in-sine">

    <i class="fa-solid fa-comments-dollar"></i>
      <h4>
        Mass Payments
      </h4>
      <p>Send thousands of payments across the globe in multiple currencies, all within a single payment file.</p>
    </div>
    <div class="step-3 steps" id="pstep3" data-aos="fade-up-right" data-aos-delay="500" data-aos-easing="ease-in-sine">

    <i class="fa-solid fa-file-pen"></i>
      <h4>
        Audit Trail
      </h4>
      <p>Automated payment receipts for each currency trade, Review your account history online and keep up-to-date with any outstanding balances.</p>
    </div>

    <div class="step-3 steps" id="pstep3" data-aos="fade-up-left" data-aos-delay="500" data-aos-easing="ease-in-sine">

    <i class="fa-solid fa-user-shield"></i>
      <h4>
        Security
      </h4>
      <p>We adhere to the latest international legislation and protect via sophisticated encryption technologies, ensuring that client funds and client payments are never compromised.</p>
    </div>

    <div class="step-3 steps" id="pstep3" data-aos="fade-up-right" data-aos-delay="500" data-aos-easing="ease-in-sine">

    <i class="fa-solid fa-water"></i>
      <h4>
        Flexibility
      </h4>
      <p>Fund your payments using any combination of spot, open forward contracts or funds on account, and in multiple currencies.</p>
    </div>
  </section>


  <section class="merchantServices">
    <div class=callToAction data-aos=flip-right>
      <div class=growthImg><img class=lozad data-src=../images/payment-assistance.png alt="Business-merger.svg"></div>
      <div class=ctaText>
        <h3>Need Assistance?</h3>
        <p style="color:#000">Speak to an Customer Support Right Now by clicking the live chat bubble or fill up the contact form by clicking below and we'll get back to you !</p><br>
        <a class=learn-more href="../resources/contact">
          <span class=circle aria-hidden=true>
            <span class="icon arrow"></span>
          </span>
          <span class=button-text>Contact Us</span>
        </a>
        <br><br>
      </div>
    </div>
  </section>




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
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>
  <!--contact js-->
  <!-- <script src="js/contact.js"></script> -->
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>

  <script src="js/main.js"></script>
  <script src="../js/nav.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    AOS.init();
  </script>
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