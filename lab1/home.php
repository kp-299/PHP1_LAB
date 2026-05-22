<?php
// bai 1
$products = [
    [
        'id' => 1,
        'name' => 'Cherry Jumbo Mỹ Size 9.5 Row (28 - 30mm) - USA Cherry',
        'price' => 479000,
        'image' => 'https://product.hstatic.net/200000528965/product/cherry-jumbo-my_0c28a068203249d38240aeb608d6b069_master.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Cherry Đỏ Mỹ Size 10 Row (26 - 28mm) - USA Cherry',
        'price' => 479000,
        'image' => 'https://product.hstatic.net/200000528965/product/cherry-jumbo-my_0c28a068203249d38240aeb608d6b069_master.jpg'
    ],
    [
        'id' => 3,
        'name' => 'Dưa Giống Nhật Musk Melon',
        'price' => 499000,
        'image' => 'https://product.hstatic.net/200000528965/product/dua-giong-nhat-musk-melon__2__ca79f3c50790499ab845ec8b6ca1fd01_master.jpg'
    ],

    [
        'id' => 4,
        'name' => 'Hồng Hot House New Zealand',
        'price' => 363000,
        'image' => 'https://product.hstatic.net/200000528965/product/hong-hot-house-new-zealand_81944fdd734f4a508fff27dfdecb85be_master.jpg'
    ],
    [
        'id' => 1,
        'name' => 'Cherry Jumbo Mỹ Size 9.5 Row (28 - 30mm) - USA Cherry',
        'price' => 479000,
        'image' => 'https://product.hstatic.net/200000528965/product/cherry-jumbo-my_0c28a068203249d38240aeb608d6b069_master.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Cherry Đỏ Mỹ Size 10 Row (26 - 28mm) - USA Cherry',
        'price' => 479000,
        'image' => 'https://product.hstatic.net/200000528965/product/cherry-jumbo-my_0c28a068203249d38240aeb608d6b069_master.jpg'
    ],
    [
        'id' => 3,
        'name' => 'Dưa Giống Nhật Musk Melon',
        'price' => 499000,
        'image' => 'https://product.hstatic.net/200000528965/product/dua-giong-nhat-musk-melon__2__ca79f3c50790499ab845ec8b6ca1fd01_master.jpg'
    ],

    [
        'id' => 4,
        'name' => 'Hồng Hot House New Zealand',
        'price' => 363000,
        'image' => 'https://product.hstatic.net/200000528965/product/hong-hot-house-new-zealand_81944fdd734f4a508fff27dfdecb85be_master.jpg'
    ],
];

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: antiquewhite;
            font-family: Arial;
            padding: 20px;
        }

        .container {
            width: 1200px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-left: auto;
            margin-right: auto;
        }

        .product {
            background-color: white;
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
        }

        .product img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        .price {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">

        <?php foreach ($products as $pro) { ?>

            <div class="product">

                <img src="<?= $pro['image'] ?>">

                <h3>
                    <?= $pro['name'] ?>
                </h3>

                <p class="price">
                    <?= number_format($pro['price']) ?> đ
                </p>

            </div>

        <?php } ?>

        <!-- bai 2 -->
        <form action="home.php" method="POST"
            style="background: white; padding: 20px; border-radius: 4px; max-width: 500px; border: 1px solid #ddd;">
            <h2>Thêm sản phẩm mới</h2>
            <div style="margin-bottom: 10px;">
                <label>Tên sản phẩm:</label><br>
                <input type="text" name="new_name" required style="width: 100%; padding: 8px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label>Danh mục:</label><br>
                <input type="text" name="new_category" required style="width: 100%; padding: 8px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label>Giá ($):</label><br>
                <input type="number" name="new_price" required style="width: 100%; padding: 8px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label>Mô tả ngắn:</label><br>
                <textarea name="new_description" rows="3" style="width: 100%; padding: 8px;"></textarea>
            </div>
            <button type="submit" name="btn_add_product"
                style="background: #337ab7; color: white; padding: 10px 15px; border: none; cursor: pointer;">Lưu sản
                phẩm</button>
        </form>

    </div>

</body>

</html>