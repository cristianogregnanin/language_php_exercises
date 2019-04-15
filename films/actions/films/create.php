<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '/home/cristiano/language_php_exercises/films/dto/Film.php';


Film::Create($_POST["titolo"], $_POST["anno_di_produzione"], $_POST["genere"], $_POST["regista"], $_POST["nazionalita"]);


header('Location: http://localhost:8000/views/films');
