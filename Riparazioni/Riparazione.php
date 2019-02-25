<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Riparazione
 *
 * @author cristiano
 */
class Riparazione {

    private $indirizzo;
    private $priorita;

    public function getIndirizzo() {
        return $this->indirizzo;
    }

    public function getPriorita() {
        return intval($this->priorita);
    }

}
