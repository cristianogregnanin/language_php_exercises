<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calciatori
 *
 * @author cristiano
 */
class Calciatore {

    private $name;
    private $role;
    private $age;
    private $team;
    private $goal;

    public function __construct($name, $role, $age, $team, $goal) {
        $this->name = $name;
        $this->role = $role;
        $this->age = $age;
        $this->team = $team;
        $this->goal = $goal;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getRole() {
        return $this->role;
    }

    public function getGoal() {
        return $this->goal;
    }

    public function getTeam() {
        return $this->team;
    }

}
