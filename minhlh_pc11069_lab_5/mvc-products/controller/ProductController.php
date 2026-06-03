<?php

require_once "models/product.php";

class ProductController
{
    public function list()
    {
        $productModel = new Product();
        $products = $productModel->getAll();

        require_once "views/products/list.php";
    }

    public function detail($id)
    {
        $productModel = new Product();
        $product = $productModel->getById($id);

        require_once "views/products/detail.php";
    }
}