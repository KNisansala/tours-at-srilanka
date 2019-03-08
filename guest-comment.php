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
                                    Comment 
                                    <form class="form" method="post" name="guestcomment" id="guestcomment">
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
                                                <div class="btn  btn-sm float-left commentprofile profileUpload">
                                                    <input type="file" placeholder="Profile Image " class="input-validatar" name="txtprofileimg" id="txtprofileimg">
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
                                            <span class=""><img src="guest-comments-form/guest-comment/img/checking.gif" alt=""/></span>
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
                            <!--                        <div class="contact-form-area form-area">
                                                        <h4 class="form-title">Send message</h4>
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
                                                                        <input type="tel" name="txtContact" id="txtContact" placeholder="Phone number">
                                                                        <span id="spanContact"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="frm-group">
                                                                        <input type="text" name="txtSubject" id="txtSubject" placeholder="Subject">
                                                                        <span id="spanSubject"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="frm-group">
                                                                        <textarea name="txtmessage" id="txtmessage" placeholder="Message"></textarea>
                                                                        <span id="spanmessage"></span>
                                                                    </div>
                                                                </div><br>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="captchacode" id="captchacode" placeholder="Security Code">
                                                                        <span id="capspan"></span>
                                                                    </div>
                                                                </div>
                            <?php
//                            include ("./guest-comments-form/guest-comment/captchacode-widget.php");
                            ?>
                                                                <img id="checking"src="guest-comments-form/guest-comment/img/checking.gif" alt=""/>
                                                                <div class="col-md-12">
                                                                    <div class="frm-group">
                                                                        <button type="submit" id="btnSubmit" class="cmn-button con-button">send message</button>
                                                                    </div>
                                                                    <div id="dismessage" align="center" class="msg-success" ></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>-->
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
                                        <!--                  <ul class="teacher-info-list d-flex">
                                                            <li><i class="fa fa-phone"></i>+456 1237 8976</li>
                                                            <li><i class="fa fa-envelope"></i>iskul@example.com</li>
                                                          </ul>-->
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div><!-- teacher-single end-->
                        <!--          <div class="col-md-12">
                                    <div class="teacher-single d-flex">
                                      <div class="teacher-thumb">
                                        <img src="assets/images/teachers/L2.jpg" alt="teacher-image">
                                      </div>
                                      <div class="teacher-content">
                                        <h4 class="teacher-name"><a href="#">Sazat Hossain Arif</a></h4>
                                        <span class="teacher-designation">Computer Science</span>
                                        <span class="details">Detail:</span>
                                        <p>It has survived not only five centuries but also the leap into electronic typesetting. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown the  printer the took a galley  type and scrambled it to make a type specimen book.</p>
                                        <ul class="teacher-info-list d-flex">
                                          <li><i class="fa fa-phone"></i>+456 1237 8976</li>
                                          <li><i class="fa fa-envelope"></i>iskul@example.com</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div> teacher-single end-->
                        <!--          <div class="col-md-12">
                                    <div class="teacher-single d-flex">
                                      <div class="teacher-thumb">
                                        <img src="assets/images/teachers/L3.jpg" alt="teacher-image">
                                      </div>
                                      <div class="teacher-content">
                                        <h4 class="teacher-name"><a href="#">Faria Jahan Anny</a></h4>
                                        <span class="teacher-designation">Computer Science</span>
                                        <span class="details">Detail:</span>
                                        <p>It has survived not only five centuries but also the leap into electronic typesetting. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown the  printer the took a galley  type and scrambled it to make a type specimen book.</p>
                                        <ul class="teacher-info-list d-flex">
                                          <li><i class="fa fa-phone"></i>+456 1237 8976</li>
                                          <li><i class="fa fa-envelope"></i>iskul@example.com</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div> teacher-single end-->
                        <!--          <div class="col-md-12">
                                    <div class="teacher-single d-flex">
                                      <div class="teacher-thumb">
                                        <img src="assets/images/teachers/L4.jpg" alt="teacher-image">
                                      </div>
                                      <div class="teacher-content">
                                        <h4 class="teacher-name"><a href="#">Shifat Shimul Doe</a></h4>
                                        <span class="teacher-designation">Computer Science</span>
                                        <span class="details">Detail:</span>
                                        <p>It has survived not only five centuries but also the leap into electronic typesetting. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown the  printer the took a galley  type and scrambled it to make a type specimen book.</p>
                                        <ul class="teacher-info-list d-flex">
                                          <li><i class="fa fa-phone"></i>+456 1237 8976</li>
                                          <li><i class="fa fa-envelope"></i>iskul@example.com</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div> teacher-single end-->
                    </div>
                </div>
<!--                <nav class="d-pagination" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item previous"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>-->
            </div>
        </section>

        <!--        <div class="container pb-70">
                    <div class="section-title-3i">
                        <h2>All Reviews</h2>
                    </div>
                    <section class="choose-trabble-version-2 ">
                        <div class="ImageBlock ImageBlock--switch ">
                            <div class="container-fluid contmargin">
        
                                <div class="row pt-100 pb-65">
                                    <div class="col-md-10 col-sm-6 ImageBlock--switch-tab ">
        
                                         single -traverls 
        
                                        <div class="container">
                                            <div class="row">
        <?php
        foreach (Comments::all() as $gustCommentSec) {
            ?> 
                                                        <div class="col-sm-11">
                                                            <div class="panel panel-white post panel-shadow">
                                                                <div class="post-heading">
                                                                    <span class="col-lg-1 col-sm-2 col-xs-7">
                                                                        <div class="pull-left image">
                                                                            <img src="upload/comments/<?php echo $gustCommentSec['image_name']; ?>" alt="1" class="img-circle img-circle1">
                                                                        </div>
                                                                    </span>
                                                                    <span class="col-lg-3 col-sm-5 col-xs-5">
                                                                        <div class="pull-left meta">
                                                                            <div class="title h5">
                                                                                <a href="#"><b><?php echo $gustCommentSec['name']; ?></b></a>
            
                                                                            </div>
                                                                            <span><?php echo $gustCommentSec['title']; ?></span>
                                                                        </div>
                                                                    </span>
                                                                </div> 
            
                                                                <div class="post-description"> 
                                                                    <p><?php echo $gustCommentSec['comment']; ?>
                                                                        </p>
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
                            </div>
        
        
                             right side image 
                        </div>
                    </section> Choose trabble version two end 
                </div>-->

        <!-- footer start here -->
        <?php
        include './footer.php';
        ?>
        <!-- end footer -->

        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div> <!-- Scroll to top jump button end-->

        <!-- ============================
                JavaScript Files
        ============================= -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-3.2.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- counter js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- waypoints js -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Image loaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- chossen js -->
        <script src="js/chosen.jquery.min.js"></script>
        <!-- Jquery plugin -->
        <script src="js/plugins.js"></script>  
        <script src="js/colors.js"></script>
        <!-- main js -->
        <script src="js/custom.js"></script>
        <!--sweetalert js-->
        <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <!--gust-comment-->
        <script src="js/create-guest-comment.js" type="text/javascript"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
        <script src="js/main.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="rs-plugin/js/custom.js" type="text/javascript"></script>
        <script src="rs-plugin/js/on3step.js" type="text/javascript"></script>
        <script src="js/slider.js" type="text/javascript"></script>
        <script src="guest-comments-form/guest-comment/scripts.js" type="text/javascript"></script>
    </body>

</html>
