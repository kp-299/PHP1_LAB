<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .container {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            width: 250px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
        }

        .product-card img {
            width: 180px;
            height: 180px;
            object-fit: cover;
        }

        .product-card h3 {
            color: #222;
        }

        .price {
            color: red;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<h2>Danh sách sản phẩm</h2>

<div class="container">
    <?php foreach ($product as $product): ?>
        <div class="product-card">
            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">

            <h3><?= $product['name'] ?></h3>

            <p class="price">
                Giá: <?= number_format($product['price']) ?> VNĐ
            </p>

            <p><?= $product['description'] ?></p>

            <a class="btn" href="index.php?act=detail&id=<?= $product['id'] ?>">
                Xem chi tiết
            </a>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>