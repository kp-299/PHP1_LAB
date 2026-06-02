<?php
session_start();

// Nếu chưa có mảng thì tạo
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

// ===== XỬ LÝ FORM =====
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $image = $_POST['image'];
    $desc = $_POST['desc'];
    $details = $_POST['details'];

    // Thêm vào mảng
    $_SESSION['products'][] = [
        "name" => $name,
        "price" => $price,
        "sale_price" => $sale_price,
        "image" => $image,
        "desc" => $desc,
        "details" => $details
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>➕ Thêm sản phẩm</h2>

<form method="POST">
    Tên: <input type="text" name="name"><br><br>
    Giá: <input type="number" name="price"><br><br>
    Giá giảm: <input type="number" name="sale_price"><br><br>
    Link ảnh: <input type="text" name="image"><br><br>
    Mô tả: <input type="text" name="desc"><br><br>
    Chi tiết: <input type="text" name="details"><br><br>

    <button type="submit" name="add">Thêm sản phẩm</button>
</form>

<hr>

<h2>📦 Danh sách sản phẩm</h2>

<?php foreach ($_SESSION['products'] as $sp): ?>
    <div style="border:1px solid #ccc; margin:10px; padding:10px; width:300px;">
        <img src="<?= $sp['image'] ?>" width="100"><br>
        <b><?= $sp['name'] ?></b><br>
        Giá: <?= number_format($sp['price']) ?> <br>
        Giá giảm: <?= number_format($sp['sale_price']) ?> <br>
        <?= $sp['desc'] ?><br>
        <?= $sp['details'] ?>
    </div>
<?php endforeach; ?>

</body>
</html>