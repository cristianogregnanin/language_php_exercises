<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'computer.php';

$computer = new computer("I3","1TB","1GB");

echo "il computer ha processore: {$computer->getCpu()}\n";
echo "il computer ha ram: {$computer->getRam()}\n";
echo "il computer ha hardisk: {$computer->getHdd()}\n";

$computer->setHdd("2TB");
echo "il computer ha un nuovo hardisk: {$computer->getHdd()}\n";
