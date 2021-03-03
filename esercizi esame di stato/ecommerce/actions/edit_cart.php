<?php

include '../classes.php';

session_start();

$quantita = $_POST['quantita'];
$itemline = Cart::find($_POST['id']);

$user = $_SESSION['current_user'];


if ($quantita > 0) {
    //allora modifichiamo la quantita nel record
    //update()
} else {
    //rimuoviamo la riga dal DB
    //delete();
}

header('Location: http://localhost:8000/views/products/index.php');
