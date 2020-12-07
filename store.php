<?php
session_start();

include_once "assets/data-storage.php";
require 'vendor/autoload.php';


if(!isset($_SESSION['selected']['value'])){
    $_SESSION['selected']['value'] = "metallic";
    $_SESSION['selected']['isset'] = false;
}

if(isset($_POST['color-selection'])){
    $_SESSION['selected']['isset'] = true;
    $_SESSION['selected']['value'] = $_POST['color-selection'];
}


//echo __FILE__.__LINE__.__FUNCTION__.'<br />';
//echo '<pre>';
//var_dump($_SESSION['selected']['value']);
//echo '</pre>';


?>


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
            <a href="index.php"><img src="assets/img/logo/logo.png" alt="" class="img-logo"></a>

        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="store.php">Store</a></li>
                <li><a href="index.php#faq">FAQ</a></li>
                <li><a href="#contact">Contact</a></li>


            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Slider Section ======= -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <!-- @info: slider for the coolbox: -->
            <img src="assets/img/slider/ice-bg3.png" alt="" title="#slider-direction-1" />
        </div>

        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                                <a class="ready-btn right-btn page-scroll" href="#pricing">See Services</a>
                                <a class="ready-btn page-scroll" href="index.php#about">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><!-- End Slider -->

<main id="main">


    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Ons assortiment</h2>
                    </div>
                </div>
            </div>
            <div class="row wesome-project-1 fix">
                <!-- Start Portfolio -page -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="awesome-menu ">
                        <ul class="project-menu">
                            <li class="menu-first-item">
                                <a href="#" class="active" data-filter="*">Alles</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".all-in-one">All-in-1</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".los-product">Los-product</a>
                            </li>
                            <li class="nav-assec">
                                <a href="#" data-filter=".kliksystemen">Accessoires</a>
                            </li>
                            <li class="colorpicker-nav">
                                <form method="post" id="myform" action="store.php#portfolio">
                                    <select name='color-selection' id="myfield">
                                        <option disabled selected value="<?= isset($_SESSION['selected']['value'])  ?  $_SESSION['selected']['value'] : '' ?>">
                                            <?=  $_SESSION['selected']['isset'] ? $_SESSION['selected']['value'] : 'Kleur-type' ?></option>
                                        <option value="metallic">Metallic</option>
                                        <option value="rood">Rood</option>
                                        <option value="groen">Groen</option>
                                    </select>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- ## start of product reel -->
            <div class="row awesome-project-content">

            <?php
            // show max 6 photos at the start:
            $limit = 5;

               foreach($products as $idx => $singleProduct):
                   $val = $idx +1;
               // break loop:

                    $title = $singleProduct[0];
                    $tag = $singleProduct[1];
                    $href = $singleProduct[2];
                    $category = $singleProduct[3];


                    if(isset($_SESSION['selected']['value']) && $_SESSION['selected']['value'] != "metallic"){
                    // append href with folder of designated value:
                            strval($val);
                            $val = $_SESSION['selected']['value'] . "/" . $val;
                    }

                   $division = "";
                   if(!empty($tag)){
                       $division = "-";
                   }


               ?>

                   <!-- single-awesome-project start -->
                   <div class="col-md-4 col-sm-4 col-xs-12 <?= $category?>">
                       <div class="single-awesome-project">
                           <div class="awesome-img">
                               <a href="#" data-title="Breakfast Recipe - Basik" >
                                   <img src="assets/img/store/new/<?=$val?>.png" class="" alt="" />
                               </a>
                               <div class="add-actions text-center">
                                   <div class="project-dec">
                                       <a class="venobox" data-gall="myGallery"  title="<?= "<b>" . $title . "</b>" . " $division " . $tag  ?>" href="assets/img/store/new/<?=$val?>.png">
                                           <h4><?= $title ?></h4>
                                           <span><?= $tag ?></span>
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
              <?php endforeach; ?>


            </div>
        </div>
    </div><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <div id="pricing" class="pricing-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Product Specificaties</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="pri_table_list active">
                        <span class="saleon">top sale</span>
                        <h3>standaard <br /> <span></span></h3>
                        <ol>
                            <li class="check">Standaard koelfunctie  </li>
                            <li class="check">Beker/Bord/Bestekhouder  </li>
                            <li class="check">Flessenopener (Add-on) </li>
                            <li class="check">Parasolhouder (Add-on) </li>
                            <li class="check">Uitklapbare tafel (Add-on) </li>
                            <li class="check ">Waterbestendigheid  </li>
                            <li class="check cross">Mobiliteitopties  </li>
                            <li class="check cross">Temperatuurmeter/display  </li>
                            <li class="check cross">Powerbank optie </li>
                        </ol>
<!--                        <button>Order now</button>-->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="pri_table_list">
                        <h3>premium <br /> <span></span></h3>
                        <ol>
                            <li class="check">Standaard koelfunctie  </li>
                            <li class="check">Beker/Bord/Bestekhouder  </li>
                            <li class="check">Flessenopener (Add-on) </li>
                            <li class="check">Parasolhouder (Add-on) </li>
                            <li class="check">Uitklapbare tafel (Add-on) </li>
                            <li class="check ">Waterbestendigheid  </li>
                            <li class="check">Mobiliteitopties  </li>
                            <li class="check ">Temperatuurmeter/display  </li>
                            <li class="check ">Powerbank optie </li>
                        </ol>
<!--                        <button>Order now</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Pricing Section -->




    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                    <div class="suscribe-text text-center">
                        <h3>Check out our kickstarter</h3>
                        <a class="sus-btn" href="#">Click here</a>
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
                                    Email: info.multicooler@gmail.com<br>
                                    <span>(Max 1week response time)</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fab fa-facebook"></i>
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
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
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
    </footer>
<!-- End  Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/appear/jquery.appear.js"></script>
<script src="assets/vendor/knob/jquery.knob.js"></script>
<script src="assets/vendor/parallax/parallax.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

<script>
    $('#myfield').bind('change', function () {
        //post
        $("#myform").submit();
    });


</script>

</html>