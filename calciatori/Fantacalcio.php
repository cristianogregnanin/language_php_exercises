<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fantacalcio
 *
 * @author cristiano
 */
include 'Calciatore.php';

class Fantacalcio {

    private $players = [];

    public function __construct($path) {
        $array = file($path);

        foreach ($array as $player) {
            $fields = explode(" ", $player);

            array_push($this->players, new Calciatore($fields[0], $fields[1], $fields[2], $fields[3], $fields[4]));
        }
    }

    public function print_players() {
        foreach ($this->players as $player) {
            echo "{$player->getName()}, {$player->getRole()}, {$player->getTeam()} \n\n";
        }
    }

}
