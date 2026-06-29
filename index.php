<!doctype html>
<html class="no-js" lang="zxx">
<?php include('admin/connection.php') ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Health & Fitness</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- ? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <?php include("header.php"); ?>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">with fitness club</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Build Perfect body Shape for good and Healthy life.</h1>
                                    <a href="form.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">became a member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">with fitness club</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Build Perfect body Shape for good and Healthy life.</h1>
                                    <a href="form.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">became a member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <section class="about-area section-padding30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3 mb-35">
                                <span>ABOUT oUR GYM</span>
                                <h2>Safe Body building proper Solutions That Saves our Valuable Time!</h2>
                            </div>
                            <p class="pera-top">Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                            <p class="mb-65 pera-bottom">Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                            <a href="from.html" class="btn">became a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-2 Area End -->
        <!--? Services Area Start -->
        <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
            <!--? Want To work -->
            <section class="wantToWork-area w-padding">
                <div class="container">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-6 col-md-10 col-sm-10">
                            <div class="section-tittle section-tittle2">
                                <span>oUR sERVICES FOR YOU</span>
                                <h2>PUSH YOUR LIMITS FORWARD We Offer to you</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <a href="services.php" class="btn wantToWork-btn f-right">More Services</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Want To work End -->
            <div class="container">
                <div class="row">
                    <?php
                    $getService = mysqli_query($con, "SELECT * FROM service_master LIMIT 3");
                    while ($serviceRow = mysqli_fetch_array($getService)) {
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon">
                                    <img src="admin/image/<?php echo $serviceRow['serviceImage'] ?>" alt="" height="80px">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php"><?php echo $serviceRow['serviceName'] ?></a></h5>
                                    <p><?php echo $serviceRow['serviceDescription'] ?></p>
                                </div>
                                <div class="img-cap">
                                    <a href="form.php" class="">Become a Member <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!--? About-2 Area Start -->
        <section class="about-area2 testimonial-area section-padding30 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-11 col-sm-11">
                        <!-- about-img -->
                        <div class="about-img2">
                            <img src="assets/img/gallery/about2.png" alt="">
                            <!-- Shape -->
                            <div class="shape-qutaion d-none d-sm-block">
                                <img src="assets/img//gallery/qutaion.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 col-sm-9">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-55">
                                <span>Client Feedback</span>
                                <h2>What Our Client thik about our gym</h2>
                            </div>
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <div class="testimonial-caption">
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                        <div class="rattiong-caption">
                                            <span>Jhon Smith<span>Gym Trainer</span> </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <div class="testimonial-caption">
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                        <div class="rattiong-caption">
                                            <span>Jhon Smith<span>Gym Trainer</span> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-2 Area End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <a href="gallery.php"><i class="ti-arrow-top-right"></i></a>
                                    <h3>Best fitness gallery</h3>
                                    <p>Fitness, Body</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.php"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Best fitness gallery</h3>
                                            <p>Fitness, Body</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.php"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Best fitness gallery</h3>
                                            <p>Fitness, Body</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.php"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Best fitness gallery</h3>
                                            <p>Fitness, Body</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.php"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Best fitness gallery</h3>
                                            <p>Fitness, Body</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? Want To work -->
        <section class="wantToWork-area w-padding">
            <div class="container">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-6 col-md-9 col-sm-9">
                        <div class="section-tittle">
                            <span>oUR TEAM MAMBERS</span>
                            <h2>Our Most Exprienced Trainers</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="trainers.php" class="btn wantToWork-btn f-right">More Trainers</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Team Ara Start -->
        <div class="team-area pb-150">
            <div class="container">
                <div class="row">
                    <?php
                    $getTrainer = mysqli_query($con, "SELECT * FROM trainer_master LIMIT 3");
                    while ($serviceRow = mysqli_fetch_array($getTrainer)) {
                    ?>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src="admin/image/<?php echo $serviceRow['trainerImage'] ?>" alt="" height="530px">

                                    <div class="team-caption">
                                        <span><?php echo $serviceRow['trainerSpecialization'] ?></span>
                                        <h3><a href="#"><?php echo $serviceRow['trainerName'] ?></a></h3>

                                        <div class="team-social">
                                            <h5><a href="#"><?php echo $serviceRow['trainerContact'] ?></a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!--? Want To work -->
        <section class="wantToWork-area w-padding section-bg" data-background="assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
                        <div class="wantToWork-caption">
                            <h2>April membership offer available Now</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="services.php" class="btn wantToWork-btn f-right">More Services</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Date Tabs Start -->
        <section class="date-tabs section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-tittle text-center mb-100">
                            <span>OUR tIME SCHEDULE</span>
                            <h2>SELECT THE pERFECT TIME YOU NEED NOW</h2>
                        </div>
                    </div>
                </div>
                <!-- Heading & Nav Button -->
                <div class="row justify-content-center mb-10">
                    <div class="col-lg-11">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Saturday</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sunday</a>
                                    <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Monday</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Tuesday</a>
                                    <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Language</a>
                                    <a class="nav-item nav-link" id="nav-six" data-toggle="tab" href="#nav-nav-six" role="tab" aria-controls="nav-contact" aria-selected="false">Thursday</a>
                                    <a class="nav-item nav-link" id="nav-seven" data-toggle="tab" href="#nav-nav-seven" role="tab" aria-controls="nav-seven" aria-selected="false">Friday</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!--  one -->
                            <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Two -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Three -->
                            <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Fur -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Five -->
                            <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Six -->
                            <div class="tab-pane fade" id="nav-nav-six" role="tabpanel" aria-labelledby="nav-six">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  seven -->
                            <div class="tab-pane fade" id="nav-nav-seven" role="tabpanel" aria-labelledby="nav-seven">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>

        </section>
        <!-- Date Tabs End -->
        <!--? Contact form Start -->
        <section class="contact-form-main">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-lg-11 col-md-10 col-sm-10">
                                        <div class="section-tittle">
                                            <span>Contact Form</span>
                                            <h2>Feel Free to contact with us!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <!-- Name -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <!-- Contact Number -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text" name="contact" placeholder="Contact Number" required>
                                        </div>
                                    </div>
                                    <!-- Services with Price -->
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="select-itms">
                                            <select name="service" id="service">
                                                <option value="">Select Service</option>
                                                <?php
                                                $getservice = mysqli_query($con, "SELECT serviceName, price FROM service_master");
                                                while ($serviceRow = mysqli_fetch_array($getservice)) {
                                                ?>
                                                    <option value="<?php echo $serviceRow['serviceName']; ?>"
                                                        <?php if (isset($serviceName) && $serviceName == $serviceRow['serviceName']) {
                                                            echo "selected";
                                                        } ?>>
                                                        <?php echo $serviceRow['serviceName'] . " - " . $serviceRow['price']; ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>

                                        </div>
                                        <p id="service-price"></p>
                                    </div>
                                    <!-- Trainers with Price -->
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="select-itms">
                                            <select name="trainer" id="trainer">
                                                <option value="">Select Trainer</option>
                                                <?php
                                                $gettrainer = mysqli_query($con, "SELECT trainerName, price FROM trainer_master");
                                                while ($trainerRow = mysqli_fetch_array($gettrainer)) {
                                                ?>
                                                    <option value="<?php echo $trainerRow['trainerName']; ?>"
                                                        <?php if (isset($trainerName) && $trainerName == $trainerRow['trainerName']) {
                                                            echo "selected";
                                                        } ?>>
                                                        <?php echo $trainerRow['trainerName'] . " - " . $trainerRow['price']; ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <p id="trainer-price"></p>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="password" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="psw" name="psw" placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="amount" name="amount" placeholder="Total Amount" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- Submit Button -->
                                        <div class="submit-info">
                                            <button class="btn" type="submit">Register Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact left Img-->
            <div class="from-left d-none d-lg-block">
                <img src="assets/img/gallery/contact_form.png" alt="" style="height: 800px;">
            </div>
        </section>
        <!-- Contact form End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span>rECENT NEWS FORM BLOG</span>
                            <h2>gYM TIPS news fOR YOU THAT selected by us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog1.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <span>Creative derector</span>
                                    <h3><a href="blog_details.php">Footprints in Time is perfect House in Kurashiki</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog2.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <span>Creative derector</span>
                                    <h3><a href="blog_details.php">Footprints in Time is perfect House in Kurashiki</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
    <?php include("footer.php"); ?>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>