<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author cristiano
 */
class Database {

    private $host, $port, $username, $password;

    public function __construct($host, $port, $username, $password) {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect($dbname) {
        
        $dsn = "mysql:dbname={$dbname};host={$this->host}";
               
        return new PDO($dsn, $this->username, $this->password);
        
    }

}