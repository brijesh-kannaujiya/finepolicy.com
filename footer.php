<!-- Start Footer Area -->
<div class="footer-area bg-color-f3f9f8 pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-footer-widget">
                    <a href="<?php echo mk_get_site_url() ?>#">
                        <?php echo mk_get_logo_html(); ?>
                        <!--                        <img src="assets/images/logo.png" alt="Image">-->
                    </a>

                    <ul class="contact-info">
                        <li>
                            <span>Location:</span>
                            <?php echo mk_get_site_address(); ?>
                        </li>
                        <li>
                            <span>Contact:</span>
                            <a href="tel:<?php echo mk_get_admin_mobile(); ?>"><?php echo mk_get_admin_mobile(); ?></a>
                        </li>
                        <!--                        <li>-->
                        <!--                            <span>Time:</span>-->
                        <!--                            (9am - 5pm EST, Monday - Friday)-->
                        <!--                        </li>-->
                        <li>
                            <span>Email:</span>
                            <a href="mailto:<?php echo mk_get_admin_mail() ?>"><span
                                        class=""><?php echo mk_get_admin_mail() ?></span></a>
                        </li>
                    </ul>

                    <!-- <ul class="social-link">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="single-footer-widget">
                            <h3>Company</h3>

                            <ul class="use-link">
                                <li>
                                    <a href="<?php echo mk_get_site_url() ?>#associates">Case Studies</a>
                                </li>
                                <li>
                                    <a href="<?php echo mk_get_site_url() ?>#our-services">Services</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4">
                        <div class="single-footer-widget">
                            <h3>Explore</h3>

                            <ul class="use-link">
                                <li>
                                    <a href="<?php echo mk_get_site_url() ?>#about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo mk_get_site_url() ?>#contact-us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4">
                        <div class="single-footer-widget">
                            <h3>Insurance</h3>

                            <ul class="use-link">
                                <?php
                                $services = mk_get_our_services();
                                foreach ($services as $service) {
                                    ?>
                                    <li>
                                        <a href="<?php echo mk_get_site_url() ?>#our-services"><?php echo $service['title']; ?></a>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copy-right-area bg-color-f3f9f8">
    <div class="container">
        <div class="copy-right-content">
            <p> &#169; <?php echo mk_get_site_name() ?> is crafted with <span style="color: #ff0000;">&#10084;</span>
                and maintained by <a href="https://www.webwila.com" target="_blank">WebWila</a></p>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<!-- Links of JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/meanmenu.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/carousel-thumbs.min.js"></script>
<script src="assets/js/aos.min.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/tween-max.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/custom.js"></script>
<!--https://templates.envytheme.com/incep/default/index-3.html-->
</body>
</html>