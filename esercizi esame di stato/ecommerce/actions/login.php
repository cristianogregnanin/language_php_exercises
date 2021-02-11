<?php

include '../Database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$db = new Database('localhost', 3306, 'cristiano', '6');
$ecommerce = $db->connect('ecommerce');

$sql = $ecommerce->prepare("select * from ecommerce.users where password=:password and email=:email limit 1");

$sql->bindParam(":email", $email);
$sql->bindParam(":password", $password);
$sql->execute();

$risultato = $sql->fetchAll();

if (count($risultato))
    echo "utente trovato";
else
    echo "utente non trovato";

?>
