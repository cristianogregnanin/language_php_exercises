<?php

$dim = 4;
$trovato = -1;
$vet = array();

for ($i = 0; $i < $dim; $i++) {
    echo "Inserisci 10 numeri interi nel vettore\n\n";
    $vet[$i] = readline();
}

echo "inserisci il numero da cercare\n\n";
$numero = readline();

for ($i = 0; $i < $dim; $i++) {

    if ($vet[$i] == $numero)
        $trovato = $i;
}

if ($trovato > 0)
    echo "numero trovato in posizione $trovato\n";
else
    echo "numero non presente";
                