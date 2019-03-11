<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Remember that happiness is a way of travel">
        <meta name="keywords" content="Gallery in tour at sri lanka,tour at sri lanka gallery">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gallery || Tours-at-srilanka</title>
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
        <link href="fancybox-master/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <!-- preloader start -->

        <!-- preloader end -->

        <!--  header-section start  -->
        <?php include './header.php'; ?>
        <!--  header-section end  -->

        <section class="single-banner about-banner">
            <div class="page-breadcums">
                <div class="container">
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title">Photo Gallery</h1>
                                <p class="text-center">Remember that happiness is a way of travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- events-gallery-section start -->
        <section class="events-gallery-section section-padding">
            <div class="container">
                <div class="section-wrapper">

                    <div class="row mt-15 mb-40 justify-content-center">
                        <?php
                        foreach (PhotoAlbum::all() as $Gallery) {
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  ">
                                <figure>
                                    <a class="" href="upload/photo-album/<?php echo $Gallery['image_name']; ?>" class="" data-fancybox="images" >
                                        <figcaption>
                                            <i class="fa fa-search" style="font-size:30px;color:#ffff;"></i>
                                        </figcaption>

                                        <img src="upload/photo-album/thumb/<?php echo $Gallery['image_name']; ?>" >
                                    </a>
                                </figure>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- events-gallery-section end -->

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


        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- bootstrap js link -->
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

        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="fancybox-master/js/jquery.fancybox.min.js" type="text/javascript"></script>
    </body>

</html>