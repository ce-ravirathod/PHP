<?php
$correct_answer = 38;
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = $_POST['guess'] ?? '';

    if (empty($guess)) {
        $feedback = "<p style='color:red;'>Missing guess parameter.</p>";
    } elseif (!is_numeric($guess)) {
        $feedback = "<p style='color:red;'>Your guess is not a number.</p>";
    } else {
        $guess = intval($guess); // Convert input to an integer
        if ($guess < $correct_answer) {
            $feedback = "<p>Your guess is too low.</p>";
        } elseif ($guess > $correct_answer) {
            $feedback = "<p>Your guess is too high.</p>";
        } else {
            $feedback = "<p style='color:green; font-weight:bold;'>Congratulations - You are right!</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game Result</title>
</head>
<body>
    <h1>Guess the Number!</h1>

    <form method="POST" action="index.php">
        <label for="guess">Enter your guess:</label>
        <input type="text" id="guess" name="guess" required>
        <input type="submit" value="Submit Guess">
    </form>

    <?= $feedback; ?>

</body>
</html>
