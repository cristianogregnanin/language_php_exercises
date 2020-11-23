<?php

/*
 * client in php che crea una socket e si connette ad un server 
 * e invia un messaggio
 */

$host = "localhost";
$port = 25000;

do {
    //creo la socket
    $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Creazione socket fallita\n");

//creare connessione col server
    $result = socket_connect($socket, $host, 25500) or die("Impossibile connetersi\n");

    echo "scrivi il messaggio da inviare al server\n";
    $messaggio = readline();

    socket_write($socket, $messaggio, strlen($messaggio)) or die("Impossibile scrivere la socket\n");

    //Leggo risposta dal server
    $risposta = socket_read($socket, $port);
    echo"la risposta del server è: $risposta\n";
    socket_close($socket);

    echo "vuoi continuare con un altra socket? (s/n)";
    $ciclo = readline();
} while ($ciclo == 's');
