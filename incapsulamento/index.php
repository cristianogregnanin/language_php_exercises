<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'computer.php';

$computers = [];
$n = 3;

for ($i = 0; $i < $n; $i++) {
    echo "inserisci memoria ram: ";
    $mRam = readline();
    echo "inserisci memoria hdd: ";
    $mHdd = readline();
    $computer = new computer("I3",$mHdd, $mRam);
    $computers[$i] = $computer;
}

$grande = 1;
for ($i = 0; $i < $n; $i++) {
    if($computers[$i]->getHdd() > $computers[$grande]->getHdd())
        $grande = $i;
}
//echo "{$grande}\n";
echo "i dati del computer che ha hdd più grande sono: hdd: {$computers[$grande]->getHdd()} ram:{$computers[$grande]->getRam()} cpu: {$computers[$grande]->getCpu()}\n";

$piccolo = 1;
for ($i = 0; $i < $n; $i++) {
    if($computers[$i]->getRam() < $computers[$piccolo]->getRam())
        $piccolo = $i;
}
//echo "{$piccolo}\n";
echo "i dati del computer che ha ram più piccola sono: hdd: {$computers[$piccolo]->getHdd()} ram:{$computers[$piccolo]->getRam()} cpu: {$computers[$piccolo]->getCpu()}\n";

echo "inserisci memoria ram: ";
$ram = readline();

for ($i = 0; $i < $n; $i++) {
    if($computers[$i]->getRam() >= $ram)
        echo "i dati del computer con ram maggiore o uguale sono: hdd: {$computers[$i]->getHdd()} ram:{$computers[$i]->getRam()} cpu: {$computers[$i]->getCpu()}\n";
}
