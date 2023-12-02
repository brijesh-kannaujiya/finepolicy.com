<?php include_once 'header.php'; ?>
    <!-- Start Banner Area -->
    <div class="banner-area style-three">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="banner-img-4">
                        <img src="assets/images/banner/banner-img-4.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="banner-content style-three">
                        <span class="top-title">BETTER INSURANCE BEGINS</span>
                        <h1>We Ensure Best Insurance Services For Our Clients</h1>

                        <div class="banner-btn">
                            <!--                            <a href="-->
                            <?php //echo mk_get_site_url()?><!--#contact-us" class="default-btn">-->
                            <!--                                <i class="ri-arrow-right-s-line"></i>-->
                            <!--                                Get Started-->
                            <!--                            </a>-->
                            <a href="<?php echo mk_get_site_url() ?>#contact-us" class="default-btn active">
                                <i class="ri-send-plane-fill"></i>
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start About Area -->
    <div class="about-area bg-color-f8f8f8 pt-100 pb-70" id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content mr-15">
                        <span class="top-title">ABOUT <?php echo mk_get_site_name() ?></span>
                        <h2>Life Insurance That Creates Weathers For Everyone</h2>
                        <ul>
                            <li>
                                <i class="flaticon-insurance-3"></i>
                                <h3>Trusted By Thousand</h3>
                                <p>Join thousands who trust us. Exceptional service, customizable coverage, competitive pricing. Choose a trusted partner for peace of mind.</p>
                            </li>
                            <li>
                                <i class="flaticon-insurance-4"></i>
                                <h3>Set For Life</h3>
                                <p>Secure your future today. Get Set for Life with our comprehensive insurance coverage and personalized options. </p>
                            </li>
                            <li>
                                <i class="flaticon-life-insurance"></i>
                                <h3>Protective Insurance</h3>
                                <p>Protect what matters most. Our insurance policies provide reliable protection for your assets, property, and loved ones. Choose protective insurance for peace of mind.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-img ml-15">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6">
                                <div class="about-1">
                                    <img src="assets/images/about/about-1.jpg" alt="Image">
                                </div>
                                <div class="about-2 mb-0">
                                    <img src="assets/images/about/about-2.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="about-3 about-extra">
                                    <img src="assets/images/about/about-3.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Services Area -->
    <div class="services-area bg-color-f8f8f8 pb-100" id="our-services">
        <div class="container">
            <div class="section-title">
                <span class="top-title">INSURANCE SERVICES</span>
                <h2>Take The Worry Out Of Life With Insurance Protection</h2>
            </div>

            <div class="row">

                <?php
                $services = mk_get_our_services();
                foreach ($services as $service) {
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-services-item-card d-flex justify-content-start align-items-center">
                            <div class="icon">
                                <?php
                                if (isset($service['is_image_icon']) && $service['is_image_icon']) {
                                    ?>
                                    <i class="img-icon"><img src="<?php echo $service['icon'] ?>"/></i>
                                    <?php
                                } else {
                                    ?>
                                    <i class="<?php echo $service['icon'] ?>"></i>
                                    <?php
                                }
                                ?>

                            </div>
                            <div>
                                <h3>
                                    <a>
                                        <?php echo $service['title'] ?>
                                    </a>
                                </h3>
                                <p>
                                    <?php echo $service['desc'] ?>
                                </p>
                                <!--                                <a href="services-details.html" class="read-more">-->
                                <!--                                    <i class="ri-arrow-right-s-line"></i>-->
                                <!--                                    Explore-->
                                <!--                                </a>-->
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>


                <!--                <div class="col-12 text-center">-->
                <!--                    <a href="services.html" class="default-btn">-->
                <!--                        <i class="ri-arrow-right-s-line"></i>-->
                <!--                        View All-->
                <!--                    </a>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
    <!-- End Services Area -->


    <!-- Start Partner Area -->
    <div class="partner-area ptb-100" id="associates">
        <div class="container">
            <span class="partner-top-title">OUR PARTNER LOGO</span>
            <?php
            $partnerLogos = array();
            $partnerLogos[] = array(
                'title' => 'bajajallianz',
                'img' => 'bajajallianz.webp'
            );
            $partnerLogos[] = array(
                'title' => 'futuregenerali',
                'img' => 'futuregenerali.png'
            );
            $partnerLogos[] = array(
                'title' => 'hdfcergo',
                'img' => 'hdfcergo.png'
            );
            $partnerLogos[] = array(
                'title' => 'icicilombard',
                'img' => 'icicilombard.png'
            );
            $partnerLogos[] = array(
                'title' => 'licindia',
                'img' => 'licindia.png'
            );
            $partnerLogos[] = array(
                'title' => 'maxbupa',
                'img' => 'maxbupa.png'
            );
            $partnerLogos[] = array(
                'title' => 'maxlifeinsurance',
                'img' => 'maxlifeinsurance.svg'
            );
            $partnerLogos[] = array(
                'title' => 'orientalinsurance',
                'img' => 'orientalinsurance.png'
            );
            $partnerLogos[] = array(
                'title' => 'reliancegeneral',
                'img' => 'reliancegeneral.png'
            );
            $partnerLogos[] = array(
                'title' => 'religare',
                'img' => 'religare.jpeg'
            );
            $partnerLogos[] = array(
                'title' => 'starhealth',
                'img' => 'starhealth.png'
            );
            $partnerLogos[] = array(
                'title' => 'tataaig',
                'img' => 'tataaig.png'
            );
            ?>
            <div class="partner-slide owl-carousel owl-theme">
                <?php
                foreach ($partnerLogos as $logo) {
                    ?>
                    <div class="partner-item">
                        <img src="<?php echo mk_get_site_url().'assets/images/partners/'.$logo['img'] ?>" alt="<?php echo $logo['title']; ?>Image">
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!-- End Partner Area -->


    <!-- Start Our Quality Area -->
    <div class="quality-area bg-color-497774 ptb-100">
        <div class="container">
            <div class="quality-content">
                <span class="top-title">READY TO GET STARTED</span>
                <h2>Get control of all your insurance needs anywhere, anytime</h2>

                <div class="quality-btn">
                    <a href="<?php echo mk_get_site_url() ?>#contact-us" class="default-btn">
                        Get Started
                    </a>
                    <!--                    <a href="contact-us.html" class="default-btn active">-->
                    <!--                        Contact Us-->
                    <!--                    </a>-->
                </div>

                <img src="assets/images/subscribe-shape-2.png" alt="Image" class="shape shape-1" data-speed="0.04"
                     data-revert="true">
                <img src="assets/images/subscribe-shape-3.png" alt="Image" class="shape shape-2" data-speed="0.04"
                     data-revert="true">
            </div>
        </div>
    </div>
    <!-- End Our Quality Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100" id="contact-us">
        <div class="container">
            <div class="section-title">
                <span class="top-title">GET IN TOUCH</span>
                <h2>Contact Us</h2>
            </div>

            <div class="contact-form">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone No*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message*"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

<!--                        <div class="col-12">-->
<!--                            <div class="form-check">-->
<!--                                <div class="form-group">-->
<!--                                    <div class="form-check">-->
<!--                                        <input-->
<!--                                                name="gridCheck"-->
<!--                                                value="I agree to the terms and privacy policy."-->
<!--                                                class="form-check-input"-->
<!--                                                type="checkbox"-->
<!--                                                id="gridCheck"-->
<!--                                                required-->
<!--                                        >-->
<!---->
<!--                                        <label class="form-check-label" for="gridCheck">-->
<!--                                            I agree to the <a href="terms-conditions.html">Terms & conditions</a>-->
<!--                                        </label>-->
<!--                                        <div class="help-block with-errors gridCheck-error"></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="col-lg-12 text-center">
                            <button type="submit" class="default-btn">
                                <i class="ri-arrow-right-s-line"></i>
                                Send Message
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

<?php include_once 'footer.php'; ?>