<?php

// L’utente inserisce la propria età e il programma dice se è maggiorenne.

echo "Inserisci la tua età: ";
$a = readline();

if ($a >= 18) {
    echo "Congratulazioni! Sei maggiorenne!";
} else {
    echo "Mi dispiace, non sei ancora maggiorenne!";
} 