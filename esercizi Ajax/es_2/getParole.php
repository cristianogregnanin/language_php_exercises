<?php

$parola = $_GET["parola"];

/*$pdo = new PDO();

$query = "SELECT * FROM PAROLE LIKE ':parola%'";

$stm = $pdo->prepare($query);
$stm->bindParam(":parola", $parola);
$stm->execute();
$parole = $stm->fetchAll(PDO::FETCH_COLUMN, 1);*/

$parole = array("ciao", "a", "tutti");
$result = array("data" => $parole);
$response = json_encode($result);
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
echo $response;



