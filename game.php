<!DOCTYPE html>
<html>
<head>
    <title>Rock Paper Scissors Game 0839d06f</title>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <form method="POST">
        <p>Select one:</p>
        <input type="radio" name="choice" value="rock"> Rock<br>
        <input type="radio" name="choice" value="paper"> Paper<br>
        <input type="radio" name="choice" value="scissors"> Scissors<br>
        <input type="submit" value="Play">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $choices = ["rock", "paper", "scissors"];
        $user_choice = $_POST["choice"];
        $computer_choice = $choices[array_rand($choices)];
        
        echo "<p>You chose: " . htmlentities($user_choice) . "</p>";
        echo "<p>Computer chose: " . htmlentities($computer_choice) . "</p>";
        
        if ($user_choice == $computer_choice) {
            echo "<p>It's a tie!</p>";
        } elseif (
            ($user_choice == "rock" && $computer_choice == "scissors") ||
            ($user_choice == "paper" && $computer_choice == "rock") ||
            ($user_choice == "scissors" && $computer_choice == "paper")
        ) {
            echo "<p>You win!</p>";
        } else {
            echo "<p>You lose!</p>";
        }
    }
    ?>
    
    <p>
        <a href="login.php">Play Again</a>
    </p>
</body>
</html>
