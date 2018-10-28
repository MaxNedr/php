<?php
$category = getItem("SELECT * FROM `product` WHERE id={$product['id']}")
?>
<div class="text-center">

    <h2><?= $product['product_name'] ?></h2>
    <h4><?= $product['price'] ?> руб.</h4>
    <span><img style="max-width: 70%" src="<?= $product['url']?>"</span>
    <p><?= $product['info'] ?></p>
    <?php if ($_SESSION['auth']['login']) : ?>
        <form>
            <button type="submit" name="addToCart" value="<?= $product['id'] ?>" class="btn btn-outline-success">Buy</button>
        </form>
    <?php endif; ?>
    <br>
    <a href="/catalog.php">Back</a>
</div>