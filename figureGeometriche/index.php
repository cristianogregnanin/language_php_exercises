<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "Cerchio.php";
include "Triangolo.php";
include "Quadrilatero.php";


$cerchio = new Cerchio(15);
echo "L'area del cerchio di raggio {$cerchio->getRaggio()} è: {$cerchio->Area()}\n";
echo "Il perimetro del cerchio di raggio {$cerchio->getRaggio()} è: {$cerchio->Perimetro()}\n\n";


$triangolo = new Triangolo(15,10,12,16);
echo "L'area del triangolo {$triangolo->Area()}\n";
echo "Il perimetro del triangolo è: {$triangolo->Perimetro()}\n\n";



$quadrilatero = new Quadrilatero(15,10);
echo "L'area del quadrilatero {$quadrilatero->Area()}\n";
echo "Il perimetro del quadrilatero è: {$quadrilatero->Perimetro()}\n\n";

