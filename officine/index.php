<?php

include 'Database.php';

$database = new Database("localhost", "3306", "cristiano", "6");

$conn = $database->connect("officina");


$sql = "SELECT * FROM proprietari";
$rows = $conn->query($sql);



foreach ($rows as $row) {
    print $row['indirizzo'] . "\t";
    print $row['n_telefono'] . "\t";
    print $row['cf'] . "\n";
}

