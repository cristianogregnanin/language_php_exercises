<?php

session_start();


echo "nome del videogioco: {$_POST['gioco']}";
echo "punteggio del videogioco: {$_POST['punti']}";

$_SESSION['gioco']=$_POST['gioco'];
$_SESSION['punti']=$_POST['punti'];
