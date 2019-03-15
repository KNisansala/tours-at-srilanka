<?php
include_once(dirname(__FILE__) . '/class/include.php');
$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$ATTRACTION = new Attraction($id);
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Get a good experience attractionhave an unforgettable journey to the in Sri Lanka.">
        <meta name="keywords" content="Tour At Sri Lanka Attraction,Attraction<?php foreach (Attraction::all() as $Attr) {
    echo "," . $Attr['title'];
} ?> ">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>View Attraction|| Tours-at-srilanka</title>
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

        <section class="single-banner about-banner">
            <div class="page-breadcums">
                <div class="container">
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="attraction.php">Attractions</a></li>
                        <li><?php echo $ATTRACTION->title ?></li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title"><?php echo $ATTRACTION->title ?></h1>
                                <p>Get a good experience have an unforgettable journey to the  in Sri Lanka.</p>
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
                        <div class="entry-single">

                            <div class="entry-single-thumb">

                                <div class="row">

                                    <div class="col-md-12" >
                                        <div class="owl-carousel owl-carousel1" id="atrations">

                                            <?php
                                            $photos = AttractionPhoto::getAttractionPhotosById($ATTRACTION->id);
                                            foreach ($photos as $photo) {
                                                ?>
                                                <img alt="imgservices" class="img-responsive" src="upload/attraction/gallery/thumb/<?php echo $photo['image_name']; ?>">
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-single-content">
                                <h3 class="entry-single-title"><?php echo $ATTRACTION->title ?></h3>

                                <p><?php echo $ATTRACTION->description ?></p>
                            </div>

                        </div>
                    </div><!-- blog-list-wrapper end -->
                    <div class="col-lg-4">
                        <div class="sidebar-area">

                            <div class="widget">
                                <h5 class="widget-title">Other Attractions</h5>
                                <ul class="small-post-list">
                                    <li class="post-item d-flex align-items-center">
                                        <?php
                                        $ATTRACTIONS = Attraction::all();
                                        foreach ($ATTRACTIONS as $key => $attraction) {
                                            if ($key < 8) {
                                                ?>    
                                                <div class="post-thumb">
                                                    <a href="view-attraction.php?id=<?php echo $attraction['id']; ?>"><img src="upload/attraction/<?php echo $attraction['image_name']; ?>" alt=""></a>
                                                </div>
                                                <div class="post-content">
                                                    <h6 class="post-title"> <?php echo $attraction['title']; ?></h6>
                                                    <span class="post-date">
                                                        <a href="view-attraction.php?id=<?php echo $attraction['id']; ?>">
                                                            <?php
                                                            if (strlen($attraction['short_description']) > 50) {
                                                                echo substr($attraction['short_description'], 0, 50) . '...';
                                                            } else {
                                                                echo $attraction['short_description'];
                                                            }
                                                            ?>
                                                        </a>
                                                    </span>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </li>

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
        <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=649&amp;locationId=13147684&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk = true"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    </body>

</html>