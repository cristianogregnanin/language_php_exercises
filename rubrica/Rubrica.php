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
include_once 'RubricaAbstract.php';
include_once 'User.php';

class Rubrica extends RubricaAbstract {

    public function remove($user) {

        if (!$this->search($user->getPhone()))
            return false;

        $rubrica = $this->getContent();
        unset($rubrica[$user->getId()]);

        $this->getDb()->setContent($rubrica);
        $this->getDb()->write("w");
        return true;
    }

    public function update($user) {

        if (!$this->search($user->getPhone()))
            return false;

        $rubrica = $this->getContent();
        unset($rubrica[$user->getId()]);
        
        array_push($rubrica, $user->toString());       
        

        $this->getDb()->setContent($rubrica);
        $this->getDb()->write("w");
        return true;
    }

    public function search($param) {
        foreach ($this->getContent() as $key => $value) {
            $fields = explode(' ', $value);

            $name = $fields[0];
            $surname = $fields[1];
            $phone = $fields[2];


            if (strcmp(trim($phone), trim($param)) == 0) {
                $user = new User($name, $surname, $phone);
                $user->setId($key);
                return $user;
            }
        }

        return false;
    }

}
