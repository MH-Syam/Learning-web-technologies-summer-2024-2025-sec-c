<?php
session_start();
include("config.php");

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    die("Access denied.");
}

$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM users");
$data = mysqli_fetch_assoc($result);
echo "<h2>Welcome Admin, " . $_SESSION['username'] . "</h2>";
echo "Total registered users: " . $data['total'] . "<br>";
echo "<a href='view_users.php'>View All Users</a><br>";
echo "<a href='change_password.php'>Change Password</a><br>";
echo "<a href='logout.php'>Logout</a><br>";
?>
