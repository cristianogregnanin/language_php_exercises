<?php

$n = 5;
$numeri = [];

for ($i = 0; $i < $n; $i++) {
    echo "inserisci il numero: \n";
    $numeri[$i] = readline();
}

$end = count($numeri) - 1;
for ($i = $end; $i >= 0; $i--) {
    echo "numero: $numeri[$i]\n";
}