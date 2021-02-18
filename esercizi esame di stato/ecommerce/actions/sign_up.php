<?php

include '../Database.php';

$email = strtolower($_POST['email']);
$password = $_POST['password'];
$password_confirmation = $_POST['password-confirmation'];


if (strcmp($password, $password_confirmation) > 0) {
    header('Location: http://localhost:8000/views/sign_up.php');
    exit;
}


$db = new Database('localhost', 3306, 'cristiano', '6');
$ecommerce = $db->connect('ecommerce');

$sql = $ecommerce->prepare("select id from ecommerce.users where email=:email limit 1");

$sql->bindParam(":email", $email);
$sql->execute();

$users = $sql->fetchAll();

if (count($users) > 0) {
    header('Location: http://localhost:8000/views/sign_up.php');
    exit;
}

$sql = $ecommerce->prepare("insert into ecommerce.users (email,password,role) values (:email,:password,'shopper');");
$sql->bindParam(":email", $email);
$sql->bindParam(":password", $password);

if ($sql->execute()) {
    header('Location: http://localhost:8000/views/login.php');
    exit;
} else {
    header('Location: http://localhost:8000/views/sign_up.php');
    exit;
}
?>
