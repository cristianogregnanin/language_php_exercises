<?php

include "Casa.php";

$case = [];
$case[0] = new Casa(150, "grigio", "villa");
$case[1] = new Casa(15, "bianco", "appartamento");
$case[2] = new Casa(10, "giallo", "appartamento");
$case[3] = new Casa(5150, "grigio", "villa");
$case[4] = new Casa(6150, "grigio", "Villa");
$case[5] = new Casa(650, "bianco", "Villa");


$casaMax = $case[0];
for ($i = 1; $i < count($case); $i++) {
    $casa = $case[$i];
    if ($casa->getMetri() > $casaMax->getMetri())
        $casaMax = $casa;
}

echo "la casa piu grande ha metri: {$casaMax->getMetri()}\n";

for ($i = 0; $i < count($case); $i++) {
    $casa = $case[$i];
    if (strtolower($casa->getCategoria()) == "villa")
        echo "la casa è una: {$casaMax->getCategoria()}\n";
}

for ($i = 0; $i < count($case); $i++) {
    $casa = $case[$i];
    if (strtolower($casa->getColore()) == "giallo")
        echo "la casa è: {$casa->getColore()}, \"{$casa->getCategoria()}\"\n";
}


for ($i = 0; $i < count($case); $i++) {
    $casa = $case[$i];
    if (strtolower($casa->getColore()) == "bianco")
        if (strtolower($casa->getCategoria()) == "villa")
            echo "la casa è: {$casa->getColore()} ed è una: {$casa->getCategoria()}\n";
}
