<?php

echo "inserisci il primo numero: \n";
$a=readline();

echo "inserisci il secondo numero: \n";
$b=readline();

$resto = $a%$b;

if ($resto == 0){
    echo "$a è multiplo di $b";
}else{
    echo "$a non è multiplo di $b";
}

