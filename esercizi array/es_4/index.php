<?php

$numeri = [];

for ($i = 0; $i < 9; $i++)
{
    echo "\nInserire un numero intero: ";
    $a[$i] = readline();
}

echo "\nQuale elemento vuoi cercare?\n";
$ricerca = readline();

for ($i = 0; $i < count($numeri); $i++)
{
    if($ricerca == $numeri[$i])
    echo "Il numero $numeri[$i] è stato trovato in posizione $i";
}