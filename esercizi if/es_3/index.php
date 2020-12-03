<?php

//dati 3 numeri indicare il maggiore

$a = 10;
$b = 15;
$c = 20;

if ($a > $b) {

    if ($a > $c) {
        echo "il maggiore è $a";
    } else {
        echo "Il maggiore è $c";
    }
} else {

    if ($b > $c) {
        echo "il maggiore è $b";
    } else {
        echo "Il maggiore è $c";
    }
}
