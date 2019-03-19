<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include "Casa.php";

$case = [];
$case[0] = new Casa(150, "grigio");
$case[1] = new Casa(15, "bianco");
$case[2] = new Casa(10, "giallo");
$case[3] = new Casa(5150, "grigio");
$case[4] = new Casa(6150, "grigio");


$casaMax = $case[0];
for ($i = 1; $i < count($case); $i++) {
    $casa = $case[$i];
    if ($casa->getMetri() > $casaMax->getMetri())
        $casaMax = $casa;
}

echo "la casa piu grande ha metri: {$casaMax->getMetri()}";




/*

$appartamento = new Casa(70, "bianco");
var_dump($appartamento);

$casa = new Casa(50, "bianco");
$casa->SetColore("Verde");
echo $casa->getColore();
$casa->SetMetri(75);

var_dump($casa);

$casa2 = new Casa(80, "Gialla");
var_dump($casa2);
*/