<?php

include 'Database.php';

$database = new Database("localhost", "3306", "cristiano", "6");

$conn = $database->connect("officina");

$indirizzo = "via dei mille";
$n_telefono = "3402563594";
$cf = "asdasdasd";

$sql = $conn->prepare("insert into proprietari (indirizzo,n_telefono,cf) values (:indirizzo, :n_telefono, :cf)");
$sql->bindParam(':indirizzo', $indirizzo);
$sql->bindParam(':n_telefono', $n_telefono);
$sql->bindParam(':cf', $cf);
$sql->execute();


$sql = "SELECT * FROM proprietari";
$rows = $conn->query($sql);

foreach ($rows as $row) {
    print $row['indirizzo'] . "\t";
    print $row['n_telefono'] . "\t";
    print $row['cf'] . "\n";
}

