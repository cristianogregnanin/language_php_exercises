<?php 

include '../../partial/session.php'; 



include '../Database.php';
include '../../dto/User.php';
include '../../dto/Product.php';

session_start();

$products = Product::fetchAll();


?>

<html>
    <head>
        <title>Catalogo</title>
    </head>

    <body>

        <?php include '../../partial/navbar.php'; ?>

        <?php foreach ($products as $product) { ?>
            <ul>
                <li><?php echo $product->getBrand() ?></li>
                <li><?php echo $product->getName() ?></li>
                <li><?php echo $product->getPrice() ?></li>
            </ul>

            <form action="add_to_cart" method="POST">
                <input type="number" name="quantita" placeholder="quantita">
                <input type="hidden" name="id" value="<?php $product->getId() ?>">
                <input type="submit" value="submit" >
            </form>


        <?php } ?>


    </body>

</html>
