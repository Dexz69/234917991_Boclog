<?php
    $num = -5;

   
    if ($num % 2 == 0) {
        echo "$num is even<br>";
    } else {
        echo "$num is odd<br>";
    }


    if ($num > 0) {
        echo "$num is positive";
    } elseif ($num < 0) {
        echo "$num is negative";
    } else {
        echo "$num is zero";
    }
?>
