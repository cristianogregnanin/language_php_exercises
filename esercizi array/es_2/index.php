<?php

$a = [];

for ($i = 0; $i < 5; $i++)
{
    echo "\nInserire un numero intero: ";
    $a[$i] = readline();
}

echo "\nElementi al contrario: ";

for ($i = count($a)-1; $i >= 0; $i--)
{
    echo "$a[$i]-";
}
