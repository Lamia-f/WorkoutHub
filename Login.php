<?php
session_start();
include "db_conn.php";
include "validation_functions.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {
    if (valid_email($_POST["email"])) {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $sql = "Select * from users where email = '" . $email . "' and password = '" . $pass . "'";


        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['loginTime'] = time();
                setcookie("name", $row['name']);

                if (!empty($_POST["remember-me"])) {
                    $expireAt = (10 * 365 * 24 * 60 * 60);
                    setcookie("email", $email, time() + $expireAt);
                    setcookie("password", $pass, time() + $expireAt);
                } else {
                    if (isset($_COOKIE["email"])) {
                        setcookie("email", "");
                    }
                    if (isset($_COOKIE["password"])) {
                        setcookie("password", "");
                    }
                }
                header("location:index.php");
                exit();
            } else {
                header("Location: signin.php?error=Incorect email or password");
                exit();
            }
        } else {
            header("Location: signin.php?error=Incorect email or password");
            exit();
        }
    } else {
        header("Location: signin.php?outEmail=Invalid email!");
        exit();
    }
} else {
    header("Location: signin.php");
    exit();
}
