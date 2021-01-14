<?php

class ArrayManager {

    public static function max($numbers) {
        $max = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            if ($numbers[$i] > $max)
                $max = $numbers[$i];
        }
        return $max;
    }

    public static function min($numbers) {
        $min = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            if ($numbers[$i] < $min)
                $min = $numbers[$i];
        }
        return $min;
    }

    public static function media($numbers) {
        $tot = 0;
        for ($i = 0; $i < count($numbers); $i++)
            $tot = $tot + $numbers[$i];

        return $tot / count($numbers);
    }

    public static function ricercaSequenziale($numbers, $number) {
        for ($i = 0; $i < count($numbers); $i++) {
            if ($number == $numbers[$i])
                return $i;
        }
        return -1;
    }

    public static function ricercaDicotomica($numbers, $number) {

        sort($numbers);

        $inf = 0;
        $sup = count($numbers) - 1;
        $center = (int) (($inf + $sup) / 2);


        while ($inf <= $sup) {
            if ($number == $numbers[$center])
                return $center;

            if ($number > $numbers[$center]) {
                $inf = $center + 1;
                $center = (int) (($inf + $sup) / 2);
            } else {
                $sup = $center - 1;
                $center = (int) (($inf + $sup) / 2);
            }
        }
        return -1;
    }

    public static function generaArray($n) {
        $numbers = array();
        for ($i = 0; $i < $n; $i++)
            $numbers[$i] = rand(0, 100);
        return $numbers;
    }

    public static function stampa($numbers) {
        for ($i = 0; $i < count($numbers); $i++)
            echo "$numbers[$i]\n";
    }

}
