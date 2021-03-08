<?php

include '../classes.php';

class Cart {

    private $id, $user_id, $product_id, $quantita;

    function setId($id) {
        $this->id = $id;
    }

    function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    function setProductId($product_id) {
        $this->product_id = $product_id;
    }

    function setQuantita($quantita) {
        $this->quantita = $quantita;
    }

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
        $conn = Cart::connector();
        $sql = $conn->prepare("delete from ecommerce.carts where id=:id");
        $sql->bindParam(":id", $this->id);
        return $sql->execute();
    }

    public function save() {
        $user_id = $this->user_id;
        $quantita = $this->quantita;
        $product_id = $this->product_id;
        $id = $this->id;

        $conn = Cart::connector();

        $sql = $conn->prepare("update ecommerce.carts set quantita =:quantita, product_id = :product_id, user_id = :user_id where id = :id");
        $sql->bindParam(':quantita', $quantita);
        $sql->bindParam(':id', $id);
        $sql->bindParam(':user_id', $user_id);
        $sql->bindParam(':product_id', $product_id);

        return $sql->execute();
    }

    public function fetchAll($current_user) {
        $user_id = $current_user->getId();
        $conn = Cart::connector();
        $sql = $conn->prepare("select * from ecommerce.carts where user_id=:user_id");
        $sql->bindParam(":user_id", $user_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS, 'Cart');
    }

    public static function find_by_product($product_id) {
        $conn = Cart::connector();
        $sql = $conn->prepare("select * from ecommerce.carts where product_id=:product_id");
        $sql->bindParam(":product_id", $product_id);
        $sql->execute();
        return $sql->fetchObject('Cart');
    }

    public static function find($cart_id) {
        $conn = Cart::connector();
        $sql = $conn->prepare("select * from ecommerce.carts where id=:id");
        $sql->bindParam(":id", $cart_id);
        $sql->execute();
        return $sql->fetchObject('Cart');
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
