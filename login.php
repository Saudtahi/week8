<?php
session_start();

// Dummy credentials (replace with your authentication logic)
$valid_username = "user";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        $_SESSION["username"] = $username;
        header("Location: game.php");
        exit;
    } else {
        // Authentication failed
        echo "Invalid username or password!";
    }
}
?>
