<?php
require_once 'ProductModel.php';
require_once 'UserModel.php';

class AdminController {
    private $productModel;
    private $userModel;

    public function __construct() {
        $this->productModel = new ProductModel();
        $this->userModel = new UserModel();
    }

    public function listCategories() {
        $categories = $this->productModel->getCategories();
        $view = 'views/categories.php';
        include 'views/layout.php';
    }

    public function listUsers() {
        $users = $this->userModel->getUsers();
        $view = 'views/users.php';
        include 'views/layout.php';
    }

    public function listOutOfStock() {
        $products = $this->productModel->getOutOfStockProducts();
        $view = 'views/out_of_stock.php';
        include 'views/layout.php';
    }

    public function listBestSelling() {
        $products = $this->productModel->getBestSellingProducts();
        $view = 'views/best_selling.php';
        include 'views/layout.php';
    }
}