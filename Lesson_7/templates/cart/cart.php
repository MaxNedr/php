<?php
$userName = $_SESSION['auth']['login']
?>
    <h1>Welcome <?php echo $userName ?></h1>

<?php if ($message) : ?>
    <?= $message ?>
<?php else: ?>

    <?php foreach ($productsInCart as $product): ?>
        <div class="card w-100 mb-1">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h5 class="card-title"><?= $product['product_name'] ?></h5>
            <a class="media w-25 " href="catalog.php?id=<?= $product['id'] ?>">
                <img class="media w-25 " src="<?= $product['url'] ?>" alt="Изображение">
            </a>
            <p class="card-text"><?= $product['info'] ?></p>
            <p class="card-text">Цена : <?= $product['price'] ?> руб/шт</p>
            <p class="card-text">Количество : <?= $_SESSION['cart'][$product['id']] ?> шт</p>
            <a href="user.php?action=home&delete=<?= $product['id'] ?>" class="btn btn-outline-danger">Delete</a>

        </div>
    <?php endforeach; ?>
    <form method="post">
        <button name="submit" class="btn btn-primary btn-lg btn-block mt-1">Place your order</button>
    </form>

<?php endif ?>