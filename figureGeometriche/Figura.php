<?php

class Figura {

    private $lato1, $raggio;

    public function __construct($lato1, $raggio) {
        $this->raggio = $raggio;
        $this->lato1 = $lato1;
    }

    public function area() {
        echo "Attenzione! implementare il metodo nella classe figlia\n";
    }

    public function perimetro() {
        echo "Attenzione! implementare il metodo nella classe figlia\n";        
    }

    public function getLato1() {
        return $this->lato1;
    }

    public function getRaggio() {
        return $this->raggio;
    }

    public function setLato1($lato1) {
        $this->lato1 = $lato1;
    }

    public function setRaggio($raggio) {
        $this->raggio = $raggio;
    }

}
