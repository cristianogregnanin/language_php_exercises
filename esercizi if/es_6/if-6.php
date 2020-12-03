<?php

// Acquisire tre numeri e stampare il più piccolo.
echo "Inserisci a: ";
$a = readline();
echo "Inserisci b: ";
$b = readline();
echo "Inserisci c: ";
$c = readline();

if ($a == $b && $b == $c) {
    echo "Tutti i numeri sono uguali";
} else {
    $min;

    if ($a < $b) {
        $min = $a;
    } else {
        $min = $b;
    }

    if ($min < $c) {
        echo "Il numero più piccolo è: $min";
    } else {
        echo "Il numero più piccolo è: $c";
    }
}