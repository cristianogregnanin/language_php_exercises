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

foreach ($players as $player) {
    echo $player;
}



foreach ($players as $key => $value) {
    echo "key: {$key}, value: {$value}";
}

