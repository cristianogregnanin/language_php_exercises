<?php

include 'calcolatriceExtension.php';

$calcolatrice = new calcolatriceExtension();

do {
    echo "inserisci il primo numero ";
    $calcolatrice->setA(readline());

    echo "inserisci il secondo numero ";
    $calcolatrice->setB(readline());

    echo "scegli l'operatore \n";
    $calcolatrice->setOperatore(readline());

    $calcolatrice->getRisultato();

    echo "Vuoi fare un altro calcolo? si/no\n";
    $scelta = readline();
} while ($scelta == "si");

