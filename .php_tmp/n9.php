<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pointzon | NEWS</title>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://kit.fontawesome.com/a81f64a541.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/n1.css">
  <link rel="icon" type="image/x-icon" href="../images/favicon.jpg">
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
    <div class="news-heading">

      <h2>Child migrants racially abused and threatened with violence
      </h2>

    </div>
    <div id="news-info">
      <p class="card-text">POINTZON | London, United Kingdom
        <br>
        Last updated : January 28, 2023
      </p>
    </div>
    <div class="news-image" style="margin: 2rem;"><img src="https://i.guim.co.uk/img/media/50c2833dd6895a5dca1f4fc170f20ceb75f05276/234_0_7029_4218/master/7029.jpg?width=620&quality=45&dpr=2&s=none" class="img-fluid card-img rounded-start" alt="" /></div>


    <div class="news-body">

      <p>Children seeking asylum in the UK were threatened and subjected to racist abuse by staff at a Home Office-run hotel, a whistleblower has claimed as pressure grows on the government to act over the growing crisis in the system.

        .</p>
      <p> The source, who worked in the Brighton hotel for more than a year, said that in such an environment of “emotional abuse”, scores of children, who had arrived in the UK without parents or a carer, were driven on to the streets and into the hands of criminals.
      </p>
      <p>
        An Observer investigation last week that revealed dozens of young people have been kidnapped by gangs from the same hotel, prompting calls for such places to be closed and for a public inquiry.

      </p>
      <p> Child protection sources and a whistleblower working for a Home Office contractor described how youngsters were abducted from the street outside the hotel and bundled into cars. More than 200 children are missing after vanishing from hotels managed by the Home Office.

      </p>
      <p> Another whistleblower has now come forward, claiming that some children in the Brighton hotel were also threatened that their asylum claims would be harmed if they “misbehaved” while others were punished by being detained – illegally – in the hotel for days</p>

      <p>He added that when instances of inappropriate staff behaviour were reported, no apparent action was taken by the hotel, one of seven run by the Home Office to look after lone children who were seeking asylum.

        “There was a lot of xenophobic stuff, like: ‘Fuck off back to your country.’ Somebody heard one senior staff member calling a child a ‘fucking terrorist’.”

      </p>
      <p> The whistleblower added that staff regularly talked about children being abducted from nearby streets and that the targeting of youngsters was common knowledge.</p>
      <p>“We heard things about boys being taken, that this boy got taken by a car, things like that. They went missing. The hotel was unsafe. Everybody knew this was a place of vulnerable asylum seekers, so it became a target.”</p>
      <p>Sussex police are investigating a potential trafficking case after three children got into a car outside the Brighton hotel. The car was then driven towards London before police intercepted it. Home Office sources say they have no evidence of children being kidnapped.</p>
      <p>A total of 76 child asylum seekers are missing from the Brighton hotel, with a further 70 unaccounted for from Home Office-run hotels in neighbouring Kent.

        Patricia Durr, chief executive of children’s rights organisation Ecpat UK, said the revelations from the whistleblower pointed to a “scandalous and growing child protection failure”.</p>

    </div>
  </div>


  <?php
include "resources-nav.php";
?>

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
  <!--End of Tawk.to Script-->
</body>

</html>