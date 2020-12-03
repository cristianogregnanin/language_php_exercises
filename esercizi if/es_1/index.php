<?php

echo "inserisci il primo numero: ";
$a = readline();

echo "inserisci il secondo numero: ";
$b = readline();

$c = $a + $b;

echo "\nil risultato di $a + $b è: $c\n";

if ($a > $b) {
    echo "$a è maggiore di $b";
} else {
    echo "$b è maggiore di $a";
}
