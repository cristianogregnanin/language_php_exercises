<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DittaRiparazioni
 *
 * @author cristiano
 */
include 'DittaRiparazioniInterface.php';
include 'Tecnico.php';
include 'Riparazione.php';

class DittaRiparazioni implements DittaRiparazioniInterface {

    private $tecnici = [];
    private $riparazioni = [];

    public function __construct($tecnici_path, $riparazioni_path) {
        foreach (file($tecnici_path) as $tecnico) {
            $fields = explode(" ", $tecnico);
            array_push($this->tecnici, new Tecnico($fields[0], $fields[1]));
        }

        foreach (file($riparazioni_path) as $riparazione) {
            $fields = explode(" ", $riparazione);
            array_push($this->riparazioni, new Riparazione($fields[0], $fields[1]));
        }
    }

    public function aggRiparazione($unIndirizzo, $unaPriorita) {
        $riparazione = new Riparazione($unIndirizzo, $unaPriorita);
        array_push($this->riparazioni, $riparazione);
        return $riparazione;
    }

    public function aggTecnico($unNome) {
        $tecnico = new Tecnico($unNome);
        array_push($this->tecnici, $tecnico);
        return $tecnico;
    }

    public function assegnaRiparazione() {
        $riparazione = $this->prossimaRiparazione();
        foreach ($this->tecnici as $tecnico) {
            if (!$tecnico->getRiparazione()) {
                $tecnico->setRiparazione($riparazione);
                break;
            }
        }
    }

    public function ferie($listaNomi) {
        
    }

    public function prossimaRiparazione() {
        $riparazioni = $this->riparazioniInAttesa();
        $prossima = $riparazioni[0];

        foreach ($riparazioni as $riparazione)
            if ($prossima->getPriorita() < $riparazione->getPriorita())
                $prossima = $riparazione;

        return $prossima;
    }

    public function riparazioniInAttesa() {
        foreach ($this->riparazioni as $k => $riparazione) {

            $riparazioniInAttesa = $this->riparazioni;


            foreach ($this->tecnici as $tecnico) {
                $indirizzo1 = trim($riparazione->getIndirizzo());
                $indirizzo2 = trim($tecnico->getRiparazione()->getIndirizzo());
                if (strcmp($indirizzo1, $indirizzo2) == 0) {
                    unset($riparazioniInAttesa[$k]);
                }
            }
        }
        return $riparazioniInAttesa;
    }

    public function terminaRiparazione($unNome) {
        foreach ($this->tecnici as $tecnico) {

            if (strcmp(trim($tecnico->getName()), trim($unNome)) == 0) {
                $riparazioneTerminata = $tecnico->getRiparazione();
                $tecnico->setRiparazione(null);
            }
        }

        foreach ($this->riparazioni as $key => $riparazione) {

            $indirizzo1 = trim($riparazione->getIndirizzo());
            $indirizzo2 = trim($riparazioneTerminata->getIndirizzo());

            if (strcmp($indirizzo1, $indirizzo2) == 0) {
                $index = $key;
            }
        }
        unset($this->riparazioni[$index]);
    }

    public function GetRiparazioni() {
        return $this->riparazioni;
    }

    public function GetTecnici() {
        return $this->tecnici;
    }

}
