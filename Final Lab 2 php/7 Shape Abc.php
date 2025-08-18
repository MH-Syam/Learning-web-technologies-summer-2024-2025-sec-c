<?php
    echo "<h4>Shape 3: A</h4>";
    $char = 'A';
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $char;
            $char++;
        }
        echo "<br>";
    }
?>