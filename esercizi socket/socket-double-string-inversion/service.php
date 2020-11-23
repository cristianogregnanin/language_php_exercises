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

    private $string1;
    private $string2;
    private $address;
    private $port;

    public function __construct($address, $port) {
        $this->address = $address;
        $this->port = $port;
    }

    function setString1($param) {
        $this->string1 = $param;
    }

    function setString2($param) {
        $this->string2 = $param;
    }

    function reverse() {
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        $result = socket_connect($socket, $this->address, $this->port);

        socket_write($socket, $this->string1);
        socket_read($socket, 1024);

        socket_write($socket, $this->string2);
        

        $result = socket_read($socket, 1 + strlen($this->string2) + strlen($this->string1));

        socket_close($socket);

        return $result;
    }

}
