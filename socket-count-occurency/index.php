<?php

include 'service.php';

$service = new Service('localhost', 1313);

$service->setString("iiiasdffsdjfhaskjfhsdf");
$service->setChar("f");

$result = $service->count();

echo "Il carattere {$service->getChar()} compare {$result} volte in {$service->getString()}\n\n";


