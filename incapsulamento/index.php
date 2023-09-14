<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'computer.php';

$computers = [];
$n = 5;

for ($i = 0; $i < $n; $i++) {
    $mRam = readline("inserisci memoria ram: ");
    $mHdd = readline("inserisci memoria hdd: ");
    $mCpu = readline("inserisci il processore: ");
    $computers[$i] = new computer($mCpu, $mHdd, $mRam);
}

$max = $computers[0];
for ($i = 1; $i < $n; $i++) {
    if ($computers[$i]->getHdd() > $max->getHdd())
        $max = $computers[$i];
}

echo "i dati del computer che ha hdd più grande sono: hdd: {$max->getHdd()} ram:{$max->getRam()} cpu: {$max->getCpu()}\n";

$piccolo = $computers[0];
for ($i = 1; $i < $n; $i++) {
    if ($computers[$i]->getRam() < $piccolo->getRam())
        $piccolo = $computers[$i];
}

echo "i dati del computer che ha ram più piccola sono: hdd: {$piccolo->getHdd()} ram:{$piccolo->getRam()} cpu: {$piccolo->getCpu()}\n";

echo "inserisci memoria ram: ";
$ram = readline();

for ($i = 0; $i < $n; $i++) {
    if ($computers[$i]->getRam() >= $ram)
        echo "i dati del computer con ram maggiore o uguale sono: hdd: {$computers[$i]->getHdd()} ram:{$computers[$i]->getRam()} cpu: {$computers[$i]->getCpu()}\n";
}
