<?php
session_start();
include("config.php");

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    die("Access denied.");
}

$result = mysqli_query($conn, "SELECT * FROM users");
echo "<h2>All Users</h2><table border='1'><tr><th>ID</th><th>Username</th><th>Email</th><th>Role</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['email']}</td><td>{$row['role']}</td></tr>";
}
echo "</table>";
?>
