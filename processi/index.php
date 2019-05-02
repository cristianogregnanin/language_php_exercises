
<?php

$pid = pcntl_fork();

if ($pid == -1) {
    echo "Errore creazione figlio";
} else if ($pid) {
    // siamo nel padre


    pcntl_wait($status); //padre attende che il figlio termini
    echo "mio figlio ha terminato riprendo l'esecuzione\n";
    sleep(5);
    echo "ho finito di eseguire\n";
} else {
    // siamo nel figlio
    echo "sono il figlio\n";
    sleep(5);
    exit(1);
}
