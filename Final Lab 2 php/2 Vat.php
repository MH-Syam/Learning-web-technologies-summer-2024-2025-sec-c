<?php
$amount = 100;
$vat_rate = 0.15;

$vat = $amount * $vat_rate;

echo "<h1>" . "The original amount is: " . $amount . "</h1>";
echo "<h1>" . "The VAT amount (15%) is: " . $vat . "</h1>";
echo "<h1>" . "The total amount with VAT is: " . ($amount + $vat) . "</h1>";
?>