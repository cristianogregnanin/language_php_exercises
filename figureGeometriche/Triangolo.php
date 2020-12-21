<?php

include_once 'Figura.php';

class Triangolo extends Figura {

    private $altezza;
    private $lato2;
    private $lato3;

    public function __construct($base, $altezza, $lato2, $lato3) {
        parent::setLato1($base);
        $this->altezza = $altezza;
        $this->lato2 = $lato2;
        $this->lato3 = $lato3;
    }

    public function area() {
        return ($this->altezza * parent::getLato1()) / 2;
    }

    public function perimetro() {
        return parent::getLato1() + $this->lato2 + $this->lato3;
    }

}
