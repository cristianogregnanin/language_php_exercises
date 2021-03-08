<?php

include '../../classes.php';

session_start();

$current_user = $_SESSION['current_user'];


$line_items = Cart::fetchAll($current_user);

?>

<html>
    <head>
        <title>Carrello</title>
    </head>

    <body>

        <?php include '../../partial/navbar.php'; ?>

        <?php foreach ($line_items as $line) { ?>
            <ul>
                <li><?php echo $line->getProduct()->getBrand(); ?></li>
                <li><?php echo $line->getProduct()->getName(); ?></li>
                <li><?php echo $line->getProduct()->getPrice(); ?></li>
                <li><?php echo $line->getQuantita(); ?></li>
                <li><?php echo $line->getQuantita() * $line->getProduct()->getPrice(); ?></li>
            </ul>

            <form action="../../actions/edit_cart.php" method="POST">
                <input type="number" name="quantita" value="<?php echo $line->getQuantita(); ?>">
                <input type="hidden" name="id" value="<?php echo $line->getProductId(); ?>">
                <input type="submit" value="submit" >
            </form>


        <?php } ?>
        
        <p>Totale carrello: </p>



    </body>

</html>
