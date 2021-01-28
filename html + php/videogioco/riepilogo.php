<?php session_start(); ?>
<?php
$max = 0;
foreach ($_SESSION['videogiochi'] as $key => $value) {
    if ($max < $value) {
        $max = $value;
        $gioco = $key;
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Punteggi videogames</title>
    </head>
    <body>
        <ul>
            <?php foreach ($_SESSION['videogiochi'] as $key => $value) { ?>
                <li><?php echo "$key: $value" ?></li>
            <?php } ?>
        </ul>
        <br>

        <p>il gioco con il punteggio maggiore è : <?php echo $gioco ?> </p>
        <br>    
        <p>il suo punteggio è: <?php echo $max; ?> </p>

    </body>
</html>

