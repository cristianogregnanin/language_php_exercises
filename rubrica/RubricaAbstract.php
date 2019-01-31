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
    
    public function __construct() {
        $db = new DbManager();
        $this->content = $db->read();
    }

    public function search() {
        
    }

    public function add($name, $surname, $phone) {

        $contact = $name . $surname . $phone;
        $db->write($contact);
    }

}
