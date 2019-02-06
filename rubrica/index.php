<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'DbManager.php';
include 'User.php';
include 'Rubrica.php';

/*
  $db = new DbManager('database.txt');

  $db->read();
  $db->getContent();

  $db->setContent("\nNicolas Cezza 3653214263");
  $db->write();
 */

echo $rubrica->search('3406256325');

echo $rubrica->search('cristiano');

echo $rubrica->search('luca');

echo $rubrica->search('l');

echo $rubrica->search('340');

$rubrica->add("cristiano", "gregnanin", "3405896587");

$user = new User("cristiano", "gregnanin", "3405896587");

$rubrica->add($user->getName(), $user->getSurname(), $user->getPhone());

$user->setName("Roberto");
$rubrica->update($user);

$rubrica->remove($user);