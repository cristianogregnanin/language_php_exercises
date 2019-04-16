<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author cristiano
 */
class Persona {

    private $cf, $nome, $eta;

    public function __construct($cf, $nome, $eta) {

        $this->eta = $eta;
        $this->nome = $nome;
        $this->cf = $cf;
    }

    public function setCf($param) {
        $this->cf = $param;
    }

    public function setNome($param) {
        $this->nome = $param;
    }

    public function setEta($param) {
        $this->eta = $param;
    }

    public function getCf() {
        return $this->cf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEta() {
        return $this->eta;
    }

}
