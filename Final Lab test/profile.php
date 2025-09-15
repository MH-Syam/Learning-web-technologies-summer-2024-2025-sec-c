<?php
session_start();
include("config.php");

if (!isset($_SESSION['username'])) {
    die("You must login first.");
}

$user = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$user'");
$row = mysqli_fetch_assoc($result);

echo "<h2>Profile</h2>";
echo "Username: " . $row['username'] . "<br>";
echo "Email: " . $row['email'] . "<br>";
echo "Role: " . $row['role'] . "<br>";
?>
