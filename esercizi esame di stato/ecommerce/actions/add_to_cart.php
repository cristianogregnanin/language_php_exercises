<?php

include '../classes.php';

session_start();

$product = Product::find($_POST['id']);

$user = $_SESSION['current_user'];


Cart::add($user->getId(), $product->getId(), $_POST['quantita']);
header('Location: http://localhost:8000/views/products/index.php');
?>
