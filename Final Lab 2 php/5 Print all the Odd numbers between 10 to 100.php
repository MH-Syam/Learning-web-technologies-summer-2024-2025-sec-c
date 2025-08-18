<?php

    echo "<h1>Here is the all odd numbers between 10 to 100.</h1>";
    
    for ($i = 10; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }

?>