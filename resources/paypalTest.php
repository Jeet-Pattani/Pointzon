<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPalTest</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/startup.css">

    <link rel="stylesheet" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/nav.css">



</head>

<body>

    <nav class="navbarMain">
        <div class="logo">
            <a href="../index">Pointzon</a>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="../index">Home</a></li>
            <!-- <li><a href="index">Charity</a></li>
              <li><a href="crowdfunding">Crowdfunding</a></li>
              <li><a href="offshore">Offshore</a></li> -->
            <li><a href="index">News</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact Us</a></li>

            <li>
                <div class="dropdown">
                    <button class="dropbtn">More <i class="fa-solid fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <a href="../charity/index">Charity</a>
                        <a href="../charity/crowdfunding">Crowdfunding</a>
                        <a href="../charity/offshore">Offshore</a>
                        <a href="../charity/investment">Investment</a>
                    </div>
                </div>
            </li>
            <a class="btn login-button" href="login" role="button">Login</a>
            <a class="btn join-button" href="signup" role="button">Join</a>
        </ul>
    </nav>
    <div class="news-hero"></div>


    <!-- end of navbar -->


    <div class="main-news-container">
        <div class="news-heading">

            <h2>GreenLeaf
            </h2>

        </div>
        <div class="news-image">
            <div class="news-img-wrapper"><img src="https://cdn.dribbble.com/users/2988193/screenshots/15485200/greenleaf_logo_mark-01_4x.jpg" alt="" /></div>
        </div>


        <div class="news-body">
            <p class="tagline">Growing a sustainable future ! One leaf at a time</p>
            <p>GreenLeaf is a sustainable agriculture startup that aims to revolutionize the way we grow our food. Our innovative approach combines traditional farming techniques with cutting-edge technology to create a more efficient, environmentally friendly, and cost-effective system. Our goal is to raise £10,000 to further develop and expand our operations, allowing us to bring our sustainable farming methods to more communities.</p>
            <p>Our team of experienced farmers and agronomists has spent years researching and perfecting our approach, and we're now ready to take it to the next level. The funds we raise will be used to purchase equipment, hire additional staff, and expand our reach to more farmers and communities.
            </p>
            <p>By investing in GreenLeaf, you're not just supporting a business, you're supporting a movement towards a more sustainable future. With your help, we can make a real impact on the environment, economy, and communities we serve. Together, we can build a better, greener world.

            </p>
            <p>
            <ul>
                <p><i class="fa-solid fa-globe"></i> <a href="https://www.greenleaf.com">https://www.greenleaf.com</a></p>
                <p> <i class="fa-solid fa-phone-volume"></i> <a href="tel:+441234567890">+44 12345 67890</a></p>
                <p> <i class="fa-solid fa-envelope"></i> <a href="mailto: info@greenleaf.com">info@greenleaf.com</a></p>
            </ul>
            </p>
        </div>
        <br><br>



        <!-- <div id="smart-button-container">
        <div style="text-align: center"><label for="amount">Donation Amount </label><input name="amountInput" type="number" id="amount" value="" placeholder="Enter Any Amount(£)"></div>
            <div style="text-align: center;">
              <div id="paypal-button-container"></div>
            </div>
          </div>
        <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=GBP" data-sdk-integration-source="button-factory"></script>
        <script>
          function initPayPalButton() {
            paypal.Buttons({
              style: {
                shape: 'pill',
                color: 'gold',
                layout: 'vertical',
                label: 'pay',
                
              },
      
              createOrder: function(data, actions) {
                return actions.order.create({
                  purchase_units: [{"amount":{"currency_code":"GBP","value":1}}]
                });
              },
      
              onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                  
                  // Full available details
                  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
      
                  // Show a success message within this page, e.g.
                  const element = document.getElementById('paypal-button-container');
                  element.innerHTML = '';
                  element.innerHTML = '<h3>Thank you for your payment!</h3>';
      
                  // Or go to another URL:  actions.redirect('thank_you.html');
                  
                });
              },
      
              onError: function(err) {
                console.log(err);
              }
            }).render('#paypal-button-container');
          }
          initPayPalButton();
        </script> -->


      <div id="smart-button-container">
          <div style="text-align: center"><label for="description"> </label><input type="text" name="descriptionInput" id="description" maxlength="127" value=""></div>
            <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a description</p>
          <div style="text-align: center"><label for="amount">Amount </label><input name="amountInput" type="number" id="amount" value="" ><span> GBP</span></div>
            <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
          <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
            <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
          <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
      </div>

  <script src="https://www.paypal.com/sdk/js?client-id=Ac0y3oI_48fLJlTtQF2vHId8vkVZHHsHdD1cnzbHXrUZ-4ARfj0AbkSTdQfOAbF-jcy4TkbqRogGsgMt&enable-funding=venmo&currency=GBP" data-sdk-integration-source="button-factory"></script>
  <script>
  function initPayPalButton() {
    var description = document.querySelector('#smart-button-container #description');
    var amount = document.querySelector('#smart-button-container #amount');
    var descriptionError = document.querySelector('#smart-button-container #descriptionError');
    var priceError = document.querySelector('#smart-button-container #priceLabelError');
    var invoiceid = document.querySelector('#smart-button-container #invoiceid');
    var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
    var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

    var elArr = [description, amount];

    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
      invoiceidDiv.style.display = "block";
    }

    var purchase_units = [];
    purchase_units[0] = {};
    purchase_units[0].amount = {};

    function validate(event) {
      return event.value.length > 0;
    }

    paypal.Buttons({
      style: {
        color: 'gold',
        shape: 'pill',
        label: 'paypal',
        layout: 'vertical',
        
      },

      onInit: function (data, actions) {
        actions.disable();

        if(invoiceidDiv.style.display === "block") {
          elArr.push(invoiceid);
        }

        elArr.forEach(function (item) {
          item.addEventListener('keyup', function (event) {
            var result = elArr.every(validate);
            if (result) {
              actions.enable();
            } else {
              actions.disable();
            }
          });
        });
      },

      onClick: function () {
        if (description.value.length < 1) {
          descriptionError.style.visibility = "visible";
        } else {
          descriptionError.style.visibility = "hidden";
        }

        if (amount.value.length < 1) {
          priceError.style.visibility = "visible";
        } else {
          priceError.style.visibility = "hidden";
        }

        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
          invoiceidError.style.visibility = "visible";
        } else {
          invoiceidError.style.visibility = "hidden";
        }

        purchase_units[0].description = description.value;
        purchase_units[0].amount.value = amount.value;

        if(invoiceid.value !== '') {
          purchase_units[0].invoice_id = invoiceid.value;
        }
      },

      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: purchase_units,
        });
      },

      onApprove: function (data, actions) {
        return actions.order.capture().then(function (orderData) {

          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>Thank you for your payment!</h3>';

          // Or go to another URL:  actions.redirect('thank_you.html');
          
        });
      },

      onError: function (err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
  </script>
        <br><br>
        <!-- <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19870.72871879616!2d-0.15225021798553454!3d51.49778356349548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ddae95b455%3A0xcd1d64863bc57f40!2sWestminster%2C%20London%2C%20UK!5e0!3m2!1sen!2sin!4v1674939142863!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
        <br><br>





        <footer class="footer-10">
            <div class="footerContainer">
                <div class="row mb-5 pb-3">
                    <div class="col-md-4 mb-md-0 mb-4 d-flex">
                        <div class="con con-1 w-100 py-5">
                            <div class="con-info w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <a href="tel:+441234567890"> <span><i class="fa-solid fa-phone-volume"></i></span></a>
                                </div>
                                <div class="text">
                                    <a href="tel:+441234567890"> <span>(+00) 1234 5678</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4 d-flex">
                        <div class="con con-2 w-100 py-5">
                            <div class="con-info w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <a href="mailto:info@pointzon.com"> <span><i class="fa-regular fa-envelope"></i></span></a>
                                </div>
                                <div class="text">
                                    <a href="mailto:info@pointzon.com"> <span>info@pointzon.com</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4 d-flex">
                        <div class="con con-3 w-100 py-5">
                            <div class="con-info w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <a href="https://goo.gl/maps/LS33z5bv9g7ditnM8"> <span><i class="fa-solid fa-location-dot"></i></span></a>
                                </div>
                                <div class="text">
                                    <a href="https://goo.gl/maps/LS33z5bv9g7ditnM8"> <span>the mille, 1000 Great West Rd, London TW8 9DW, United Kingdom</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading">Resources</h2>
                                <ul class="list-unstyled">
                                    <li><a href="index" class="d-block">News</a></li>
                                    <li><a href="policy" class="d-block">Privacy Policy</a></li>
                                    <li><a href="contact" class="d-block">Contact Form</a></li>
                                    <li><!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->

                                        <!-- <a href="#" class="d-block" id="open_preferences_center">Cookies Preferences</a></li> -->
                                </ul>
                            </div>
                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading">About</h2>
                                <ul class="list-unstyled">
                                    <li><a href="about" class="d-block">Our story</a></li>
                                    <li><a href="vision" class="d-block">Mission & Vision</a></li>

                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-5 mb-md-0 mb-4">
                        <h2 class="footer-heading">Subscribe</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                                <button type="submit" class="form-control submit rounded-right">Subscribe</button>
                            </div>
                            <span class="subheading">Get digital marketing updates in your mailbox</span>
                        </form>
                    </div>
                </div>
                <div class="row mt-5 pt-4 border-top">
                    <div class="col-md-6 col-lg-8 mb-md-0 mb-4">
                        <p class="copyright mb-0">
                            Copyright &copy; 2023 All rights reserved by Pointzon</a>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-md-right">
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span><i class="fa-brands fa-facebook"></i></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span><i class="fa-brands fa-youtube"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

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
</body>

</html>