<?php
<?php include_once 'config.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Title -->
    <title><?php ?></title>
</head>
<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="content">
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Navbar Area -->
<div class="navbar-area style-two">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="<?php echo mk_get_site_url(); ?>">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle active">
                                Home
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Home One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">Home Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link active">Home Three</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about-us.html" class="nav-link">About Us</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Services
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-details.html" class="nav-link">Services Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        User
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="log-in.html" class="nav-link">Log In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Case
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="case-studies.html" class="nav-link">Case Studies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="case-studies-details.html" class="nav-link">Case Studies
                                                Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Others
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">404 Page</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="pricing-plan.html" class="nav-link">Pricing Plan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="our-review.html" class="nav-link">Our Review</a>
                                </li>
                                <li class="nav-item">
                                    <a href="our-team.html" class="nav-link">Our Team</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Insurances
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="business-insurance.html" class="nav-link">Business Insurance</a>
                                </li>
                                <li class="nav-item">
                                    <a href="health-insurance.html" class="nav-link">Health Insurance</a>
                                </li>
                                <li class="nav-item">
                                    <a href="life-insurance.html" class="nav-link">Life Insurance</a>
                                </li>
                                <li class="nav-item">
                                    <a href="car-insurance.html" class="nav-link">Car Insurance</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Blog
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact-us.html" class="nav-link">Contact Us</a>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul class="d-flex justify-content-between align-items-center">
                            <li>
                                <a href="pricing-plan.html" class="default-btn">
                                    <i class="ri-edit-line"></i>
                                    get a quote
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <ul>
                            <li>
                                <form class="search-form">
                                    <input class="form-control" type="search" placeholder="Search here...">
                                    <button class="search-btn" type="submit">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </li>
                            <li>
                                <a href="tel:+(111)-65-458-856" class="call-us">
                                    <i class="ri-phone-line"></i>
                                    +(111) 65 458 856
                                </a>
                            </li>
                            <li>
                                <a href="pricing-plan.html" class="default-btn">
                                    <i class="ri-edit-line"></i>
                                    get a quote
                                </a>
                            </li>
                            <li>
                                <button class="menu-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                                    <i class="flaticon-right-menu-bars"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->