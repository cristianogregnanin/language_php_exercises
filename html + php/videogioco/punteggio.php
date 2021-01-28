<?php

session_start();

if (!isset($_SESSION['videogiochi']))
    $_SESSION['videogiochi'] = [];
else
    $p = $_SESSION['videogiochi'];


if (isset($p[$_POST['gioco']])) {
    if ($p[$_POST['gioco']] < $_POST['punti'])
        $p[$_POST['gioco']] = $_POST['punti'];
}else {
    $p[$_POST['gioco']] = $_POST['punti'];
}


var_dump($p);
$_SESSION['videogiochi'] = $p;
