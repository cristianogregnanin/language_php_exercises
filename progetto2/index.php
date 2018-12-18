<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'array_manager.php';

$numbers = array(1, 3, 5, 7, 9, 11);
$array_manager = new array_manager();

$array_manager->setArray($numbers);

$array_manager->print_array();

echo "\nil massimo è:{$array_manager->print_max()}\n\n";

if ($array_manager->search(132)) {
    echo "numero trovato";
} else {
    echo "numero non trovato\n";
}

echo "\nfunzione add\n\n";
$array_manager->add(62);
$array_manager->print_array();

echo "\nfunzione add list\n\n";
$array_manager->add_list(array(13,15));
$array_manager->print_array();

echo "\nfunzione add at index\n\n";
$array_manager->add_at_index(96,2);
$array_manager->print_array();

echo "\nfunzione remove element if found\n\n";
$array_manager->remove_element(96);
$array_manager->print_array();

echo "\nfunzione remove element at position\n\n";
$array_manager->remove_at_index(0);
$array_manager->print_array();


