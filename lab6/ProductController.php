<?php
require_once 'ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function search() {
        $keyword = $_GET['keyword'] ?? '';
        $products = $this->productModel->searchProducts($keyword);
        $view = 'views/search.php';
        include 'views/layout.php';
    }

    public function searchAjax() {
        $keyword = $_GET['keyword'] ?? '';
        $products = $this->productModel->searchProducts($keyword);
        header('Content-Type: application/json');
        echo json_encode($products);
        exit;
    }

    public function paginate() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        if ($page < 1) $page = 1;
        $limit = 5;
        $offset = ($page - 1) * $limit;

        $totalProducts = $this->productModel->getTotalProductsCount();
        $totalPages = ceil($totalProducts / $limit);

        $products = $this->productModel->getPaginatedProducts($offset, $limit);

        $view = 'views/pagination.php';
        include 'views/layout.php';
    }
}