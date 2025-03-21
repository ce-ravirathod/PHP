<?php
$correct_answer = 38;

if (isset($_GET['guess'])) {
    $guess = $_GET['guess'];

    // Check if the guess is empty
    if (empty($guess)) {
        echo "Missing guess parameter.";
    } 
    // Check if the guess is too short
    elseif (strlen($guess) < 1) {
        echo "Your guess is too short.";
    } 
    // Check if the guess is a number
    elseif (!is_numeric($guess)) {
        echo "Your guess is not a number.";
    } 
    // Check if the guess is too low
    elseif ($guess < $correct_answer) {
        echo "Your guess is too low.";
    } 
    // Check if the guess is too high
    elseif ($guess > $correct_answer) {
        echo "Your guess is too high.";
    } 
    // Correct guess
    else {
        echo "Congratulations - You are right!";
    }
} else {
    echo "No guess was made.";
}
?>