<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of quadrilatero
 *
 * @author cristiano
 */
class quadrilatero {

    var $altezza;
    var $base;

    function setAltezza($altezza) {
        $this->altezza = $altezza;
    }

    function setBase($base) {
        $this->base = $base;
    }

    function area() {
        return $this->base * $this->altezza;
    }

    function perimetro() {
        return 2*($this->base + $this->altezza);
    }

    function diagonale() {
        return sqrt(pow($this->base,2)+pow($this->altezza,2));
    }

}
