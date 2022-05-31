<?php  //retrieve user information
include "db_conn.php";
include "validation_functions.php";

$user_name2 = $_POST['name'];
$user_email2 = $_POST['email'];
$user_password2 = $_POST['password'];

session_start();
$id = $_SESSION['id'];
echo $id;

if (($_POST['name']) && ($_POST['email']) && ($_POST['password'])) {
    if (valid_email($_POST["email"]) && valid_name($_POST["name"]) && valid_pass($_POST["password"])) {
        $query1 = "UPDATE users SET name = '$user_name2', email = '$user_email2', password = '$user_password2' WHERE id= '$id'";
        //Execute the query.	
        if (@mysqli_query($conn, $query1)) {
            $query2 = "SELECT * FROM users WHERE (id='$id')";
            if ($r = mysqli_query($conn, $query2)) {
                while ($row = mysqli_fetch_array($r)) {
                    print '<h3 style="color:white;text-align:center";>' . $row["name"] . '<br/> ' . $row["email"] . '<br/> ' . $row["password"] . '</h3>';
                }
            }
        }
    } else {
        header("Location: editProfile.php?outEmail=Invalid Name or Email or Password!");
        exit();
    }
} else if (!($_POST['name']) && ($_POST['email']) && ($_POST['password'])) {
    if (valid_email($_POST["email"]) && valid_pass($_POST["password"])) {
        $query1 = "UPDATE users SET email = '$user_email2', password = '$user_password2'
    WHERE id= '$id'";
        //Execute the query.	
        if (@mysqli_query($conn, $query1)) {
            $query2 = "SELECT * FROM users WHERE (id='$id')";
            if ($r = mysqli_query($conn, $query2)) {
                while ($row = mysqli_fetch_array($r)) {
                    print '<h3 style="color:white;text-align:center";>' . $row["name"] . '<br/> ' . $row["email"] . '<br/> ' . $row["password"] . '</h3>';
                }
            }
        }
    } else {
        header("Location: editProfile.php?outEmail=Invalid Email or Password!");
        exit();
    }
} else if (($_POST['name']) && !($_POST['email']) && ($_POST['password'])) {
    if (valid_name($_POST["name"]) && valid_pass($_POST["password"])) {
        $query1 = "UPDATE users SET name = '$user_name2', password = '$user_password2'
	WHERE id= '$id'";
        //Execute the query.	
        if (@mysqli_query($conn, $query1)) {
            $query2 = "SELECT * FROM users WHERE (id='$id')";
            if ($r = mysqli_query($conn, $query2)) {
                while ($row = mysqli_fetch_array($r)) {
                    print '<h3 style="color:white;text-align:center";>' . $row["name"] . '<br/> ' . $row["email"] . '<br/> ' . $row["password"] . '</h3>';
                }
            }
        }
    } else {
        header("Location: editProfile.php?outEmail=Invalid Name or Password!");
        exit();
    }
} else if (($_POST['name']) && ($_POST['email']) && !($_POST['password'])) {
    if (valid_email($_POST["email"]) && valid_name($_POST["name"])) {
        $query1 = "UPDATE users SET name = '$user_name2', email = '$user_email2'
	WHERE id= '$id'";
        //Execute the query.	
        if (@mysqli_query($conn, $query1)) {
            $query2 = "SELECT * FROM users WHERE (id='$id')";
            if ($r = mysqli_query($conn, $query2)) {
                while ($row = mysqli_fetch_array($r)) {
                    print '<h3 style="color:white;text-align:center";>' . $row["name"] . '<br/> ' . $row["email"] . '<br/> ' . $row["password"] . '</h3>';
                }
            }
        }
    } else {
        header("Location: editProfile.php?outEmail=Invalid Email or Name!");
        exit();
    }
} else if (!($_POST['name']) && !($_POST['email']) && ($_POST['password'])) {
    if (valid_pass($_POST["password"])) {
        $query1 = "UPDATE users SET password = '$user_password2'
	WHERE id= '$id'";
        //Execute the query.	
        if (@mysqli_query($conn, $query1)) {
            $query2 = "SELECT * FROM users WHERE (id='$id')";
            if ($r = mysqli_query($conn, $query2)) {
                while ($row = mysqli_fetch_array($r)) {
                    print '<h3 style="color:white;text-align:center";>' . $row["name"] . '<br/> ' . $row["email"] . '<br/> ' . $row["password"] . '</h3>';
                }
            }
        }
    } else {
        header("Location: editProfile.php?outEmail=Invalid Password!");
        exit();
    }
} else if (!($_POST['name']) && ($_POST['email']) && !($_POST['password'])) {
    if (valid_email($_POST["email"])) {
        $query1 = "UPDATE users SET email = '$user_email2'
	WHERE id= '$id'";
        //Execute the query.	
        if (@mysqli_query($conn, $query1)) {
            $query2 = "SELECT * FROM users WHERE (id='$id')";
            if ($r = mysqli_query($conn, $query2)) {
                while ($row = mysqli_fetch_array($r)) {
                    print '<h3 style="color:white;text-align:center";>' . $row["name"] . '<br/> ' . $row["email"] . '<br/> ' . $row["password"] . '</h3>';
                }
            }
        }
    } else {
        header("Location: editProfile.php?outEmail=Invalid Email!");
        exit();
    }
} else if (($_POST['name']) && !($_POST['email']) && !($_POST['password'])) {
    if (valid_name($_POST["name"])) {
        $query1 = "UPDATE users SET name = '$user_name2'
	WHERE id= '$id'";
        //Execute the query.	
        if (@mysqli_query($conn, $query1)) {
            $query2 = "SELECT * FROM users WHERE (id='$id')";
            if ($r = mysqli_query($conn, $query2)) {
                while ($row = mysqli_fetch_array($r)) {
                    print '<h3 style="color:white;text-align:center";>' . $row["name"] . '<br/> ' . $row["email"] . '<br/> ' . $row["password"] . '</h3>';
                }
            }
        }
    } else {
        header("Location: editProfile.php?outEmail=Invalid Name!");
        exit();
    }
} else {
    $query2 = "SELECT * FROM users WHERE (id='$id')";
    if ($r = mysqli_query($conn, $query2)) {
        while ($row = mysqli_fetch_array($r)) {
            print '<h3 style="color:white;text-align:center";>' . $row["name"] . '<br/> ' . $row["email"] . '<br/> ' . $row["password"] . '</h3>';
        }
    }
}
header("Location: profile.php?successUpdate= Your profile has been updated successfuly!");
