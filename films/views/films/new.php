<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>create film</title>
    </head>
    <body>
        <h2>Create Film</h2>

        <form method='post' action="/actions/films/create.php">
            Regista<br>
            <input type="text" name="regista" value="">
            <br>Anno di produzione<br>
            <input type="text" name="anno_di_produzione" value="">
            <br>Nazionalita<br>
            <input type="text" name="nazionalita" value="">
            <br>Titolo<br>
            <input type="text" name="titolo" value="">
            <br>Genere<br>
            <input type="text" name="genere" value="">
            <br><br>
            <input type="submit" value="Crea">
        </form> 
    </body>
</html>
