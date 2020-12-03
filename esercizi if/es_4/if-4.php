<?php

// 1. Acquisire un numero e stamparne il valore assoluto.

echo "inserisci un numero: ";
$number = readline();

if ($number > 0) {
    echo $number;
} else {
    echo -$number;
    // echo $number * -1;
}
