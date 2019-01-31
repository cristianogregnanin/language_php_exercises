<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Searcher
 *
 * @author cristiano
 */
include 'SearcherInterface.php';
class Searcher implements SearcherInterface {

    private $content;

    public function __construct($param) {
        $this->content = $param;
    }

    public function search() {
        //TODO implementare ilmetodo 
    }

    public function setContent($param) {
        $this->content = $param;
    }

    public function getContent() {
        return $this->content;
    }

}
