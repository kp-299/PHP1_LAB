<h2>Danh sách sản phẩm</h2>

<?php if (!isset($products) || !is_array($products)) {
    $products = [];
}
?>

<?php foreach ($products as $sp): ?>
    <div style="border:1px solid #000; margin:10px; padding:10px;">
        <img src="<?= $sp['img'] ?>" width="100">
        <h3><?= $sp['name'] ?></h3>
        <p>Giá: <?= $sp['price'] ?> VNĐ</p>
    </div>
<?php endforeach; ?>