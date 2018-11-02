<?php

$orders = getItemArray("select DISTINCT * from product, order_item, category, `order`, users 
where product.id=order_item.product_id&& product.category_id=category.id&& order.user_id=users.id&& order.id={$_GET['id']}");

?>

<div class="card">
    <?php foreach ($orders as $order): ?>
    <h5 class="card-header"> Заказ № <?= $order['order_id']  ?></h5>
    <div class="card-body">
        <h5 class="card-title">Дата и время заказа: <?= $order['created_at']  ?></h5>
        <p class="card-text">Из категории: <?= $order['category_name'] ?>, товар: <?= $order['name']  ?></p>
        <p class="card-text">Количество: <?= $order['quantity']  ?> шт</p>
        <p class="card-text"> Цена: <?= $order['price'] ?> руб/шт</p>
        <p class="card-text">Заказ оформил: <?= $order['login']  ?></p>
        <p class="card-text">Статус заказа: <?= $order['status']  ?></p>
        <?php endforeach;  ?>
        <button class="btn btn-primary">В работу</button>
        <button  class="btn btn-primary">Удалить</button>
    </div>

</div>