<?php

include 'Concessionario.php';

$concessionario = new Concessionario('parks.txt', 'cars.txt');

$targa = "cn383gc";
$car = $concessionario->searchCar($targa);

$park = $concessionario->searchPark("aliper");

$car->moveToPark($park->getId());
echo "viaggi: {$car->getViaggi()}\n";


$park = $concessionario->searchPark("1");
$car->moveToPark($park->getId());
echo "viaggi: {$car->getViaggi()}\n";

$car = $concessionario->getNewer();
echo "Ho scelto l'auto targata: {$car->getTarga()}\n";
$park = $concessionario->searchPark("censer");
$car->moveToPark($park->getId());
echo "viaggi: {$car->getViaggi()}\n";





