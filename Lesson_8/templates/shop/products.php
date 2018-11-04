<h1>Товары в категории</h1>

<ul class="list-group">
    <?php foreach ($prods as $product): ?>
        <li class="list-unstyled  d-flex mb-1" id="<?= $product['id'] ?>">
            <a href="/shop/product.php?id=<?= $product['id'] ?>"
               class="list-group-item list-group-item-action list-group-item-success">
                <?= $product['name'] ?>
            </a>
            <?php if (isAdmin()): ?>

                <button class="btn btn-primary ml-4 mb-1 delete_product" data-id="<?= $product['id'] ?>"
                        name="delete_product">Удалить
                </button>


            <?php endif ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php if (isAdmin()): ?>
    <div class="card mt-4">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Имя товара</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nameProduct"
                           placeholder="Название товара" required>
                    <label for="exampleFormControlInput2">Описание товара</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" name="descriptionProduct"
                           placeholder="Описание товара" required>
                    <label for="exampleFormControlInput3">Цена товара</label>
                    <input type="number" class="form-control" id="exampleFormControlInput3" name="priceProduct"
                           placeholder="Цена товара" required>
                    <label for="exampleFormControlInput4">Остаток на складе</label>
                    <input type="number" min="0" class="form-control" id="exampleFormControlInput4" name="quantityProduct"
                           placeholder="Остаток на складе" required>
                    <label for="exampleFormControlFile6">Добавить изображение</label>
                    <input type="file" name="img_file" accept="image/*" class="form-control-file"
                           id="exampleFormControlFile6" required>
                </div>

                <button type="submit" class="btn btn-primary" name="createNewProduct">Создать</button>

            </form>
        </div>
    </div>

<?php endif ?>

<script defer src="../js/delete_product.js"></script>

