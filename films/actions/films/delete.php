<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '/home/cristiano/language_php_exercises/films/dto/Film.php';

$id = $_GET['id'];

$film = Film::find($id);
$film->delete();

header('Location: http://localhost:8000/views/films');
