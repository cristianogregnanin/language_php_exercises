<?php

include "quadrilatero.php";

$quadrato = new quadrilatero();
$quadrato->setBase(5);
$quadrato->setAltezza(4);

$area = $quadrato->area();
$perimetro = $quadrato->perimetro();
$diagonale = $quadrato->diagonale();

echo "l'area è: $area\n";
echo "il perimetro è: $perimetro\n";
echo "la diagonale è: $diagonale\n";
