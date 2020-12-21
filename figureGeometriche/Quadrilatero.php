<?php

include_once 'Figura.php';

class Quadrilatero extends Figura {

    private $lato2;

    public function __construct($lato1, $lato2) {
        parent::setLato1($lato1);
        $this->lato2 = $lato2;
    }

    public function area() {
        return $this->lato2 * parent::getLato1();
    }

    public function perimetro() {
        return 2 * ($this->lato2 + parent::getLato1());
    }

}
