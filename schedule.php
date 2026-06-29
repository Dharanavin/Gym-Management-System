<!doctype html>
<html class="no-js" lang="zxx">
<?php include('admin/connection.php');
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$selectedDay = isset($_GET['day']) ? $_GET['day'] : date('l');
?>

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
    <style>
        .nav-tabs {
            display: flex;
            justify-content: center;
            border-bottom: none;
            gap: 10px;
        }

        .nav-tabs .nav-item {
            font-size: 18px;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            color: #1a237e !important;
            text-align: center;
            width: auto;
            border: none !important;
            outline: none !important;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .active-day {
            background-color: red !important;
            color: white !important;
            border-radius: 5px;
            display: inline-block;
        }

        .nav-tabs .nav-item:hover {
            background-color: red !important;
            color: white !important;
        }

        .tab-content {
            margin-top: 20px;
            text-align: center;
        }

        .single-box {
            padding: 15px;
            border: 1px solid #ddd;
            margin: 10px auto;
            text-align: center;
            border-radius: 5px;
            background-color: #f9f9f9;
            width: 65%;
        }

        .single-caption {
            font-size: 16px;
            font-weight: bold;
        }
    </style>
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
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>Schedule</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
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
                <div class="container">
                    <!-- Centered Navigation Tabs -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                                <?php
                                foreach ($days as $day) {
                                    $activeClass = ($day == $selectedDay) ? 'active-day' : "";
                                    echo '<li class="' . $activeClass . '">
                                            <a href="?day=' . $day . '" class="nav-item nav-link">' . $day . '</a>
                                        </li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Centered Schedule Content -->
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane fade in active">
                                    <div class="row justify-content-center">
                                        <?php
                                        $query = "SELECT * FROM schedule_master WHERE scheduleDay='$selectedDay'";
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="single-box text-center mb-50">
                                                        <div class="single-caption">
                                                            <span><strong>Time:</strong> <?php echo $row["scheduleTime"]; ?></span><br>
                                                            <h3><?php echo $row["serviceName"]; ?></h3>
                                                            <p><strong>Trainer:</strong> <?php echo $row["trainerName"]; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <div class="col-12 text-center">
                                                <p>No Schedule Available for <?php echo $selectedDay; ?></p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>

        </section>
        <!-- Date Tabs End -->
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

    <!-- counter , waypoint -->
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