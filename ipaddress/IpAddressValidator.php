<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IpAddressValidator
 *
 * @author cristiano
 */
include 'IpAddressValidatorInterface.php';

class IpAddressValidator implements IpAddressValidatorInterface {

    private $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

    public function IpAddressValidator() {
        $not_valid = [];
        foreach ($this->content as $key => $value) {
            $fields = explode(":", $value);
            $numbers = explode(".", $fields[0]);

            foreach ($numbers as $number) {

                if (intval($number) > 255) {
                    array_push($not_valid, $key);
                    break;
                }
            }
        }
        foreach ($not_valid as $index) {
            unset($this->content[$index]);
        }
    }

    public function PortValidator() {
        $not_valid = [];
        foreach ($this->content as $key => $value) {
            $fields = explode(":", $value);
            $port = $fields[1];

            if (intval($port) > 65536)
                array_push($not_valid, $key);
        }
        foreach ($not_valid as $index) {
            unset($this->content[$index]);
        }
    }

}
