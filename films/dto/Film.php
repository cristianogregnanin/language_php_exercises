<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of film
 *
 * @author cristiano
 */

class Film {

    private $id, $anno_di_produzione, $nazionalita, $regista, $genere, $titolo;

    public function getAnnoDiProduzione() {
        return intval($this->anno_di_produzione);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($param) {
        $this->id = $param;
    }

    public function delete() {

        $conn = Film::connector();
        $id = $this->getID();

        $sql = $conn->prepare("delete from films.films where id = :id ");
        $sql->bindParam(':id', $id);
        $sql->execute();
    }

    public static function fetchAll() {
        $sql = "select * from films.films";
        return Film::connector()->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Film');
    }

    private static function connector() {
        $database = new Database("localhost", "3306", "cristiano", "6");
        return $database->connect("films");
    }

}
