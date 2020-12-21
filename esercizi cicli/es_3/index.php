<?php

$i=0;

while($i<7){
	echo "inserisci un numero: \n";
	$numero = readline();
	if($numero%2==0)
		echo "numero pari\n";
	else
		echo "numero dispari\n";
	$i=$i+1;
}

