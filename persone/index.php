<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Studente.php';
include_once 'Persona.php';

$studenti = [];
array_push($studenti, new Studente('aaabbb', 'studente1', '13', '5', '1', new Persona('aaafff', 'padre1', '43'), new Persona('aaafff', 'madre1', '43')));

array_push($studenti, new Studente('cccddd', 'studente2', '12', '7', '2', new Persona('zzzzzz', 'padre2', '44'), new Persona('kkkkkk', 'madre2', '44')));

array_push($studenti, new Studente('qqqrrrr', 'studente3', '13', '8', '3', new Persona('acasaa', 'padre3', '45'), new Persona('asdwqq', 'madre3', '45')));

array_push($studenti, new Studente('qrewsr', 'studente4', '13', '5', '4', new Persona('tttfff', 'padre4', '43'), new Persona('wwefff', 'madre4', '43')));



$bravo = $studenti[0];
foreach ($studenti as $studente) {
    if ($studente->getMedia() > $bravo->getMedia())
        $bravo = $studente;
}

echo "il piu bravo è: {$bravo->getNome()}\n\n";


$scarso = $studenti[0];
foreach ($studenti as $studente) {
    if ($studente->getMedia() < $scarso->getMedia())
        $scarso = $studente;
}
echo "il meno bravo è: {$scarso->getNome()}\n\n";


echo "studenti bocciati: \n";
foreach ($studenti as $studente) {
    if ($studente->getMedia() < 6) {
        echo "\tbocciato: {$studente->getNome()}\n";
        echo "\t\t papa: {$studente->getPadre()->getNome()}\n";
        echo "\t\t mamma: {$studente->getMadre()->getNome()}\n";
    }
}