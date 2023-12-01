<?php
require "DBManager.php";

class Materia
{
    private $id;
    private $nome;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function update($params)
    {
        $pdo = DBManager::Connect("orario");

        $id = $this->getId();
        $stm = $pdo->prepare("update materie set nome=:nome where id=:id");
        $stm->bindParam("nome", $params["nome"]);
        $stm->bindParam("id", $id);
        $stm->execute();
        return Materia::Find($id);
    }

    public static function last_record()
    {
        $pdo = DBManager::Connect("orario");
        $stm = $pdo->prepare("select * from materie order by id desc limit 1");
        if ($stm->execute()) {
            return $stm->fetchObject("Materia");
        } else {
            throw new PDOException("Errore nella find");
        }


    }

    public static function Find($id)

    {
        $pdo = DBManager::Connect("orario");
        $stm = $pdo->prepare("select * from materie where id=:id");
        $stm->bindParam("id", $id);
        if ($stm->execute()) {
            return $stm->fetchObject("Materia");
        } else {
            throw new PDOException("Errore nella find");
        }
    }
}


