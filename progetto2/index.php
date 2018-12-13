<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'array_manager.php';

$numbers = array(1, 432, 12, 3423, 1323, 566);
$array_manager = new array_manager();

$array_manager->setArray($numbers);

$array_manager->print_array();

echo "il massimo è:{$array_manager->print_max()}";

if ($array_manager->search(1323)) {
    echo "numero trovato";
} else {
    echo "numero non trovato";
}






