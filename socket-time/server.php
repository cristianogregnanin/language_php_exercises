<?php

// settaggio variabili, il server ascolta sul proprio indirizzo ip  
$host = "localhost";
$port = 50000;

// crea socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0);

// Lega il socket alla porta $port sul server $host 
$result = socket_bind($socket, $host, $port);

while (true) {
// Inizio ascolto sulla connessione
    $result = socket_listen($socket);
// Accetta Connessioni
// Attende l'arrivo di una connessione client
    $spawn = socket_accept($socket);

    $time = time();
    echo ("data: $time\n");

    socket_write($spawn, time());


    socket_close($spawn);
}
socket_close($socket);
