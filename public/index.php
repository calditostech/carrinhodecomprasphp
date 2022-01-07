<?php
use app\classes\Cart;

session_start();

require '../vendor/autoload.php';

$products = require '../app/helpers/products.php';

$cart = new Cart;

$cart->quantity(4,5);
$cart->dump();

$productsInCart = (new Cart)->cart();
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    
      <div id="container">
          <h3>Cart: <?php echo count($productsInCart); ?> | <a href="cart.php"> Go To Cart </a></h3>
          <ul>
           <?php foreach($products as $index => $product): ?>
                  <li><?php echo $product['name']; ?> | R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></li> <a href="add.php?id=<?php echo $index ?>">add to cart</a>
           <?php endforeach; ?>
          </ul>
</body>
</html>