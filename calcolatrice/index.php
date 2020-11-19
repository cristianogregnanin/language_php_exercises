<?php

include 'Calcolatrice.php';

$calcolatrice = new Calcolatrice();

do {
    echo "inserisci il primo numero ";
    $calcolatrice->setA(readline());

    echo "inserisci il secondo numero ";
    $calcolatrice->setB(readline());

    echo "scegli l'operatore \n";
    $calcolatrice->setOperatore(readline());

    $risultato = $calcolatrice->getRisultato();
    echo "il risultato è: $risultato\n";

    echo "Vuoi fare un altro calcolo? si/no\n";
    $scelta = readline();
} while ($scelta == "si");
