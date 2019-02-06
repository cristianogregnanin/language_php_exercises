<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RubricaAbstract
 *
 * @author cristiano
 */
include_once 'DbManager.php';

abstract class RubricaAbstract {

    private $content;
    private $db;

    public function __construct($path) {
        $this->db = new DbManager($path);
        $this->db->read();
        $this->content = $this->db->getContent();
    }

    public function search($param) {
        
    }

    public function add($name, $surname, $phone) {

        $this->db->setContent("\n" . $name . " " . $surname . " " . $phone);
        $this->db->write();
    }

    public function setContent($param) {
        $this->content = $param;
    }

    public function getContent() {
        return $this->content;
    }

}
