<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Merchant Services | Pointzon</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/MerchantServices.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/card.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/main.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
              <h3> Pointzon Merchant Services</h3>
              <p>Streamline Your Payment Processing !</p>
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
  <section class="contentContainer">
    <div class="contentWrapper">
      <div class="introduction">
        <h2>What are Merchant Services?</h2>
        <p>Merchant services refer to a broad range of financial services that are designed to help businesses accept and process electronic payments, including credit and debit card transactions.</p>
      </div>
      <div class="introduction1">
        <div class="textContainer">
          <h2>What do we Offer?</h2>
          <p>We offer businesses innovative payment solutions to improve customer experience, streamline operations, and boost revenue. Our cutting-edge technology and expert support team ensure secure payments and keep businesses ahead of payment trends. Find the right merchant service for your needs.</p>
        </div>
      </div>
    </div>
    <div class="paymentProcess">
      <h2>How Credit Card Processing Works?</h2>
      <div class="imgContainer">
        <div class="imgWrapper">
          <img class="lozad" data-src="../images/creditCardProcess.jpg" alt="">
          
        </div>
      </div>
      <div class="textContainer">
        <p>Accepting credit and debit cards is a complicated business - here's a simplified breakdown of how it works:
        <ol type="1">
          <li>The customer presents a payment card for goods or services at a merchant location (or enters payment information online).</li>
          <li>The card payment information is sent to the acquiring bank (the merchant's financial institution).</li>
          <li>
            The acquiring bank sends the transaction to a payment processor, then to the card association - e.g. Visa, MasterCard or Discover.</li>
          <li>The card association sends the transaction to the issuing bank (financial institution that issued the credit card), and then requests an approval.</li>
          <li>The issuing bank sends a response. If they approve the transaction, the issuing bank sends an approval code back to the card association.</li>
          <li>The card association sends the authorization code to the acquiring bank.</li>
          <li>The acquiring bank sends the approval code to the merchant's payment terminal. </li>
          <li>The terminal prints a receipt for the customer to sign.</li>
          <li>At the end of the billing period, the issuing bank bills the customer for the charges incurred during that period.</li>
          <li>The customer pays his or her credit card bill to the issuing bank.</li>
        </ol>
        </p>
      </div>
    </div>
  </section>
  <section class="contentContainer1">
    <div class="servicesIntro1"  data-aos="fade-in-right"
     data-aos-duration="1000">
      <div class="heading" id="heading1">
        <h2>Merchant Service Provider</h2>
      </div>
      <div class="heading" id="heading2">
        <h2>Offerings of a Payment Processor</h2>
      </div>
      <div class="descText" id="descText1">
        <ol>
          <li>Gathering Card and Transaction info from merchant</li>
          <li>Receives Authorisation (or Denial) for the transaction</li>
          <li>Collect funds from Issuing Bank(institution that issued debit or credit card)</li>
          <li>Send funds to the merchant - less interchange and other fees</li>
          <li>24x7 customer support and technical assistance to ensure seamless payment processing.</li>
          <li>Offers services such as payment gateway integration, fraud detection and prevention, chargeback management, and reporting and analytics.</li>
        </ol>
      </div>
      <div class="descText" id="descText2">
        <ol>
          <li>Process Paper Checks Securely</li>
          <li>Accept Ecommerce and ACH payments</li>
          <li>Allow multiple payment options</li>
          <li>Accept Mobile Wallet Payments like Apple Pay and Google Pay</li>
          <li>Accept Payments directly integrated with POS systems</li>
          <li>Establish Customer loyalty programs</li>
          <li>Apply for Access loans or Cash Advances to support business growth</li>
          <li>Access Detailed, Flexible reporting of payment activities</li>
        </ol>
      </div>
    </div>
    <div class="servicesIntro2" data-aos="fade-in-left"
     data-aos-duration="2000">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center mb-55">
            <h3><span>Fees Involved</span></h3>
          </div>
        </div>
      </div>
      <div class="textContainer">
        <p>Each time a shopper uses their payment card, a fee is charged to the merchant by the issuing bank and acquiring bank as they assume the financial liability of the electronic card transaction. For example, if the consumer never pays his credit card bill or pays it late, for goods purchased, the issuing bank will be out those funds. Also, if the transaction turns out to be fraudulent, the banks have historically assumed the burden of those transactions</p>
        <p>The amount and types of fees you are charged as a merchant depend on several factors, including:</p>
        <ul>
          <li>Type of business - usually defined by MCC (merchant category code)</li>
          <li>How risky the business is</li>
          <li>Retail in-person (Card-present) vs. internet, mail order, phone transaction (MOTO or Card-not-present)</li>
          <li>Merchant's credit rating and history</li>
          <li>Swiped/dipped vs. key-entered card number</li>
        </ul>
      </div>
    </div>
    <div class="servicesIntro3">
      <div class="imgContainer">
        <img class="lozad" data-src="../images/themille.jpg" alt="">
      </div>
      <div class="textWrapper">
        <div class="row justify-content-center">

          <div class="section_title text-center mb-55">
            <h3><span>Why Choose Pointzon?</span></h3>
          </div>

        </div>
        <div class="textContainer">
          <p>
            The financial services industry can be complex. But, the good news is that you certainly don't have to go through it alone. Pointzon can handle your credit and debit card acceptance needs and you'll be well positioned to grow your business for years to come.
          </p>
          <p>Our experts at Pointzon will guide you thoroughly. From understanding the terms of processing contract to funding your bank account. We will help you out to choose the best suitable Point of Sale System according to your business requirements. Perhaps a more traditional cash register is right for you - or maybe a tablet-based POS system that allows you to ring up purchases out on your showroom floor or in the field is the best for you.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="merchantServices">
    <div class=callToAction data-aos=flip-right>
      <div class=growthImg><img class=lozad data-src=../images/Business-merger.svg alt="Business-merger.svg"></div>
      <div class=ctaText>
        <h3>Allow Us to Handle Your Hassle !</h3>
        <p style="color:#000">Contact our expert merchant advisor who can resolve all your queries. </p><br>
        <a class=learn-more href="../resources/contact">
          <span class=circle aria-hidden=true>
            <span class="icon arrow"></span>
          </span>
          <span class=button-text>Contact Us</span>
        </a>
        <br>
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

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/main.js"></script>
  <script src="../js/nav.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <script>
ScrollReveal().reveal('.introduction', { delay: 500 });
ScrollReveal().reveal('.introduction1', { delay: 500 });
ScrollReveal().reveal('.paymentProcess', { delay: 500 });
ScrollReveal().reveal('.contentContainer1', { delay: 500 });
  </script>
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