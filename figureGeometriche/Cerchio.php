<?php

include 'Figura.php';

class Cerchio extends Figura {
    
    public function __construct($param) {
        parent::setRaggio($param);
    }

    public function area() {
        return parent::getRaggio() * parent::getRaggio() * pi();
    }

    public function perimetro() {
        return parent::getRaggio() * 2 * pi();
    }

}
