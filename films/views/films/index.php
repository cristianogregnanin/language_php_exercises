<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '/home/cristiano/language_php_exercises/films/dto/Film.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>


    </head>
    <body>


        <h2>Films</h2>

        <a href="" >Crea film</a>

        <table>
            <tr>
                <th>Id</th>
                <th>Titolo</th>
                <th>Genere</th>
                <th>Nazionalita</th>
                <th>Regista</th>
                <th>Anno di Produzione</th>
                <th>azioni</th>
            </tr>


            <?php foreach (Film::fetchAll() as $film) { ?>
                <tr>
                    <td><?php echo $film->getId() ?></td>
                    <td><?php echo $film->getTitolo() ?></td>
                    <td><?php echo $film->getGenere() ?></td>
                    <td><?php echo $film->getNazionalita() ?></td>
                    <td><?php echo $film->getRegista() ?></td>
                    <td><?php echo $film->getAnnoDiProduzione() ?></td>
                    <td><a href="" >Modifica</a> | <a href=<?php echo $film->getDeleteLink() ?> >Elimina</a></td>
                </tr>
            <?php } ?>
        </table>

    </body>
</html>
