<?php

$a = [];

for ($i = 0; $i < 4; $i++)
{
    echo "\nInserire un numero intero: ";
    $a[$i-1] = readline();
}

echo "\nElementi: ";

for ($i = 0; $i < count($a); $i++)
{
    echo "$a[$i]-";
}