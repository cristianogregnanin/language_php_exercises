<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileManager
 *
 * @author cristiano
 */
abstract class FileManagerAbstract {

    private $source_file;
    private $destination_file;
    private $content;

    public function setContent($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

    public function getSource_file() {
        return $this->source_file;
    }

    public function getDestination_file() {
        return $this->destination_file;
    }

    public function __construct($source_file, $destination_file) {

        $this->source_file = $source_file;
        $this->destination_file = $destination_file;
    }

}
