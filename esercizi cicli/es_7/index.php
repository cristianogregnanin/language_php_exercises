<?php

/*
 * Realizzare un algoritmo che accetta in input solo un numero il cui valore
 * assoluto sia compreso tra 5 e 10. Al termine stampare il numero inserito.
 */

do {
    echo "\n inserisci un numero  il cui valore assoluto sia compreso tra 5 e 10:\n";
    $numero = readline();
} while ((abs($numero) < 5) || (abs($numero) > 10));

echo "\n\nil numero inserito è: $numero\n";
