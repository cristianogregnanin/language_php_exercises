<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Appartamento
 *
 * @author cristiano
 */
include "Casa.php";

class Appartamento extends Casa {

    private $piano;

    public function __construct($metri, $colore, $categoria, $piano) {
        $this->piano = $piano;
        parent::__construct($metri, $colore, $categoria);
    }

    public function SetPiano($param) {
        $this->piano = $param;
    }

    public function GetPiano() {
        return $this->piano;
    }

}
