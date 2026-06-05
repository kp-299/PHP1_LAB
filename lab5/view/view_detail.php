<h2>Chi tiết sản phẩm</h2>

<h3><?= $product['name'] ?></h3>
<p>Giá: <?= number_format($product['price']) ?> VNĐ</p>
<p>Danh mục: <?= $product['category'] ?></p>
<p>Mô tả: <?= $product['description'] ?></p>

<a href="index.php">Quay lại</a>