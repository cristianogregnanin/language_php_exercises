<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include_once '/home/cristiano/language_php_exercises/films/dto/Film.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>create film</title>
    </head>
    <body>
        <h2>Create Film</h2>

        <?php $film = Film::find($_GET['id']) ?>

        <form method='post' action="/actions/films/update.php">
            Regista<br>
            <input type="text" name="regista" value=<?php echo $film->getRegista() ?>>
            <br>Anno di produzione<br>
            <input type="text" name="anno_di_produzione" value=<?php echo $film->getAnnoDiProduzione() ?>>
            <br>Nazionalita<br>
            <input type="text" name="nazionalita" value=<?php echo $film->getNazionalita() ?>>
            <br>Titolo<br>
            <input type="text" name="titolo" value=<?php echo $film->getTitolo() ?>>
            <br>Genere<br>
            <input type="text" name="genere" value=<?php echo $film->getGenere() ?>>
            <br><br>
            <input type="hidden" name="id" value=<?php echo $film->getId() ?>>
            <input type="submit" value="Aggiorna">
        </form> 
    </body>
</html>
