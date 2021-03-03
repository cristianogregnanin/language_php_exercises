<?php

include '../classes.php';

class Cart {

    private $id, $userId, $productId, $quantita;

    function getId() {
        return $this->id;
    }

    function getShopperId() {
        return $this->userId;
    }

    function getProductId() {
        return $this->productId;
    }

    function getQuantita() {
        return $this->quantita;
    }
    
    public function delete(){
        
    }
    
    public function update(){
        
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
