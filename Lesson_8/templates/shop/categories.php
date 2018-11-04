<h1>Категории подушек</h1>

<ul>
    <?php foreach ($cats as $category): ?>
        <li id="<?= $category['id'] ?>">
            <a class="d-inline-block w-25 category_name"  href="/shop/category.php?action=view&id=<?= $category['id'] ?>">
                <?= $category['category_name'] ?>
            </a>
            <?php if (isAdmin()): ?>

                    <button class="btn btn-primary ml-4 mb-1 delete_category" data-id="<?= $category['id'] ?>"
                            name="delete_category">Удалить
                    </button>


            <?php endif ?>
        </li>

    <?php endforeach; ?>

</ul>
<?php if (isAdmin()): ?>
    <div class="card">
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Укажите название категории</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nameCategory"
                           placeholder="Название категории">
                </div>

                <button type="submit" class="btn btn-primary" name="createNewCategory">Создать</button>

            </form>
        </div>
    </div>
<?php endif ?>


<script defer src="../js/category.js"></script>
