<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Home Page | Tours-at-srilanka</title>
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
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <!-- preloader start -->

        <!-- preloader end -->

        <!--  header-section start  -->
        <?php include './header.php'; ?>
        <!--  header-section end  -->

        <!-- banner-section start -->
        <?php include './slider.php'; ?>
        <!-- banner-section end -->
        <section>
            <div class="container1 index-box-4-container">
                <ul class="masonry row clearfix destination-gallery">
                    <li class="grid-item col-md-3 col-sm-6 index-box-4">

                        <div class="destination-thumb-3">

                            <figure>
                                <img src="images/slider/taxi.jpg" class="image1 "alt="">

                                <div class="destination-title">
                                    <h3 class="title"><a href="#" class="title-1">Services</a></h3>
                                </div>
                            </figure>
                            <div class="text absolute middle1">

                                <p>We are providing special services to help arrange your holiday, arrange accommodation and airport transport to suit the holiday budget.</p>

                                <a href="#" class="df-button gray-bg">Read More</a>
                            </div>

                        </div>

                    </li>
                    <li class="grid-item col-md-3 col-sm-6 index-box-4">

                        <div class="destination-thumb-3">

                            <figure>
                                <img src="images/slider/galle.jpg" alt="">
                                <div class="destination-title">
                                    <h3 class="title"><a href="#"class="title-1" >One Day Tours</a></h3>
                                </div>
                            </figure>
                            <div class="text absolute middle1">
                                <p>When you have already landed to Sri Lanka a little ago, and you are on your plan, but you need to have one-day excursion for a selected site, we offer some of destinations to be pick a one by you.</p> 
                                <a href="#" class="df-button gray-bg">Read More</a>
                            </div>

                        </div>

                    </li>
                    <li class="grid-item col-md-3 col-sm-6 index-box-4">

                        <div class="destination-thumb-3">

                            <figure>
                                <img src="images/slider/sigiriya.jpg" alt="">
                                <div class="destination-title">
                                    <h3 class="title"><a href="#" class="title-1">Round Tours</a></h3>
                                </div>
                            </figure>
                            <div class="text absolute middle1">
                                <p>When you are planning to have next visit to Sri Lanka, we offer some packages to you. Family Tour, Honeymoon Tour, Half on the Beach tour or Mini tour. Just select a one and let us know, then we arrange your tour.</p> 
                                <a href="#" class="df-button gray-bg">Read More</a>
                            </div>

                        </div>

                    </li>
                    <li class="grid-item col-md-3 col-sm-6 index-box-4">

                        <div class="destination-thumb-3">

                            <figure>
                                <img src="images/slider/airport.jpg" alt="">
                                <div class="destination-title">
                                    <h3 class="title"><a href="#" class="title-1">Airport Transfer</a></h3>
                                </div>
                            </figure>
                            <div class="text absolute middle1">
                                <p>We are gifted to make special tour offers to our clients because maximum value from your holiday budget. We give on these benefits to our clients, so that everyone enjoying a holiday in Sri Lanka.</p> 
                                <a href="#" class="df-button gray-bg">Read More</a>
                            </div>

                        </div>

                    </li>

                </ul>
                <!--Masonry Grid End-->
            </div>

        </section>
        <!-- info-section end -->

        <!-- about-section start -->
        <section class="about-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="section-title">welcome</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of the modern.</p>
                            <p>And scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                            <a href="#" class="cmn-button">learn more</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-thumb back_img">
                            <img src="images/banner/welcome.jpg" alt="about-image">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="course-section section-padding">
            <div class="parallax-img container-fluid-img">
                <div class="container ">

                    <div class="section-header section-header1 text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="section-title colorl">tour packages</h2>
                                <p class="colorl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="section-wrapper">
                            <div class="row mt-mb-15 owl-carousel owl-carousel2  owl-theme" >
                                <?php
                                $TOUR_PACKAGE = TourPackage::all();
                                foreach ($TOUR_PACKAGE as $key => $info) {
                                    if ($key < 6) {
                                   ?>
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="course-item">
                                            <div class="course-thumb">
                                                <a href="tour-package.php"><img src="upload/tour-package/<?php echo $info ['image_name']; ?>" alt=""></a>
                                            </div>
                                            <div class="course-content tour-package-content">
                                                <h5 class="course-title tour-1">
                                                    <a href="tour-package.php?id=<?php echo $info['id']; ?>"><?php echo $info['title']; ?></a>
                                                </h5>

                                                <p>
                                                    <?php
                                                    if (strlen($info['short_description']) > 100) {
                                                        echo substr($info['short_description'], 0, 100) . '...';
                                                    } else {
                                                        echo $info['short_description'];
                                                    }
                                                    ?>
                                                </p>

                                                <a href="#" class="cmn-button btn-position">learn more</a>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                } 
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- subjects-section end -->
        <!-- achievement-section start -->

        <section class="coming-events-section section-padding">

            <div class="container">
                <div class="section-header text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="section-title">Activities</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="section-wrapper">
                    <div class="row mt-mb-10">
                        <?php
                        $ACTIVITY = Activities::all();
                        foreach ($ACTIVITY as $key => $info) {
                            if ($key < 6) {
                                ?>
                                <div class="col-lg-6">
                                    <div class="event-item item-style-three d-flex align-items-center">
                                        <div class="event-left">
                                            <div class="event-thumb activities">
                                                <img src="upload/activity/<?php echo $info['image_name']; ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h4 class="event-title"><?php echo $info['title']; ?></h4>
                                            <p>
                                                <?php
                                                if (strlen($info['short_description']) > 150) {
                                                    echo substr($info['short_description'], 0, 150) . '...';
                                                } else {
                                                    echo $info['short_description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- achievement-section end -->

        <!-- coming-events-section start -->


        <section class="teachers-section section-padding top">
            <div class="parallax-img-destination container-fluid-img-destination"><div class="container">
                    <div class="section-header section-header1 text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="section-title colorl">Attraction</h2>
                                <p class="colorl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-wrapper">
                        <div class="row mt-mb-15   owl-carousel owl-carousel2  owl-theme" >
                            <?php
                            $ATTRACTION = Attraction::all();
                            foreach ($ATTRACTION as $info) {
                                ?>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="teacher-single text-center">
                                        <div class="teacher-thumb">
                                            <!--<img src="images/banner/sigiriya-4.jpg" alt="teacher-image">-->
                                            <img src="upload/attraction/<?php echo $info['image_name']; ?>" alt="">
                                        </div>
                                        <div class="teacher-content">
                                            <!--<h4 class="teacher-name"><a href="#">Sigiriya</a></h4>-->
                                            <h4 class="teacher-name"><a href="attraction.php?id=<?php echo $info['id']; ?>"><?php echo $info['title']; ?></a></h4>
                                            <a href="#" class="cmn-button destination-btn">learn more</a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- coming-events-section end -->
        <section class="testimonial-section section-padding  bot">
            <div class="container">
                <div class="section-header text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="section-title">customer testimonial</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="section-wrapper">
                    <div class="owl-carousel1 owl-carousel testmonial-slider">
                        <?php
                        $COMMENT = Comments::all();
                        foreach ($COMMENT as $info) {
                            ?>
                            <div class="testimonial-item style-two comment-box">
                                <div class="testimonial-head d-flex align-items-center">
                                    <div class="thumb"><img src="upload/comments/<?php echo $info['image_name']; ?>" alt=""></div>
                                    <div class="client-details">
                                        <h4 class="name"><?php echo $info['name']; ?></h4>
                                        <span class="designation"><?php echo $info['title']; ?></span>
                                    </div>
                                </div>
                                <div class="testimonial-conetnt">
                                    <p><?php echo $info['comment']; ?></p>
                                </div>
                            </div><!-- testimonial-item end -->

                            <?php
                        }
                        ?>
                    </div>
                </div><!-- section-wrapper end -->
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
        <script src="js/slider.js" type="text/javascript"></script>
    </body>

</html>