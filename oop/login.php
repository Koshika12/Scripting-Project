<?php
// login.php
$username = $_POST['username'];
$password = $_POST['password'];

// Simple validation (In real use, you'd check a database)
if ($username === "user" && $password === "password") {
    echo "valid";
} else {
    echo "invalid";
}
?>
