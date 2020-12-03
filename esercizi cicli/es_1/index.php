<?php

do {

    $rapporto = 0;

    echo "inserisci il primo numero: \n";
    $n1 = readline();

    echo "inserisci il secondo numero: \n";
    $n2 = readline();



    if ($n1 < $n2) {
        if ($n2 > 0)
            $rapporto = $n1 / $n2;
    }else {
        if ($n1 > 0)
            $rapporto = $n2 / $n1;
    }
    echo "il rapporto è: $rapporto\n";
}while ($n1 != 0 || $n2 != 0);
