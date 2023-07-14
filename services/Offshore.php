<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Offshore Investment | Pointzon</title>
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
  <link rel="stylesheet" href="../css/faq.css">
  <script src="../js/gianni-accordion.js"></script>
  <link rel="stylesheet" href="css/offshore.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/card.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/main.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <style>
    @media (min-width:1025px) {

      .aboutContainer .right h1 {
        font-size: 48px;
        font-weight: bold;
      }
    }

    @media (max-width:426px) {

      .aboutContainer .right h1 {
        font-size: 35px;
      }
    }
  </style>
</head>

<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


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
              <!-- <span>Get Started Today.</span> -->
              <h3>Empower Offshore Investment</h3>
              <p>Unlock Unlimited Potential</p>
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


  <!-- introduction area Start -->

  <section class="aboutUs firstSections">
    <div class="aboutContainer">
      <div class="left lozad overlay3" data-background-image="https://images.pexels.com/photos/260024/pexels-photo-260024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine"></div>
      <div class="right" id="aboutRight" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
        <div class="content">
          <h1>Dive into Global opportunities</h1>
          <p>Introducing Pointzon's offshore investment page, your gateway to a world of financial growth and diversification. With access to a wide range of offshore investment options, you can unlock unlimited potential and take your portfolio to the next level. Experience the power of offshore investment with Pointzon.</p>
          <a href="../resources/about" class="aboutBtn"><span>Know More</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- introduction area end -->
  <!-- slider_area_end -->
  <section class="processCrowdfunding">
    <div class="step-1 steps" id="pstep1" data-aos="fade-up-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
      <i class="fa-solid fa-user-plus"></i>
      <h4>
        Join Pointzon
      </h4>
      <p>Create an account with Pointzon.</p>
    </div>

    <div class="step-2 steps" id="pstep2" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine">

      <i class="fa-solid fa-book-atlas"></i>
      <h4>
        Learn About Schemes
      </h4>
      <p>Choose the investment opportunity that suits you the best.</p>
    </div>
    <div class="step-3 steps" id="pstep3" data-aos="fade-up-left" data-aos-offset="200" data-aos-easing="ease-in-sine">

      <i class="fa-solid fa-sack-dollar"></i>
      <h4>
        Invest !
      </h4>
      <p>Begin Investment once the account is setup.</p>
    </div>
    <div class="step-3 steps" id="pstep3" data-aos="fade-up-left" data-aos-offset="200" data-aos-easing="ease-in-sine">

      <i class="fa-solid fa-user-graduate"></i>
      <h4>
        Get Support
      </h4>
      <p>Experienced investment advisors will guide you throughout and answer your queries.</p>
    </div>
  </section>
  <!-- latest_activites_area_start  -->
  <div class="latest_activites_area">
    <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
      <a class="popup-video" href="https://www.youtube.com/watch?v=c__01NUWqCw">
        <i class="fa-regular fa-circle-play"></i>
      </a>
    </div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-lg-7">
          <div class="activites_info">
            <div class="section_title">
              <h3> <span>Why Offshore Investment? </span></h3>
            </div>


            <p class="para_1"> Offshore investment refers to investing in assets or funds located in a country different from the investor's home country. It is a way to diversify your investment portfolio and potentially reduce risk. The process of offshore investing involves opening an offshore investment account, transferring funds, and choosing the assets or funds to invest in.

            </p>
            <p class="para_2">It is important to research and understand the regulations, taxes, and laws of the country you are investing in to ensure a successful and profitable offshore investment experience.</p><br>

            <p>It helps you to: </p>
            <!-- <ul>
                              <li>Diversify Portfolio</li>
                              <li>Access Wider Range of Investment Opportunities</li>
                              <li>Maximise Returns</li>
                              <li>Benefit from favourable tax policies</li>
                              <li>Greater Privacy</li>
                             </ul> -->
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Diversify Portfolio</li>
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Access Wider Range of Investment Opportunities</li>
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Maximise Returns</li>
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Benefit from favourable tax policies</li>
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Greater Privacy</li>
            </ul>
            <a href="../resources/signup" data-scroll-nav='1' class="boxed-btn4">Register Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- latest_activites_area_end  -->
  <!-- reason_area_start  -->
  <div class="servicesDescription lozad" data-background-image="https://images.pexels.com/photos/7233354/pexels-photo-7233354.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Due Diligence</h5>
        <p class="card-text">Investing offshore requires thorough research of investment opportunities, risks and regulations. Pointzon provides expert assistance to ensure a successful investment. <br><br></p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Tax Benefits</h5>
        <p class="card-text"> Offshore investment can provide significant tax benefits, such as lower tax rates and reduced reporting requirements. Pointzon helps investors navigate the complexities of offshore tax regulations.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Currency Hedging</h5>
        <p class="card-text"> Offshore investment can provide currency hedging, which helps to protect against currency fluctuations and the effects of inflation.<br><br><br></p>
      </div>
    </div>
  </div>
  <!-- reason_area_end  -->


  <!-- popular_causes_area_start  -->
  <div class="popular_causes_area section_padding">

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb-55">
          <h3><span>FAQs</span></h3>
        </div>
      </div>
    </div>

    <div class="cardFaq">
      <article>
        <h4 data-accordion-element-trigger>What is offshore investment?</h4>
        <div data-accordion-element-content class="content">
          <p>Offshore investment refers to investing in financial assets or businesses that are located outside of one's home country. It provides access to a wider range of investment opportunities, a lower tax rate and greater privacy.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>Why should I consider offshore investment?</h4>
        <div data-accordion-element-content class="content">
          <p>Offshore investment allows for greater diversification of one's investment portfolio and access to opportunities that may not be available in one's home country. It can also help to reduce taxes and increase privacy. </p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>What are the risks associated with offshore investment?</h4>
        <div data-accordion-element-content class="content">
          <p> Like any investment, offshore investment comes with its own set of risks, including currency fluctuations, political instability, and economic uncertainty. It is important to thoroughly research any potential investments and understand the associated risks.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>How does Pointzon support offshore investment?</h4>
        <div data-accordion-element-content class="content">
          <p>Pointzon provides access to a curated selection of offshore investment opportunities, including private equity funds and real estate investment trusts (REITs). Our platform offers transparency and efficiency, providing investors with the information they need to make informed decisions.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>What is the minimum investment amount for offshore investment through Pointzon?</h4>
        <div data-accordion-element-content class="content">
          <p>The minimum investment amount varies by investment opportunity and is outlined in each investment's offering documents.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>How do I manage my offshore investments through Pointzon?</h4>
        <div data-accordion-element-content class="content">
          <p>Pointzon provides a secure online platform for investors to monitor and manage their offshore investments. Our platform also offers regular updates on investment performance and market conditions.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>How do I get started with offshore investment through Pointzon?</h4>
        <div data-accordion-element-content class="content">
          <p>To get started with offshore investment through Pointzon, simply sign up for an account and explore our selection of investment opportunities. Our team is available to answer any questions and help you find the right investment for your needs.</p>
        </div>
      </article>
    </div>


  </div>
  <!-- popular_causes_area_end  -->

  <div class="testimonials">
    <h2>What Our users say</h2>

    <div class="swiffy-slider slider-indicators-highlight slider-nav-dark slider-nav-touch  slider-nav-autoplay slider-nav-autopause slider-indicators-sm slider-nav-animation slider-nav-animation-appear" data-slider-nav-autoplay-interval="4000" style="--swiffy-slider-nav-dark:#000;">
      <ul class="slider-container">
        <li>
          <div class="reviews">
            <h3>James Wilson</h3>
            <p>Pointzon made it easy for our startup to connect with potential investors and secure funding.</p>
          </div>
        </li>
        <li>
          <div class="reviews">
            <h3>Isabella Davis</h3>
            <p>As a venture capitalist, I was impressed by the quality of startups featured on the platform, and have already seen great returns.</p>
          </div>
        </li>
        <li>
          <div class="reviews">
            <h3>George Green</h3>
            <p>The platform made fundraising a breeze for our company, and the team was extremely helpful.</p>
          </div>
        </li>
        <li>
          <div class="reviews">
            <h3>Sophia White</h3>
            <p>I found the platform to be a great resource for discovering new investment opportunities and aligning with my goals</p>
          </div>
        </li>
        <li>
          <div class="reviews">
            <h3>Emma Smith</h3>
            <p>The team at Pointzon provided valuable advice and guidance throughout the fundraising process and helped us reach the right investors.</p>
          </div>
        </li>
        <li>
          <div class="reviews">
            <h3>Oliver Brown</h3>
            <p>The platform was easy to navigate and the process of connecting with investors was seamless</p>
          </div>
        </li>
        <li>
          <div class="reviews">
            <h3>Amelia Jones</h3>
            <p>Thanks to Pointzon, we were able to secure the funding needed to bring our innovative product to market.</p>
          </div>
        </li>
        <li>
          <div class="reviews">
            <h3>William Taylor</h3>
            <p>I found the platform to be a great way to connect with like-minded investors and grow my portfolio.</p>
          </div>
        </li>
      </ul>

      <button type="button" class="slider-nav"></button>
      <button type="button" class="slider-nav slider-nav-next"></button>

      <ul class="slider-indicators">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
  <!-- our_volunteer_area_start  -->
  <div class="our_volunteer_area section_padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center mb-55">
            <h3><span>Our Team</span></h3>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="single_volenteer">
            <div class="volenteer_thumb">
              <img data-src="img/volenteer/1.png" class="lozad" alt="">
            </div>
            <div class="voolenteer_info d-flex align-items-end">
              <div class="social_links">
                <ul>
                  <li>
                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                  </li>
                </ul>
              </div>
              <div class="info_inner">
                <h4>Michael Brown</h4>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_volenteer">
            <div class="volenteer_thumb">
              <img data-src="img/volenteer/2.png" class="lozad" alt="">
            </div>
            <div class="voolenteer_info d-flex align-items-end">
              <div class="social_links">
                <ul>
                  <li>
                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                  </li>
                </ul>
              </div>
              <div class="info_inner">
                <h4>Sam Johnson</h4>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_volenteer">
            <div class="volenteer_thumb">
              <img class="lozad" data-src="img/volenteer/3.png" alt="">
            </div>
            <div class="voolenteer_info d-flex align-items-end">
              <div class="social_links">
                <ul>
                  <li>
                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                  </li>
                  <li>
                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                  </li>
                </ul>
              </div>
              <div class="info_inner">
                <h4>Jack Smith</h4>
                <!-- <p>Volunteer</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our_volunteer_area_end  -->



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
  <!-- js for faq section -->

  <script>
    var myAccordion = new gianniAccordion({
      elements: ".cardFaq article",
      trigger: "[data-accordion-element-trigger]",
      content: "[data-accordion-element-content]"
    });


    myAccordion.on("elementSelected", data => {
      console.log("elementOpened", data);
    });
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