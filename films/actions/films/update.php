<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '/home/cristiano/language_php_exercises/films/dto/Film.php';



$film = Film::find($_POST["id"]);



$film->SetGenere($_POST["genere"]);
$film->SetAnnoDiProduzione($_POST["anno_di_produzione"]);
$film->SetRegista($_POST["regista"]);
$film->SetNazionalita($_POST["nazionalita"]);
$film->SetTitolo($_POST["titolo"]);

$film->save();

header('Location: http://localhost:8000/views/films');
