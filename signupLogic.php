<?php
include "validation_functions.php";

include "db_conn.php";
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
$message = ' ';
if (isset($_POST['signup'])) {
    if (valid_name($_POST['name'])) {
        if (valid_email($_POST['email'])) {
            if (valid_pass($_POST['pass'])) {
                if (($_POST["pass"]) == ($_POST["re_pass"])) {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $password = $_POST["pass"];
                    $rePassword = $_POST["re_pass"];


                    $sql = "INSERT INTO users (id,name,email,password) VALUES (0,'$name','$email','$password')";

                    if ($conn->query($sql) === TRUE) {

                        header('Location: index.php');
                        exit();
                    } else {
                        if ($conn->query("SELECT * FROM users WHERE email = '$email'") == 1) {
                            header("Location: signup.php?emailexist=Your email already exist!");
                            exit();
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                    // $conn->close();
                } else {
                    header("Location: signup.php?outre-pass=Your passwords do not match.");
                    exit();
                }
            } else {
                header("Location: signup.php?outpass=Invalid password");
                exit();
            }
        } else {
            header("Location: signup.php?outemail=Invalid Email");
            exit();
        }
    } else {
        header("Location: signup.php?outname=Invalid Name");
        exit();
    }
}
