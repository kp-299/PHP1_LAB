<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .detail-box {
            width: 500px;
            margin: 50px auto;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .detail-box img {
            width: 250px;
            height: 250px;
            object-fit: cover;
        }

        h2 {
            color: #333;
        }

        .price {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 12px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-back:hover {
            background-color: #1e7e34;
        }
    </style>
</head>

<body>

<div class="detail-box">

    <?php if ($product): ?>

        <h2><?= $product['name'] ?></h2>

        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">

        <p class="price">
            Giá: <?= number_format($product['price']) ?> VNĐ
        </p>

        <p><?= $product['description'] ?></p>

        <a class="btn-back" href="index.php?act=list">
            Quay lại danh sách
        </a>

    <?php else: ?>

        <h2>Không tìm thấy sản phẩm</h2>

        <a class="btn-back" href="index.php?act=list">
            Quay lại danh sách
        </a>

    <?php endif; ?>

</div>

</body>
</html>