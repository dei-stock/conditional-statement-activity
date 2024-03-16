<?php
    $age = $_POST["age"];

    if($age>=18){
        echo "You are old enough to enter.";
    }else{
        echo "You are too young to enter.";
    }
?>