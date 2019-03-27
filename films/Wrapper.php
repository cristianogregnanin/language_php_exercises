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
include 'Film.php';

class Wrapper {

    public function getRecentFilm() {


        $database = new Database("localhost", "3306", "cristiano", "6");
        $connection = $database->connect("films");
        $sql = "select * from films.films";
        $films = $connection->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Film');

        $recentFilm = new Film();
        foreach ($films as $film) {
            if ($film->getAnnoDiProduzione() > $recentFilm->getAnnoDiProduzione())
                $recentFilm = $film;
        }

        return $recentFilm;
    }

}
