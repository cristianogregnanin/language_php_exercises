<?php


$carattere = 'y';

$service_port = 1313;
$address = 'localhost';


/* Create a TCP/IP socket. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$result = socket_connect($socket, $address, $service_port);
socket_write($socket, $carattere, strlen($carattere));

$carattere = socket_read($socket, strlen($carattere));
    
socket_close($socket);

echo "il carattere convertito in maiuscolo è: {$carattere}";