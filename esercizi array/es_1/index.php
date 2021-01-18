<?php

$a = [];
$n = 4;

for ($i = 0; $i < $n; $i++) {
    echo "inserisci il numero: \n\n";
    $a[$i] = readline();
}

for ($i = 0; $i < count($a); $i++) {
    echo "elemento: $a[$i]\n";
}
