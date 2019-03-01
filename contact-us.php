<?php ?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cantact us || Tours-at-srilanka</title>
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
                        <li>contact us one</li>
                    </ul>
                </div>
            </div>
            <div class="banner-content-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 class="banner-title">Contact Informations</h1>
                                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's<br/> standard dummy text ever since the 1500s.</p>
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
                        <div class="company-contact-info-area">
                            <div class="company-info-item d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Phone Number</span>
                                    <p>+0123 4567 9876</p>
                                </div>
                            </div><!-- company-info-item end -->
                            <div class="company-info-item d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Email Address</span>
                                    <p>example@gmail.com</p>
                                </div>
                            </div><!-- company-info-item end -->
                            <div class="company-info-item d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Fax address</span>
                                    <p>+0123 4567 9876</p>
                                </div>
                            </div><!-- company-info-item end -->
                            <div class="company-info-item d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="content">
                                    <span class="title">location</span>
                                    <p>123 Business Avenue, NYC</p>
                                </div>
                            </div><!-- company-info-item end -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-area form-area">
                            <h4 class="form-title">Send message</h4>
                            <p>There are alteration in some many variations of passages of lorem Ipsum availle suffer alteration in some form by injected.</p>
                            <form class="contact-form form-style-one">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="text" name="name" id="txtFullName" placeholder="Your name">
                                            <span id="spanFullName"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="email" name="email" id="txtEmail" placeholder="Email address">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="tel" name="phone" id="txtContact" placeholder="Phone number">
                                            <span id="spanContact"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="frm-group">
                                            <input type="text" name="subject" id="txtSubject" placeholder="Subject">
                                            <span id="spanSubject"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="frm-group">
                                            <textarea name="message" id="txtmessage" placeholder="Message"></textarea>
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
                                    include ("./contact-us-form/captchacode-widget.php");
                                    ?>
                                    <img id="checking"src="contact-us-form/img/checking.gif" alt=""/>
                                    <div class="col-md-12">
                                        <div class="frm-group">
                                            <button type="submit" id="btnSubmit" class="cmn-button">send message</button>
                                        </div>
                                        <div id="dismessage" align="center" class="msg-success" ></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

        <!-- event-location-section start -->
        <section class="event-location-section section-padding">
            <div class="container">
                <div class="section-header text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="section-title">Find Us on Google Maps</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="section-wrapper">
                    <div class="event-map">
                        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.280674706201!2d80.48713051427343!3d6.357704595399327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3e15337214f73%3A0x2a183b31df3e363a!2sSinharaja+Forest+Gate!5e0!3m2!1sen!2slk!4v1551182024042" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
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
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="contact-us-form/scripts.js" type="text/javascript"></script>
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