<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pointzon Charity</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Charity.css">
    <link rel="stylesheet" href="../css/footer.css">

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
                        <div class="slider_text">
                            <span>Get Started Today.</span>
                            <h3> Help the people in need</h3>
                            <p>Journey towards a happier world</p>
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

    <!-- reason_area_start  -->

    <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Reason of Helping</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="https://i.pinimg.com/originals/96/e1/4b/96e14be0d2b351e1d0ee4f909e31d6a4.jpg" class="lozad" alt="" style="background-size: cover;">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Making a difference</h4>
                            <p>Donating to Pointzon's charity campaigns helps raise funds for important causes and makes a real difference in the lives of those in need.</p>
                            <!-- <a href="#" class="read_more">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img data-src="https://images.pexels.com/photos/3786157/pexels-photo-3786157.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="lozad" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Blood Camp</h4>
                            <p>Supporting Pointzon's blood donation camps means helping save lives and providing a vital resource to those in need. <br><br></p>
                            <!-- <a href="#" class="read_more">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img data-src="https://images.pexels.com/photos/6646907/pexels-photo-6646907.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="lozad" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Friendly Volunteer</h4>
                            <p>Volunteering with Pointzon's charity efforts not only helps those in need, but also allows you to meet new people and make a positive impact in your community</p>
                            <!-- <a href="#" class="read_more">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reason_area_end  -->

    <!-- latest_activites_area_start  -->
    <div class="latest_activites_area">
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
            <a class="popup-video" href="https://www.youtube.com/watch?v=MG3jGHnBVQs">
                <i class="fa-regular fa-circle-play"></i>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="activites_info">
                        <div class="section_title">
                            <h3> <span>Our Latest Activities </span></h3>
                        </div>
                        <p class="para_1">In recent months, we've been focusing on supporting local small businesses during economic downturns, providing food and clothing to those in need, and organizing blood donation camps to help save lives. We're always looking for new ways to make a difference, and we're always open to suggestions and ideas from the community.</p class="para_1">
                        <p class="para_2">We are also putting efforts in creating awareness about the importance of charitable giving and encouraging people to support us and other organizations working for a good cause. We have been working with schools and colleges to get young people involved in charity and philanthropy and inspire them to become socially responsible citizens. If you want to get involved and help make a difference, we would love to hear from you!</p>
                        <a href="../resources/cause1" class="boxed-btn4">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest_activites_area_end  -->

    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area section_padding">

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3><span>Popular Causes</span></h3>
                </div>
            </div>
        </div>

        <div class="causesContainer">
            <!-- <div class="swiffy-slider slider-item-show3 slider-nav-chevron slider-nav-chevron slider-nav-visible slider-nav-autoplay slider-nav-autopause" data-slider-nav-autoplay-interval="3000">
                        <ul class="slider-container"></ul></div> -->
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li>
                            <div class="single_cause">
                            <a href="../resources/cause1">
                                <div class="thumb">
                                    <img data-src="https://www.aahar.org.in/images/img2.jpg" class="lozad" alt="">
                                </div>
                                <div class="causes_content">

                                    <div class="balance d-flex justify-content-between align-items-center">
                                        <span>Raised: £5000.00 </span>
                                        <span>Goal: £9000.00 </span>
                                    </div>
                                    <h4>Help us to Send Food</h4>
                                    <p>Help us make a difference in the lives of those in need. Join our food donation campaign and support our efforts.</p>
                                    <a class="read_more" href="../resources/cause1">Read More</a>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="single_cause">
                            <a href="../resources/cause2">
                                <div class="thumb">
                                    <img data-src="https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="lozad" alt="">
                                </div>
                                <div class="causes_content">

                                    <div class="balance d-flex justify-content-between align-items-center">
                                        <span>Raised: £5000.00 </span>
                                        <span>Goal: £9000.00 </span>
                                    </div>
                                    <h4>Clothes For Everyone</h4>
                                    <p>Help us dress the less fortunate. Your donation can make a difference in providing warm clothing for those in need.</p>
                                    <a class="read_more" href="../resources/cause2">Read More</a>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="single_cause">
                            <a href="../resources/cause3">
                                <div class="thumb">
                                    <img data-src="https://www.zenefits.com/workest/wp-content/uploads/2018/11/bigstock-Cheerful-business-owners-stand-232405831-e1542226244501-790x444.jpg" alt="" class="lozad">
                                </div>
                                <div class="causes_content">

                                    <div class="balance d-flex justify-content-between align-items-center">
                                        <span>Raised: £5000.00 </span>
                                        <span>Goal: £9000.00 </span>
                                    </div>
                                    <h4>Supporting Local Businesses</h4>
                                    <p>Help keep our community alive. Donate to support local small businesses during tough times. Together, we can make a difference.</p>
                                    <a class="read_more" href="../resources/cause3">Read More</a>
                                </div>
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>

    </div>
    <!-- popular_causes_area_end  -->


    <!-- our_volunteer_area_start  -->
    <div class="our_volunteer_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Our Volunteer</span></h3>
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


    <div data-scroll-index='1' class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Make a Donation</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="#" class="donation_form">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="single_amount">
                                    <div class="input_field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">£</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="100" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single_amount">
                                    <div class="fixed_donat d-flex align-items-center justify-content-between">
                                        <div class="select_prise">
                                            <h4>Select Amount:</h4>
                                        </div>
                                        <div class="single_doonate">
                                            <input type="radio" id="blns_1" name="radio-group" checked>
                                            <label for="blns_1">10</label>
                                        </div>
                                        <div class="single_doonate">
                                            <input type="radio" id="blns_2" name="radio-group" checked>
                                            <label for="blns_2">30</label>
                                        </div>
                                        <div class="single_doonate">
                                            <input type="radio" id="Other" name="radio-group" checked>
                                            <label for="Other">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <a href="../resources/cause2.php" class="boxed-btn4">Donate Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- footer_start  -->
<?php
include "services-footer.php";
?>

    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->



    <!-- <script src="js/main.js"></script> -->
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