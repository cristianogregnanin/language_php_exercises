<?php

class Product {

    private $id, $name, $brand, $price;

    function getId() {
        return $this->id;
    }

    function getBrand() {
        return $this->brand;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function setBrand($brand) {
        $this->brand = $brand;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    public static function fetchAll() {
        
    }

}
