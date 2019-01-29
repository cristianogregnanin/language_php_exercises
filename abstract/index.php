<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "OperationsClass.php";

$math = new OperationsClass(10,5);


echo "{$math->divide()}\n";
echo "{$math->minus()}\n";
echo "{$math->sum()}\n";
echo "{$math->multiplicate()}\n";

echo "{$math->pow()}\n";