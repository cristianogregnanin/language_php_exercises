<?php

/* Si chiedano in input 5 numeri 
 * attraverso un ciclo.
 * al termine del ciclo, si mostri
 * a video la somma dei numeri.
 */

$i = 0;
$somma = 0;

while ($i < 6) {
    echo "inserire un valore\n";
    $valore = readline();
    $somma = $somma + $valore;
    $i = $i + 1;
}

echo "la somma dei numeri inseriti è: $somma\n";

