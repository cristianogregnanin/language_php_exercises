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

    public function print_players_in($team) {
        foreach ($this->players as $player) {
            if ($player->getTeam() == $team)
                echo "{$player->getName()}, {$player->getRole()}, {$player->getTeam()} \n";
        }
    }

    public function print_players() {
        foreach ($this->players as $player) {
            echo "{$player->getName()}, {$player->getRole()}, {$player->getTeam()} \n";
        }
    }

    public function team_with_more_goal() {
        $teams = $this->getTeams();
        $goals = $this->calculate_goal($teams);
        return $this->getMaximumGoal($goals);
    }

    private function getMaximumGoal($goals) {

        $max = 0;
        $maxteam = "";
        foreach ($goals as $team => $goal) {
            if ($goal > $max) {
                $max = $goal;
                $maxteam = $team;
            }
        }

        return $maxteam;
    }

    private function calculate_goal($teams) {

        $goals = [];
        foreach ($teams as $team) {

            foreach ($this->players as $player) {
                if ($player->getTeam() == $team)
                    if (isset($goals[$team]))
                        $goals[$team] = intval($goals[$team]) + intval($player->getGoal());
                    else
                        $goals[$team] = intval($player->getGoal());
            }
        }

        return $goals;
    }

    private function getTeams() {

        $teams = [];
        foreach ($this->players as $player) {
            array_push($teams, $player->getTeam());
        }

        return array_unique($teams);
    }

    public function get_older() {
        $max = 0;
        foreach ($this->players as $player) {
            if ($player->getAge() > $max) {
                $older = $player;
                $max = $player->getAge();
            }
        }
        return $older;
    }

    public function get_score() {
        
    }

}
