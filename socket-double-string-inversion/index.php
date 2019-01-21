<?php

include 'service.php';

$service = new Service('localhost', 1313);

$service->setString1("cristiano");
$service->setString2("gregnanin");

$result = $service->reverse();

echo "La stringa convertita è: {$result}\n";


