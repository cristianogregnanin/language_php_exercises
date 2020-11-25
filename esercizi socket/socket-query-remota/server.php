<?php

/*
 * Scrivere un server in php che legga da socket una stringa SQL e la esegua su
 * un database. Il server deve quindi inviare il risultato della query al client
 * che lo mostrerà a video. 
 * 
 * 
 */

include 'Database.php';

$database = new Database('localhost', '3306', 'root', '6');





$connessione = $database->connect("anagrafica");


var_dump($connessione);

$result=$connessione->query("select * from docenti;")->fetchAll();

var_dump($result);
