<?php

class DBManager
{
    public static function Connect($dbname)
    {

        $dsn = "mysql:dbname={$dbname};host=localhost";

        try {
            $pdo = new PDO($dsn, "root", "root");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connessione al DB fallita: " . $e->getMessage());
        }
    }
}

