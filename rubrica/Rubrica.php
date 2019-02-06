<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rubrica
 *
 * @author cristiano
 */
include 'DbManager.php';
include 'RubricaAbstract.php';

class Rubrica extends RubricaAbstract {

    public function search($param) {

        foreach ($this->getContent() as $value) {
            $fields = explode(' ', $value);

            $name = $fields[0];
            $surname = $fields[1];
            $phone = $fields[2];
            if ($phone == $param)
                return new User($name, $surname, $phone);
        }

        return false;
    }

}
