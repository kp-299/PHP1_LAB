<?php
require_once 'AdminController.php';

$controller = new AdminController();
$action = $_GET['action'] ?? 'categories';

switch ($action) {
    case 'categories':
        $controller->listCategories();
        break;
    case 'users':
        $controller->listUsers();
        break;
    case 'out_of_stock':
        $controller->listOutOfStock();
        break;
    case 'best_selling':
        $controller->listBestSelling();
        break;
    default:
        $controller->listCategories();
        break;
}