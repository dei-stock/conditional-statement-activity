<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

    if ($number1 > $number2) {
        echo "$number1 is greater than $number2.";
    } elseif ($number1 < $number2) {
        echo "$number1 is less than $number2.";
    } else {
        echo "Both numbers are equal.";
    }
?>