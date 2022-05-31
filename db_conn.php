<?php

$sname = "localhost";
$unmae = "root";
$password = "Lamia";

$db_name = "lamia";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
