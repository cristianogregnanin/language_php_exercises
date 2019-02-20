<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Car
 *
 * @author cristiano
 */
class Car {

    private $targa;
    private $parcheggio;
    private $viaggi = 0;

    public function __construct($targa, $parcheggio) {
        $this->targa = $targa;
        $this->parcheggio = $parcheggio;
    }

    public function GetParcheggio() {
        return $this->parcheggio;
    }

    public function GetTarga() {
        return $this->targa;
    }

    public function GetViaggi() {
        return $this->viaggi;
    }

    public function SetViaggi($param) {
        $this->viaggi = $param;
    }

    public function SetParcheggio($param) {
        $this->parcheggio = $param;
    }

    public function SetTarga($param) {
        $this->targa = $param;
    }

    public function moveToPark($parkId) {

        $park = Concessionario::searchParkStatic($parkId);

        if ($park == false)
            $park = new Park($parkId, "");

        $this->SetParcheggio($park->getId());
        $this->viaggi = intval($this->viaggi) + 1;
    }

}
