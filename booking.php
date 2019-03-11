<?php
include_once(dirname(__FILE__) . '/class/include.php');

$tour = '';
if (isset($_GET['id'])) {
    $tour = $_GET['id'];
}

$TOUR = new TourPackage($tour);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Thank you for contacting us. We will respond to your inquiry as soon as we can.">
        <meta name="keywords" content="booking in sri lanka,Booking with tour at sri lanka">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Booking || Tours-at-srilanka</title>
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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="contact-us-form/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <!--  header-section start  -->
        <?php include './header.php'; ?>
        <!--  header-section end  -->

        <section class="single-banner contact-one-banner">
            <div class="page-breadcums">
                <div class="container">
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="tour-package.php">Tour Packages</a></li>
                        <li>Inquiry</li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title">Inquiry</h1>
                                <p class="text-center">Thank you for contacting us. We will respond to your inquiry as soon as we can.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- contact-section start -->
        <section class="contact-section section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-12">
                        <div class="contact-form-area form-area">
                            <h4 class="form-title">Inquiry Now</h4>

                            <div class="contact-form form-style-one">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="text" name="txtFullName" id="txtFullName" placeholder="Your name">
                                            <span id="spanFullName"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="email" name="txtEmail" id="txtEmail" placeholder="Email address">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <select class="form-control" name="txtPackage" id="txtPackage">
                                                <option value='0'>Select the Package</option>
                                                <?php
                                                foreach (TourPackage::all() as $tour_package) {
                                                    ?>
                                                    <option  value='<?php echo $tour_package['title']; ?>' <?php
                                                    if ($tour_package['id'] === $tour) {
                                                        echo 'selected="TRUE"';
                                                    };
                                                    ?>><?php echo $tour_package['title']; ?></option>
                                                         <?php }
                                                         ?>
                                            </select>
                                            <span id="spanPackage"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="number" name="txtNoOfTravelers" id="txtNoOfTravelers" min="0" placeholder="No of Travelers">
                                            <span id="spanNoOfTravelers"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="number" name="txtNoOfNight" id="txtNoOfNight" min="0" placeholder="No of Night">
                                            <span id="spanNoOfNight"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="text" name="txtStartOn" id="txtStartOn" placeholder="Starting On">
                                            <span id="spanStartOn"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="number" name="txtNoOfRooms" id="txtNoOfRooms" min="0" placeholder=" No of Rooms Required">
                                            <span id="spanNoOfRooms"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="text" name="txtAccommodation" id="txtAccommodation"  placeholder=" Type of Accommodation & Details of the Accommodation">
                                            <span id="spanAccommodation"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="frm-group">
                                            <textarea name="txtDetails" id="txtDetails" placeholder="Details of Requirements & Areas of Interest"></textarea>
                                            <span id="spantDetails"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="captchacode" id="captchacode" placeholder="Security Code">
                                            <span id="capspan"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 booing-Capcha">
                                        <?php
                                        include ("./contact-us-form/captchacode-widget.php");
                                        ?>
                                    </div>
                                    <img id="checking"src="contact-us-form/img/checking.gif" alt=""/>
                                    <div class="col-md-12">
                                        <div class="frm-group">
                                            <button type="submit" id="btnSubmit" class="cmn-button con-button">send message</button>
                                        </div>
                                        <div id="dismessage" align="center" class="msg-success" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

        <?php include './footer.php'; ?>
        <!-- footer-section end -->

        <!-- scroll-to-top start -->
        <div class="scroll-to-top">
            <span class="scroll-icon">
                <i class="fa fa-rocket" aria-hidden="true"></i>
            </span>
        </div>
        <!-- scroll-to-top end -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
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
        <script src="booking-form/scripts.js" type="text/javascript"></script>

        <script>
            $(function () {
                $("#txtStartOn").datepicker();
            });
        </script>

    </body>

</html>