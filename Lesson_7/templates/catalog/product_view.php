<?php
$category = getItem("SELECT * FROM `product` WHERE id={$product['id']}")
?>
<div class="text-center">

    <h2><?= $product['product_name'] ?></h2>
    <h4><?= $product['price'] ?> руб.</h4>
    <span><img style="max-width: 70%" src="<?= $product['url']?>"</span>
    <p><?= $product['info'] ?></p>
    <br>
    <a href="/catalog.php">Back</a>
</div>