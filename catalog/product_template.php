<?php
include '../products.php';
$productId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$products = Product::getAllproducts();

$product = $products[$productId];

?>


<!DOCTYPE html
<html>
    <head>
     <title>Main Page</title>
     <meta name="viewport" content="width=devise-width, inital scale=1">
     <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet" href="/product.css">
     
    </head>
    <body>
        <header>
            <a href="/">Главная</a>
            <span><?=$product->name?></span> 
        </header>
        <main>
            <div>
                <img src="<?=$product->image[0]?>" width="200" height="200">
                <img src="<?=$product->image[1]?>" alt="Картинка товара" width="200" height="200">
                </div>
            <div>
                <h2><?=$product->name?></h2>
                <p>Описание:
                <?=$product->description?>
                 </p>   
            </div>
            <div>
        </div>
            </div>
        </main>
    </body>
    </html>