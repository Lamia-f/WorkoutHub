<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in | Workout Hub</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="sign-in-up/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="sign-in-up/css/style.css">
    <link rel="stylesheet" href="css/added.css">
</head>

<body>

    <div class="main">
        <!-- Sign in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="sign-in-up/images/signin-image.png" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form" action="Login.php">
                            <?php if (isset($_GET['error'])) {
                                echo "<p class='error'> ";
                                echo $_GET['error'];
                                echo "</p>";
                            } ?>
                            <?php if (isset($_GET['out'])) {
                                echo "<p class='success'> ";
                                echo $_GET['out'];
                                echo "</p>";
                            } ?>
                            <?php if (isset($_GET['outEmail'])) {
                                echo "<p class='warning'> ";
                                echo $_GET['outEmail'];
                                echo "</p>";
                            } ?><?php if (isset($_GET['endSession'])) {
                                    echo "<p class='info'> ";
                                    echo $_GET['endSession'];
                                    echo "</p>";
                                } ?>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Email" value="<?php if (isset($_COOKIE["email"])) {
                                                                                                                    echo $_COOKIE["email"];
                                                                                                                } ?>" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password" value="<?php if (isset($_COOKIE["password"])) {
                                                                                                                    echo $_COOKIE["password"];
                                                                                                                } ?>" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" <?php if (isset($_COOKIE["email"])) { ?> checked <?php } ?> />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Login" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="sign-in-up/vendor/jquery/jquery.min.js"></script>
    <script src="sign-in-up/js/main.js"></script>
</body>

</html>