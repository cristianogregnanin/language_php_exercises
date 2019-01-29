<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OperationsClass
 *
 * @author cristiano
 */
include "OperationsAbstract.php";
class OperationsClass extends OperationsAbstract {

    public function pow() {
        return $this->getA() * $this->getA();
    }

}
