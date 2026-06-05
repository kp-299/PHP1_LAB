<h2>Danh sách sản phẩm</h2>

<?php foreach ($products as $p): ?>
    <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
        <h3><?= $p['name'] ?></h3>
        <p>Giá: <?= number_format($p['price']) ?> VNĐ</p>
        <p>Danh mục: <?= $p['category'] ?></p>

        <a href="index.php?action=detail&id=<?= $p['id'] ?>">
            Xem chi tiết
        </a>
    </div>
<?php endforeach; ?>