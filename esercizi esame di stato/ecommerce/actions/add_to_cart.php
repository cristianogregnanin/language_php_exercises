<?php

include '../classes.php';

session_start();

$product = Product::find($_POST['id']);

$user = $_SESSION['current_user'];


$lineitem = Cart::find_by_product($_POST['id']);

if (!$lineitem) {
    Cart::add($user->getId(), $product->getId(), $_POST['quantita']);
} else {
    $lineitem->setQuantita($lineitem->getQuantita() + $_POST['quantita']);
    $lineitem->save();
}

header('Location: http://localhost:8000/views/products/index.php');
exit;
?>
