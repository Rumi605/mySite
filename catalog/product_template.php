<?php
include '../products.php';
$productId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$products = Product::getAllproducts();

$product = $products[$productId - 1];

?>

<!DOCTYPE html>
<html>
    <head>
     <title>Main Page</title>
     <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet" href="../product.css">
     
    </head>
    <body>
        <header>
            <a href="/">Главная</a>
            <span><?=$product->name?></span> 
        </header>
        <main>
            <div class="photos">
                <img src="<?=$product->image[0]?>" width="200" height="200">
                <img src="<?=$product->image[1]?>" width="200" height="200">
                </div>
            <div>
                <h2 class="name"><?=$product->name?> - <?= $product->price ?> тг</h2>
                <p class="text11">Описание:
                <?=$product->description?>
                 </p>   
            </div>
            <div>
        </div>
            </div>
        </main>
    </body>
    </html>