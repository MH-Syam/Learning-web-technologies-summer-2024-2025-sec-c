<?php

    $num1 = 25;
    $num2 = 40;
    $num3 = 18;

    echo "<h1>";
    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "The largest number is: " . $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "The largest number is: " . $num2;
    } else {
        echo "The largest number is: " . $num3;
    }
    echo "</h1>";

?>