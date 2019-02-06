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
abstract class RubricaAbstract {

    private $content;

    public function __construct($path) {
        $db = new DbManager($path);
        $db->read();
        $this->content = $db->getContent();
    }

    public function search() {
        
    }

    public function add($name, $surname, $phone) {

        $user = $name . $surname . $phone;
        $db->write($user);
    }

    public function setContent($param) {
        $this->content = $param;
    }

    public function getContent() {
        return $this->content;
    }

}
