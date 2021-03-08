<?php

include '../classes.php';

class Cart {

    private $id, $user_id, $product_id, $quantita;

    function getId() {
        return $this->id;
    }

    function getShopperId() {
        return $this->user_id;
    }

    function getProductId() {
        return $this->product_id;
    }

    function getQuantita() {
        return $this->quantita;
    }

    public function getProduct() {
        $conn = Cart::connector();
        $sql = $conn->prepare("select * from ecommerce.products where id=:id limit 1");
        $sql->bindParam(":id", $this->product_id);
        $sql->execute();
        
        return $sql->fetchObject('Product');
    }

    public function delete() {
        
    }

    public function update() {
        
    }

    public function fetchAll($current_user) {
        $conn = Cart::connector();
        $sql = $conn->prepare("select * from ecommerce.carts where user_id=:user_id");
        $sql->bindParam(":user_id", $current_user->getId());
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS, 'Cart');
    }

    public static function add($shopperId, $productId, $quantita) {
        $conn = Cart::connector();

        $sql = $conn->prepare("insert into ecommerce.carts (user_id,product_id,quantita) values (:user_id,:product_id,:quantita)");
        $sql->bindParam(':user_id', $shopperId);
        $sql->bindParam(':product_id', $productId);
        $sql->bindParam(':quantita', $quantita);
        $sql->execute();
    }

    private static function connector() {
        $database = new Database("localhost", "3306", "cristiano", "6");
        return $database->connect("ecommerce");
    }

}
