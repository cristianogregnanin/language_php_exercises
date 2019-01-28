<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Fantacalcio.php';

$fantacalcio = new Fantacalcio('calciatori.txt');

$fantacalcio->print_players();
$fantacalcio->print_players_in("juve");

echo "la squadra con più goal è: {$fantacalcio->team_with_more_goal()}\n";