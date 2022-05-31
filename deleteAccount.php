<?php  //retrieve user information
session_start();
include "db_conn.php";
if (time() > $_SESSION['loginTime'] + 600) {
    unset($_SESSION);
    session_destroy();
    header("Location: signin.php?endSession=Your session has been expired.");
    exit();
}
$id = $_SESSION['id'];

$query1 = "DELETE FROM users WHERE id= '$id'";
//Execute the query.	
if (@mysqli_query($conn, $query1)) {
    print '<h3 style="color:white;text-align:center";>Your account has been deleted</h3><br/>';
    unset($_SESSION);
    //Destroy the session data.
    session_destroy();
    header("location:signup.php?deleted=your account has been deleted successfuly! bye!");
}
