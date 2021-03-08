<?php

include '../classes.php';

session_start();

$quantita = $_POST['quantita'];
$itemline = Cart::find($_POST['id']);

$user = $_SESSION['current_user'];



if ($quantita > 0) {
    $itemline->setQuantita($quantita);
    $itemline->save();
} else {
    $itemline->delete();
}

header('Location: http://localhost:8000/views/carts/index.php');
exit;
