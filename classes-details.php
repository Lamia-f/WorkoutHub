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
                    <li><a href="./classes.php">WorkOut</a>
                        <ul class="dropdown">
                            <li><a href="./classes.php#upper">Upper Body</a></li>
                            <li><a href="./classes.php#core">Core Body</a></li>
                            <li><a href="./classes.php#lower">Lower Body</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="classes-details.php">Healthy recipes</a>
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
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="./profile.php">Profile</a></li>
                                    <li><a href="./classes.php">WorkOut</a>
                                        <ul class="dropdown">
                                            <li><a href="./classes.php#upper">Upper Body</a></li>
                                            <li><a href="./classes.php#core">Core Body</a></li>
                                            <li><a href="./classes.php#lower">Lower Body</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="classes-details.php">Healthy recipes</a>
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
                            <h2>Food/Drinks recipes</h2>
                            <div class="breadcrumb__widget">
                                <a href="./index.php">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb End -->



        <!-- Upcoming Classes Section Begin -->
        <section class="upcoming-classes spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title normal-title">
                            <h2 id="Foods Recipes">Foods Recipes</h2>
                            <p>Here you find foods that combine health and deliciousness together</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="img/classes/ApplesauceMuffins.jpg">
                                <span>242kcal</span>
                            </div>
                            <div class="classes__item__text">
                                <p>Total Time:30 minutes</p>
                                <h4><a href="#">Easy American apple pumpkin muffins</a></h4>
                                <h6>Author: <span>Blair</span></h6>
                                <a href="./FoodRecipe.php" class="class-btn">Go to recipe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="img/classes/ChickenPasta.jpg">
                                <span>599kcal</span>
                            </div>
                            <div class="classes__item__text">
                                <p>Total Time:35 minutes</p>
                                <h4><a href="#"></a>Creamy Chicken Pasta</h4>
                                <h6>Author: <span>Blair</span></h6>
                                <a href="#" class="class-btn">Go to recipe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="img/classes/ChickenVegetableSoup.jpg">
                                <span>125kcal</span>
                            </div>
                            <div class="classes__item__text">
                                <p>Cook Time:45 minutes</p>
                                <h4><a href="#">Healthy Chicken Vegetable Soup recipe</a></h4>
                                <h6>Author: <span>Blair</span></h6>
                                <a href="#" class="class-btn">Go to recipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="upcoming-classes spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title normal-title">
                            <h2 id="Drinks Recipes">Drinks Recipes</h2>
                            <p>Here you find drinks that combine health and deliciousness together</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="img/classes/AppleSmoothie.jpg">
                                <span>150.9kcal</span>
                            </div>
                            <div class="classes__item__text">
                                <p>Total Time:5 minutes</p>
                                <h4><a href="#">Apple pie smoothie</a></h4>
                                <h6>Author: <span>Blair</span></h6>
                                <a href="./DrinkRecipe.php" class="class-btn">Go to recipe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="img/classes/SaltedCaramelMocha.jpg">
                                <span>150kcal</span>
                            </div>
                            <div class="classes__item__text">
                                <p>Total Time:5 minutes</p>
                                <h4><a href="#">Salted Caramel Mocha</a></h4>
                                <h6>Author: <span>The Seasoned Mom</span></h6>
                                <a href="#" class="class-btn">Go to recipe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="img/classes/SouthernAmbrosiaSmoothie.jpg">
                                <span>204kcal</span>
                            </div>
                            <div class="classes__item__text">
                                <p>Total Time:2 minutes</p>
                                <h4><a href="#">Southern Ambrosia Smoothie</a></h4>
                                <h6>Author: <span>The Seasoned Mom</span></h6>
                                <a href="#" class="class-btn">Go to recipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Upcoming Classes Section End -->

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