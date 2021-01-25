<?php

$numeri = [];
$posizione = -1;
$n = 10;

for ($i = 0; $i < $n; $i++) {
    echo "inserisci il numero: \n";
    $numeri[$i] = readline();
}

echo "\ninserisci il numero da ricercare: \n";
$numero = readline();

for ($i = 0; $i < $n; $i++) {
    if ($numeri[$i] == $numero)
        $posizione = $i;
}

if ($posizione >= 0)
    echo "\n$numero trovato in posizione: $posizione";
else
    echo "\n$numero non presente nell'array";
