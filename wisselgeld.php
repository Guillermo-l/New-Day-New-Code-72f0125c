<?php
$test[1] = $argv[1];
// Function
function bereken($inputBedrag, $euro)
{
    $eenheid = $inputBedrag / $euro;
    $restBedrag = $inputBedrag % $euro;
    $endValue = floor($eenheid);
    return array($endValue, $restBedrag);
}

// Money
$geld = [500, 200, 50, 10, 5, 2, 1];

// For Loop
for ($i = 0; $i < count($geld); $i++) {
    $test = bereken($test[1], $geld[$i]);
    if ($test[0] > 0) {
        // Echo, output function
        echo $test[0] . " x " . $geld[$i] . " euro" . PHP_EOL;
    }
}
?>