<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RangeValidator
 *
 * @author cristiano
 */
class RangeValidator {

    private $n1, $n2;

    public function setN1($n1) {
        $this->n1 = $n1;
    }

    public function setN2($n2) {
        $this->n2 = $n2;
    }

    public function validate() {
        if ($this->n1 < $this->n2)
            return true;
        else
            return false;
    }

}
