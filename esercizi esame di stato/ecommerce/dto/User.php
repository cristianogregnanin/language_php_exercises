<?php

include '../classes.php';

class User {

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }

    public function getId() {
        return $this->id;
    }

    public static function find($id) {
        $sql = "select id,mail,name,role from ecommerce.users where id = $id";
        return User::connector()->query($sql)->fetchObject('User');
    }

    private static function connector() {
        $database = new Database("localhost", "3306", "cristiano", "6");
        return $database->connect("ecommerce");
    }

    /*
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
     */
}
