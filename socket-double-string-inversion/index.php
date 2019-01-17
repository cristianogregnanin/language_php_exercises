<?php

include 'service.php';

$service = new Service('localhost', 1313);

$service->setString1("pippo");
$service->setString2("pluto");

$result = $service->reverse();

echo "La stringa convertita è: {$result}\n";


