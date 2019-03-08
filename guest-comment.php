<?php
include_once(dirname(__FILE__) . '/class/include.php');

if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="This trip was easily the trip of a lifetime for our family of four, and it will be quite some time before we stop talking about it!!  We have a done a lot of travel with our children alongside us">
        <meta name="keywords" content="Round Tours Sri Lanka Gust Comment,Gust Comment in Round Tour Sri Lanka,Gust Comment">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guest Comment||Tours-at-srilanka</title>
        <!-- Google Fonts Includes -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favi icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/logo2.png" />
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Button Hover animate css -->
        <link rel="stylesheet" href="css/hover-min.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- slick css -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- chosen.min-->
        <link rel="stylesheet" href="css/chosen.min.css">
        <!-- chosen.min-->
        <link rel="stylesheet" href="css/jquery-customselect.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- magnific Css -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- custome css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <link href="guest-comments-form/guest-comment/style.css" rel="stylesheet" type="text/css"/>
        <!--gust-comment-->
        <link href="guest-comments-form/guest-comment/style.css" rel="stylesheet" type="text/css"/>
        <!--sweetAlert css-->
        <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="guest-comments-form/guest-comment/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="css/lightcase.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <style>
            @media only screen and (min-width: 576px) and (max-width: 768px) {.refresh-img {margin: -29px 0px 18px 150px;}}
            @media only screen and (min-width: 768px) and (max-width: 991px) {.refresh-img {margin: -29px 0px 20px 149px;}}
            .section-title-3i{
                margin-top: 0px;
            }
            @media only screen and (max-width: 768px) {
                .header-bottom-area .logo-area {
                    margin-top: -34px;
                    position: absolute;
                }
            }

        </style>
        


    </head>
    <body>
        <!-- Preloader -->
        <!--        <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>	-->
        <!-- header area end here -->
        <?php
        include './header.php';
        ?>
        <!-- header area end here -->

        <!-- blog breadcrumb version one strat here -->
<!--        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms" style="background-image:url('images/bercums/package1.jpg');">
                <div class="container ">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Guest Comment</h2>
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li class="active">Guest Comment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>-->
        <section class="single-banner contact-one-banner">
            <div class="page-breadcums">
                <div class="container">
                    <ul class="page-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Guest Comments</li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title">Guest Comments</h1>
                                <p class="text-center">Take only memories and share your experiences with Tours at Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-70 pb-70 content-0">
            <div class="container ">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

                        <div class="section-title-3i section1">
                            <h2>Add Your Comment</h2>
                        </div>

                        <div class="panel panel-white2 post panel-shadow contact-form-area form-area form-0">
                            <div class="contact-form">
                                <div id="contact">  
                                    <div id="message"></div>
                                    <form class="form" method="post" name="guestcomment"  id="guestcomment">
                                        <div class="form-group">
                                            <input type="text" placeholder="FullName" class="form-control input-validatar" name="txtFullName" id="txtFullName">
                                            <span id="spanFullName"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Country " class="form-control input-validatar" name="txtCountry" id="txtCountry">
                                            <span id="spanCountry"></span>
                                        </div>

                                        <span class="md-form">
                                            <div class="file-field">
                                                <div class="btn  btn-sm float-left commentprofile profileUpload profileUpload1">
                                                    <input type="file" placeholder="Profile Image " class="input-validatar input-validatar1" name="txtprofileimg" id="txtprofileimg">
                                                </div>
                                            </div>
                                        </span>
                                        <div class="form-group">
                                            <textarea name="txtMessage" rows="6" class="form-control input-validatar" placeholder="Comment" id="txtMessage"></textarea>
                                            <span id="spanComments"></span>
                                        </div>


                                        <div class="form-group">
                                            <span class="securitybox">
                                                <input type="text" placeholder="Security Code" class="form-control input-validatar" name="captchacode" id="captchacode">
                                                <span id="capspan"></span>
                                            </span>
                                            <span class="buttoncomment"><?php include("guest-comments-form/guest-comment/captchacode-widget.php"); ?></span>
                                            <span class=""><img id="checking" src="guest-comments-form/guest-comment/img/checking.gif" alt=""/></span>
                                        </div>

                                        <div class="">
                                            <span class="securitybox1">
                                                <input type ="hidden" name="btn-comment" id="btn-comment">
    <!--                                            <button type="submit" id="btnSubmit" name="btnSubmit" class="button primary"><i class="fa fa-send"></i>Post</button>-->
                                                <button type="submit" id="btnSubmit" class="cmn-button con-button">Send Your Comment</button>
                                            </span>
                                        </div>

                                        <div id="dismessage" align="center" class="msg-success"></div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Choose trabble version two start  -->

        <section class="teacher-grid-section teacher-grid-style-three section-padding section-bg">
            <div class="container">
                <div class="course-grid-wrapper">
                    <div class="row mt-mb-15 teacher-grid-block">
                        <div class="col-md-12">
                            <?php
                            foreach (Comments::all() as $gustCommentSec) {
                                ?>
                                <div class="teacher-single d-flex">
                                    <div class="teacher-thumb guest-img">
                                        <img src="upload/comments/<?php echo $gustCommentSec['image_name']; ?>" alt="teacher-image">
                                    </div>
                                    <div class="teacher-content">
                                        <h4 class="teacher-name"><?php echo $gustCommentSec['name']; ?></h4>
                                        <span class="teacher-designation"><?php echo $gustCommentSec['title']; ?></span>
                                        <!--<span class="details">Detail:</span>-->
                                        <p><?php echo $gustCommentSec['comment']; ?></p>

                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div><!-- teacher-single end-->
                    </div>
                </div>
            </div>
        </section

        <!-- footer start here -->
        <?php
        include './footer.php';
        ?>
        <!-- end footer -->
        <div class="scroll-to-top">
            <span class="scroll-icon">
                <i class="fa fa-rocket" aria-hidden="true"></i>
            </span>
        </div>
        <!-- Scroll to top jump button end-->

        <!-- ============================
                JavaScript Files
        ============================= -->
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
        <script src="js/create-guest-comment.js" type="text/javascript"></script>
        <script src="plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    </body>

</html>
