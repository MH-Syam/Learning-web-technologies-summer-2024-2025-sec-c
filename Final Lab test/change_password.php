<?php
session_start();
include("config.php");

if (!isset($_SESSION['username'])) {
    die("You must login first.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_pass = $_POST['old_password'];
    $new_pass = $_POST['new_password'];
    $user = $_SESSION['username'];

    // Check old password
    $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$old_pass'");
    if (mysqli_num_rows($check) == 1) {
        $update = mysqli_query($conn, "UPDATE users SET password='$new_pass' WHERE username='$user'");
        if ($update) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password.";
        }
    } else {
        echo "Old password is incorrect.";
    }
}
?>

<form method="post">
  Old Password: <input type="password" name="old_password" required><br>
  New Password: <input type="password" name="new_password" required><br>
  <input type="submit" value="Change Password">
</form>
