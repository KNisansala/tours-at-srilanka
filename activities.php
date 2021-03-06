<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Get back to nature with adventure travel in Sri Lanka.We've selected our favourite places for adventure tourism,including the best tours and trips that you can experience on your own holiday.">
        <meta name="keywords" content="Tour at Sri lanka activities,Activities in sri lanka,activities with tour at sri lanka,<?php foreach (Activities::all() as $Activi) {
    echo "," . $Activi['title'];
} ?> ">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Activities || Tours-at-srilanka</title>
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
    </head>

    <body>

        <!-- preloader start -->

        <!-- preloader end -->

        <!--  header-section start  -->
<?php include './header.php'; ?>
        <!--  header-section end  -->

        <!-- banner-section start -->
        <section class="single-banner course-grid-banner">
            <div class="page-breadcums">
                <div class="container">
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Activities</li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title">Activities</h1>
                                <p>  Get back to nature with adventure travel in Sri Lanka.We've selected our favourite places for adventure tourism,including the best tours and trips that you can experience on your own holiday.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- course-grid-section start -->
        <section class="course-grid-section section-bg">
            <div class="container">
                <div class="course-grid-wrapper">

                    <div class="row mt-mb-15 course-grid-block">
                        <?php
                        foreach (Activities::all() as $AllActivities) {
                            ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="course-item">
                                    <div class="course-thumb">
                                        <a href="view-activities.php?id=<?php echo $AllActivities['id']; ?>"><img src="upload/activity/<?php echo $AllActivities['image_name']; ?>" alt="course-thumb"></a>
                                    </div>
                                    <div class="course-content">
                                        <h5 class="course-title"><a href="view-activities.php?id=<?php echo $AllActivities['id']; ?>"><?php echo $AllActivities['title']; ?> </a></h5>
                                        <p> 

                                            <?php
                                            if (strlen($AllActivities['short_description']) > 130) {
                                                echo substr($AllActivities['short_description'], 0, 130) . '...';
                                            } else {
                                                echo $AllActivities['short_description'];
                                            }
                                            ?>

                                        </p>
                                        <a href="view-activities.php?id=<?php echo $AllActivities['id']; ?>" class="simple-btn">Read More<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- course-item end -->
                            <?php
                        }
                        ?>
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
        <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=649&amp;locationId=13147684&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk = true"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

    </body>

</html>