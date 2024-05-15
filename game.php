<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: 0839d06f.php");
    exit;
}

// Rock Paper Scissors game logic
$choices = ["rock", "paper", "scissors"];
$computer_choice = $choices[array_rand($choices)];

if (isset($_POST["user_choice"])) {
    $user_choice = strtolower($_POST["user_choice"]);
    
    if ($user_choice == $computer_choice) {
        $result = "It's a tie!";
    } elseif (
        ($user_choice == "rock" && $computer_choice == "scissors") ||
        ($user_choice == "paper" && $computer_choice == "rock") ||
        ($user_choice == "scissors" && $computer_choice == "paper")
    ) {
        $result = "You win!";
    } else {
        $result = "You lose!";
    }
} else {
    $user_choice = "";
    $result = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Paper Scissors Game</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <h3>Make your choice:</h3>
    <form action="game.php" method="POST">
        <input type="radio" id="rock" name="user_choice" value="rock">
        <label for="rock">Rock</label><br>
        <input type="radio" id="paper" name="user_choice" value="paper">
        <label for="paper">Paper</label><br>
        <input type="radio" id="scissors" name="user_choice" value="scissors">
        <label for="scissors">Scissors</label><br>
        <button type="submit">Play</button>
    </form>
    <?php if ($result): ?>
        <p><?php echo "You chose: $user_choice"; ?></p>
        <p><?php echo "Computer chose: $computer_choice"; ?></p>
        <p><?php echo $result; ?></p>
    <?php endif; ?>
    <a href="logout.php">Logout</a>
</body>
</html>
