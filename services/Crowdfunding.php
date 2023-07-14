<?php
session_start();
include "../resources/dbconfig.php";
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Crowdfunding | Pointzon</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/crowdfunding.css">
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
              <span>Get Started Today.</span>
              <h3> Raise funds for your Startup</h3>
              <p>Elevate your brand and idea towards success</p>
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
  <section class="processCrowdfunding">
    <div class="step-1 steps" id="pstep1" data-aos="fade-up-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
      <i class="fa-solid fa-sliders"></i>
      <h4>
        Simple Setup
      </h4>
      <p>We have simplified crowdfunding for you. Submit your details and we handle your hassle.</p>
    </div>

    <div class="step-2 steps" id="pstep2" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine">

      <i class="fa-solid fa-headset"></i>
      <h4>
        Support
      </h4>
      <p>Any question? Just hit the live chat on the corner and we will be happy to help you</p>
    </div>
    <div class="step-3 steps" id="pstep3" data-aos="fade-up-left" data-aos-offset="200" data-aos-easing="ease-in-sine">

      <i class="fa-solid fa-sterling-sign"></i>
      <h4>
        Affordable
      </h4>
      <p>We charge a nominal % fees for managing the campaigns</p>
    </div>
  </section>
  <!-- latest_activites_area_start  -->
  <div class="latest_activites_area">
    <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
      <a class="popup-video" href="https://www.youtube.com/watch?v=9MnzjCMQgKU">
        <i class="fa-regular fa-circle-play"></i>
      </a>
    </div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-lg-7">
          <div class="activites_info">
            <div class="section_title">
              <h3> <span>Why Crowdfunding? </span></h3>
            </div>


            <p class="para_1"> Crowdfunding is not just a great way to raise funds, it's also a fantastic way to build a community of supporters around your project. With the help of social media, you can reach a large audience and connect with people who share your passions and values. Plus, when you successfully reach your funding goal, you'll have a group of people who are invested in your success and are eager to see your project come to life.

            </p>
            <p class="para_2"> Whether you're starting a new business, creating a new product, or launching a new initiative, crowdfunding is an exciting way to turn your dreams into reality. So if you have an idea you're passionate about, consider using crowdfunding to bring your project to life!</p><br>

            <?php

            if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
              echo '<a href="../resources/signup" data-scroll-nav="1" class="boxed-btn4">Register Now</a>';
            }
            ?>
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
        <h5 class="card-title">For Founders</h5>
        <p class="card-text">Get funding for your startup with Pointzon. Our platform helps you reach a wider audience, connect with potential investors, and bring your vision to life. Let's work together to create a better future.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">For Investors</h5>
        <p class="card-text"> Invest in startups and make a positive impact with Pointzon. Our platform offers a variety of curated campaigns with transparency and efficiency, giving you the chance to support causes you care about while getting good ROI.</p>
      </div>
    </div>
  </div>
  <!-- reason_area_end  -->


  <!-- popular_causes_area_start  -->
  <div class="popular_causes_area section_padding">

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb-55">
          <h3><span>Current Campaigns</span></h3>
        </div>
      </div>
    </div>

    <div class="causesContainer">

      <section class=campaignCards>
        <div class=glide>
          <div class=glide__track data-glide-el=track>
            <div class=glide__slides>
              <?php
              $cardQuery = "SELECT * FROM campaign";
              $execQuery = mysqli_query($con, $cardQuery);
              while ($card = mysqli_fetch_assoc($execQuery)) {
              ?>
                <div class=cardDemo>
                  <a href=../resources/business.php?id=<?= $card['id'] ?>>
                    <img data-src=../resources/business/<?= $card['b_logo'] ?> alt=... class=lozad loading=lazy>
                    <div class=cardDemoBody>
                      <span class=tag><?= $card['b_type'] ?></span>
                      <p class=name><?= $card['b_name'] ?></p>
                      <p>
                      <p class=truncatePara><?= $card['b_intro'] ?></p><a href=../resources/business.php?id=<?= $card['id'] ?>>Know More</a></p>
                    </div>
                    <div class=cardDemoFooter>
                      <p>TARGET: <?= $card['b_funding'] ?></p>
                      <div class=progress role=progressbar aria-label="Example with label" aria-valuenow=25 aria-valuemin=0 aria-valuemax=100>
                        <div class=progress-bar style=width:0%>0%</div>
                      </div>
                      <p><?= $card['b_time'] ?> days Left</p>
                    </div>
                  </a>
                </div>

              <?php

              }
              ?>

            </div>
          </div>
        </div>
        <br><br>
      </section>
    </div>

  </div>
  <!-- popular_causes_area_end  -->


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