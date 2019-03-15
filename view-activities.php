<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ACTIVITY = new Activities($id);
}
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Scuba diving is one of fastest growing sports in the world. Sri Lanka is a paradise for scuba divings lovers. The bio diversity of Sri Lanka will leave you wondering what more our Emerald Island has to offer">
        <meta name="keywords" content="Tour At Sri Lanka activities,activities<?php foreach (Activities::all() as $Activi) {
    echo "," . $Activi['title'];
} ?> ">
        <title>View-Activities || Tours-at-srilanka</title>
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
        <link href="css/on3step-style.css" rel="stylesheet" type="text/css"/>
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
                        <li><a href="activities.php">Activities</a></li>
                        <li><?php echo $ACTIVITY->title ?></li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title"><?php echo $ACTIVITY->title ?></h1>
                                <p>This is our enjoyable activities for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog-grid-section start -->
        <section class="single-blog-section section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="owl-carousel" id="projectsBig">

                            <?php
                            $photos = ActivitiesPhoto::getActivitiesPhotosById($ACTIVITY->id);
                            foreach ($photos as $photo) {
                                ?>
                                <img alt="imgservices" class="img-responsive" src="upload/activity/gallery/<?php echo $photo['image_name']; ?>">
                                <?php
                            }
                            ?>
                        </div>


                        <div class="entry-single">

                            <div class="entry-single-content">
                                <h3 class="entry-single-title">
                                    <?php echo $ACTIVITY->title; ?>
                                </h3>
                                <p>
<?php echo $ACTIVITY->description; ?>
                                </p>
                            </div>
                        </div>
                    </div><!-- blog-list-wrapper end -->
                    <div class="col-lg-4">
                        <div class="sidebar-area">

                            <div class="widget">
                                <h5 class="widget-title">Other Activities</h5>
                                <ul class="small-post-list">
                                    <?php
                                    foreach (Activities::all() as $key => $AllActivities) {
                                        if ($key < 8) {
                                            ?>
                                            <li class="post-item d-flex align-items-center">
                                                <div class="post-thumb">
                                                    <a href="view-activities.php?id=<?php echo $AllActivities['id']; ?>"><img src="upload/activity/<?php echo $AllActivities['image_name']; ?>" alt="post-image"></a>
                                                </div>
                                                <div class="post-content">
                                                    <h6 class="post-title">
                                                        <a href="view-activities.php?id=<?php echo $AllActivities['id']; ?>">    
        <?php echo $AllActivities['title']; ?>
                                                        </a>
                                                    </h6>
                                                    <p> 

                                                        <?php
                                                        if (strlen($AllActivities['short_description']) > 40) {
                                                            echo substr($AllActivities['short_description'], 0, 40) . '...';
                                                        } else {
                                                            echo $AllActivities['short_description'];
                                                        }
                                                        ?>


                                                    </p>
                                                </div>
                                            </li><!-- post-item end -->

                                            <?php
                                        }
                                    }
                                    ?>

                                </ul>
                            </div><!-- widget end -->
                        </div>
                    </div><!-- sidebar-area end -->
                </div>
            </div>
        </section>
        <!-- blog-grid-section end -->
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
        <script src="js/custome.js" type="text/javascript"></script>
        <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=649&amp;locationId=13147684&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk = true"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    </body>

</html>