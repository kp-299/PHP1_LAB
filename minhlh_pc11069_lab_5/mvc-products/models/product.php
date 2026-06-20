<?php

class Product
{
    public function getAll()
    {
        return [
            [
                "id" => 1,
                "name" => "iPhone 15",
                "price" => 25000000,
                "image" => "https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-black-thumbnew-600x600.jpg",
                "description" => "Điện thoại Apple cao cấp, hiệu năng mạnh."
            ],
            [
                "id" => 2,
                "name" => "Samsung Galaxy S23",
                "price" => 18000000,
                "image" => "https://cdn.tgdd.vn/Products/Images/42/301796/samsung-galaxy-s23-600x600.jpg",
                "description" => "Điện thoại Samsung thiết kế đẹp, camera tốt."
            ],
            [
                "id" => 3,
                "name" => "OPPO Reno 10",
                "price" => 10000000,
                "image" => "https://cdn.tgdd.vn/Products/Images/42/309816/oppo-reno10-blue-thumb-600x600.jpg",
                "description" => "Điện thoại OPPO chụp ảnh đẹp, pin ổn."
            ],
            [
                "id" => 4,
                "name" => "Xiaomi Redmi Note 13",
                "price" => 6000000,
                "image" => "https://cdn.tgdd.vn/Products/Images/42/309831/xiaomi-redmi-note-13-thumb-600x600.jpg",
                "description" => "Điện thoại giá tốt, cấu hình mạnh trong tầm giá."
            ]
        ];
    }

    public function getById($id)
    {
        $products = $this->getAll();

        foreach ($products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }

        return null;
    }
}