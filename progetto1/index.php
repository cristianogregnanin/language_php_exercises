<?php

include "quadrilatero.php";

$quadrato = new quadrilatero();
$quadrato->setBase(5);
$quadrato->setAltezza(4);

$area = $quadrato->area();
$perimetro = $quadrato->perimetro();

echo "l'area è: $area\n\n";
echo "il perimetro è: $perimetro\n";
