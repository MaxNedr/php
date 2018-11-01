
<h1><?= $item['name'] ?></h1>
<img src="<?= $item['url_img']?>" class="img-rounded" stlye="max-width: 350px; max-height: 350px" alt="">
<p>
    <?= $item['description'] ?>
</p>

<p>
    Цена: <?= $item['price'] ?>p
</p>

<p>
    Осталось: <?= $item['quantity'] ?>
</p>

<p>
    <button class="btn btn-info" id="add-product" data-id="<?= $item['id'] ?>">
        Добавить в корзину
    </button>
</p>

<script src="/js/product.js" defer></script>

