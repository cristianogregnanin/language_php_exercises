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
    private $id;

    public function __construct($name, $surname, $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
    }

    public function setName($param) {
        $this->name = $param;
    }

    public function setSurname($param) {
        $this->surname = $param;
    }

    public function setPhone($param) {
        $this->phone = $param;
    }

    public function setId($param) {
        $this->id = $param;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getPhone() {
        return $this->phone;
    }
    
    public function toString() {
        return "\n{$this->name} {$this->surname} {$this->phone}";
        
    }

}
