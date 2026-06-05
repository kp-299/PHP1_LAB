<?php
require_once "model/model.php";

class Controller {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $products = $this->productModel->getAll();
        require "views/product_list.php";
    }

    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            echo "ID không hợp lệ";
            return;
        }

        $product = $this->productModel->findById($_GET['id']);

        if (!$product) {
            echo "Không tìm thấy sản phẩm";
            return;
        }

        require "views/product_detail.php";
    }

    public function category() {
        if (!isset($_GET['category'])) {
            echo "Danh mục không hợp lệ";
            return;
        }

        $products = $this->productModel->getByCategory($_GET['category']);
        require "views/product_list.php";
    }
}

?>