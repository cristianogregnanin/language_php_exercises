<?php

include 'DittaRiparazioni.php';

$ditta = new DittaRiparazioni('tecnici.txt', 'riparazioni.txt');

$ditta->aggRiparazione("viale_porta_adige", 1);

print_r($ditta->assegnaRiparazione());
print_r($ditta->getTecnici());
//$ditta->terminaRiparazione("alfredo");
print_r($ditta->GetRiparazioni());

$ditta->aggTecnico("cristiano");

$ditta->ferie([new Tecnico("alfredo"), new Tecnico("cristiano")]);
print_r($ditta->getTecnici());
print_r($ditta->GetRiparazioni());



