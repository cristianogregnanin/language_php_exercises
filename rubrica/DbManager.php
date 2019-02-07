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
include 'DbManagerInterface.php';

class DbManager implements DbManagerInterface {

    private $content;
    private $path;

    public function __construct($path) {
        $this->content = file($path);
        $this->path = $path;
    }

    public function setContent($param) {
        $this->content = $param;
    }

    public function getContent() {
        return $this->content;
    }

    public function getPath() {
        return $this->path;
    }

    function read() {
        $this->content = file($this->path);
    }

    public function write($mod) {
        if ($mod == "w")
            file_put_contents($this->path, $this->content);
        else
            file_put_contents($this->path, $this->content, FILE_APPEND);
    }

}
