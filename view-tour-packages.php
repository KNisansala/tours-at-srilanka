<?php ?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us || Tours-at-srilanka</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

        <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/flaticon.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/lightcase.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css-1/fullwidth.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" href="css-1/rev-settings.css" type="text/css">
        <!--<link href="fontawesome/css/all.css" rel="stylesheet" type="text/css"/>-->
        <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <!-- preloader start -->

        <!-- preloader end -->

        <!--  header-section start  -->
        <?php include './header.php'; ?>
        <!--  header-section end  -->

        <!-- banner-section start -->
        <section class="single-banner course-grid-two-banner">
            <div class="page-breadcums">
                <div class="container">
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li>View Tour Package</li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title">view Tour Package</h1>
                                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's<br/> standard dummy text ever since the 1500s.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <section>
            <div class="col-md-8 col-sm-12 col-xs-12 back">
                <?php
//                        foreach ($tour_dates as $tour_date) {
//                            dd($tour_date['title']);
                ?>

                <div class="row">

                    <div class="col-md-12 " data-animation="fadeInUp" data-time="300">
                        <h2 class="big-heading">
                            Day <span class="daySty"> 
                                <?php // echo $tour_date['title']; ?>
                            </span>
                        </h2>
                        <span class ="hearderline"></span>
                        <p>

                            <?php // echo $tour_date['description']; ?>
                        </p>
                    </div>
                    <div class="col-md-12 col-margin">
                        <div class="sideimg">
                            <?php
//                                        $photos = TourDatePhoto::getTourDatePhotosById($tour_date['id']);
//                                        foreach ($photos as $key => $photo) {
//                                            if ($key < 4) {
                            ?>


                            <div class="col-md-3 col-sm-3 col-xs-12  ">
                                <figure>
                                    <a class="" href="upload/tour-package/date/gallery/<?php echo $photo['image_name']; ?>" class="" data-fancybox="images" >
                                        <figcaption>
                                            <i class="fa fa-search" style="font-size:30px;color:#ffff;"></i>
                                        </figcaption>

                                        <img src="upload/tour-package/date/gallery/thumb/<?php echo $photo['image_name']; ?>" alt=""/>
                                    </a>
                                </figure>
                            </div>
                            <?php
//                                            }
//                                        }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
//                        }
                ?>
                <div class="col-md-12 header-top-right text-center booknow">
                    <div class="book-tab">
                        <div class="book-btn1 booknow ">
                            <a href="booking.php?tour=<?php // echo $TOUR->id;   ?>">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer-section start -->
        <?php include './footer.php'; ?>
        <!-- footer-section end -->

        <!-- scroll-to-top start -->
        <div class="scroll-to-top">
            <span class="scroll-icon">
                <i class="fa fa-rocket" aria-hidden="true"></i>
            </span>
        </div>
        <!-- scroll-to-top end -->

        <!-- jquery js link -->
        <script src="rs-plugin/js/pluginson3step.js" type="text/javascript"></script>
        <!--<script src="js/jquery-3.3.1.min.js"></script>-->
        <!-- bootstrap js link -->
        <script src="rs-plugin/js/plugin-set.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- owl carousel js link -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- lightcase js link -->
        <script src="js/lightcase.js"></script>
        <!-- waypoints js link -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- countup js link -->
        <script src="js/jquery.countup.min.js"></script>
        <!-- circle-progress js link -->
        <script src="js/circle-progress.min.js"></script>
        <!-- countdown js link -->
        <script src="js/jquery.countdown.js"></script>
        <!-- goolg-map-activate js link -->
        <script src="js/goolg-map-activate.js"></script>
        <!-- main js link -->
        <script src="js/main.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="rs-plugin/js/custom.js" type="text/javascript"></script>
        <script src="rs-plugin/js/on3step.js" type="text/javascript"></script>

    </body>

</html>