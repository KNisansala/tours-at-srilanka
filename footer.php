<?php ?>
<footer class="footer-section">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6">
                    <div class="widget company-widget">
                        <img src="images/slider/logo-new-00.png" alt="" width="220"/><br><br><br>
                        <!--<a href="#" class="site-logo"><img src="images/slider/logo.jpg" width="275" alt="logo"></a>-->
                        <p>We have more than ten years well experienced Guides and Tour Drivers. Also our best reward ever can be gained is your highest satisfaction with smile. Our first and most important priority is our customers and we are ready to serve high elegant and superb service.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget quick-links-widget">
                        <h5 class="widget-title">Quick Links</h5>
                        <div class="short-links-list">
                            <ul class="widget-links-list">
                                <li><a href="index.php"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="tour-package.php"><i class="fa fa-angle-right"></i>Tour Package</a></li>
                                <li><a href="attraction.php"><i class="fa fa-angle-right"></i>Attrctions</a></li>
                                <li><a href="activities.php"><i class="fa fa-angle-right"></i>Activities</a></li>
                                <li><a href="service.php"><i class="fa fa-angle-right"></i>Services</a></li>
                                <li><a href="gallery.php"><i class="fa fa-angle-right"></i>Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget quick-links-widget">
                        <h5 class="widget-title">Tour Packages</h5>
                        <div class="short-links-list">
                            <ul class="widget-links-list">
                                <?php
                                foreach (TourPackage::all() as $key => $TourPackages) {
                                    if ($key < 6) {
                                        ?>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>
                                                <?php
                                                if (strlen($TourPackages['title']) > 18) {
                                                    echo substr($TourPackages['title'], 0, 18) . '...';
                                                } else {
                                                    echo $TourPackages['title'];
                                                }
                                                ?>
                                            </a></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget hot-links-widget">
                        <h5 class="widget-title">contact Us</h5>
                        <div class="hot-links-list">
                            <ul class="company-address-list">
                                <li><i class="fa fa-envelope"></i><p>info@toursatsrilanka.com</p></li>
                                <li><i class="fa fa-phone"></i><p> 0094 778310500</p></li>
                                <li><i class="flaticon-place"></i><p> 32, Yaddehimulla Rd,Unawatuna.</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-conetnt">
                <p>Copyright © 2019 |  All Right Reserved</p>
            </div>
        </div>
    </div>
</footer>

