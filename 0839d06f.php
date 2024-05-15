<!DOCTYPE html>
<html>
<head>
    <title>Login 0839d06f</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Login">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check username and password
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Add your authentication logic here
        // For testing purposes, let's assume the correct username and password are "admin" and "password" respectively
        if ($username == "admin" && $password == "password") {
            // Redirect to game.php if authentication succeeds
            header("Location: game.php");
            exit;
        } else {
            // Display error message for incorrect credentials
            echo "<p>Incorrect username or password.</p>";
        }
    }
    ?>
</body>
</html>
