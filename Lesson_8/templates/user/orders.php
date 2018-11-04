<?php
$ord = getItemArray("select * from users, `order` where order.user_id=users.id");


?>

<div class="card">
    <?php foreach ($ord as $order): ?>
        <div class="card-body" id="<?= $order['id'] ?>">
            <a href="/user.php?action=order&id=<?= $order['id'] ?>"> Заказ № <?= $order['id'] ?> от <?= $order['login'] ?>
                от <?= $order['created_at'] ?> </a>
            <button class="btn btn-primary ml-4 delete_order" data-id="<?= $order['id'] ?>">Удалить</button>
        </div>
    <?php endforeach; ?>
</div>

<script defer src="js/orders.js"></script>