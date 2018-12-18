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

    function search($num) {
        for ($i = 1; $i < count($this->numbers); $i++) {
            $number = $this->numbers[$i];
            if ($number == $num) {
                return true;
            }
        }
    }

    public function add($number) {
        array_push($this->numbers, $number);
    }

    public function add_list($numbers) {
        for ($i = 0; $i < count($numbers); $i++) {
            $number = $numbers[$i];
            array_push($this->numbers, $number);
        }
    }

    public function remove_element($num) {
        for ($i = 0; $i < count($this->numbers); $i++) {
            $number = $this->numbers[$i];
            if ($number == $num) {
                $pos = $i;
            }
        }

        for ($i = $pos; $i < count($this->numbers)-1; $i++) {
            $this->numbers[$i] = $this->numbers[$i + 1];
        }
    }

    public function remove_at_index($pos) {

        for ($i = $pos; $i < count($this->numbers)-1; $i++) {
            $this->numbers[$i] = $this->numbers[$i + 1];
        }
    }

    public function add_at_index($number, $pos) {
        $this->numbers[$pos] = $number;
    }

}
