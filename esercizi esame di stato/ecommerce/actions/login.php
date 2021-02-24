<?php

spl_autoload_register(function ($class) {

    $sources = array("../dto/$class.php", "$class.php","../$class.php");

    foreach ($sources as $source) {
        if (file_exists($source)) {
            var_dump("richiedo: $source \n\n");
            require_once $source;
        }
    }
});

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$db = new Database('localhost', 3306, 'cristiano', '6');
$ecommerce = $db->connect('ecommerce');

$sql = $ecommerce->prepare("select email,role,id from ecommerce.users where password=:password and email=:email limit 1");

$sql->bindParam(":email", $email);
$sql->bindParam(":password", $password);
$sql->execute();

$users = $sql->fetchAll(PDO::FETCH_CLASS, 'User');

if (count($users) > 0) {

    $_SESSION['current_user'] = $users[0];
    header('Location: http://localhost:8000/views/products/index.php');
    exit;
} else {
    header('Location: http://localhost:8000/views/login.php');
    exit;
}
?>
