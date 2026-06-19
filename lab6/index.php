<?php
require_once 'ProductController.php';

$controller = new ProductController();
$action = $_GET['action'] ?? 'search';

switch ($action) {
    case 'search':
        $controller->search();
        break;
    case 'search_ajax':
        $controller->searchAjax();
        break;
    case 'paginate':
        $controller->paginate();
        break;
    default:
        $controller->search();
        break;
}