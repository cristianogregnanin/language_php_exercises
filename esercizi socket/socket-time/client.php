<?php

$service_port = 50000;
$address = "localhost";

$socket = socket_create(AF_INET, SOCK_STREAM, 0);
$result = socket_connect($socket, $address, $service_port);

$result = socket_read($socket, 1024);


socket_close($socket);

$result = date('D d/m/Y - H:i:s',$result);  

echo "\n\ndata: {$result}";