<?php
session_start();
include "resources/dbconfig.php";
?>

<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset=UTF-8>
  <meta http-equiv=X-UA-Compatible content="IE=edge">
  <meta name=description content="A crowdfunding platform that enables businesses to reach their goals. Global Network Support and Easy Setup!">
  <meta name=keywords content="pointzon, pointzon.com, crowdfunding, startup, startups, charity, business, news, funding">
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <title>Pointzon | The Funding Helper</title>
  <link rel=icon type=image/x-icon href=images/favicon.jpg>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <link rel=stylesheet href=css/welcome.css fetchpriority="highest">
  <script src=https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/2.0.0/scrollReveal.min.js integrity="sha512-L56hqljAjZhvB9f32klSO2ltXUlKbaOY2KdlNLOdzxJtl0jNvNQFKTP3u0MIFUP3mXTzYdy7KCaUSvi7QBWxNg==" crossorigin=anonymous referrerpolicy=no-referrer></script>
  <script type=text/javascript src=https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js></script>
  <link rel=preload href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css as=style onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel=stylesheet href=css/main.css>
  </noscript>
  <script src=https://unpkg.com/scrollreveal></script>
  <link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin=anonymous referrerpolicy=no-referrer />
  <link rel=stylesheet href=css/glide.theme.css>
  <script src=https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js crossorigin=anonymous defer></script>
  <link href=https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css rel=stylesheet crossorigin=anonymous>
  <script src=js/gianni-accordion.js></script>
  <link rel=stylesheet href=css/faq.css>
  <link rel=preload href=css/footer.min.css as=style onload="this.onload=null;this.rel='stylesheet'">
  <link rel=stylesheet href=css/card.css>
  <link rel=stylesheet href=css/servicesCard.css>
  <link rel=stylesheet href=css/card2.css>
  <link rel=stylesheet href=css/nav.css>
  <link rel=preload href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css as=style onload="this.onload=null;this.rel='stylesheet'">
  <link rel=preload href=css/main.css as=style onload="this.onload=null;this.rel='stylesheet'">
  <link rel=stylesheet href=https://unpkg.com/aos@next/dist/aos.css />
</head>

<body>
  <?php
  include 'main-nav.php';
  ?>
  <div class=hero>
    <p class="sample-text lozad" data-background-image=images/hero-image2-compressed.webp style=background-attachment:fixed>Pointzon</p>
    <div class=sub-text>
      <p>Elevate Your Business to the <span style=color:fuchsia>Next Level</span> with Us</p>
    </div>
    <div class=cta-links><br>
      
      <?php     
          if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                  echo '<a href=resources/signup>Sign Up</a>';
                }
      ?>
    </div>
  </div>
  <section class=first-sections>
    <section class=aboutUs>
      <div class=aboutContainer>
        <div class="left lozad" data-background-image=images/aboutUs.jpg data-aos=fade-right data-aos-offset=200 data-aos-easing=ease-in-sine></div>
        <div class=right id=aboutRight data-aos=fade-left data-aos-offset=200 data-aos-easing=ease-in-sine>
          <div class=content>
            <h1>Connecting Businesses to their future</h1>
            <p>Fundraising can be a daunting task for businesses. That's why we've created a platform that connects you, with potential investors to secure the funding you need to growth. Simplify your fundraising journey with Pointzon.</p>
            <a href=resources/about class=aboutBtn><span>Know More</span></a>
          </div>
        </div>
      </div>
    </section>
    <section class=aboutUs>
      <div class=aboutContent data-aos=fade-right data-aos-offset=200 data-aos-easing=ease-in-sine>
        <h2>The Pointzon Mission</h2>
        <p>At Pointzon, we offer a wide range of services to help businesses and investors succeed. From connecting businessess with potential investors to providing resources and support for fundraising, we are dedicated to helping our users achieve their goals. Sign up today to take advantage of our platform and services</p>
        <a href=resources/vision class=aboutBtn><span>Know More</span></a>
      </div>
      <div class=featuresCarousel id=fCarousel data-aos=fade-left data-aos-offset=200 data-aos-easing=ease-in-sine>
        <div class="swiffy-slider slider-nav-outside slider-nav-visible slider-nav-touch">
          <ul class=slider-container>
            <li>
              <div class=features-card>
                <div class=features-icon>
                  <i class="fa-solid fa-user-check"></i>
                  <h3>User Friendly</h3>
                </div>
                <div class=features-card-text>
                  <p> Our platform is designed to be easy to use, with a user-friendly interface that makes it simple to navigate and find the information you need. Whether you're a businesses founder or an investor, you'll find everything you need on Pointzon.</p>
                </div>
              </div>
            </li>
            <li>
              <div class=features-card>
                <div class=features-icon>
                  <i class="fa-solid fa-cloud-bolt"></i>
                  <h3>Lightning Fast</h3>
                </div>
                <div class=features-card-text>
                  <p> Experience lightning-fast website speeds with Pointzon. Our platform is designed to be responsive and user-friendly, so you can easily connect with investors and secure funding without any delays.</p>
                </div>
              </div>
            </li>
            <li>
              <div class=features-card>
                <div class=features-icon>
                  <i class="fa-solid fa-shield-halved"></i>
                  <h3>Totally Secured</h3>
                </div>
                <div class=features-card-text>
                  <p> At Pointzon, security is our top priority. We use the latest technology to protect your personal and financial information and ensure that your data is safe and secure</p>
                </div>
              </div>
            </li>
            <li>
              <div class=features-card>
                <div class=features-icon>
                  <i class="fa-solid fa-trophy"></i>
                  <h3>Rewarding</h3>
                </div>
                <div class=features-card-text>
                  <p> Our loyalty program rewards our users for their continued support. The more you use our platform, the more benefits and rewards you'll receive, such as exclusive access to potential investors, discounts on services, and more.</p>
                </div>
              </div>
            </li>
            <li>
              <div class=features-card>
                <div class=features-icon>
                  <i class="fa-solid fa-headset"></i>
                  <h3>Support</h3>
                </div>
                <div class=features-card-text>
                  <p> We believe in providing our users with the best possible experience. That's why we offer 24/7 support to help you with any questions or issues you may have. <br><br><br></p>
                </div>
              </div>
            </li>
          </ul>
          <button type=button class=slider-nav></button>
          <button type=button class="slider-nav slider-nav-next"></button>
          <div class=slider-indicators>
            <button class=active></button>
            <button></button>
            <button></button>
            <button></button>
            <button></button>
          </div>
        </div>
      </div>
    </section>
  </section>
  <section class=process>
    <div class="step-1 steps" id=pstep1 data-aos=fade-up-right data-aos-offset=200 data-aos-easing=ease-in-sine>
      <i class="fa-solid fa-user-plus"></i>
      <h4>
        Sign Up
      </h4>
      <p>Create an account on Pointzon</p>
    </div>
    <div class="step-2 steps" id=pstep2 data-aos=fade-up data-aos-offset=200 data-aos-easing=ease-in-sine>
      <i class="fa-solid fa-pen-to-square"></i>
      <h4>
        Create Profile
      </h4>
      <p>Showcase your business or investment goals</p>
    </div>
    <div class="step-3 steps" id=pstep3 data-aos=fade-up-left data-aos-offset=200 data-aos-easing=ease-in-sine>
      <i class="fa-solid fa-people-group"></i>
      <h4>
        Connect
      </h4>
      <p>Browse profiles and connect with potential investors or businessess</p>
    </div>
  </section>
  <section class=campaignCards>
							<span>
								<p>Current Campaigns</p>
							</span>
							<div class=glide>
								<div class=glide__track data-glide-el=track>
									<div class=glide__slides>
										<?php
											$cardQuery = "SELECT * FROM campaign";
											$execQuery = mysqli_query($con,$cardQuery);
											while($card = mysqli_fetch_assoc($execQuery)){
												?>
																						<div class=cardDemo>
											<a href=resources/business.php?id=<?=$card['id']?>>
												<img data-src=resources/business/<?=$card['b_logo']?> alt=... class=lozad loading=lazy>
												<div class=cardDemoBody>
													<span class=tag><?=$card['b_type']?></span>
													<p class=name><?=$card['b_name']?></p>
													<p>
													<p class=truncatePara><?=$card['b_intro']?></p><a href=resources/business.php?id=<?=$card['id']?>>Know More</a></p>
												</div>
												<div class=cardDemoFooter>
													<p>TARGET: <?=$card['b_funding']?></p>
													<div class=progress role=progressbar aria-label="Example with label" aria-valuenow=25 aria-valuemin=0 aria-valuemax=100>
														<div class=progress-bar style=width:0%>0%</div>
													</div>
													<p><?=$card['b_time']?> days Left</p>
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

  <div class=charityContainer>
    <section class="aboutCharity lozad" data-background-image=images/charity.webp>
      <div class=charityContent>
        <h2>Be a Part of Something Bigger</h2>
        <p>Join Pointzon's Charity Efforts. At Pointzon, we believe in giving back. That's why we have a dedicated charity section on our platform where you can find and donate for causes that align with your values and interests. Lets make a difference in the world.</p>
        <a href=services/Charity class=charityBtn> Know More... </a>
      </div>
      <div class=charityImg>
      </div>
    </section>
  </div>
  <?php
               
               if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                 $display = "display:flex;";
               }else{
                $display = "display:none;";
               }
               ?>
  <section class=callToAction data-aos=flip-right style=<?php echo $display ?>>
    <div class=growthImg><img class=lozad data-src=images/growth3.svg alt></div>
    <div class=ctaText>
      <h3>Are you ready to take your Business to the next Level?</h3>
      <p> Secure the funding you need to grow your business. Sign up today and unlock the potential of your business. Join us now and let's fuel your growth together.</p>
      <a class=learn-more href=resources/signup>
        <span class=circle aria-hidden=true>
          <span class="icon arrow"></span>
        </span>
        <span class=button-text>Let's Do it</span>
      </a>
    </div>
  </section>
  
  <div class="testimonials">
    <!-- <h2>What Our users say</h2> -->
    <div class="swiffy-slider slider-indicators-highlight slider-nav-touch slider-nav-autoplay slider-nav-autopause slider-indicators-sm slider-nav-animation slider-item-show2 slider-indicators-roundslider-nav-animation-appear slider-nav-dark slider-nav-sm" data-slider-nav-autoplay-interval=4000>
      <ul class=slider-container>
        <li>
          <div class="testimonial1">
            <div class="rcard">
              <div class="userImage"><img data-src="https://media.istockphoto.com/id/1309328823/photo/headshot-portrait-of-smiling-male-employee-in-office.jpg?b=1&s=170667a&w=0&k=20&c=MRMqc79PuLmQfxJ99fTfGqHL07EDHqHLWg0Tb4rPXQc=" class="lozad" alt="">
              </div>
              <div class="userN">
                <h3>George Green</h3>
                <h6 class="userDesig">VC - Kopter</h6>
              </div>
              <p class="userT">The platform made fundraising a breeze for our company, and the team was extremely helpful.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="testimonial1">
            <div class="rcard">
              <div class="userImage"><img data-src="https://image.shutterstock.com/mosaic_250/2780032/1733598437/stock-photo-close-up-headshot-portrait-picture-of-smiling-african-american-businesswoman-happy-attractive-1733598437.jpg" class="lozad" alt="">
              </div>
              <div class="userN">
                <h3>Sophia White</h3>
                <h6 class="userDesig">CTO - Yukamari</h6>
              </div>
              <p class="userT">I found the platform to be a great resource for discovering new investment opportunities and aligning with my goalss</p>
            </div>
          </div>
        </li>
        <li>
          <div class="testimonial1">
            <div class="rcard">
              <div class="userImage"><img data-src="https://media.istockphoto.com/id/1300972573/photo/pleasant-young-indian-woman-freelancer-consult-client-via-video-call.jpg?s=612x612&w=0&k=20&c=cbjgWR58DgUUETP6a0kpeiKTCxwJydyvXZXPeNTEOxg=" class="lozad" alt="">
              </div>
              <div class="userN">
                <h3>Emma Smith</h3>
                <h6 class="userDesig">CEO - Mikci</h6>
              </div>
              <p class="userT">Pointzon provided valuable advice and guidance throughout the fundraising process and helped us reach the right investors.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="testimonial1">
            <div class="rcard">
              <div class="userImage"><img data-src="https://www.kapwing.com/resources/content/images/2019/06/final_5d13fa73b1d9e60014650935_716840.jpg" class="lozad" alt="">
              </div>
              <div class="userN">
                <h3>Oliver Brown</h3>
                <h6 class="userDesig">VP Deomer</h6>
              </div>
              <p class="userT">The platform was easy to navigate and the process of connecting with investors was seamless</p>
            </div>
          </div>
        </li>
        <li>
          <div class="testimonial1">
            <div class="rcard">
              <div class="userImage"><img data-src="https://image.shutterstock.com/mosaic_250/259680998/1655747050/stock-photo-young-adult-profile-picture-with-red-hair-1655747050.jpg" class="lozad" alt="">
              </div>
              <div class="userN">
                <h3>Amelia Jones</h3>
                <h6 class="userDesig">CEO - Yukamari</h6>
              </div>
              <p class="userT">Thanks to Pointzon, we were able to secure the funding needed to bring our innovative product to market.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="testimonial1">
            <div class="rcard">
              <div class="userImage"><img data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV0iGYifyUsnUDGRdH2hFOQC5FTxlRIYlTpr2qY_uaYn5j4UWgqMXQ3A4PAhlKPYEj0rA&usqp=CAU" class="lozad" alt="">
              </div>
              <div class="userN">
                <h3>William Taylor</h3>
                <h6 class="userDesig">Retail Investor</h6>
              </div>
              <p class="userT">Thanks to Pointzon, we were able to secure the funding needed to bring our innovative product to market.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="testimonial1">
            <div class="rcard">
              <div class="userImage"><img data-src="https://media.istockphoto.com/id/1381221247/photo/beautiful-afro-girl-with-curly-hairstyle.jpg?b=1&s=170667a&w=0&k=20&c=0x91osZOkL8EfhTEEGNa2EeCGN2gdMTNULOsUFW_0i4=" class="lozad" alt="">
              </div>
              <div class="userN">
                <h3>Isabella Davis</h3>
                <h6 class="userDesig">Venture Captilist</h6>
              </div>
              <p class="userT">As a VC, I was impressed by the quality of businessess featured on the platform, and have already seen great returns.</p>
            </div>
          </div>
        </li>
      </ul>
      <button type=button class=slider-nav></button>
      <button type=button class="slider-nav slider-nav-next"></button>
      <ul class=slider-indicators>
        <li class=active></li>
        <li></li>
        <li></li>
        <li></li>

      </ul>
    </div>
    </div>
  <!-- <div class="testimonial1">
    <div class="rcard">
      <div class="userImage"><img data-src="https://media.istockphoto.com/id/1381221247/photo/beautiful-afro-girl-with-curly-hairstyle.jpg?b=1&s=170667a&w=0&k=20&c=0x91osZOkL8EfhTEEGNa2EeCGN2gdMTNULOsUFW_0i4=" class="lozad" alt="">
      </div>
      <div class="userN">
        <h3>Amelia Jones</h3>
        <h6 class="userDesig">CEO - Yukamari</h6>
      </div>
      <p class="userT">Thanks to Pointzon, we were able to secure the funding needed to bring our innovative product to market.</p>
    </div>
  </div> -->
  <!-- <section class=mapSection>
    <section class=animatedWrapper>
      <div id=stars></div>
      <div id=stars2></div>
      <div id=stars3></div>
      <div id=map>
        <iframe data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.3294133260674!2d-0.3156479850211377!3d51.488822219883474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760dbc719ef29b%3A0xa8270280b611b28c!2sthe%20mille%2C%201000%20Great%20West%20Rd%2C%20Brentford%20TW8%209DW%2C%20UK!5e0!3m2!1sen!2sin!4v1675085026182!5m2!1sen!2sin" width=600 height=450 style=border:0 allowfullscreen referrerpolicy=no-referrer-when-downgrade class=lozad></iframe>
      </div>
    </section>
  </section> -->
  <div class="welcome-section content-hidden">
    <div class=content-wrap>
      <ul class=fly-in-text>
        <li>WELCOME</li>
      </ul>
    </div>
  </div>
  <footer class=footer-10>
    <div class=footerContainer>
      <div class=row>
        <div class=col-md-7>
          <div class=row>
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class=footer-heading>Resources</h2>
              <ul class=list-unstyled>
                <li><a href=resources/GDPR class=d-block>GDPR</a></li>
                <li><a href=resources/policy class=d-block>Privacy Policy</a></li>
                <li><a href=resources/terms class=d-block>Terms & Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class=footer-heading>About</h2>
              <ul class=list-unstyled>
                <li><a href=resources/about class=d-block>Our story</a></li>
                <li><a href=resources/vision class=d-block>Mission & Vision</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-5 mb-md-0 mb-4">
          <h2 class=footer-heading>Subscribe</h2>
          <form action=# class=subscribe-form>
            <div class="form-group d-flex">
              <input type=text class="form-control rounded-left" placeholder="Enter email address">
              <button type=submit class="form-control submit rounded-right">Subscribe</button>
            </div>
            <span class=subheading>Get digital marketing updates in your mailbox</span>
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
            <li class=ftco-animate><a href=# data-toggle=tooltip data-placement=top title=Twitter><span><i class="fa-brands fa-facebook"></i></span></a></li>
            <li class=ftco-animate><a href=# data-toggle=tooltip data-placement=top title=Facebook><span><i class="fa-brands fa-instagram"></i></span></a></li>
            <li class=ftco-animate><a href=# data-toggle=tooltip data-placement=top title=Instagram><span><i class="fa-brands fa-youtube"></i></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src=js/nav.js></script>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin=anonymous referrerpolicy=no-referrer></script>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.esm.min.js integrity="sha512-UWMhYs4S2yYDXHEXysQmn0naWye4oCeslOUbeHsVaBtWVlrSZUNTx4Q4Kk259frPZXJiC0uw9r113rAj47zkfQ==" type=module crossorigin=anonymous referrerpolicy=no-referrer></script>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin=anonymous referrerpolicy=no-referrer></script>

  <script type="text/javascript">
    var welcomeSection = $('.welcome-section');

    $(window).on('load', function() {
      if (sessionStorage.getItem('welcomeScreen') !== 'true') {
        welcomeSection.removeClass('content-hidden').delay(1500).fadeOut(2000);
        sessionStorage.setItem('welcomeScreen', true);
      } else {
        welcomeSection.css("display", "none");
      }
    });
  </script>
  <script>
    $(document).ready(function() {
      if ($(window).width() <= 426) {
        $("#aboutRight").attr({
          'data-aos': 'zoom-in'
        });
        $("#fCarousel").attr({
          'data-aos': 'zoom-in-right'
        });
        $("#pstep1").attr({
          'data-aos': 'fade-down-right'
        });
        $("#pstep2").attr({
          'data-aos': 'fade-right'
        });
        $("#pstep3").attr({
          'data-aos': 'fade-up-right'
        });
      } else {
        $("#aboutRight").attr({
          'data-aos': 'fade-left'
        });
        $("#fCarousel").attr({
          'data-aos': 'fade-left'
        });
        $("#pstep1").attr({
          'data-aos': 'fade-up-right'
        });
        $("#pstep2").attr({
          'data-aos': 'fade-up'
        });
        $("#pstep3").attr({
          'data-aos': 'fade-up-left'
        });
      }
    });
  </script>

  <script>
    const navbar = document.querySelector(".navbar");
    const heroSection = document.querySelector(".hero");
    if (screen.width > 767) {
      var heroSectionOptions = {
        rootMargin: "-100px 0px 0px 0px",
      };
    } else {
      var heroSectionOptions = {
        rootMargin: "-50px 0px 0px 0px",
      };
    }
    const heroSectionObserver = new IntersectionObserver(function(entries, navbar) {
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
 
    var glide = new Glide('.glide', {
      type: 'slider',
      keyboard: true,
      swipeThreshold: 20,
      dragThreshold: 50,
      gap: 20,
      perView: 4,
      breakpoints: {
        768: {
          perView: 4,
        },
        426: {
          perView: 2,
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
      rootMargin: '10px 0px',
      threshold: 0.1,
      enableAutoReload: true
    });
    observer.observe();
  </script>
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
    const sr = ScrollReveal({
      origin: "top",
      distance: "30px",
      duration: 2000,
    });
    ScrollReveal().reveal('.glide', {
      delay: 300
    });
    ScrollReveal().reveal('.glide2', {
      delay: 700
    });
    ScrollReveal().reveal('.sub-text', {
      delay: 300
    });
    ScrollReveal().reveal('.cta-links', {
      delay: 800
    });
    ScrollReveal().reveal('.cardFaq', {
      delay: 200
    });
    ScrollReveal().reveal('.charityContainer', {
      delay: 200
    });
    ScrollReveal().reveal('.animatedWrapper', {
      delay: 200
    });
    ScrollReveal().reveal('.testimonials', {
      delay: 200
    });
  </script>
  <script src=https://cdn.websitepolicies.io/lib/cookieconsent/cookieconsent.min.js defer></script>
  <script>
    window.addEventListener("load", function() {
      window.wpcc.init({
        "corners": "large",
        "colors": {
          "popup": {
            "background": "#1c1f4b",
            "text": "#ffffff",
            "border": "#afb3e4"
          },
          "button": {
            "background": "#afb3e4",
            "text": "#000000"
          }
        },
        "position": "bottom-right",
        "z-index": "4",
        "transparency": "10",
        "content": {
          "href": "resources/policy"
        }
      })
    });
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-WRB2DDGM31');
  </script>
  <script src=https://unpkg.com/aos@next/dist/aos.js></script>
  <script>
    AOS.init();
  </script>
  <script type=text/javascript>
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