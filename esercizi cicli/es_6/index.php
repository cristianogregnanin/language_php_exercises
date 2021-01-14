<?php

/*
 * Inserire una serie di numeri interi e sommarli. Interrompere l’immissione al
 * sesto valore pari e visualizzare quindi in output la somma ottenuta.
 */

$somma = 0;
$pari = 0;

do {
    echo "\ninserire un numero intero: \n";
    $numero = readline();
    $somma = $somma + $numero;
    if ($numero % 2 == 0)
        $pari++;
}while ($pari < 6);

echo "La somma ottenuta è: $somma";
