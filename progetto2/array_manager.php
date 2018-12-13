<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of array_manager
 *
 * @author cristiano
 */
class array_manager {

    var $numbers;

    function setArray($numbers) {
        $this->numbers = $numbers;
    }

    function print_array() {

        for ($i = 0; $i < count($this->numbers); $i++) {
            echo "{$this->numbers[$i]}\n";
        }
    }

    function print_max() {

        $max = $this->numbers[0];
        for ($i = 1; $i < count($this->numbers); $i++) {
            $number = $this->numbers[$i];
            if ($number > $max) {
                $max = $number;
            }
        }
        return $max;
    }

}
