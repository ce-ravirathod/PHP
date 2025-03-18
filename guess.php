<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game - 0d8d5b44</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>
    <p>Try to guess the correct number!</p>

    <form method="get">
        <label for="guess">Enter your guess:</label>
        <input type="text" name="guess" id="guess">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['guess'])) {
        $guess = $_GET['guess'];

        if (!is_numeric($guess)) {
            echo "<p>Please enter a valid number.</p>";
        } elseif ($guess < 38) {
            echo "<p>Your guess is too low.</p>";
        } elseif ($guess > 38) {
            echo "<p>Your guess is too high.</p>";
        } else {
            echo "<p>Congratulations! You guessed correctly.</p>";
        }
    }
    ?>
</body>
</html>
