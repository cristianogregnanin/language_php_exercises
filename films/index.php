<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include 'Wrapper.php';
/*
$wrapper = new Wrapper();

$recent = $wrapper->getRecentFilm();

$older = $wrapper->getOlderFilm();
var_dump($older);

$films = $wrapper->findFilmsByActor("S.loren");
echo count($films);


$rooms = $wrapper->findRoomsGreaterThan(150);
var_dump($rooms);


$films = $wrapper->findFilmsByCategory("storico");
var_dump($films);


$films = $wrapper->findFilmsByTitle("C");
echo count($films);

*/
var_dump(Film::fetchAll());

$f = new Film();
$f->setId(12);
$f->delete();
var_dump(Film::fetchAll());

