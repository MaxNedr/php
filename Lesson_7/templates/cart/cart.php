<?php foreach ($productsInCart as $product):?>
<div class="card w-100 mb-1">
  <div class="card-body">
    <h5 class="card-title"><?= $product['product_name'] ?></h5>
    <p class="card-text"><?= $product['info'] ?></p>
    <a href="#" class="btn btn-primary">Delete</a>
  </div>
</div>
<?php endforeach; ?>
<form method="post">
    <button name="submit" class="btn btn-primary btn-lg btn-block mt-1">Place your order</button>
</form>

