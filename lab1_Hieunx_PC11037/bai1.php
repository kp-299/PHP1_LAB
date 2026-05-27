<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách trái cây</title>

    <style>
        body{
            font-family: Arial;
            background: #f4f4f4;
        }

        .products{
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card{
            width: 220px;
            background: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 5px gray;
        }

        .card img{
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card h3{
            font-size: 18px;
        }

        .price{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$products = [
[
    "id" => 1,
    "name" => "Cam Navel Mỹ 500G",
    "price" => 84950,
    "image" => "https://product.hstatic.net/1000282430/product/cam-navel_master.jpg"
],
[
    "id" => 2,
    "name" => "Thanh Long 500G",
    "price" => 42450,
    "image" => "https://product.hstatic.net/1000282430/product/thanh_long_ru_t_tr_ng_master.jpg"
],
[
    "id" => 3,
    "name" => "Đu Đủ Ruột Đỏ 1Kg",
    "price" => 39900,
    "image" => "https://product.hstatic.net/1000282430/product/du-du-do_a925cf1dca944fa5aea5fafa75c85656_master.jpg"
],
[
    "id" => 4,
    "name" => "Lê Nam Phi 1KG",
    "price" => 179900,
    "image" => "https://product.hstatic.net/1000282430/product/le-nam-phi-_master.jpg"
],
[
    "id" => 5,
    "name" => "Bưởi Ruột Hồng 1Kg",
    "price" => 89900,
    "image" => "https://product.hstatic.net/1000282430/product/buoi-da-xanh_master.jpg"
],
];
?>

<div class="products">

<?php
foreach($products as $pro){
?>

    <div class="card">
        <img src="<?= $pro['image'] ?>">

        <h3>
            <?= $pro['name'] ?>
        </h3>

        <p class="price">
            <?= number_format($pro['price']) ?> VNĐ
        </p>
    </div>

<?php
}
?>

</div>

</body>
</html>