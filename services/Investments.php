<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Investment | Pointzon</title>
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
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/card.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel=preload href=css/investment.min.css as=style onload="this.onload=null;this.rel='stylesheet'">
  <link rel=preload href=../css/main.min.css as=style onload="this.onload=null;this.rel='stylesheet'">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="css/responsive.css"> -->

  <style>
    .growthImg img {
      width: 20rem;
    }


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

      .section_title h3 span::after {
        top: 21px;
        width: 310px;

      }

      .section_title h3 span::before {
        bottom: 5px;
        width: 150px;

      }

      .section_title h3 .otherHeadings::after {

        top: 21px;
        background: #ae00ff;

      }

      .growthImg img {
        width: 16rem;
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
              <!-- <span>Get Started Today.</span> -->
              <h3>Explore Diverse Investment Options</h3>
              <p>Invest <span id="typed"></span></p>
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
      <div class="left lozad overlay3" data-background-image="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine"></div>
      <div class="right" id="aboutRight" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
        <div class="content">
          <h1>Financial Growth Starts Here!</h1>
          <p>Our platform offers expert insights and advice to help you make informed investment decisions. Whether it be equities, commodities, real estate, or other investment opportunities, we've got you covered. Experienced Advisors will help you to achieve your financial objectives!</p>
          <a href="../resources/signup" class="aboutBtn"><span>Know More</span></a>
        </div>
      </div>
    </div>

  </section>

  <!-- introduction area end -->
  <!-- slider_area_end -->
  <section class="processCrowdfunding">
    <div class="step-1 steps" id="pstep1" data-aos="fade-up-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
      <i class="fa-solid fa-money-bill-trend-up"></i>
      <h4>
        Returns
      </h4>
      <p>Maximise your return</p>
    </div>

    <div class="step-2 steps" id="pstep2" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine">

      <i class="fa-solid fa-shapes"></i>
      <h4>
        Diversification
      </h4>
      <p>Spread your Risk</p>
    </div>
    <div class="step-3 steps" id="pstep3" data-aos="fade-up-left" data-aos-offset="200" data-aos-easing="ease-in-sine">

      <i class="fa-solid fa-droplet"></i>
      <h4>
        Liquidity
      </h4>
      <p>Access your funds</p>
    </div>
    <div class="step-3 steps" id="pstep3" data-aos="fade-up-left" data-aos-offset="200" data-aos-easing="ease-in-sine" style="width: auto;">

      <i class="fa-solid fa-scale-balanced"></i>
      <h4>
        Stability
      </h4>
      <p>Build your wealth</p>
    </div>
  </section>
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="section_title text-center mb-55">
        <h3><span class="otherHeadings">Market Overview</span></h3>
      </div>
    </div>
  </div>
  <div class="marketIndexWidget">
    <div class="widgetWrapper">
      <!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
          {
            "colorTheme": "dark",
            "dateRange": "12M",
            "showChart": true,
            "locale": "in",
            "width": "100%",
            "height": "100%",
            "largeChartUrl": "",
            "isTransparent": false,
            "showSymbolLogo": true,
            "showFloatingTooltip": true,
            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
            "gridLineColor": "rgba(240, 243, 250, 0)",
            "scaleFontColor": "rgba(106, 109, 120, 1)",
            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
            "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
            "tabs": [{
                "title": "Indices",
                "symbols": [{
                    "s": "FOREXCOM:SPXUSD",
                    "d": "S&P 500"
                  },
                  {
                    "s": "FOREXCOM:NSXUSD",
                    "d": "US 100"
                  },
                  {
                    "s": "FOREXCOM:DJI",
                    "d": "Dow 30"
                  },
                  {
                    "s": "INDEX:NKY",
                    "d": "Nikkei 225"
                  },
                  {
                    "s": "INDEX:DEU40",
                    "d": "DAX Index"
                  },
                  {
                    "s": "FOREXCOM:UKXGBP",
                    "d": "UK 100"
                  }
                ],
                "originalTitle": "Indices"
              },
              {
                "title": "Futures",
                "symbols": [{
                    "s": "CME_MINI:ES1!",
                    "d": "S&P 500"
                  },
                  {
                    "s": "CME:6E1!",
                    "d": "Euro"
                  },
                  {
                    "s": "COMEX:GC1!",
                    "d": "Gold"
                  },
                  {
                    "s": "NYMEX:CL1!",
                    "d": "Crude Oil"
                  },
                  {
                    "s": "NYMEX:NG1!",
                    "d": "Natural Gas"
                  },
                  {
                    "s": "CBOT:ZC1!",
                    "d": "Corn"
                  }
                ],
                "originalTitle": "Futures"
              },
              {
                "title": "Bonds",
                "symbols": [{
                    "s": "CME:GE1!",
                    "d": "Eurodollar"
                  },
                  {
                    "s": "CBOT:ZB1!",
                    "d": "T-Bond"
                  },
                  {
                    "s": "CBOT:UB1!",
                    "d": "Ultra T-Bond"
                  },
                  {
                    "s": "EUREX:FGBL1!",
                    "d": "Euro Bund"
                  },
                  {
                    "s": "EUREX:FBTP1!",
                    "d": "Euro BTP"
                  },
                  {
                    "s": "EUREX:FGBM1!",
                    "d": "Euro BOBL"
                  }
                ],
                "originalTitle": "Bonds"
              },
              {
                "title": "Forex",
                "symbols": [{
                    "s": "FX:EURUSD",
                    "d": "EUR/USD"
                  },
                  {
                    "s": "FX:GBPUSD",
                    "d": "GBP/USD"
                  },
                  {
                    "s": "FX:USDJPY",
                    "d": "USD/JPY"
                  },
                  {
                    "s": "FX:USDCHF",
                    "d": "USD/CHF"
                  },
                  {
                    "s": "FX:AUDUSD",
                    "d": "AUD/USD"
                  },
                  {
                    "s": "FX:USDCAD",
                    "d": "USD/CAD"
                  }
                ],
                "originalTitle": "Forex"
              }
            ]
          }
        </script>
      </div>
      <!-- TradingView Widget END -->
    </div>

    <div class="widgetWrapper">
      <!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
          {
            "colorTheme": "dark",
            "dateRange": "12M",
            "exchange": "NASDAQ",
            "showChart": true,
            "locale": "in",
            "width": "100%",
            "height": "100%",
            "largeChartUrl": "",
            "isTransparent": false,
            "showSymbolLogo": false,
            "showFloatingTooltip": true,
            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
            "gridLineColor": "rgba(240, 243, 250, 0)",
            "scaleFontColor": "rgba(106, 109, 120, 1)",
            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
            "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
          }
        </script>
      </div>
      <!-- TradingView Widget END -->
    </div>
  </div>
  <!-- latest_activites_area_start  -->

  <div class="latest_activites_area">
    <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
      <a class="popup-video" href="https://www.youtube.com/watch?v=kI-wkjSg7mQ">
        <i class="fa-regular fa-circle-play"></i>
      </a>
    </div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-lg-7">
          <div class="activites_info">
            <div class="section_title">
              <h3> <span>Diversified & Responsible Investments </span></h3>
            </div>


            <p class="para_1"> At Pointzon, we believe that responsible and diversified investment is the key to success in the ever-changing world of finance. That's why we offer a range of investment opportunities in different sectors, including equity, commodities, real estate, and more, to help you achieve your financial goals.

            </p>
            <p class="para_2">
              With our carefully curated investment options, you can be sure that your money is going to the right places, with a focus on long-term growth and stability. Plus, our team of experts is always on hand to provide advice and support, so you can make informed decisions about your investments. Choose Pointzon for responsible and diversified investment that puts your financial future first.</p>

            <p>We offer you: </p>
            <!-- <ul>
                              <li>Diversify Portfolio</li>
                              <li>Access Wider Range of Investment Opportunities</li>
                              <li>Maximise Returns</li>
                              <li>Benefit from favourable tax policies</li>
                              <li>Greater Privacy</li>
                             </ul> -->
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Equity</li>
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Commodities</li>
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Money Market</li>
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Real Estate</li>
              <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Pension Schemes</li>
            </ul>
            <br><br>
            <a href="../resources/signup" data-scroll-nav='1' class="boxed-btn4">Register Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- latest_activites_area_end  -->

  <!-- portfolios and charts star -->

  <section class="portfolio lozad" data-background-image="https://img.freepik.com/free-vector/gradient-black-background-with-wavy-lines_23-2149157312.jpg "><!--    https://media.istockphoto.com/id/1359290416/vector/abstract-dark-violet-purple-grunge-royal-background-texture.jpg?s=612x612&w=0&k=20&c=EXFoYXfzt0dCQUcE56Dl2GBRD2Bt8CGDatQD7avU5i8=-->
    <div class="chartWrapper" id="pwrap1">
      <div class="txtWrapper">
        <h2>Your Dream Portfolio!</h2>
        <div class="portfolioText" id="chart1text">Looking to create your dream investment portfolio? Look no further than Pointzon. Our team of expert advisors will work with you to tailor a portfolio that meets your specific financial goals and risk tolerance. Whether you're looking to invest in equities, commodities, real estate, or other asset classes, we have the expertise and experience to help you make informed decisions and maximize your returns</div>
      </div>
      <div class="chartContainer" id="portfolioCont1">
        <div id="portfolio1"></div>
      </div>
    </div>
    <div class="chartWrapper" id="pwrap2">
      <div class="chartContainer" id="portfolioCont2">
        <div id="portfolio2"></div>
      </div>
      <div class="txtWrapper">
        <h2>Company's Portfolio</h2>
        <div class="portfolioText" id="chart2text">At Pointzon Investments, we practice what we preach. Our own portfolio is a testament to our expertise in building diversified and profitable investment strategies. With a keen eye for market trends and a deep understanding of risk management, we have curated a portfolio that delivers consistent returns, even in volatile markets. Trust us to help you build your dream portfolio and achieve your financial goals.</div>
      </div>
    </div>
  </section>
  <!-- portfolios and charts ends -->

  <!-- reason_area_start  -->
  <div class="servicesDescription lozad" data-background-image="https://images.pexels.com/photos/7233354/pexels-photo-7233354.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Money Market</h5>
        <p class="card-text"> Invest in money market funds for potentially higher returns than traditional savings accounts, while maintaining a high level of liquidity. </p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Equity & Commodities</h5>
        <p class="card-text"> Invest in stocks and commodities for the potential of high returns and diversify your portfolio.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Real Estate</h5>
        <p class="card-text"> Invest in real estate and diversify your portfolio with an asset that historically appreciates in value.</p><br>
      </div>
    </div>
  </div><br><br><br>
  <!-- reason_area_end  -->

  <section class=callToAction data-aos=flip-right>
    <div class=growthImg><img class=lozad data-src="https://img.freepik.com/free-vector/senior-couple-using-laptop-home_1308-125060.jpg?w=740&t=st=1677158197~exp=1677158797~hmac=b5fc14748d04d6be54d89e4f9cc5853ff4ae88e78ea54f5ebc006316e6a0a4da" alt="investment-amico.svg"></div>
    <div class=ctaText>
      <h3>Are you Retired?</h3>
      <p style="color:#000">Plan for a secure financial future with Pointzon's pension investment options. Our expertise and tailored solutions offer competitive returns, tax benefits, and flexibility in managing your funds. Let us help you build a diversified portfolio focused on long-term growth and security.</p><br>
      <a class=learn-more href=../resources/signup>
        <span class=circle aria-hidden=true>
          <span class="icon arrow"></span>
        </span>
        <span class=button-text>Let's Do it</span>
      </a>
      <br>
      <br>
    </div>
  </section>

  <section class=callToAction data-aos=flip-right>
    <div class=growthImg><img class=lozad data-src=../images/investment.svg alt="investment-amico.svg"></div>
    <div class=ctaText>
      <h3>Are you ready to take your Business to the next Level?</h3>
      <p style="color:#000">Invest in your future today! Contact us to learn more about our investment opportunities and how we can help you achieve your financial goals. Reach us out by clicking the live chat button ! </p><br>
      <a class=learn-more href=../resources/signup>
        <span class=circle aria-hidden=true>
          <span class="icon arrow"></span>
        </span>
        <span class=button-text>Let's Do it</span>
      </a>
      <br>
    </div>
  </section>


  <!-- popular_causes_area_start  -->
  <div class="popular_causes_area section_padding">

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb-55">
          <h3><span class="otherHeadings">FAQs</span></h3>
        </div>
      </div>
    </div>

    <div class="cardFaq">
      <article>
        <h4 data-accordion-element-trigger>What is the minimum investment required to get started with Pointzon?</h4>
        <div data-accordion-element-content class="content">
          <p>The minimum investment required to get started with Pointzon may vary depending on the investment option you choose. Our team can guide you through the minimum investment requirements for each option.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>How does Pointzon select investment opportunities?</h4>
        <div data-accordion-element-content class="content">
          <p>At Pointzon, we have a team of experienced professionals who conduct thorough research and analysis to identify potential investment opportunities. We also take into account your investment goals and preferences to ensure that we recommend investment options that are aligned with your objectives.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>How often can I access my investments?</h4>
        <div data-accordion-element-content class="content">
          <p> The frequency with which you can access your investments may vary depending on the investment option you choose. Some investment options may have restrictions on the frequency of withdrawals, while others may allow you to access your funds more frequently. Our team can provide you with more information on the specific terms and conditions of each investment option.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>What kind of returns can I expect from my investment?</h4>
        <div data-accordion-element-content class="content">
          <p>The returns on your investment may vary depending on the investment option you choose and market conditions. Our team can provide you with historical performance data and other information to help you make informed investment decisions.</p>
        </div>
      </article>
      <article>
        <h4 data-accordion-element-trigger>How does Pointzon manage risk?</h4>
        <div data-accordion-element-content class="content">
          <p>At Pointzon, we prioritize risk management in all our investment decisions. We use a range of risk management techniques, including diversification, asset allocation, and hedging strategies, to help mitigate risks and protect your investment. Our team can provide you with more information on the specific risk management strategies used for each investment option.</p>
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
            <h3><span class="otherHeadings">Our Team</span></h3>
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
  <!-- <script src="js/vendor/modernizr-3.5.0.min.js"></script> -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


  <!-- js for portfolio charts -->
  <script src="js/chartdiv5.js"></script>
  <script src="js/chartdiv6.js"></script>

  <!--contact js-->
  <!-- <script src="js/contact.js"></script> -->
  <!-- <script src="js/main.js"></script> -->
  <script src="../js/nav.js"></script>
  <script>
    var typed = new Typed('#typed', {
      strings: ["Wisely", "Responsibly", "Globally", "Strategically"],
      typeSpeed: 45,
      backSpeed: 15,
      loop: true,
      loopCount: Infinity,
      showCursor: true,
      smartBackspace: true
    });
  </script>

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