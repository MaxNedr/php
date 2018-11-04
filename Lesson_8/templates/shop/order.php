<?php

$orders = getItemArray("select DISTINCT * from product, order_item, category, `order`, users 
where product.id=order_item.product_id&& product.category_id=category.id&& order.user_id=users.id&&order.id=order_item.order_id&& order.id={$_GET['id']}");

?>

<div class="card">
    <h5 class="card-header"> Заказ № <?php echo $_GET['id'] ?></h5>
    <?php foreach ($orders as $order): ?>
        <div class="card-body card">
<!--            <h5 class="card-title">Дата и время заказа: --><?//= $order['created_at'] ?><!--</h5>-->
            <p class="card-text">Из категории: <?= $order['category_name'] ?>, товар: <?= $order['name'] ?></p>
            <p class="card-text">Количество: <?= $order['quantity'] ?> шт</p>
            <p class="card-text"> Цена: <?= $order['price'] ?> руб/шт</p>
            <p class="card-text">Заказ оформил: <?= $order['login'] ?></p>
            <p class="card-text">Статус заказа: <?= $order['status'] ?></p>
        </div>

    <?php endforeach; ?>

</div>