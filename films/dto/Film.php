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
include_once '/home/cristiano/language_php_exercises/films/Database.php';

class Film {

    private $id, $anno_di_produzione, $nazionalita, $regista, $genere, $titolo;

    public function getAnnoDiProduzione() {
        return intval($this->anno_di_produzione);
    }

    public function getId() {
        return $this->id;
    }

    public function getNazionalita() {
        return $this->nazionalita;
    }

    public function getRegista() {
        return $this->regista;
    }

    public function getGenere() {
        return $this->genere;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function setGenere($param) {
        $this->genere = $param;
    }

    public function setRegista($param) {
        $this->regista = $param;
    }

    public function setNazionalita($param) {
        $this->nazionalita = $param;
    }

    public function setAnnoDiProduzione($param) {
        $this->anno_di_produzione = $param;
    }

    public function setTitolo($param) {
        $this->titolo = $param;
    }

    public function save() {
        $id = $this->id;
        $titolo = $this->titolo;
        $anno_di_produzione = $this->anno_di_produzione;
        $genere = $this->genere;
        $regista = $this->regista;
        $nazionalita = $this->nazionalita;

        $conn = Film::connector();

        $sql = $conn->prepare("update films.films set nazionalita =:nazionalita, regista = :regista, genere = :genere, titolo = :titolo, anno_di_produzione = :anno_di_produzione where id = :id; ");
        $sql->bindParam(':id', $id);
        $sql->bindParam(':titolo', $titolo);
        $sql->bindParam(':anno_di_produzione', $anno_di_produzione);
        $sql->bindParam(':genere', $genere);
        $sql->bindParam(':regista', $regista);
        $sql->bindParam(':nazionalita', $nazionalita);

        $sql->execute();
    }

    public function delete() {

        $conn = Film::connector();
        $id = $this->getId();

        $sql = $conn->prepare("delete from films.films where id = :id ");
        $sql->bindParam(':id', $id);
        $sql->execute();
    }

    public function getDeleteLink() {
        return "http://localhost:8000/actions/films/delete.php?id={$this->getId()}";
    }

    public function getEditLink() {
        return "http://localhost:8000/views/films/edit.php?id={$this->getId()}";
    }

    public static function fetchAll() {
        $sql = "select * from films.films";
        return Film::connector()->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Film');
    }

    public static function find($id) {
        $sql = "select * from films.films where id = $id";
        return Film::connector()->query($sql)->fetchObject('Film');
    }

    private static function connector() {
        $database = new Database("localhost", "3306", "cristiano", "6");
        return $database->connect("films");
    }

    public static function Create($titolo, $anno_di_produzione, $genere, $regista, $nazionalita) {
        $conn = Film::connector();

        $sql = $conn->prepare("insert into films.films (titolo,anno_di_produzione,genere,regista,nazionalita) values (:titolo,:anno_di_produzione,:genere,:regista,:nazionalita)");
        $sql->bindParam(':titolo', $titolo);
        $sql->bindParam(':anno_di_produzione', $anno_di_produzione);
        $sql->bindParam(':genere', $genere);
        $sql->bindParam(':regista', $regista);
        $sql->bindParam(':nazionalita', $nazionalita);
        $sql->execute();
    }

}
