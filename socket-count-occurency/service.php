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
    private $char;
    private $address;
    private $port;

    public function __construct($address, $port) {
        $this->address = $address;
        $this->port = $port;
    }

    function count() {
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_connect($socket, $this->address, $this->port);

        socket_write($socket, $this->string);
        socket_read($socket, 1024);

        socket_write($socket, $this->char);
        

        $result = socket_read($socket, 1024);

        socket_close($socket);

        return $result;
    }

    function setString($param) {
        $this->string = $param;
    }

    public function getString() {
        return $this->string;
    }

    function setChar($param) {
        $this->char = $param;
    }

    public function getChar() {
        return $this->char;
    }

}
