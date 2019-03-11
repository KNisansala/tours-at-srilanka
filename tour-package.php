<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <meta name="description" content="Tour at Sri Lanka is the best Way for the gusts who looking extraordinary travel experience with perfectly match their desires">
        <meta name="keywords" content="Tour At Sri Lanka Tour Packages, Tour Packages<?php foreach (TourPackage::all() as $AllTour) { echo "," . $AllTour['title']; } ?> ">
        <title>Tour Package || Tours-at-srilanka</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="images/logo/logo.png" type="image/x-icon">
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
        <section class="single-banner course-grid-two-banner">
            <div class="page-breadcums">
                <div class="container">
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Tour Packages</li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title">Tour Packages</h1>
                                <p class="text-center">Tour At Sri Lanka packages make your dream holiday come true. we offer beautiful and remarkable places and more to pamper tourists from all over the world. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- course-grid-section start -->
        <section class="course-grid-section section-bg tptpad">
            <div class="container">
                <div class="course-grid-wrapper">
                    <div class="row mt-mb-15 course-grid-block">
                        <?php
                        foreach (TourPackage::all() as $TourPackages) {
                            ?>
                            <div class="col-lg-4 col-sm-6">

                                <div class="course-item">
                                    <div class="course-thumb">
                                        <a href="#"><img src="upload/tour-package/<?php echo $TourPackages['image_name']; ?>"></a>
                                    </div>
                                    <div class="course-content">
                                        <h5 class="course-title"><a class="rfons" href="view-tour-packages.php?id=<?php echo $TourPackages['id']; ?>">

                                                <?php
                                                if (strlen($TourPackages['title']) > 25) {
                                                    echo substr($TourPackages['title'], 0, 25) . '...';
                                                } else {
                                                    echo $TourPackages['title'];
                                                }
                                                ?>



                                            </a>
                                        </h5>
                                        <p>

                                            <?php
                                            if (strlen($TourPackages['short_description']) > 105) {
                                                echo substr($TourPackages['short_description'], 0, 105) . '...';
                                            } else {
                                                echo $TourPackages['short_description'];
                                            }
                                            ?>

                                        </p>

                                    </div>
                                    <div class="course-item-bottom">
                                        <!--                                        <ul class="course-review-list d-flex">
                                                                                    <li>
                                                                                        <span class="course-star">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                        </span>
                                                                                        <span class="course-rev-average">4.5</span>
                                                                                        <span class="course-rev-total">(779)</span>
                                                                                    </li>
                                                                                </ul>-->
                                        <a href="view-tour-packages.php?id=<?php echo $TourPackages['id']; ?>" class="simple-btn">Tour details<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <!-- course-item end -->

                    </div>
                </div>
            </div>
        </section>
        <!-- course-grid-section end -->

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