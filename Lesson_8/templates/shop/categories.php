<h1>Категории подушек</h1>

<ul>
    <?php foreach ($cats as $category): ?>
    <li>
        <a href="/shop/category.php?action=view&id=<?= $category['id'] ?>">
            <?= $category['category_name'] ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>