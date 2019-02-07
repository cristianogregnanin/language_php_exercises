<?php

include_once 'User.php';
include_once 'Rubrica.php';

$rubrica = new Rubrica('database.txt');

$user = $user = $rubrica->search("3405685945");
$user->setSurname("Cezza");
$rubrica->update($user);
