<?php

// Acquisire due numeri e stampare il piu grande
echo "inserisci a:";
$a = readline();

echo "inserisci b:";
$b = readline();

if ($a > $b) {
    echo "il maggiore è: $a";
} else { // a <= b
    if ($a == $b) {
        echo 'i numeri sono uguali';
    } else {
        echo "il maggiore è: $b";
    }
}