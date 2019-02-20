<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author cristiano
 */
interface DittaRiparazioniInterface {

    public function __construct($tecnici_path, $riparazioni_path);

    public function aggRiparazione($unIndirizzo, $unaPriorita);

    public function riparazioniInAttesa();

    public function prossimaRiparazione();

    public function assegnaRiparazione();

    public function terminaRiparazione($unNome);

    public function aggTecnico($unNome);

    public function ferie($listaNomi);
}
