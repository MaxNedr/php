<?php foreach ($products as $product) : ?>
    <div class="media m-2">
        <a href="?id=<?= $product['id'] ?>">
            <img class="mr-3" style="width: 256px; height: 256px " src="<?= $product['url'] ?>" alt="<?= $product['product_name'] ?>">
        </a>
        <div class="media-body">
            <a href="?id=<?= $product['id'] ?>"><h5 class="mt-0"><?= $product['name'] ?></h5></a>
            <h6 style="color: red"><?= $product['price'] ?> руб.</h6>
            <?= $product['info'] ?>
        </div>
    </div>
<?php endforeach; ?>
