<?php
$valid_username = 'admin';
$valid_password = '12345';


$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    echo "<h2>Welcome, $username! You are logged in.</h2>";
} else {
    echo "<h2 style='color:red;'>Invalid username or password.</h2>";
    echo "<p><a href='login.html'>Try again</a></p>";
}
?>
