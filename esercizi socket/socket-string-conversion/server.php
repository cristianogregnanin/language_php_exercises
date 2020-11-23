<?php

/*
 * Scrivere un programma che simuli un server. Questo deve creare una socket e mettersi in ascolto
 * in attesa di un messaggio in ingresso inviato da un client.
 */

$host = "localhost";
$port = 25500;


//imposto un timer per evitare che il server si disconetta 
set_time_limit(0);
//creo la socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Impossibile creare la socket\n");

//associo  la socket alla porta
$result = socket_bind($socket, $host, $port) or die("Impossibile associare la socket\n");

//il server si mette in ascolto dalla conessione di un client
while (true) {
    $result = socket_listen($socket, $port)or die("Impossibile mettersi in ascolto\n");

    //accetto la connessione in entrata
    $connessione = socket_accept($socket) or die("Impossibile accettare la conessione\n");

    //leggo il messaggio proveniente dal client
    $messaggio = socket_read($connessione, $port) or die("Impossibile leggere dalla socket\n");

    $output = strtoupper($messaggio);
    //ritorno il messaggio al client
    socket_write($connessione, $output, strlen($output)) or die("Impossibile inviare il messaggio\n");
    //chiusura socket
    socket_close($connessione);
}
socket_close($socket);
