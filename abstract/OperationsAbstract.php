<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Operations
 *
 * @author cristiano
 */
include "OperationsInterface.php";

abstract class OperationsAbstract implements OperationsInterface {

    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA() {
        return $this->a;
    }

    public function divide() {
        return $this->a / $this->b;
    }

    public function minus() {
        return ($this->a - $this->b);
    }

    public function multiplicate() {
        return $this->a * $this->b;
    }

    public function sum() {
        return $this->a + $this->b;
    }

}
