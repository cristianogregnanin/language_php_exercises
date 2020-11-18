<?php

echo "inserisci la prima cifra\n";
$a = readline();

echo "inserisci la seconda cifra\n";
$b = readline();

echo "scegli l'operatore \n";
$scelta = readline();

if ($scelta == '+') {
    $somma = $a + $b;
    echo "La somma dei numeri è: $somma";
}

if ($scelta == '-') {
    $differenza = $a - $b;
    echo "La differenza dei numeri è: $differenza";
}

if ($scelta == '*') {
    $prodotto = $a * $b;
    echo "Il prodotto dei numeri è: $prodotto";
}

if ($scelta == '/') {
    $quoziente = $a / $b;
    echo "Il quoziente dei numeri è: $quoziente\n";

    $resto = $a % $b;
    echo "Il resto è: $resto";
}
		