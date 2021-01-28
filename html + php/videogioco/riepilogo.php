<?php session_start(); ?>
<?php var_dump($_SESSION); ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Punteggi videogames</title>
    </head>
    <body>
        <p>il gioco è: <?php echo $_SESSION['gioco']; ?> </p>
        <br><br>
        <p>il punteggio è: <?php echo $_SESSION['punti']; ?> </p>

    </body>
</html>

