<?php
session_start();
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



</head>

<body>

  <header>
    <?php
    include "resources-nav.php";
    ?>
  </header>

  <div class="news-hero"></div>


  <!-- end of navbar -->


  <div class="main-news-container">

    <div class="news-image">
      <div class="news-img-wrapper"><img
          src="https://edutechglobal.net/wp-content/uploads/2022/01/edutech_logo.png" alt="" />
      </div>
    </div>
    <div class="news-body">
      <div class="news-heading">
        <h2>EduTech</h2>
      </div>
      <p>Introducing EduTech, the innovative educational platform that is revolutionizing the way students learn. With our cutting-edge technology, personalized curriculum, and experienced educators, we are committed to helping students achieve their full potential. Our mission is to provide accessible and high-quality education to all, regardless of background or financial status.</p>
      <p>
      <ul>
        <p><i class="fa-solid fa-globe"></i> <a href="https://www.edutech.com">https://www.edutech.com</a></p>
        <p> <i class="fa-solid fa-phone-volume"></i> <a href="tel:+44123456789">+44 12345 67890</a></p>
        <p> <i class="fa-solid fa-envelope"></i> <a href="mailto: info@edutech.com">info@edutech.com</a></p>
      </ul>
      </p>
    </div>
  </div>
  <div class="fullText">
  <p class="tagline">Revolutionizing Education with EduTech: Where innovation meets learning</p>

      <p>EduTech is more than just a website or an app, it's a community of learners who are motivated to succeed. Our platform offers a wide range of interactive courses, from basic math and science to advanced coding and business management. Our interactive and engaging curriculum is designed to cater to different learning styles, making education more accessible to all.
      </p>
      <p>With EduTech, you'll have access to a wealth of resources, including practice quizzes, interactive exercises, and real-world projects. Our platform also includes a built-in progress tracker, which allows students to monitor their progress and set goals for themselves.
      <p>EduTech is committed to giving back to the community. A portion of the proceeds from every subscription goes towards funding educational initiatives in underprivileged communities. With EduTech, you're not just investing in your own education, you're investing in the education of countless others.</p>
      </p>
  </div>
  <div class="chartWrapper">
    <div class="chartContainer" id="chartCont1">
      <div id="growthChartLine"></div>
    </div>
    <div class="textContainer" id="chartCont1">
      <ul>
        <li>Short Term</li>
        <li class="m-active chosen">Mid Term</li>
        <li>Long Term</li>
      </ul>
      <p>Pointzon's recommendation of Edutech as a mid-term investment option is based on the company's strong
        financial performance, growth potential, and positive industry trends. mid-term investment refers to buying
        and holding assets for a brief period, usually more than a year, with the goal of generating quick profits.
        Edutech's current financials and market trends indicate that the company has the potential to deliver good
        returns in the near future, making it an attractive option for investors looking for mid-term gains.</p>
      <p>Analysis by POINTZON</p>
    </div>
  </div>
  <div id="smart-button-container">
    <div class="paymentElement" style="text-align: center"><label for="description">Email </label><input type="text"
        name="descriptionInput" id="description" maxlength="127" value="" placeholder="Enter Your Email"></div>
    <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please Enter Your Email</p>
    <div class="paymentElement" style="text-align: center"><label for="amount">Amount(£) </label><input
        name="amountInput" type="number" id="amount" value="" placeholder="Enter Amount"></div>
    <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter some Amount</p>
    <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input
        name="invoiceid" maxlength="127" type="text" id="invoiceid" value=""></div>
    <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
    <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
  </div>

  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=GBP"
    data-sdk-integration-source="button-factory"></script>
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

          if (invoiceidDiv.style.display === "block") {
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

          if (invoiceid.value !== '') {
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


  <?php
  include "resources-footer.php";
  ?>

  <script src="../js/jquery-3.6.3.slim.min.js"></script>
  <script src="../js/nav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/growthChartLine.js"></script>
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