<?php

/*
 * testo esercizio: realizzare una calcolatrice che prenda in input 2 numeri e 
 * chieda quale delle 4 operazioni si vuole realizzare.
 * Al termine dell'operazione la calcolatrice chiede se si vuole fare un'altra 
 * operazione oppure uscire.
 * 
 * Osservazione: il ciclo do-while è un ciclo il cui corpo è eseguito sempre 
 * almeno 1 volta in quanto la condizione è posta in coda. do-while continua
 * a ciclare se la condizione è vera. 
 */

do {
    echo "inserisci la prima cifra\n";
    $a = readline();

    echo "inserisci la seconda cifra\n";
    $b = readline();

    echo "scegli l'operatore \n";
    $scelta = readline();

    if ($scelta == '+') {
        $somma = $a + $b;
        echo "La somma dei numeri è: $somma\n";
    }

    if ($scelta == '-') {
        $differenza = $a - $b;
        echo "La differenza dei numeri è: $differenza\n";
    }

    if ($scelta == '*') {
        $prodotto = $a * $b;
        echo "Il prodotto dei numeri è: $prodotto\n";
    }

    if ($scelta == '/') {
        $quoziente = $a / $b;
        echo "Il quoziente dei numeri è: $quoziente\n";

        $resto = $a % $b;
        echo "Il resto è: $resto";
    }

    echo "Vuoi fare un altro calcolo? si/no\n";
    $scelta = readline();
} while ($scelta == "si");
