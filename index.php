<?php
session_start();
include_once "assets/data-storage.php";
require 'vendor/autoload.php';


?>

<!-- Start header.php -->



<!--  END Header php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Project - Multicooler</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- FAQ Assets: -->
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v2.0.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
<!--          <img class="title2" src="assets/img/logo/logo.png"  width="200px" height="300px" alt="">-->

<!--        <h1 class="text-light"><a href="index.php"><span>Multi</span>Cooler</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.php"><img src="assets/img/logo/logo.png" alt="" class="img-logo"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="store.php">Store</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="assets/img/slider/slider5.png" alt="" title="#slider-direction-1" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
<!--                verander dit voor de tekst hoger of lager te zetten:-->
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs">
                  <h2 class="title1">The most diverse & profound coolbox on the market</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2">
                  <a href="index.php"><img src="assets/img/logo/logo.png" alt="" class="img-logo-slider"></a>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs">
                  <a class="ready-btn right-btn page-scroll" href="#services">Checkout our store</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div><!-- End Slider -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <div id="about" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>About Multicooler:</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fab fa-dropbox"></i>
                  </a>
                  <h4>Ons Product:</h4>
                  <p>
                    De Multicooler is een koelbox die veel meer kan dan enkel je voedingswaren koel houden.
                    Via ons zeer handige kliksysteem kan je de buitenkant van de koelbox uitrusten voor verschillende situaties.
                    Dit kan gaan van een kampeertrip tot een bouwwerf.   </p>

                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fas fa-users"></i>
                  </a>
                  <h4>Wie wij zijn: </h4>
                  <p>
                    Team Multicooler werd opgericht door 5 studenten die toevallig samenzaten voor een schoolopdracht.
                    Tijdens deze samenwerking kwam het idee voor de Multicooler, omdat ze het potentieel zagen in dit idee hebben ze besloten om hun idee uit te werken tot een volwaardig product.                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="fas fa-gem"></i>
                  </a>
                  <h4>Wat maakt ons uniek?</h4>
                  <p>
                    Met de Multicooler bieden we een koelbox aan waarmee je alles wat je nodig hebt in één compacte box kan meenemen.
                    Door ons zeer handige kliksysteem en de diverse mogelijkheden om de Multicooler te vervoeren is uw picnic of uitstap nog nooit zo fijn en zorgvrij geweest.                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>

        </div>
      </div>
    </div><!-- End Services Section -->



    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area hidden-xs">
      <div class="work-us">
        <div class="work-left-text">
          <a href="#">
            <img src="assets/img/coolbox/1.png" alt="">
          </a>
        </div>
        <div class="work-right-text text-center">
          <h2>De Multicooler</h2>
          <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
          <a href="#contact" class="ready-btn scrollto">Contact us</a>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Portfolio</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Development</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Design</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Photoshop</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/coolbox/2.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="assets/img/coolbox/2.png">
                      <h4>Business edition</h4>
                      <span>Met tafeltje</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/coolbox/6.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="assets/img/coolbox/6.png">
                      <h4>Fresh</h4>
                      <span>Appelblauw zeegroen</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/coolbox/3.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="assets/img/coolbox/3.png">
                      <h4>Suit to your needs</h4>
                      <span>Optimize your exerpience</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->

        </div>
      </div>
    </div><!-- End Portfolio Section -->



    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials-area">
      <div class="testi-inner area-padding">
        <div class="testi-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Start testimonials Start -->
              <div class="testimonial-content text-center">
                <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                <!-- start testimonial carousel -->
                <div class="owl-carousel testimonial-carousel">
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                      </p>
                      <h6>Boby</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                      </p>
                      <h6>Jhon</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                      </p>
                      <h6>Fleming</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                </div>
              </div>
              <!-- End testimonials end -->
            </div>
            <!-- End Right Feature -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <div id="faq" class="faq faq-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                  <div class="section-title" data-aos="fade-up">
                     <h3>FREQUENTLY ASKED QUESTIONS:</h3>
                  </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <ul class="faq-list">
                      <?php
                      $i = 0;
                      foreach($questions as $question => $answer):
                      $i++;?>
                          <li data-aos="fade-up" data-aos-delay="25">
                              <a data-toggle="collapse" class="collapsed" href="#faq<?=$i?>"><p><?= $question ?></p> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                              <div id="faq<?=$i?>" class="collapse">
                                  <p> <?= $answer ?> </p>
                              </div>
                          </li>
                      <?php endforeach; ?>
                      </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">

            </div>


            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Want to order in bulk?</h3>
              <a class="sus-btn" href="#">Request a quote</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">

              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="contact-icon text-center">
                      <div class="single-icon">
                          <i class="fa fa-map-marker"></i>
                          <p>
                              Location: Campus Hoboken<br>
                              <span>Salesianenlaan 90</span>
                          </p>
                      </div>
                  </div>
              </div>


            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fas fa-envelope"></i>
                  <p>
                    Email: info@multicooler.com<br>
                    <span>(Max 1week response time)</span>
                  </p>
                </div>
              </div>
            </div>

              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="contact-icon text-center">
                      <div class="single-icon">
                          <i class="fab fa-facebook-messenger"></i>
                          <p>
                              Facebook: MultiCooler<br>
                              <span>Monday-Friday (9am-5pm)</span>
                          </p>
                      </div>
                  </div>
              </div>

          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- Start Map -->
              <!-- Source: https://www.embedgooglemap.net/ -->
              <iframe width="100%" height="380" frameborder="0" style="border:0"
                      src="https://maps.google.com/maps?q=KDG%20hoboken&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>


              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" value="<?= isset($_POST['email']) ? $_POST['email'] : ' '?>" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please add a subject to your message" value="" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" value=""></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message switchDisplay">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <?php include_once("footer.php"); ?>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- FAQ assets: -->
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- END -->
 <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/appear/jquery.appear.js"></script>
  <script src="assets/vendor/knob/jquery.knob.js"></script>
  <script src="assets/vendor/parallax/parallax.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



<?php

if(isset($_SESSION['notifications']['form-succes']) && ($_SESSION['notifications']['form-succes'])){
    ?><script>
        jQuery(document).ready(function($) {
            $('.sent-message').show();
        });</script><?php
    $_SESSION['notifications']['form-succes'] = false;
}
?>