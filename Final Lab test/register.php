<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email, role) VALUES ('$username', '$password', '$email', 'user')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="post">
  Username: <input type="text" name="username" required><br>
  Password: <input type="password" name="password" required><br>
  Email: <input type="email" name="email"><br>
  <input type="submit" value="Register">
</form>
