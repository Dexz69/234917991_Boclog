<?php
   
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz<br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz<br>";
        } else {
            echo "$i<br>";
        }
    }

    echo "<br>Even Fibonacci Numbers:<br>";

  
    $a = 0;
    $b = 1;
    for ($i = 1; $i <= 10; $i++) {
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
        if ($b % 2 == 0) {
            echo "$b<br>";
        }
    }
?>
