<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Wrapper.php';

$wrapper = new Wrapper();

$recent = $wrapper->getRecentFilm();
var_dump($recent);


/*
$older = $wrapper->getOlderFilm();

$films = $wrapper->findFilmsByActor("S.loren");

$rooms = $wrapper->findRoomsGreaterThan(150);

$films = $wrapper->findFilmsByTitle("C");

$films = $wrapper->findFilmsByCategory("storico");
*/