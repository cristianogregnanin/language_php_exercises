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
include 'Persona.php';

class Studente extends Persona {

    private $media, $matricola, $padre, $madre;

    public function __construct($cf, $nome, $eta, $media, $matricola, $padre, $madre) {

        $this->media = $media;
        $this->matricola = $matricola;
        $this->madre = $madre;
        $this->padre = $padre;
        parent::__construct($cf, $nome, $eta);
    }

    public function setMedia($param) {
        $this->media = $param;
    }

    public function setMatricola($param) {
        $this->matricola = $param;
    }

    public function setPadre($param) {
        $this->padre = $param;
    }

    public function setMadre($param) {
        $this->madre = $param;
    }

    public function getMadre() {
        return $this->madre;
    }

    public function getPadre() {
        return $this->padre;
    }

    public function getMedia() {
        return $this->media;
    }

    public function getMatricola() {
        return $this->matricola;
    }

}
