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
    <title><?php echo mk_get_site_title(); ?></title>
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
                        <?php echo mk_get_logo_html(); ?>
                        <!--                        <img src="assets/images/logo.png" alt="logo">-->
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="<?php echo mk_get_site_url(); ?>">
                    <?php echo mk_get_logo_html(); ?>
                    <!--                    <img src="assets/images/logo.png" alt="logo">-->
                </a>

                <?php
                $headerMenus = [];
                $headerMenus[] = array(
                    'title' => 'Home',
                    'link' => mk_get_site_url() . '#',
                );
                $headerMenus[] = array(
                    'title' => 'About Us',
                    'link' => mk_get_site_url() . '#about-us',
                );
                $headerMenus[] = array(
                    'title' => 'Services',
                    'link' => mk_get_site_url() . '#our-services',
                );
                $headerMenus[] = array(
                    'title' => 'Associates',
                    'link' => mk_get_site_url() . '#associates',
                );

                $headerMenus[] = array(
                    'title' => 'Contact Us',
                    'link' => mk_get_site_url() . '#contact-us',
                );
                ?>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <?php
                        foreach ($headerMenus as $menu) {
                            ?>
                            <li class="nav-item">
                                <a href="<?php echo $menu['link'] ?>" class="nav-link">
                                    <?php echo $menu['title']; ?>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>

                    <div class="others-options">
                        <ul class="d-flex justify-content-between align-items-center">
                            <li>
                                <a href="<?php echo mk_get_site_url() ?>#contact-us" class="default-btn">
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
</div>
<!-- End Navbar Area -->