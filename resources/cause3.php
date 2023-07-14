<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Charity Campaign | Pointzon</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/startup.css">

  <link rel="stylesheet" href="../css/main.min.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/nav.css">
<style>
  		.tagline{
			margin: 4rem 0 1rem;
		}
</style>


</head>

<body>

  <header>
    <?php
    include 'resources-nav.php';
    ?>
  </header>

  <div class="news-hero"></div>


  <!-- end of navbar -->


  <div class="main-news-container">
    <div class="news-image">
      <div class="news-img-wrapper"><img src="https://www.zenefits.com/workest/wp-content/uploads/2018/11/bigstock-Cheerful-business-owners-stand-232405831-e1542226244501-790x444.jpg" alt="" /></div>
    </div>

    <div class="news-body">
      <div class="news-heading">

      <h2>Support Local Small Businesses
      </h2>
      </div>

      <p>The current economic climate is tough on everyone, but small businesses are especially vulnerable. Many have been forced to close their doors permanently due to lack of customers and financial support. At Pointzon, we believe in the power of community and the importance of supporting local small businesses. That's why we're launching a fundraising campaign to raise money to support these businesses during these difficult times.</p>
    </div>
  </div>
  <div class="fullText">
    <p class="tagline">Keep our community thriving, one small business at a time.</p>
    <p>By donating to this campaign, you'll be helping small businesses keep their doors open and their employees paid. You'll be supporting the local economy and ensuring that our community continues to thrive. Plus, when small businesses do well, we all do well. They provide jobs, goods, and services that we all rely on.
      </p>
      <p>Every donation, big or small, will make a difference. Together, we can help small businesses weather this economic storm and come out stronger on the other side. Please consider making a donation today and help us keep our community thriving, one small business at a time.

      </p>
  </div>


  <div id="smart-button-container">
    <div style="text-align: center;">
      <div id="paypal-button-container"></div>
    </div>
  </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
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
            purchase_units: [{
              "amount": {
                "currency_code": "USD",
                "value": 1
              }
            }]
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

            // Or go to another URL:  actions.redirect('thank_you');

          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
  </div>
  </div>

  <br><br>


  <?php
  include 'resources-footer.php';
  ?>

  <script src="../js/jquery-3.6.3.slim.min.js"></script>
  <script src="../js/nav.js"></script>
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