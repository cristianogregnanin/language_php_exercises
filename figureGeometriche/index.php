<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "Cerchio.php";
include "Triangolo.php";
include "Quadrilatero.php";

$figure=[];

array_push($figure, new Cerchio(5));
array_push($figure, new Cerchio(10));

$cerchio = new Cerchio(15);
echo $cerchio->Area();
echo $cerchio->Perimetro();

