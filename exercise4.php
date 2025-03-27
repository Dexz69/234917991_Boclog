<?php
    function greet($name) {
        return "Hello, " . $name . "!";
    }

    function square($num) {
        return $num * $num;
    }

    echo greet("Alice") . "<br>";
    echo "Square of 5: " . square(5);
?>
