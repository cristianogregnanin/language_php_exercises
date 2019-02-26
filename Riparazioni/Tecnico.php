<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tecnico
 *
 * @author cristiano
 */
class Tecnico {

    private $nome;
    private $riparazione;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function setRiparazione($param) {
        $this->riparazione = $param;
    }

    public function getPriorita() {
        return intval($this->priorita);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getRiparazione() {
        return $this->riparazione;
    }

}
