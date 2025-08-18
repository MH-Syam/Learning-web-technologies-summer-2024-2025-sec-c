<?php

$myArray = [100, 200, 300, 400, 500];
$searchElement = 500;
$found = false;

for ($i = 0; $i < count($myArray); $i++) {
    if ($myArray[$i] == $searchElement) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "<h1>" . "The element " . $searchElement . " was found in the array." . "</h1>";
} else {
    echo "<h1>" . "The element " . $searchElement . " was not found in the array." . "</h1>";
}

?>