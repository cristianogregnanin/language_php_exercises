<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calcolatrice
 *
 * @author cristiano
 */
class Calcolatrice {

    private $a, $b, $operatore, $risultato;

    public function setA($param) {
        $this->a = $param;
    }

    public function setB($param) {
        $this->b = $param;
    }

    public function setOperatore($param) {
        $this->operatore = $param;
    }

    public function getRisultato() {
        return $this->risultato;
    }

    public function calcola() {

        if ($this->operatore == '+')
            $this->risultato = $this->a + $this->b;

        if ($this->operatore == '-')
            $this->risultato = $this->a - $this->b;

        if ($this->operatore == '*')
            $this->risultato = $this->a * $this->b;

        if ($this->operatore == '/')
            $this->risultato = $this->a / $this->b;
    }

}
