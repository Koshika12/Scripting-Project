<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "password123") {
        $_SESSION['username'] = $username;

        if (isset($_POST['remember'])) {
            setcookie("username", $username, time() + 3600); // Expires in 1 hour
        }

        echo "Login successful. Welcome, $username!";
    } else {
        echo "Invalid credentials!";
    }
}

if (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'];
}
?>

<!DOCTYPE html>
<html>
<head><title>Login Form</title></head>
<body>
    <form method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Remember Me: <input type="checkbox" name="remember"><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
