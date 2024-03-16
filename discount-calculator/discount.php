<?php
    $amount = $_POST['amount'];
    $discount = 0;

    if ($amount > 1000) {
        $discount = $amount * 0.10;
    } elseif ($amount >= 500 && $amount <= 1000) {
        $discount = $amount * 0.05;
    }

    $finalAmount = $amount - $discount;

    echo "Total amount: $" . number_format($amount, 2) . "<br>";
    echo "Discount: $" . number_format($discount, 2) . "<br>";
    echo "Final amount after discount: $" . number_format($finalAmount, 2);
?>