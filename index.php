<?php
include 'products.php';
$products = Product::getAllProducts();
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <header></header>
    <main class="main">
      <section class="motto">
        <img src="./img/bookstore-cat.jpeg" />
        <h1>Доставка</h1>
        <p class="count">Оперативно и недорого</p>
      </section>
      <section class="products">
        <h2>Товары</h2>

        <?php foreach ($products as $product): ?> 
        <div class="card" data-id="<?= $product->id ?>">
          <img
            src="<?= $product->image[0] ?>" alt="<?= $product->name ?>"
            width="200px"
            height="200"
          />
          <a href="./catalog/product_template.php?id=<?= $product->id ?>">
            <h3 class="product-name"><?= $product->name ?></h3>
          </a>
          <p class="count"><?= $product->quantity ?></p>
          <div class="row">
            <div class="buttons">
              <button class="decrease">-</button>
              <span class="quantity">1</span>
              <button class="increase">+</button>
            </div>
            <span><?= $product->price ?> тг</span> 
          </div>
          <button class="additem">Добавить в корзину</button>
        </div>
        <?php endforeach; ?>

      </section>
      <section class="busket">
        <div class="basket-block">
          <p class="offer">Ваш заказ</p>
          <div class="cart-items"></div>
          <div class="s">
            <p class="del">Доставка:</p>
            <p  class="best"> бесплатно</p>
          </div>
          <div class="busketblock4">
            <p class="del">Итого:</p>
            <p class="total"></p>
          </div>
          <form action="/order/order.html" method="POST">
            <legend class="text">Оформить заказ</legend>
            <input type="hidden" name="cart" class="cart-input">
            <input type="phone" name="phone" placeholder="Ваш номер телефона" class="phone-number" required>
            <button type="submit" class="busketblock10" id="order">Заказать</button>
          </form>
        </div>
      </section>
    </main>
    <footer></footer>
    <script src="/cart.js"></script>
  </body>
</html>
