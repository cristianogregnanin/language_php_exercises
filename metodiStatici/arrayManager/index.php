<?php

include 'ArrayManager.php';

$numbers = ArrayManager::generaArray(10);

do {
    echo "\n";
    echo "1 - mostra il massimo\n";
    echo "2 - mostra il minimo\n";
    echo "3 - mostra la media\n";
    echo "4 - ricerca sequenziale\n";
    echo "5 - ricerca dicotomica\n";
    echo "6 - stampa array\n\n";
    echo "0 - esci\n";

    $scelta = readline();
    
    echo "\n\n";

    switch ($scelta) {
        case 1:
            echo "il massimo è: " . ArrayManager::max($numbers) . "\n\n";
            break;
        case 2:
            echo "il minimo è: " . ArrayManager::min($numbers) . "\n\n";
            break;
        case 3:
            echo "la media è: " . ArrayManager::media($numbers) . "\n               \n";
            break;
        case 4:
            echo "\t inserisci il numero da cercare: ";
            $number = readline();
            $pos = ArrayManager::ricercaSequenziale($numbers, $number);
            if ($pos >= 0)
                echo "numero trovato in posizione: $pos\n";
            else
                echo "numero non trovato\n";
            break;

        case 5:
            echo "\t inserisci il numero da cercare: ";
            $number = readline();
            $pos = ArrayManager::ricercaDicotomica($numbers, $number);
            if ($pos >= 0)
                echo "numero trovato in posizione: $pos\n";
            else
                echo "numero non trovato\n";
            break;

        case 6:
            ArrayManager::stampa($numbers);
            break;

        default:
            break;
    }
} while ($scelta != 0);
