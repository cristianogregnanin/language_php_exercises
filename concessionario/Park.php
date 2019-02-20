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
class Park {

    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->name = $name;
        $this->id = $id;
    }

    public function GetName() {
        return $this->name;
    }

    public function GetId() {
        return $this->id;
    }

    public function SetName($param) {
        $this->name = $param;
    }

    public function SetId($param) {
        $this->id = $param;
    }

}
