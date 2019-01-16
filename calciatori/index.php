<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$players = file('calciatori.txt');

for ($i = 0; $i < count($players); $i++) {

    echo "{$players[$i]}";
}
echo "\n";
echo "\n";

foreach ($players as $index => $player) {
    echo "player number: {$index}\n";
    echo $player;
    $fields = explode(" ", $player);
    foreach ($fields as $field)
        echo "\t {$field}";
    echo "\n";
}
