<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of computer
 *
 * @author cristiano
 */
class computer {

    private $hdd;
    private $ram;
    private $cpu;

    public function __construct($cpu, $hdd, $ram) {
        $this->cpu = $cpu;
        $this->hdd = $hdd;
        $this->ram = $ram;
        
    }

    function getHdd() {
        return $this->hdd;
    }

    function getRam() {
        return $this->ram;
    }

    function getCpu() {
        return $this->cpu;
    }

    function setHdd($param) {
        $this->hdd = $param;
    }

    function setRam($param) {
        $this->ram = $param;
    }

    function setCpu($param) {
        $this->cpu = $param;
    }

}
