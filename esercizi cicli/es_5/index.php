<?php

/*
 * Estrarre numeri casuali tra -100 e 100 fintanto che ne ottengo esattamente 10
 * positivi pari. Stampare i numeri dispari estratti e il numero totale di
 * estrazioni.
 *  
 */

$pari = 0;
$estrazioni = 0;

do {
    $n = rand(-100, 100);

    $estrazioni++;
    if ($n > 0 && ($n % 2) == 0)
        $pari++; //$pari=$pari+1;

    if ($n % 2 != 0)
        echo "$n è dispari\n";
}while ($pari < 10);

echo "Ho eseguito: $estrazioni estrazioni\n\n";