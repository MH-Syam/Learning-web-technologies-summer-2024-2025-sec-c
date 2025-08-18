<?php

    
    $my2DArray = [
        ['A', 'B', 'C'],
        ['D', 'E', 'F'],
        ['G', 'H', 'I']
    ];

    echo "<h4>Shapes to print from the 2D array:</h4>";

    
    echo "<h4>Shape 1:</h4>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3 - $i; $j++) {
            echo $j + 1;
        }
        echo "<br>";
    }

    
    echo "<h4>Shape 2:</h4>";
    $k = 0;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $my2DArray[0][$k];
            $k++;
        }
        echo "<br>";
    }

?>