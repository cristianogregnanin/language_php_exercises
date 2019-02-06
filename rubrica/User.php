<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author cristiano
 */
class User {

    private $name;
    private $surname;
    private $phone;

    function __construct($name, $surname, $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
    }

    function setName($param) {
        $this->name = $param;
    }

    function setSurname($param) {
        $this->surname = $param;
    }

    function setPhone($param) {
        $this->phone = $param;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getPhone() {
        return $this->phone;
    }

}
