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

include 'FileManagerAbstract.php';
class FileManager extends FileManagerAbstract {

    public function read() {
        $this->setContent(file($this->getSource_file()));
    }
    
    public function write() {
        file_put_contents($this->getDestination_file(), $this->getContent());
    }

}
