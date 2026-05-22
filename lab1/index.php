<?php

$products = [
    [
        "id" => 1,
        "name" => "Cà Phê Arabica Đà Lạt",
        "price" => 180000,
        "image" => "https://picsum.photos/seed/coffee1/300/300"
    ],
    [
        "id" => 2,
        "name" => "Cà Phê Robusta Nguyên Chất",
        "price" => 150000,
        "image" => "https://picsum.photos/seed/coffee2/300/300"
    ],
    [
        "id" => 3,
        "name" => "Cold Brew Chai Thủy Tinh",
        "price" => 220000,
        "image" => "https://picsum.photos/seed/coffee3/300/300"
    ],
    [
        "id" => 4,
        "name" => "Ly Giữ Nhiệt Cafe",
        "price" => 320000,
        "image" => "https://picsum.photos/seed/coffee4/300/300"
    ],
    [
        "id" => 5,
        "name" => "Máy Xay Cafe Mini",
        "price" => 550000,
        "image" => "https://picsum.photos/seed/coffee5/300/300"
    ],
    [
        "id" => 6,
        "name" => "Bộ Pha Pour Over",
        "price" => 450000,
        "image" => "https://picsum.photos/seed/coffee6/300/300"
    ],
    [
        "id" => 7,
        "name" => "Hạt Cafe Espresso Blend",
        "price" => 200000,
        "image" => "https://picsum.photos/seed/coffee1/300/300"
    ],
    [
        "id" => 8,
        "name" => "Cafe Sữa Đóng Chai",
        "price" => 90000,
        "image" => "https://picsum.photos/seed/coffee2/300/300"
    ],
    [
        "id" => 9,
        "name" => "Phin Cafe Inox",
        "price" => 120000,
        "image" => "https://picsum.photos/seed/coffee3/300/300"
    ],
    [
        "id" => 10,
        "name" => "Combo Cafe Rang Mộc",
        "price" => 350000,
        "image" => "https://picsum.photos/seed/coffee4/300/300"
    ],
];

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa Hàng Điện Tử</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 20px;">
    <div
        style="max-width: 1200px; width: 100%; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 5px;">
        <h1>Cửa Hàng</h1>

        <div style=" display: flex; width: 100%; flex-wrap: wrap; gap: 20px;">
            <?php foreach ($products as $product): ?>
                <div style="width: 200px;">
                    <div style="border: 1px solid #ccc; border-radius: 5px; padding: 10px; text-align: center;">
                        <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>"
                            style="width: 100%; object-fit: cover; border-radius: 5px; aspect-ratio: 3 / 2;">
                        <div style="margin-top: 10px;">
                            <h5 style="margin: 0;"><?= $product['name']; ?></h5>
                            <p style="margin: 0; font-size: 14px;">₫<?= number_format($product['price'], 0, ',', '.'); ?>
                            </p>
                            <button
                                style="background-color: #007bff; color: #fff; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Thêm
                                Vào Giỏ</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</body>

</html>