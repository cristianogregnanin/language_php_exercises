<?php

echo "Inserisci a: \n";
$a=readline();

echo "Inserisci b: \n";
$b=readline();

$somma = $a;

while ($a<$b){
    $somma=$somma+$a;
    $a=$a+1;
}
echo "La somma vale: $somma";
