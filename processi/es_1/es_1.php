<?php
$pid=pcntl_fork ();

if($pid>0){
  echo "sono nel padre e aspetto che il figlio termini\n";
  pcntl_wait($status);
  echo "mio figlio ha terminato riprendo l'esecuzione";
}
else{
  echo "sono il figlio e adesso eseguo il mio codice\n";
  sleep(60);
  echo "sono il figlio e ho terminato\n";
  exit(1);
}
