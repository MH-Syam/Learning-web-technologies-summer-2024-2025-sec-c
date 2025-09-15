<?php
session_start();
include("config.php");

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'user') {
    die("Access denied.");
}

echo "<h2>Welcome User, " . $_SESSION['username'] . "</h2>";
echo "<a href='profile.php'>View Profile</a><br>";
echo "<a href='change_password.php'>Change Password</a><br>";
echo "<a href='logout.php'>Logout</a><br>";
?>
