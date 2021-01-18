<?php

include 'Calcolatrice.php';

class calcolatriceExtension extends Calcolatrice {

    public function getRisultato() {
        $risultato = parent::getRisultato();
        echo "Il risultato è: $risultato\n\n";
    }

}
