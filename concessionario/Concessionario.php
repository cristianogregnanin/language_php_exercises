<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Concessionario
 *
 * @author cristiano
 */
include 'Car.php';
include 'Park.php';
include 'SearcherInterface.php';

class Concessionario implements SearcherInterface {

    private $cars = [];
    private $parks = [];

    function __construct($parks_path, $cars_path) {
        foreach (file($cars_path) as $car) {
            $fields = explode(" ", $car);
            array_push($this->cars, new Car($fields[0], $fields[1]));
        }

        foreach (file($parks_path) as $park) {
            $fields = explode(" ", $park);
            array_push($this->parks, new Park($fields[0], $fields[1]));
        }
    }

    public function searchCar($param) {
        foreach ($this->cars as $car) {
            if (strcmp(trim($param), trim($car->getTarga())) == 0)
                return $car;
        }
        return false;
    }

    public function searchPark($param) {
        foreach ($this->parks as $park) {
            if (strcmp(trim($param), trim($park->getName())) == 0)
                return $park;
            if (strcmp(trim($param), trim($park->getId())) == 0)
                return $park;
        }
        return false;
    }

    public function getNewer() {

        $carMin = $this->cars[0];

        foreach ($this->cars as $car) {
            if (intval($car->getViaggi()) <= intval($carMin->getViaggi()))
                $carMin = $car;
        }
        return $carMin;
    }

    public static function searchParkStatic($parkId) {
        $concessionario = new self('parks.txt', 'cars.txt');
        $concessionario->searchPark($parkId);
    }

}
