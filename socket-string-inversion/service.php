<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of service
 *
 * @author cristiano
 */
class service {

    private $string;
    private $address;
    private $port;

    public function __construct($address, $port) {
        $this->address = $address;
        $this->port = $port;
    }

    function setString($param) {
        $this->string = $param;
    }

    function reverse() {
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        $result = socket_connect($socket, $this->address, $this->port);
        socket_write($socket, $this->string, strlen($this->string));

        $result = socket_read($socket, strlen($this->string));

        socket_close($socket);

        return $result;
    }

    
}
