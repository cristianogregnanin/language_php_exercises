<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Casa
 *
 * @author cristiano
 */
class Casa {

    private $metri;
    private $colore;

    public function __construct($metri, $colore) {
        $this->metri = $metri;
        $this->colore = $colore;
    }

    public function SetColore($param) {
        $this->colore = $param;
    }

    public function GetColore() {
        return $this->colore;
    }

    public function SetMetri($param) {
        $this->metri = $param;
    }

    public function GetMetri() {
        return $this->metri;
    }

    
}
