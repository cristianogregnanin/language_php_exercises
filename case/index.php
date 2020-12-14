<?php

include "Appartamento.php";
include "RangeValidator.php";

$case = [];
$case[0] = new Casa(150, "grigio", "villa");
$case[1] = new Casa(15, "bianco", "appartamento");
$case[2] = new Casa(10, "giallo", "appartamento");
$case[3] = new Casa(5150, "grigio", "villa");
$case[4] = new Casa(6150, "grigio", "Villa");
$case[5] = new Casa(650, "bianco", "Villa");
$case[6] = new Appartamento(650, "bianco", "appartamento", "secondo");
$case[7] = new Appartamento(50, "bianco", "appartamento", "secondo");
$case[8] = new Appartamento(65, "bianco", "appartamento", "secondo");


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

foreach ($case as $casa) {
    if (strtolower($casa->GetCategoria()) == "appartamento")
        echo "appartamento di metri quadri: {$casa->getMetri()}\n";
}

echo "inserisci i metri quadri: \n\n";
$metri = readline();
$trovato = false;

foreach ($case as $casa) {
    if (strtolower($casa->GetCategoria()) == "appartamento") {
        if ($casa->GetMetri() > $metri) {
            echo "appartamento: {$casa->GetMetri()}\n";
            $trovato = $casa;
        }
    }
}

if (!$trovato)
    echo "appartamento non trovato";

do {
    $rangeValidator = new RangeValidator();

    echo "inserisci il primo numero:\n";
    $n1 = readline();
    $rangeValidator->setN1($n1);

    echo "inserisci il secondo numero:\n";
    $n2 = readline();
    $rangeValidator->setN2($n2);
} while (!$rangeValidator->validate());

$trovato = false;

foreach ($case as $casa) {
    if (strtolower($casa->GetCategoria()) == "appartamento") {
        if ($casa->GetMetri() > $n1 && $casa->GetMetri() < $n2) {
            echo "appartamento: {$casa->GetMetri()}\n";
            $trovato = $casa;
        }
    }
}

if (!$trovato)
    echo "appartamento non trovato";





