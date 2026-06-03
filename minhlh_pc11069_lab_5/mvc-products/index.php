<?php

require_once "controller/ProductController.php";

$controller = new ProductController();

$act = $_GET['act'] ?? 'list';

switch ($act) {
    case 'list':
        $controller->list();
        break;

    case 'detail':
        $id = $_GET['id'] ?? 0;
        $controller->detail($id);
        break;

    default:
        echo "Không tìm thấy trang!";
        break;
}