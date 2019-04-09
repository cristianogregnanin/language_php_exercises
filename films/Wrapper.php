<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Wrapper
 *
 * @author cristiano
 */
include 'Database.php';
include 'dto/Film.php';
include 'dto/Sala.php';

class Wrapper {

    public function getRecentFilm() {


        $sql = "select * from films.films";
        $films = $this->connector()->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Film');

        $recentFilm = new Film();
        foreach ($films as $film) {
            if ($film->getAnnoDiProduzione() > $recentFilm->getAnnoDiProduzione())
                $recentFilm = $film;
        }

        return $recentFilm;
    }

    public function getOlderFilm() {


        $sql = "select * from films.films";
        $films = $this->connector()->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Film');

        $olderFilm = $films[0];
        foreach ($films as $film) {
            if ($film->getAnnoDiProduzione() < $olderFilm->getAnnoDiProduzione())
                $olderFilm = $film;
        }

        return $olderFilm;
    }

    public function findFilmsByActor($actor) {



        $sql = <<<QUERY
select distinct * from films, recite, attori
where attori.nome = '$actor'
and films.id = recite.film_id
and attori.id = recite.attore_id
QUERY;


        return $this->connector()->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Film');
    }

    public function findRoomsGreaterThan($number) {

        $sql = "select * from films.sale;";
        $sale = $this->connector()->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Sala');

        $array = [];
        foreach ($sale as $sala) {

            if (intval($sala->getPosti()) > $number)
                array_push($array, $sala);
        }

        return $array;
    }

    public function findFilmsByCategory($category) {

        $sql = "select * from films.films where genere = '{$category}'";
        return $this->connector()->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Film');
    }

    public function findFilmsByTitle($char) {

        $sql = "select * from films where titolo like '{$char}%'";
        return $this->connector()->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Film');
    }

    private function connector() {
        $database = new Database("localhost", "3306", "cristiano", "6");
        return $database->connect("films");
    }

}
