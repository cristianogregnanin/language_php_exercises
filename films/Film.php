<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of film
 *
 * @author cristiano
 */
class Film {

    private $id, $anno_di_produzione, $nazionalita, $regista, $genere, $titolo;

    public function getAnnoDiProduzione() {
        return intval($this->anno_di_produzione);
    }

}
