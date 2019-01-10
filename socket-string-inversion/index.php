<?php

include 'service.php';

$service = new Service('localhost', 1313);

$service->setString("ciao");

$result = $service->reverse();

echo "La stringa convertita è: {$result}\n";


