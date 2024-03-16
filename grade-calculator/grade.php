<?php
    $score = $_POST["score"];

    if($score>=90 && $core=100){
        echo "Your grade is A.";
    }else if($score>=80 && $score<=89){
        echo "Your grade is B.";
    }else if($score>=87 && $score<=79){
        echo "Your grade is C.";
    }else if($score>=60 && $score<=69){
        echo "Your grade is D.";
    }else if($score>=0 && $score=60){
        echo "Your grade is B.";
    }
?>