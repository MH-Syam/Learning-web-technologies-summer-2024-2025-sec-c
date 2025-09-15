<?php
$host = "localhost";
$user = "root"; // default in XAMPP
$pass = "";     // default empty in XAMPP
$db   = "lab_test_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
