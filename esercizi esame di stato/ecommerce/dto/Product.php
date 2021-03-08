<?php

include '../../classes.php';

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

        $db = new Database('localhost', 3306, 'cristiano', '6');
        $ecommerce = $db->connect('ecommerce');

        $sql = "select * from ecommerce.products";
        return $ecommerce->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Product');
    }
        
    public static function find($id) {
        $sql = "select * from ecommerce.products where id = $id";
        return Product::connector()->query($sql)->fetchObject('Product');
    }

    private static function connector() {
        $database = new Database("localhost", "3306", "cristiano", "6");
        return $database->connect("ecommerce");
    }

}
