<?php
session_start();
if (time() > $_SESSION['loginTime'] + 600) {
    unset($_SESSION);
    session_destroy();
    header("Location: signin.php?endSession=Your session has been expired.");
    exit();
}
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>
    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Directing Template">
        <meta name="keywords" content="Directing, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Workout Hub</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/barfiller.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/added.css">

    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu">
            <div class="offcanvas__logo">
                <a href="./index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div id="mobile-menu-wrap"></div>
            <div class="offcanvas__widget">
                <a href="signout.php" class="primary-btn">Sign Out</a>
            </div>
            <nav class="header__menu">
                <ul class="mobile-menu">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./profile.php">Profile</a></li>
                    <li class="active"><a href="./classes.php">WorkOut</a>
                        <ul class="dropdown">
                            <li><a href="./classes.php#upper">Upper Body</a></li>
                            <li><a href="./classes.php#core">Core Body</a></li>
                            <li><a href="./classes.php#lower">Lower Body</a></li>
                        </ul>
                    </li>
                    <li><a href="classes-details.php">Healthy recipes</a>
                        <ul class="dropdown">
                            <li><a href="./classes-details.php#Foods Recipes">Foods</a></li>
                            <li><a href="./classes-details.php#Drinks Recipes">Drinks</a></li>
                        </ul>
                    </li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./about-us.php">About</a></li>

                </ul>
            </nav>
            <div class="offcanvas__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="header__logo">
                                <a href="./index.php"><img src="img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="header__top__widget">
                                <a href="signout.php" class="primary-btn">Sign Out</a>
                            </div>
                        </div>
                    </div>
                    <div class="canvas__open">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
            </div>
            <div class="header__nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <nav class="header__menu">
                                <ul>
                                    <li><a href="./index.php">Home</a></li>
                                    <li><a href="./profile.php">Profile</a></li>
                                    <li class="active"><a href="./classes.php">WorkOut</a>
                                        <ul class="dropdown">
                                            <li><a href="./classes.php#upper">Upper Body</a></li>
                                            <li><a href="./classes.php#core">Core Body</a></li>
                                            <li><a href="./classes.php#lower">Lower Body</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="classes-details.php">Healthy recipes</a>
                                        <ul class="dropdown">
                                            <li><a href="./classes-details.php#Foods Recipes">Foods</a></li>
                                            <li><a href="./classes-details.php#Drinks Recipes">Drinks</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./contact.php">Contact</a></li>
                                    <li><a href="./about-us.php">About</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="header__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->
        <!-- Breadcrumb Begin -->
        <section class="breadcrumb-option set-bg" data-setbg="img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <h2>Our Classes</h2>
                            <div class="breadcrumb__widget">
                                <a href="./index.php">Home</a>
                                <span>Our Classes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb End -->


        <!-- Upper Classes Section Begin -->
        <section class="upcoming-classes top-classes spad white" id="upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title normal-title">
                            <h2>Upper Body</h2>
                            <p>Multimodal exercises You will learn and practice customized exercises at the upper of the
                                body.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/mUbnnR9ClJk?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                <span>25‏ Nov 2020</span>
                            </div>
                            <div class="classes__item__text">
                                <p>4:16 minuts | Start on 10th Every Month</p>
                                <h4><a href="#">8 Best Shoulder Exercises</a></h4>
                                <h6> GYM BODY MOTIVATION </h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/mqfzsbV0lUs?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span>5 Nov 2020</span>
                            </div>
                            <div class="classes__item__text">
                                <p>4:42 minuts | Start on 10th Every Month</p>
                                <h4><a href="#">8 Biceps Exercises</a></h4>
                                <h6>GYM BODY MOTIVATION</h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/lWXhih3xbVc?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span>14 Oct 2020</span>
                            </div>
                            <div class="classes__item__text">
                                <p>5:41 minuts | Start on 10th Every Month</p>
                                <h4><a href="#">10 Best Chest Exercises</a></h4>
                                <h6>GYM BODY MOTIVATION</span></h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Upper Classes Section End -->


        <!-- core Classes Section Begin -->
        <section class="upcoming-classes top-classes spad white" id="core">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title normal-title">
                            <h2>Core Body</h2>
                            <p>Multimodal exercises You will learn and practice customized exercises at the core of the
                                body.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/ksjypo_fLFs?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                <span>11 Oct 2020</span>
                            </div>
                            <div class="classes__item__text">
                                <p>6:05 minuts | Start on 10th Every Month</p>
                                <h4><a href="#">7 Best abdos Exercises</a></h4>
                                <h6>Bodybuilding Freak</h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/uv-dLOKAmqM?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span>16 Oct 2020</span>
                            </div>
                            <div class="classes__item__text">
                                <p>3:21 minuts | Start on 10th Every Month</p>
                                <h4><a href="#">core exercises for back pain</a></h4>
                                <h6>Bodybuilding Freak</h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/Il49512O9Ww?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span>5 Jun 2020</span>
                            </div>
                            <div class="classes__item__text">
                                <p>3:09 minuts | Start on 10th Every Month</p>
                                <h4><a href="#">Lower back Exercises</a></h4>
                                <h6>Bodybuilding Freak</h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- core Classes Section End -->


        <!-- Lower Classes Section Begin -->
        <section class="upcoming-classes top-classes spad white whitedown" id="lower">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title normal-title">
                            <h2>Lower Body</h2>
                            <p>Multimodal exercises You will learn and practice customized exercises at the lower of the
                                body.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/FX1Z85rx_TQ?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span>12 Jan 2021</span>
                            </div>
                            <div class="classes__item__text">
                                <p>5:33 minuts | Start on 10th Every Month</p>
                                <h4><a href="#">10 MIN LEG WORKOUT</a></h4>
                                <h6>Bodybuilding Freak</h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/QuIvqr40At4?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span>17 April 2020</span>
                            </div>
                            <div class="classes__item__text">
                                <p>2:38 minuts | Start on 10th Every Month</p>
                                <h4><a href="#">EXERCISE FOR MASSIVE CALVES AT HOME</a></h4>
                                <h6>workout & Fitness</h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg">
                                <iframe width="360" height="241" src="https://www.youtube.com/embed/Nr0voKyfiiE?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span>9 Jan 2021</span>
                            </div>
                            <div class="classes__item__text">
                                <p>4:33 minuts | Start on 10th Every Month</p>
                                <h4><a href="#"> 8 Best Leg Exercises<br> At Home <br></a></h4>
                                <h6>GYM BODY MOTIVATION</h6>
                                <a href="#" class="class-btn">WATCH NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lower Classes Section End -->


        <!-- Footer Section Begin -->
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <br>
                            <br>
                            <br>
                            <img src="img/logo.png" alt="">
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                        <div class="footer__widget">
                            <h5>Inspiration</h5>
                            <ul>
                                <li><a href="#">Online Pilates</a></li>
                                <li><a href="#">Yoga for Beginners</a></li>
                                <li><a href="#">Online Pilates</a></li>
                                <li><a href="#">Online Yoga</a></li>
                                <li><a href="#">Conditioning</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer__widget">
                            <h5>About Us</h5>
                            <ul>
                                <li><a href="#">Computer Science Students</a></li>
                                <li><a href="#">Umm AlQura University</a></li>
                                <li><a href="#">Meet The Team</a></li>
                                <li><a href="#">Makkah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h5>Team Members</h5>
                            <ul>
                                <li><a href="#"> Raeda Mohammed </a></li>
                                <li><a href="#">Fatema Bayat</a></li>
                                <li><a href="#">Noor Alhafez</a></li>
                                <li><a href="#">Aisha Farouqui</a></li>
                                <li><a href="#">Lamia Althaqafi</a></li>
                                <li><a href="#">Russa Alharthi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="footer__copyright__text">
                                <p>Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | <a href="index.php">Workout Hub</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="footer__copyright__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Section End -->


        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.barfiller.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>
<?php } else {
    header("Location: signin.php");
    exit();
} ?>