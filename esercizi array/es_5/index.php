<?php

$numeri = [];
$posizioni = [];
$n = 10;
$k=0;

for ($i = 0; $i < $n; $i++) {
    echo "inserisci il numero: \n";
    $numeri[$i] = readline();
}

echo "\ninserisci il numero da ricercare: \n";
$numero = readline();

for ($i = 0; $i < $n; $i++) {
    if ($numeri[$i] == $numero){
        $posizioni[$k] = $i;
	$k++;
    }
}

if (count($posizioni) > 0){
    echo "$numero trovato nelle seguenti posizioni: \n";

    for ($i = 0; $i < count($posizioni); $i++) 
	echo "\t$posizioni[$i]\n";
}else
    echo "\n$numero non presente nell'array";
